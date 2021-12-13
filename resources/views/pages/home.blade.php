@extends('layout')
@section('content')

    <section class="w3l-gallery-6">
        <div class="gallery-content-6 py-5">
            <div class="container py-lg-5">
                <div class="title-content mb-lg-5 mb-4 wow fadeInDown animated">
                    <span class="sub-title">Tours mới mở</span>
                    <h3 class="hny-title">HOT</h3>
                </div>
                <div class="row gallery-grids ">
                    @foreach ($all_tour as $key => $tour)
                        <div class="col-lg-4 col-md-6 content-left-sec gal-slide-grid">
                            <div class="gal-slide-img">
                                <a href="{{ URL::to('/chi-tiet-tour-du-lich/' . $tour->package_id) }}"><img
                                        src="{{ URL::to('public/backend/pacakgeimages/' . $tour->package_image) }}"
                                        class="img img-fluid" alt=""></a>
                            </div>
                            <div class="gal-slide-info">
                                <a>
                                    <h4 class="mt-4 mb-0"> {{ $tour->package_name }} </h4>
                                </a>
                                <h6 class="mt-sm-2 mt-1">&emsp;<span>khởi điểm
                                        : {{ number_format($tour->package_price) . ' ' . 'VND' }} VND</span></h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container " style="margin-top: -3%">
            <div class="grid wow fadeInDown animated">
                <h4>Gợi ý cho bạn</h4>
                @foreach ($all_gallery as $key => $v_gallery)
                    <figure class="effect-julia">
                        <img src="{{ URL::to('public/backend/pacakgeimages/' . $v_gallery->image_gallery) }}" alt="">
                        <figcaption>
                            <h2><span> </span></h2>
                            <div>
                                <p>{{ $v_gallery->gallery_mt1 }}</p>
                                {{-- <p>{{ $v_gallery->gallery_mt2 }}</p>
                                <p>{{ $v_gallery->gallery_mt3 }}</p> --}}
                            </div>
                            <a href="#">Xem thêm</a>
                        </figcaption>
                    </figure>
                @endforeach
                <div class="clearfix"> </div>
            </div>
            <br><br><br>
        </div>

        <div class="index-services gallery-content-6 py-5">
            <div class="container">
                <h4>Một số dịch vụ</h4>
                <div class="col-md-6 is-text wow fadeInLeft animated">
                    <h3>Giải trí</h3>
                    <p>Du thuyền</p>
                    <p>Nhảy dù</p>
                    <div class="selected wow fadeInLeft animated">
                        <h3 class="selected-info">Quà tặng may mắn</h3>
                        <i class="glyphicon glyphicon-pushpin"><span>Áo kỉ niệm</span></i>
                        <i class="glyphicon glyphicon-pushpin"><span>Voucher</span></i>
                        <i class="glyphicon glyphicon-pushpin"><span>Vé máy bay</span></i>
                        <i class="glyphicon glyphicon-pushpin"><span>Đua thuyền</span></i>
                        <i class="glyphicon glyphicon-pushpin"><span>Ảnh lưu niệm</span></i>
                    </div>
                </div>
                <div class="col-md-6 is-img wow fadeInRight animated">
                    <ul>
                        <li><i></i>Dịch vụ tận tâm</li>
                        <li><i></i>Ưu đãi hấp dẫn</li>
                        <li><i></i>Sự kiện thú vị</li>
                        <li><i></i>Trải nghiệm mới mẻ</li>
                        <li><i></i>Giao lưu với mọi người</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!---holiday---->
    <div class="container">
        <div class="holiday">
            <h3>Danh sách các tours du lịch</h3>
            @foreach ($all_tour1 as $key => $tour1)
                <div class="rom-btm">
                    <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                        <img src="{{ URL::to('public/backend/pacakgeimages/' . $tour1->package_image) }}"
                            class="img-responsive" alt="">
                    </div>
                    <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                        <h4>Tên: {{ $tour1->package_name }}</h4>
                        <h6>Loại hình : {{ $tour1->package_type }}</h6>
                        <p><b>Địa điểm: {{ $tour1->package_location }}</b> </p>
                        <p><b>{{ $tour1->package_features }}</b></p>
                    </div>
                    <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                        <h5>{{ number_format($tour1->package_price) . ' ' . 'VND' }}</h5>
                        <a href="{{ URL::to('/chi-tiet-tour-du-lich/' . $tour1->package_id) }}"
                            class="view">Xem</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @endforeach
            <div><a href="{{ URL::to('/danh-sach-tour-du-lich') }}" class="view">Xem thêm</a></div>
        </div>
        <div class="clearfix"></div>
    </div>

    {{-- <div class="routes ">
        <div class="container gallery-content-6 py-5">
            <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
                <div class="rou-left">
                    <a href="#"><i class="fa fa-globe"></i></a>
                </div>
                <div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
                    <h3>80000</h3>
                    <p>Lượt truy cập</p>
                </div>
                <div class="clearfix"></div>
            </div>
            
            <div class="col-md-4 routes-left">
                <div class="rou-left">
                    <a href="#"><i class="fa fa-user"></i></a>
                </div>
                <div class="rou-rgt">
                    <h3>19000</h3>
                    <p>Khách hàng sử dụng</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
                <div class="rou-left">
                    <a href="#"><i class="fa fa-ticket"></i></a>
                </div>
                <div class="rou-rgt">
                    <h3>10000</h3>
                    <p>Chuyến du lịch đã tổ chức</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div> --}}

    <section class="w3l-bottom-grids-6">
        <div class="bottom-grids-info py-5 ">
            <div class="container py-lg-5">
                <div class="row bottomnhy-grids">
                    <div class="col-lg-3 col-md-6 about-gd mt-lg-0 mt-3 wow fadeInUp animated">
                        <div class="about-gd-inn">
                            <span class="fa fa-globe icon-fea1" aria-hidden="true"></span>
                            <h5><a href="about.html">Voyages & Cruises</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 about-gd mt-lg-0 mt-3 wow fadeInUp animated">
                        <div class="about-gd-inn">
                            <span class="fa fa-hotel icon-fea1" aria-hidden="true"></span>
                            <h5><a href="about.html">Hotel Bookings</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere .</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 about-gd mt-lg-0 mt-3 wow fadeInUp animated">
                        <div class="about-gd-inn">
                            <span class="fa fa-plane icon-fea1" aria-hidden="true"></span>
                            <h5><a href="about.html">Air Tickets</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 about-gd mt-lg-0 mt-3 wow fadeInUp animated">
                        <div class="about-gd-inn">
                            <span class="fa fa-file-text-o icon-fea1" aria-hidden="true"></span>
                            <h5><a href="about.html">Visas</a></h5>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
