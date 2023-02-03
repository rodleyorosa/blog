@extends('layout')

@section('title')
    Blog | Lista autori
@endsection

@section('h1')
    Lista autori
@endsection

@section('content')
    <div class="mx-auto md:w-full">
        <ul class="bg-white p-4 shadow-md rounded">
            <h2 class="font-semibold mb-2 text-xl">Autori</h2>
            @foreach ($authors as $author)
                <x-blog.author-list :author="$author"/>
            @endforeach
        </ul>
    </div>
@endsection