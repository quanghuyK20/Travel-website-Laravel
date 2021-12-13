<!DOCTYPE HTML>
<html>

<head>
    <title>Nhân Huy Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="applijewelleryion/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
        </script>
    <link href="{{ asset('public/frontend/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/frontend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="{{ asset('public/frontend/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Custom Theme files -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="{{ asset('public/frontend/js/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <!--animate-->
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('public/frontend/js/wow.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/jquery-ui.css') }}" />
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('public/frontend/js/jquery-ui.js') }}"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>

    <style>
        div.img {
            margin: 5px;

            float: left;
            width: 256px;
            max-width: 256px;
        }

        div.img img {
            display: block;
            width: 100%;
            height: 180px;
        }

        div.desc {
            padding: 10px;
            text-align: center;
        }

    </style>

</head>

<body>
    @include('elements.header')
    <!--- banner ---->
    
    <!--- /banner ---->
    <!--- rooms ---->
    @yield('content');
    <!--- /rooms ---->
    <!--- /footer-top ---->
    @include('elements.footer')
    <!-- signup -->
    @include('elements.signup')
    <!-- //signup -->
    <!-- signin -->
    @include('elements.signin')
    <!-- //signin -->
    <!-- write us -->
    @include('elements.write-us')
    <!-- //write us -->

</body>

</html>
