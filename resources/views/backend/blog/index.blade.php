@extends('layouts.backend')

@section('title', 'Blog posts')

@section('content')
    <a href="{{ route('backend.blog.create') }}" class="btn btn-primary">Create new post</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <td>Title</td>
            <td>Slug</td>
            <td>Author</td>
            <td>Published</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>
                        <a href="{{ route('backend.blog.edit', $post->id) }}"> {{ $post->title }}</a>
                    </td>
                    <td> {{ $post->slug }} </td>
                    <td> {{ $post->author['name'] }} </td>
                    <td> {{ $post->published_at }} </td>
                    <td>
                        <a href="{{ route('backend.blog.edit', $post->id) }}">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('backend.blog.confirm', $post->id) }}">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $posts->render() !!}
@endsection