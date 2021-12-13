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
    <!--css-->
    <link href="{{ asset('public/frontend/css/style2.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--/css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="{{ asset('public/frontend/js/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/JiSlider.js') }}"></script>

    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('public/frontend/js/wow.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/jquery-ui.css') }}" />
    <script>
        new WOW().init();
    </script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <!--/script-->
    <!-- banner js script -->

    <script>
        $(window).load(function() {
            $('#JiSlider').JiSlider({
                color: '#fff',
                start: 3,
                reverse: true
            }).addClass('ff')
        })
    </script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="{{ asset('public/frontend/js/JiSlider.js') }}"></script>
    <link href="{{ asset('public/frontend/css/JiSlider.css') }}" rel="stylesheet"> <!-- banner js-->
    
</head>

<body>
    @include('elements.header')
    @include('elements.slider')
    @include('elements.signin')
    @include('elements.signup')
    @yield('content')
    @include('elements.footer')
</body>

</html>
