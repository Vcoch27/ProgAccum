<!-- resources/views/client/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>

    <!-- CSS mặc định -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- ------->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{ asset('client/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/assets/css/now-ui-kit.css?v=1.3.0') }}" rel="stylesheet" />
    <link href="{{ asset('client/assets/demo/demo.css') }}" rel="stylesheet" />
    
    <!-- Nhận các styles được đẩy vào -->
    @stack('styles')
    @stack('scripts')

</head>
<body>
    
    <!-- Sidebar -->
    @include('client.layouts.sidebar')
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var navbar = document.querySelector('nav.navbar');
            var colorOnScroll = 400; // Scroll threshold

            window.addEventListener('scroll', function () {
                if (window.scrollY > colorOnScroll) {
                    navbar.classList.remove('navbar-transparent');
                } else {
                    navbar.classList.add('navbar-transparent');
                }
            });
        });
    </script>

    <!-- Nội dung chính -->
    @yield('content')

    <!-- Footer -->
    @include('client.layouts.footer')
</body>
</html>
