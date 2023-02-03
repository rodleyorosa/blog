@extends('layout')

@section('title')
    Blog | {{ isset($post) ? 'Modifica' : 'Crea' }} post
@endsection

@section('h1')
{{ isset($post) ? 'Modifica' : 'Crea' }} post
@endsection

@section('content')
<div class="mx-auto md:w-full">
  <div class="bg-white rounded shadow-md p-4">
    <form action="{{ isset($post) ? route('authors.posts.update', [$author->id, $post->id]) : route('authors.posts.store', $author->id) }}" method="POST">
      @csrf
      @isset($post)
          @method('PUT')
      @endisset
      <div class="flex flex-col pt-5">
        <div class="flex flex-col">
          <x-forms.input-label for="title">Titolo</x-forms.input-label>
          <x-forms.text-input
            id="title"
            name="title"
            placeholder="Title"
            value="{{ old('title') ?? $post->title ?? null }}"
            >
          </x-forms.text-input>
          @error('title')
              <span class="text-red-500">
                {{ $message }}
              </span>
          @enderror
        </div>
        <div class="flex flex-col">
          <x-forms.input-label for="slug">Slug</x-forms.input-label>
          <x-forms.text-input
            id="slug"
            name="slug"
            placeholder="Slug"
            value="{{ old('slug') ?? $post->slug ?? null }}"
          ></x-forms.text-input>
          @error('slug')
              <span class="text-red-500">
                {{ $message }}
              </span>
          @enderror
        </div>
        <div class="flex flex-col">
          <x-forms.input-label for="content">Content</x-forms.input-label>
          <textarea
            id="content"
            name="content"
            type="text"
            placeholder="Scrivi ..."
            class="shadow-md outline-none p-1 px-2 rounded border border-blue-200"
          >{{ old('content') ?? $post->content ?? null }}</textarea>
          @error('content')
              <span class="text-red-500">
                {{ $message }}
              </span>
          @enderror
        </div>
        <div class="">
          <x-forms.button class="mt-4">
            INVIA
          </x-forms.button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection