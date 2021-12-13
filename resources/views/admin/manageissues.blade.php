<!DOCTYPE HTML>
<html>

<head>
    <title>Nhân Huy Travel - Góp ý</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('public/backend/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{ asset('public/backend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('public/backend/css/morris.css') }}" type="text/css" />
    <!-- Graph CSS -->
    <link href="{{ asset('public/backend/css/font-awesome.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{ asset('public/backend/js/jquery-2.1.4.min.js') }}"></script>
    <!-- //jQuery -->
    <!-- tables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/table-style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/basictable.css') }}" />
    <script type="text/javascript" src="{{ asset('public/backend/js/jquery.basictable.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').basictable();

            $('#table-breakpoint').basictable({
                breakpoint: 768
            });

            $('#table-swap-axis').basictable({
                swapAxis: true
            });

            $('#table-force-off').basictable({
                forceResponsive: false
            });

            $('#table-no-resize').basictable({
                noResize: true
            });

            $('#table-two-axis').basictable();

            $('#table-max-height').basictable({
                tableWrapper: true
            });
        });
    </script>
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet'
        type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('public/backend/css/icon-font.min.css') }}" type='text/css' />
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

    </style>
    <script language="javascript" type="text/javascript">
        var popUpWin = 0;

        function popUpWindow(URLStr, left, top, width, height) {
            if (popUpWin) {
                if (!popUpWin.closed) popUpWin.close();
            }
            popUpWin = open(URLStr, 'popUpWin',
                'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' +
                600 + ',height=' + 600 + ',left=' + left + ', top=' + top + ',screenX=' + left + ',screenY=' + top + '');
        }
    </script>
</head>

<body>
    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="mother-grid-inner">
                <!--header start here-->
                @include('admin.elements.header')
                <div class="clearfix"> </div>
            </div>
            <!--heder end here-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ URL::to('/dashboard') }}">Home</a><i
                        class="fa fa-angle-right"></i>Ý kiến khách hàng
                </li>
            </ol>
            <div class="agile-grids">
                <!-- tables -->

                <div class="agile-tables">
                    <div class="w3l-table-info">
                        <h2>Manage Issues</h2>
                        <table id="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Số điện thoại.</th>
                                    <th>Email</th>
                                    <th>Vấn đề </th>
                                    <th>Nội dung </th>
                                    <th>Ngày viết</th>
                                    <th>Action </th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td width="120">#00</td>
                                    <td width="50"></td>
                                    <td width="50"></td>
                                    <td width="50"></td>

                                    <td width="200"></a></td>
                                    <td width="400"></td>

                                    <td width="50"></td>


                                    <td><a href="javascript:void(0);" onClick="">View </a>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                    </table>


                </div>
                <!-- script-for sticky-nav -->
                <script>
                    $(document).ready(function() {
                        var navoffeset = $(".header-main").offset().top;
                        $(window).scroll(function() {
                            var scrollpos = $(window).scrollTop();
                            if (scrollpos >= navoffeset) {
                                $(".header-main").addClass("fixed");
                            } else {
                                $(".header-main").removeClass("fixed");
                            }
                        });

                    });
                </script>
                <!--inner block start here-->
                <div class="inner-block">

                </div>
                <!--inner block end here-->
                <!--copy rights start here-->
                @include('admin.elements.footer')
                <!--COPY rights end here-->
            </div>
        </div>
        <!--//content-inner-->
        <!--/sidebar-menu-->
        @include('admin.elements.sidebar')

        <div class="clearfix"></div>
    </div>
    <script>
        var toggle = true;

        $(".sidebar-icon").click(function() {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute"
                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                    $("#menu span").css({
                        "position": "relative"
                    });
                }, 400);
            }
            toggle = !toggle;
        });
    </script>
    <!--js -->
    <script src="{{ asset('public/backend/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('public/backend/js/scripts.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('public/backend/js/bootstrap.min.js') }}"></script>
    <!-- /Bootstrap Core JavaScript -->

</body>

</html>
