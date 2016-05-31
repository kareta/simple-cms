@extends('layouts.backend')

@section('title', 'Delete '.$post->title)

@section('content')
    {!! Form::open(['method' => 'delete', 'route' => ['backend.blog.destroy', $post->id]]) !!}
    <div class="alert alert-danger">
        <strong>Warning!</strong> You are deleting the post. Are you sure you want to continue?
    </div>

    {!! Form::submit('Yes', ['class' => 'btn btn-danger']) !!}

    <a href="{{ route('backend.blog.index') }}" class="btn btn-success">
        <strong>No</strong>
    </a>
    {!! Form::close() !!}
@endsection