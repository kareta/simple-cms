@extends('layouts.backend')

@section('title', $user->exists ? 'Editing' . $user->name : 'Create new user')

@section('content')
    {!! Form::model($user, [
        'method' => $user->exists ? 'put' : 'post',
        'route' => $user->exists ? ['backend.users.update', $user->id] : ['backend.users.store']
    ]) !!}

    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password') !!}
        {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password_confirmation') !!}
        {!! Form::text('password_confirmation', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit($user->exists ? 'Save user' : 'Create user', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection