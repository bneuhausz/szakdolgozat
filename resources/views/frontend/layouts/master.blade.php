<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
        @yield('styles')
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        @include('partials.header')
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ URL::to('js/jquery-3.1.1.js') }}"></script>
        <script src="{{ URL::to('css/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>
