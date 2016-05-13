@extends('layouts.auth')

@section('title', 'Reset pasword')

@section('heading', 'Please enter your new password.')

@section('content')
    {!! Form::open() !!}

    {!! Form::hidden('token', $token) !!}

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


    {!! Form::submit('Reset password', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection