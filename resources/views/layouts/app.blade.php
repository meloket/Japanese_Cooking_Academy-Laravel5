<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="bodyrow">
        <div>
            <div class="topspan"></div>
            <div class="container">
                <div class="row top_sec">
                    <div class="col-sm-4 nav_item">
                        <a href="/requirements"><h2>REQUIREMENTS</h2></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="/"><img src="{{ asset('image/Top_Icon.png') }}" width="300"></a>
                    </div>
                    <div class="col-sm-4 nav_item">
                        <a href="/entry"><h2 class="nav_right">ENTRY</h2></a>
                    </div>
                </div>
            </div>
            @yield('content')
            <div class="footer">
                <div class="row">
                    <div class="col-sm-6 footer_pt1">
                        <img src="{{ asset('image/Logo_JCA.png') }}" width="340">
                    </div>
                    <div class="col-sm-6 footer_pt2">
                        <label>© 2019 Japanese Culinary Academy All Rights Reserved.</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
