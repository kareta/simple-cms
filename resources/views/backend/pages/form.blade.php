@extends('layouts.backend')

@section('title', $page->exists ? 'Editing ' . $page->name : 'Create new page')

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
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

        <p class="help-block">
            Name is used to generate links to the page.
        </p>
    </div>

    <div class="form-group">
        {!! Form::label('content') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit($page->exists ? 'Save page' : 'Create page', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    <script>
        new SimpleMDE().render();
    </script>
@endsection