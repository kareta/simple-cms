@extends('layouts.backend')

@section('title', 'Pages')

@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <td>Title</td>
            <td>URI</td>
            <td>Name</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
            @if($pages->isEmpty())
                <tr>
                    <td colspan="5" align="center">There no pages.</td>
                </tr>
            @else
                @foreach($pages as $page)
                    <tr>
                        <td>
                            <a href="{{ route('backend.pages.edit', $page->id) }}">{{ $page->title }}</a>
                        </td>
                        <td> {{ $page->uri }}</td>
                        <td> {{ $page->name }}</td>
                        <td>
                            <a href="{{ route('backend.pages.edit', $page->id) }}">
                                <span class="glyphicon gliphicon-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('backend.pages.confirm', $page->id) }}">
                                <span class="glyphicon gliphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection