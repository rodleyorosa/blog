@extends('layout')

@section('title')
    Blog | Lista posts
@endsection

@section('h1')
    Lista posts
@endsection

@auth
    @section('btn')
    <a href="{{ route('authors.posts.create', Auth::id()) }}" class="btn">Crea post</a>
    @endsection
@endauth

@section('content')
    <div class="mx-auto md:w-full">
    {{ $db }}
    @foreach ($posts as $post)
     <x-blog.post-box :post="$post"/>
    @endforeach
</div>
<div>
</div>
@endsection
