<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') &mdash; Laravel CMS</title>

        <link rel="stylesheet" type="text/css" href="{{ theme('css/frontend.css') }}">

    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <ul class="nav navbar-nav">
                    @include('partials.navigation')
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12">@yield('content')</div>
            </div>
        </div>
    </body>
</html>
