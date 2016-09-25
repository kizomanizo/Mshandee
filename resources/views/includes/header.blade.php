<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Mshandee | {{ Auth::user()->name }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('/css/demo.css') }}" rel="stylesheet" />


    <link href="{{ asset('/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom_dash.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css') }}">
    <style type="text/css">
        {{ $style }}
    </style>

    <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
</head>
<body>