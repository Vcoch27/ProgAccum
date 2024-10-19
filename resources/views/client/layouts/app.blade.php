<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title> <!-- Yield cho title -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{ asset('client/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/assets/css/now-ui-kit.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/assets/demo/demo.css') }}" rel="stylesheet" />
    <!-- Nhận các styles được đẩy vào -->
    @stack('styles')
    @stack('scripts')
</head>

<body>

    <!-- <div class="container"> -->
    @include('client.includes.header')
    @include('client.includes.sidebar') <!-- Bao gồm sidebar -->
    <main>
        @yield('content') <!-- Yield cho nội dung chính -->
    </main>

    @include('client.includes.footer') <!-- Bao gồm footer -->
    <!-- </div> -->
</body>

</html>