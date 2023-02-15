<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=none, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title',config('app.name'))</title>
    @include('layouts.partials.head')
</head>
<body>
@include('layouts.partials.navbar')
@yield('content')
@include('layouts.partials.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('footer')
</body>
</html>
