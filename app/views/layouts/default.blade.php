<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="publishable-key" content="{{ Config::get('stripe.publishable_key') }}">
    </head>

    <body>

    <div class="container">
        @yield('content')
    </div>

    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="https://js.stripe.com/v2/"></script>

    @yield('footer')
    </body>
</html>
