<!-- resources/views/posts/edit.blade.php -->
@extends('index')

@section('content')
    <div class="container">
        <h1>Editar Postagem</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="content">Conteúdo:</label>
                <textarea class="form-control" id="content" name="content">{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
