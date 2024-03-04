<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <title>Growth Mission</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/onboarding.css') }}" rel="stylesheet">
    <link href="{{ asset('css/onboarding-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/niceCountryInput.css') }}" rel="stylesheet" />
</head>

<body class="onboarding-bg">

    @yield('content')
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('script')
</body>

</html>
