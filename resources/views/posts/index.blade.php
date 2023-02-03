@extends('layout')

@section('title')
    Blog | Lista posts
@endsection

@section('h1')    
    Lista posts
@endsection

@section('btn')
<a href="{{ route('authors.posts.create', $author->id) }}">
    <x-forms.button>
        Crea post
    </x-forms.button>
</a>
@endsection


@section('content')
    <div class="mx-auto md:w-full">
    @foreach ($posts as $post)
        <x-blog.post-box :post="$post"/>
    @endforeach
</div>
<div>
</div>
@endsection
