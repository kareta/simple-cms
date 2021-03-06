<html>
<head>
    <title>@yield('title') &mdash; The CMS </title>
    <link rel="stylesheet" href="{{getThemeUrl('css/backend.css')}}">
</head>
<body>
<div class="container">
    <div class="row vertical-center">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-{{$errors->any() ? 'danger' : 'default'}}">
                <div class="panel-heading">
                    <h2 class="panel-title">@yield('heading')</h2>
                </div>
                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>We found some errors</strong>
                        </div>

                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
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
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>