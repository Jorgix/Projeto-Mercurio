@extends('admin.layouts.app')

@section('title', 'Cadastro de novo post')

@section('content')

    <h1>
        Formulário de cadastro
    </h1>

    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @include('admin.posts._partials.form')
    </form>


@endsection
