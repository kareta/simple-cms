@extends('layouts.backend')

@section('title', 'Pages')

@section('content')
    <a href="{{ route('backend.pages.create') }}" class="btn btn-primary">Create new page</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <td>Title</td>
            <td>URI</td>
            <td>Name</td>
            <td>Template</td>
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
                            {!! $page->linkToPaddedTitle(route('backend.pages.edit', $page->id)) !!}
                        </td>
                        <td>
                            <a href="{{ url($page->uri) }}">
                                {{ $page->prettyUri }}
                            </a>
                        </td>
                        <td> {{ $page->name ?: 'None'}}</td>
                        <td> {{ $page->template ?: 'None'}}</td>
                        <td>
                            <a href="{{ route('backend.pages.edit', $page->id) }}">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('backend.pages.confirm', $page->id) }}">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection