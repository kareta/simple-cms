<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title') &mdash; The CMS</title>
    <link rel="stylesheet" href="{{ getThemeUrl('css/backend.css') }}">
    <script src="{{ getThemeUrl('js/all.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-static-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ route('backend.dashboard') }}" class="navbar-brand">The CMS</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('backend.users.index') }}">Users</a></li>
            <li><a href="{{ route('backend.pages.index') }}">Pages</a></li>
            <li><a href="{{ route('backend.blog.index') }}">Posts</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><span class="navbar-text">Hello, {{ $admin->name }}</span></li>
            <li><a href="{{ route('auth.logout') }}">logout</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>@yield('title')</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>We found some errors</strong>


                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($status)
                <div class="alert alert-info">
                    {{ $status }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</div>
</body>
</html>