<!-- resources/views/posts/show.blade.php -->
@extends('index')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Voltar</a>
    </div>
@endsection
