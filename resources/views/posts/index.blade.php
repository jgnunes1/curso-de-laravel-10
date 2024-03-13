<!-- resources/views/posts/index.blade.php -->
@extends('index')

@section('content')
    <div class="container">
        <h1>Lista de Postagens</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Visualizar</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta postagem?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('posts.create') }}" class="btn btn-success">Criar Postagem</a>
    </div>
@endsection
