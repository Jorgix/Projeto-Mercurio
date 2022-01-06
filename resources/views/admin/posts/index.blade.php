@extends('admin.layouts.app')

@section('title', 'Listagem dos posts')

@section('content')


    @if (session('message'))
        <div>
            {{session('message')}}
        </div>
    @endif



    <a href="{{ route('posts.create') }}">Criar post</a>
    <hr>

    <form action="{{ route('posts.search') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="search" placeholder="Pesquisar: ">
        <button type="submit">Pesquisar</button>
    </form>

    @foreach($posts as $post)
        <p><img src="{{ url("/storage/$post->image") }}" alt="{{$post->title}}" style="max-width:100px"></p>
        <p>{{$post->title}} |
            [
            <a href="{{route('posts.show', $post->id)}}">Ver</a> |
            <a href="{{route('posts.edit', $post->id)}}">Edit</a>
            ]
        </p>
    @endforeach
    <hr>

    @if(isset($filters))
        {{ $posts->appends($filters)->links() }}
    @else
        {{ $posts->links() }}
    @endif



@endsection
