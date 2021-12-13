@extends('package_layout')
@section('content')

    <div class="content">
        <div class="wrap" style="text-align: center">
            <!---start-services---->
            <div class="services">
                <div class="services-header">
                    <h5></h5>
                    <h3>Dịch vụ</h3>
                    <h5></h5>
                    <div class="clear"> </div>
                </div>
                @foreach ($all_dichvu as $key => $value)
                <div class="services-grids">
                    <div class="services-grid">
                        <a href="#">{{ $value->ten_dich_vu }}</a>
                        <p>{{ $value->noi_dung }}</p>
                    </div>
                </div>
                @endforeach
                
                {{-- <div class="services-grids">
                    <div class="services-grid">
                        <a href="#">Đồ ăn nhẹ trên xe</a>
                        <p>Đồ ăn nhẹ trên xe</p>
                    </div>
                </div> --}}
             
            </div>
            <!---End-services---->
            <div class="clear"> </div>
        </div>
    </div>
    <section class="w3l-pricing-16-main">
        <div class="pricing-content py-5">
            <div class="container py-lg-5">
                <div class="title-content mb-lg-5 mb-4">
                    <span class="sub-title">Gói</span>
                    <h3 class="hny-title">Dịch vụ Bán chạy</h3>
                </div>

                <!---End-content---->
                <div class="clear"> </div>
                <div class="row w3l-pricing-7-gd-top pt-4">
                    <div class="col-lg-4 col-md-6 w3l-pricing-7-gd-left">
                        <div class="w3l-pricing-7  pric-7-1">
                            <div class="w3l-pricing-7-top">
                                <h6>Cơ bản</h6>
                                <h3 class="title-sub"><label></label>100 VND<span>/lần</span></h3>
                            </div>
                            <div class="w3l-pricing-7-bottom">
                                <div class="w3l-pricing-7-bottom-bottom">
                                    <ul class="links">
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Đồ ăn nhẹ trên xe
                                        </li>
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Hỗ trợ nước uống. khăn
                                            lạnh khi di
                                            chuyển xa
                                        </li>
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Có hướng dẫn viên du lịch
                                        </li>
                                        <li class="tick-info disable">
                                            <span class="fa fa-times" aria-hidden="true"></span>Giảm 10% phí vé tham quan
                                            di tích lịch sử

                                        </li>
                                        <li class="tick-info disable">
                                            <span class="fa fa-times" aria-hidden="true"></span>Giảm 20% phí chụp ảnh
                                            quay phim
                                        </li>
                                    </ul>
                                </div>
                                <div class="buy-button text-center">
                                    <div class="button-6">
                                        <div class="eff-6"></div>
                                        <a href="contact.html">Đăng kí</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 w3l-pricing-7-gd-left active">
                        <div class="w3l-pricing-7 pric-7">
                            <div class="w3l-pricing-7-top">
                                <h5>Phổ biến</h5>
                                <h6>Hợp túi tiền </h6>
                                <h3 class="title-sub"><label></label>300 VND<span>/lần</span></h3class="title-sub">
                            </div>
                            <div class="w3l-pricing-7-bottom">
                                <div class="w3l-pricing-7-bottom-bottom">
                                    <ul class="links">
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Đồ ăn nhẹ trên xe
                                        </li>
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Hỗ trợ nước uống, khăn
                                            lạnh khi di chuyển xa
                                        </li>
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Có thêm 1 hướng dẫn viên
                                            du lịch
                                        </li>
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Giảm 10% phí vé tham quan
                                            di tích lịch sử
                                        </li>
                                        <li class="tick-info disable">
                                            <span class="fa fa-times" aria-hidden="true"></span>Giảm 20% phí chụp ảnh
                                            quay phim
                                        </li>
                                    </ul>
                                </div>
                                <div class="buy-button text-center">
                                    <div class="button-6">
                                        <div class="eff-6"></div>
                                        <a href="contact.html">Đăng kí</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 w3l-pricing-7-gd-left">
                        <div class="w3l-pricing-7 pric-7-2">
                            <div class="w3l-pricing-7-top">
                                <h6>VIP</h6>
                                <h3 class="title-sub"><label></label>395<span>/mo</span></h3>
                            </div>
                            <div class="w3l-pricing-7-bottom">
                                <div class="w3l-pricing-7-bottom-bottom">
                                    <ul class="links">
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Đồ ăn nhẹ trên xe
                                            
                                        </li>
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Hỗ trợ nước uống, khăn
                                            lạnh khi di chuyển xa
                                          
                                        </li>
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Có thêm 1 hướng dẫn viên
                                            du lịch
                                        </li>
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Giảm 10% phí vé tham quan
                                            di tích lịch sử
                                        </li>
                                        <li class="tick-info">
                                            <span class="fa fa-check" aria-hidden="true"></span>Phòng nghỉ 5 sao
                                        </li>
                                    </ul>
                                </div>
                                <div class="buy-button text-center">
                                    <div class="button-6">
                                        <div class="eff-6"></div>
                                        <a href="contact.html">Đăng kí</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <link href="{{ asset('public/frontend/css/style3.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection
