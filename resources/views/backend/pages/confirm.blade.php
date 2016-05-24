@extends('layouts.backend')

@section('title', 'Delete ' . $page->name)

@section('content')
    {!! Form::open(['method' => 'delete', 'route' => ['backend.pages.destroy', $page->id]]) !!}
    <div class="alert alert-danger">
        <strong>Warning!</strong> You are deleting a page. Are you sure you want to continue?
    </div>

    {!! Form::submit('Yes, delete this page.', ['class' => 'btn btn-danger']) !!}

    <a href="{{ route('backend.pages.index') }}" class="btn btn-success">
        <strong>No, don't delete</strong>
    </a>
    {!! Form::close() !!}
@endsection