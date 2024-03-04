
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="../images/favicon.png">
      <title>Growth Mission</title>
      <link href="{{asset('customer/css/bootstrap.css')}}" rel="stylesheet">
      <link href="{{asset('customer/css/common.css')}}" rel="stylesheet">
      <link href="{{asset('customer/css/style.css')}}" rel="stylesheet">
      <link href="{{asset('customer/css/responsive.css')}}" rel="stylesheet">
   </head>
   <body>
      <div class="menu-ovelay"></div>
      <div class="dash">
         <div class="dash-nav">
            @include('layouts.sidebar')
         </div>
         <div class="dash-app">
            @yield('content')
         </div>
      </div>
      <script src="{{ asset('js/jquery-3.7.1.min.js')}}"></script> 
      <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('js/main.js')}}"></script>
      @yield('scripts')
   </body>
</html>

