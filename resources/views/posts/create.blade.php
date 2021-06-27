@extends('layouts.layout', ['title' => "Создание нового поста"])

@section('content')

    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Создать пост</h2>
        @include('posts.parts.post')

        <input type="submit" value="Создать пост" class="btn btn-outline-secondary">
        <!-- /.btn -->

    </form>
@endsection

