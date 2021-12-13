{{-- <?php
$message = Session::get('message');
if ($message) {
    echo '<script language="javascript">';
    echo 'alert("Đăng kí thành công")';
    echo '</script>';
    Session::put('message', null);
}
?> --}}

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Đăng kí</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="{{ asset('public/backend/login/css/style.css') }}" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="{{ asset('public/backend/login/css/font-awesome.min.css') }}" type="text/css"
        media="all">
</head>

<body>

    <!-- form section start -->
    <section class="w3l-hotair-form">
        <h1>Đăng kí</h1>
        <?php
        $message2 = Session::get('message2');
        if ($message2) {
            echo '<script language="javascript">';
            echo 'alert("Đăng kí thành công")';
            echo '</script>';
            Session::put('message2', null);
        }
        ?>

        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Log In</h2>
                        <form action="{{URL::to('/add-customer')}}" method="post">
                            {{ csrf_field() }}
                            <input type="text" name="name" class="name" placeholder="User Name" required=""
                                autofocus>
                            <input type="text" name="mobilenumber" class="name" placeholder="Sô điện thoại"
                                required="" autofocus>
                            <input type="text" name="email" class="name" placeholder="Email"
                                required="" autofocus>
                            <input type="password" name="password" class="password" placeholder="Password"
                                required="" autofocus>
                            <div class="clearfix"></div>
                            <button type="submit" class="login" name="login">Đăng kí</button>
                        </form>

                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="{{ asset('public/backend/login/images/nhanhuy.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div style="color: #000000;">
                    <a href="{{ URL::to('/show-cart') }}">Trở về</a>
                </div>
            </div>
            <!-- //form -->

        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="copy-footer-29">© 2021 Report Login Form. All rights reserved | Design by <a href="#">Nhân Huy</a>
            </p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->
</body>

</html>
