<!-- resources/views/posts/create.blade.php -->
@extends('index')



@section('content')
    <div class="container">
        <h1>Criar Nova Postagem</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="content">Conteúdo:</label>
                <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
