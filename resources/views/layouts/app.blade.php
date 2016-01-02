<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')_sitetitle</title>

    <link rel="stylesheet" href="/css/bootstrap-pagination.min.css">
    <link rel="stylesheet" href="/css/semantic.min.css">

</head>
<body>

    @include('layouts.header')
    @yield('content')

    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/semantic.min.js"></script>

    @yield('script')
</body>
</html>
