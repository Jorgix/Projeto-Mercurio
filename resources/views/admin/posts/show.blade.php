@extends('admin.layouts.app')

@section('title', 'Exibir os posts')

@section('content')

    <h1>Editando o post {{ $post->title }}</h1>
    <ul>
        <li><strong>Título: </strong>{{ $post->title}}</li>
        <li><strong>Conteúdo: </strong>{{ $post->content}}</li>
    </ul>

    <form action="{{route('posts.destroy', $post->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar o post {{$post->title}}</button>
    </form>
@endsection

