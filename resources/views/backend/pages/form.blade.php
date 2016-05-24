@extends('layouts.backend')

@section('title', $page->exists ? 'Editing ' . $user->name : 'Create new page')

@section('content')
    {!! Form::model($page, [
        'method' => $page->exists ? 'put' : 'post',
        'route' => $page->exists ? ['backend.pages.update', $page->id] : ['backend.pages.store']
    ]) !!}

    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('uri', 'URI') !!}
        {!! Form::text('uri', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::password('name', ['class' => 'form-control']) !!}

        <p class="help-block">
            Name is used to generate links to the page.
        </p>
    </div>

    <div class="form-group">
        {!! Form::label('content') !!}
        {!! Form::textarea('content', ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit($user->exists ? 'Save page' : 'Create page', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection