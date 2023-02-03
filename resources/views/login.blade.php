@extends('layout')

@section('title')
    Blog
@endsection

@section('h1')
    Login
@endsection

@section('content')
<div class="mx-auto md:w-full">
  <div class="bg-white rounded shadow-md p-4">
    <form action="{{ route('login') }}" method="POST">
      @csrf
        <div class="flex flex-col">
          <x-forms.input-label for="email">Email</x-forms.input-label>
          <x-forms.text-input
            id="email"
            name="email"
            type="email"
            placeholder="Email"
            value="{{ old('email') }}"
          ></x-forms.text-input>
          @error('email')
              <span class="text-red-500">
                {{ $message }}
              </span>
          @enderror
        </div>
        <div class="flex flex-col">
          <x-forms.text-input for="Password">Password</x-forms.text-input>
          <x-forms.text-input
            id="password"
            name="password"
            type="password"
            placeholder="Password"
            value=""
          ></x-forms.text-input>
        </div>
        <div class="mt-4">
          <x-forms.button>ACCEDI</x-forms.button>
          <span class="mx-2">o</span> <span><a class="underline" href="/register">Registrati</a></span>
        </div>
      </div>
      @error('login')
        <div class="text-red-500">
          {{ $message }}
        </div>
      @enderror
    </form>
  </div>
</div>
@endsection