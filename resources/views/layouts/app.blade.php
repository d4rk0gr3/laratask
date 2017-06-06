<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>{{ env('APP_NAME') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-default">
    <div class="container">
       <h1 class="center-block">{{ env('APP_NAME') }}</h1>
    </div>
</nav>

@yield('content')
</body>
</html>
