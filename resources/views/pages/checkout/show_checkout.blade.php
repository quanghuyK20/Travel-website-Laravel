<!DOCTYPE html>
<html>

<head>
    <title>Thanh toán</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Fascinating Checkout Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //custom-theme -->
    <link href="{{ asset('public/frontend/front_checkout/css/style.css') }}" rel="stylesheet" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('public/frontend/front_checkout/css/creditly.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('public/frontend/front_checkout/css/easy-responsive-tabs.css') }}">
    <script src="{{ asset('public/frontend/front_checkout/js/jquery.min.js') }}"></script>
    <link
        href="//fonts.googleapis.com/css?family=Overpass:100,100i,200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
</head>

<body>
    {{-- <?php
$message = Session::get('message4');
if ($message) {
    echo '<script language="javascript">';
    echo 'alert("Thanh toán thành công")';
    echo '</script>';
    Session::put('message', null);
}
?> --}}
    <div class="main">
        <h1>Nhân Huy Travel</h1>
        <div class="w3_agile_main_grids">
            <div class="agile_main_top_grid">
                <div class="agileits_w3layouts_main_top_grid_left">
                    <a href="{{ URL::to('/show-cart') }}"><img
                            src="{{ asset('public/frontend/front_checkout/images/1.png') }}" alt=" " /></a>
                </div>
                <div class="w3_agileits_main_top_grid_right">
                    <h3>Thanh toán</h3>
                </div>
                <div class="clear"> </div>
                <div class="wthree_total">
                    <h2><span>{{ Cart::total() }}<i>VND</i></span></h2>
                </div>
            </div>
            <div class="agileinfo_main_bottom_grid">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li><img src="{{ asset('public/frontend/front_checkout/images/1.jpg') }}" alt=" " /></li>
                        <li><img src="{{ asset('public/frontend/front_checkout/images/3.jpg') }}" alt=" " /></li>
                    </ul>

                    <div class="resp-tabs-container">
                        <div class="agileits_w3layouts_tab1">
                            <form action="{{ URL::to('/save-checkout-customer') }}" method="post"
                                class="creditly-card-form agileinfo_form">
                                {{ csrf_field() }}
                                <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                    <div class="credit-card-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <label class="control-label">Tên chủ thẻ</label>
                                                <input class="form-control" type="text" name="customer_name"
                                                    placeholder="">
                                            </div>
                                            <div class="w3_agileits_card_number_grids">
                                                <div class="w3_agileits_card_number_grid_left">
                                                    <div class="controls">
                                                        <label class="control-label">Số thẻ</label>
                                                        <input class="form-control" type="text" name="booking_number"
                                                            placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_right">
                                                    <div class="controls">
                                                        <label class="control-label">Mã xác thực</label>
                                                        <input class="security-code form-control" Â· inputmode="numeric"
                                                            type="text" name="security-code"
                                                            placeholder="&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <?php
                                            $content = Cart::content();
                                            ?>
                                            @foreach ($content as $v_content)
                                                <div class="controls">
                                                    <label class="control-label">Ngày mua</label>
                                                    <input class="form-control" type="text" name="buy_date"
                                                        placeholder="" value="{{ $v_content->options->time }}">
                                                </div>
                                                <div class="controls">
                                                    <label class="control-label">Tên tour</label>
                                                    <input class=" form-control" type="text" name="booking_name"
                                                        placeholder="" value="{{ $v_content->name }}">
                                                </div>
                                                <div class="controls">
                                                    <label class="control-label">Tổng tiền </label>
                                                    <input class=" form-control" type="text" name="booking_money"
                                                        placeholder="" value="{{ Cart::total() . ' ' . 'VND' }}">
                                                </div>
                                                <input type="hidden" name="fromdate_hidden"
                                                    value="{{ $v_content->options->fromdate }}">
                                                <input type="hidden" name="todate_hidden"
                                                    value="{{ $v_content->options->todate }}">
                                                <input type="hidden" name="note_hidden"
                                                    value="{{ $v_content->options->comment }}">
                                                <input type="hidden" name="status_hidden"
                                                    value="{{ $v_content->options->status }}">
                                            @endforeach
                                            <input type="hidden" name="time_hidden" value="{{ date('d/m/Y') }}">
                                            <input type="hidden" name="email_hidden"
                                                value="{{ Session::get('email') }}">
                                        </div>

                                        <button type="submit" style="text-align: center" name="send_order"><span>Thanh
                                                toán</span></button>
                                        <br>
                                        <br>
                                    </div>
                                </section>
                            </form>
                        </div>
                        <div class="agileits_w3layouts_tab2">
                            <h3>Bạn không có tài khoản MoMo ?<a href="https://momo.vn/"> Đăng ký</a></h3>
                            <form action="#" method="post">
                                <label class="agileits_label">Số điện thoại/ Email</label>
                                <input type="email" name="Email" placeholder="Nhập số điện thoại" required="">
                                <label class="agileits_label">Mật khẩu</label>
                                <input type="password" name="Password" placeholder="Password" required="">
                                <input type="submit" value="Thanh toán">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="agileits_copyright">
            <p>© 2021 All rights reserved | Design by <a href="#" target="_blank">Nhân Huy Travel</a></p>
        </div>
    </div>
    <!-- credit-card -->
    <script type="text/javascript" src="{{ asset('public/frontend/front_checkout/js/creditly.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            var creditly = Creditly.initialize(
                '.creditly-wrapper .expiration-month-and-year',
                '.creditly-wrapper .credit-card-number',
                '.creditly-wrapper .security-code',
                '.creditly-wrapper .card-type');

            $(".creditly-card-form .submit").click(function(e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                    console.log(output);
                }
            });
        });
    </script>
    <!-- tabs -->
    <script src="{{ asset('public/frontend/front_checkout/js/easy-responsive-tabs.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <!-- //tabs -->
</body>

</html>
