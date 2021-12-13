{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('.search-box input[type="text"]').on("keyup input", function() {
            var inputVal = $(this).val();
            var resultDropUp = $(this).siblings(".result");
            if (inputVal.length) {
                $.get("./class/search.class.php", {
                    term: inputVal
                }).done(function(data) {
                    resultDropUp.html(data);
                });
            } else {
                resultDropUp.empty();
            }
        });
        $(document).on("click", ".result p", function() {
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
</script> --}}

<?php $login = Session::get('email');
                if ($login) { ?>
<div class="top-header">
    <div class="container wow fadeInUp animated">
        <ul class="tp-hd-lft wow fadeInUp animated" data-wow-delay=".5s">
            <li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li class="prnt"><a href="profile.php">My Profile</a></li>
            <li class="prnt"><a href="{{ URL::to('/change-password') }}">Đổi mật khẩu</a></li>
            <li class="prnt"><a href="{{ URL::to('/show-cart') }}">Lịch sử đặt tours</a></li>
            <li class="prnt"><a href="issuetickets.php">Góp ý của bạn</a></li>
        </ul>
        <ul class="tp-hd-rgt  wow fadeInUp animated" data-wow-delay=".5s">
            <li class="tol">Welcome :</li>
            <li class="sig"><?php $login = Session::get('email');
if ($login) {
    echo $login;
}
?></li>
            <li class="sigi"><a href="{{ route('logoutuser') }}">/ Đăng xuất</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<?php } else { ?>
<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInUp animated" data-wow-delay=".5s">
            <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="hm"><a href="{{ URL::to('/admin') }}">Admin Login</a></li>
        </ul>
        <ul class="tp-hd-rgt  wow fadeInUp animated" data-wow-delay=".5s">
            <li class="tol">Di động : 123-4568790</li>
            <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal">Đăng kí</a></li>
            <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4"> Đăng nhập</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<?php } ?>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
    <div class="container">
        <div class="logo wow fadeInUp animated" data-wow-delay=".5s">
            <a href="{{ URL::to('/trang-chu') }}">Nhân <span>Huy Travel</span></a>
        </div>

        <div class="lock fadeInUp animated" data-wow-delay=".5s">
            <li><i class="fa fa-lock"></i></li>
            <li>
                <div class="securetxt">SAFE &amp; SECURE </div>
            </li>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInUp animated" data-wow-delay=".5s">
    <div class="container">
        <div class="navigation">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-1" style="background-color: #41B7FC">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ URL::to('trang-chu') }}">Trang chủ</a></li>
                            <li><a href="{{ URL::to('/gioi-thieu') }}">Giới thiệu</a></li>
                            <li><a href="{{ URL::to('/danh-sach-tour-du-lich') }}">Tour du lịch</a></li>
                            <li><a href="{{ URL::to('/dich-vu') }}">Dịch vụ</a></li>
                            <li><a href="{{ URL::to('/tin-tuc') }}">Tin tức</a></li>
                            <li><a href="{{ URL::to('lien-he') }}">Liên hệ</a></li>

                            <?php $login = Session::get('email');
                            if ($login) { ?>
                            <li><a href="#" data-toggle="modal" data-target="#myModal3"> Phản hồi</a> </li>
                            <?php }
							?>
                            <div class="clearfix"></div>

                        </ul>
                        <ul>
                            <form action="{{ URL::to('/tim-kiem') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="search-box">
                                    <input type="text" name="keywords_submit" autocomplete="off"
                                        placeholder="Search..." />
                                    {{-- <input type="submit" name="search_item" class="btn btn-default btn-sm" value="search"> --}}
                                    <div class="result"></div>
                                </div>
                            </form>
                        </ul>
                    </nav>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
