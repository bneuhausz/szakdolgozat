<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/main.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/header.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/footer.css') }}">
        @yield('styles')
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        @include('frontend.partials.header')
        <div class="container">
            @yield('content')
        </div>
        @include('partials.footer')
        <script src="{{ URL::to('js/jquery-3.1.1.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- <script src="{{ URL::to('js/bootstrap.min.js') }}"></script> -->
        @yield('scripts')
    </body>
</html>
