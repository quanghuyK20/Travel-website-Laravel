<link rel="stylesheet" href="{{ asset('public/frontend/assets/style-starter.css') }}">
<footer class="w3l-footer-66">
    <section class="footer-inner-main">
        <div class="footer-hny-grids py-5">
            <div class="container py-lg-4">
                <div class="text-txt">
                    <div class="right-side">
                        <div class="row sub-columns ">
                            <div class="col-lg-4 col-md-6 sub-one-left pr-lg-4">
                                <h2><a class="navbar-brand wow fadeInUp animated" href="index.php" style="color: red; font-size: 30px;">
                                        Nhân <span class="fa fa-globe" aria-hidden="true"></span> Huy</a></h2>
                                <p class="wow fadeInUp animated"> Trải nghiệm vùng đất mới </p>
                                <div class="columns-2 wow fadeInUp animated">
                                    <ul class="social">
                                        <li><a href="#facebook"><span class="fa fa-facebook"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li><a href="#linkedin"><span class="fa fa-linkedin"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li><a href="#twitter"><span class="fa fa-twitter"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li><a href="#google"><span class="fa fa-google-plus"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li><a href="#github"><span class="fa fa-github"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 sub-one-left mid-footer-gd wow fadeInUp animated">
                                <div class="sub-two-right">
                                    <h6>Danh mục</h6>
                                    <ul>
                                        <li><a href="{{ URL::to('/trang-chu') }}"><span
                                                    class="fa fa-angle-double-right mr-2"></span>Trang chủ</a>
                                        </li>
                                        <li><a href="about.php"><span class="fa fa-angle-double-right mr-2"></span>Giới
                                                thiệu</a>
                                        </li>
                                        <li><a href="services.php"><span
                                                    class="fa fa-angle-double-right mr-2"></span>Dịch vụ</a>
                                        </li>
                                        <li><a href="contact.php"><span
                                                    class="fa fa-angle-double-right mr-2"></span>Liên hệ</a></li>
                                    </ul>
                                </div>
                                <div class="sub-two-right wow fadeInUp animated">
                                    <h6>Trợ giúp</h6>
                                    <ul>
                                        <li><a href="index.php"><span class="fa fa-angle-double-right mr-2"></span>Live
                                                Chart</a></li>
                                        <li><a href="faq.php"><span class="fa fa-angle-double-right mr-2"></span>Faq</a>
                                        </li>
                                        <li><a href="#support"><span class="fa fa-angle-double-right mr-2"></span>Hỗ
                                                trợ</a></li>
                                        <li><a href="#terms"><span class="fa fa-angle-double-right mr-2"></span>Dịch vụ
                                                VIP</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 sub-one-left wow fadeInUp animated">
                                <h6>Instagram </h6>
                                <div class="column2 instagram-feeds">
                                    <div class="b-img"> <a href="#"><img
                                                src="{{ asset('public/frontend/images/g2.jpg') }}"
                                                class="img-fluid" alt=""></a></div>
                                    <div class="b-img"> <a href="#"><img
                                                src="{{ asset('public/frontend/images/g1.jpg') }}"
                                                class="img-fluid" alt=""></a></div>
                                    <div class="b-img"> <a href="#"><img
                                                src="{{ asset('public/frontend/images/g3.jpg') }}"
                                                class="img-fluid" alt=""></a></div>
                                    <div class="b-img"> <a href="#"><img
                                                src="{{ asset('public/frontend/images/g4.jpg') }}"
                                                class="img-fluid" alt=""></a></div>
                                    <div class="b-img"> <a href="#"><img
                                                src="{{ asset('public/frontend/images/g5.jpg') }}"
                                                class="img-fluid" alt=""></a></div>
                                    <div class="b-img"> <a href="#"><img
                                                src="{{ asset('public/frontend/images/g6.jpg') }}"
                                                class="img-fluid" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="below-section wow fadeInUp animated">
            <div class="container">
                <div class="copyright-footer">
                    <div class="columns text-lg-left">
                        <p>© 2021 Travel. All rights reserved. Design by <a href="" target="_blank"> Nhân Huy</a>
                        </p>
                    </div>
                    <ul class="columns text-lg-right">
                        <li><a href="#">Điều khoản</a>
                        </li>
                        <li><a href="about.php">Giới thiệu</a>
                        </li>
                        <li><a href="contact.php">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </button>
        <script>
            // Khi người dùng cuộn xuống 20px từ đầu tài liệu, hãy hiển thị nút
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // Khi người dùng nhấp vào nút, cuộn lên đầu tài liệu
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->

    </section>
</footer>
