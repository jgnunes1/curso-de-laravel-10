<!-- resources/views/recent_updates.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Últimas Atualizações</h1>
        <ul class="list-group">
            @foreach ($updates as $update)
                <li class="list-group-item">{{ $update->title }} - {{ $update->created_at->diffForHumans() }}</li>
            @endforeach
        </ul>
    </div>
@endsection
