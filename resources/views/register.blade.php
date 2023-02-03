@extends('layout')

@section('title')
    Blog
@endsection

@section('h1')
    Registrati
@endsection

@section('content')
<div class="mx-auto md:w-full">
  <div class="bg-white rounded shadow-md p-4">
    <form action="{{ route('register') }}" method="POST">
      @csrf
        <div class="flex flex-col">
          <x-forms.input-label for="name">Nome</x-forms.input-label>
          <x-forms.text-input
            id="name"
            name="name"
            placeholder="Nome"
            value="{{ old('name') }}"
          ></x-forms.text-input>
          @error('name')
              <span class="text-red-500">
                {{ $message }}
              </span>
          @enderror
        </div>
        <div class="flex flex-col">
          <x-forms.input-label for="surname">Cognome</x-forms.input-label>
          <x-forms.text-input
            id="surname"
            name="surname"
            placeholder="Cognome"
            value="{{ old('surname') }}"
          ></x-forms.text-input>
          @error('surname')
              <span class="text-red-500">
                {{ $message }}
              </span>
          @enderror
        </div>
        <div class="flex flex-col">
          <x-forms.input-label for="email">Email</x-forms.input-label>
          <x-forms.text-input
            id="email"
            name="email"
            type="email"
            placeholder="Email"
            value="{{ old('email') }}"
            class="shadow-md outline-none p-1 px-2 rounded border border-blue-200"
          ></x-forms.text-input>
          @error('email')
              <span class="text-red-500">
                {{ $message }}
              </span>
          @enderror
        </div>
        <div class="flex flex-col">
          <x-forms.input-label for="password">Password</x-forms.input-label>
          <x-forms.text-input
            id="password"
            name="password"
            type="password"
            placeholder="Password"
            value=""
          ></x-forms.text-input>
          @error('password')
              <span class="text-red-500">
                {{ $message }}
              </span>
          @enderror
        </div>
        <div class="flex flex-col">
          <x-forms.input-label for="password_confirmation">Conferma password</x-forms.input-label>
          <x-forms.text-input
            id="password_confirmation"
            name="password_cofirmation"
            type="password"
            placeholder="Conferma password"
            value=""
          ></x-forms.text-input>
          @error('password_confirmation')
              <span class="text-red-500">
                {{ $message }}
              </span>
          @enderror
        </div>
        <div class="mt-4">
          <x-forms.button>REGISTRATI</x-forms.button>
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