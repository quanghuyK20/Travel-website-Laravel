@extends('layout')
@section('content')

    <section class="w3l-gallery-6">
        <div class="gallery-content-6 py-5">
            <div class="container py-lg-5">
                <div class="title-content mb-lg-5 mb-4 wow fadeInDown animated">
                    <span class="sub-title">Kết quả tìm kiếm</span>
                    {{-- <h3 class="hny-title">Ưu đãi</h3> --}}
                </div>
                <div class="row gallery-grids ">
                    @foreach ($search_product as $key => $tour)
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
                                <h6 class="mt-sm-2 mt-1">{{ $tour->package_type }} &emsp;<span>Khởi điểm
                                        :{{ $tour->package_price }} VND</span></h6>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>

        <!---holiday---->
        {{-- <div class="container">
            <div class="holiday">
                <h3>Danh sách các tours du lịch</h3>
                @foreach ($all_tour as $key => $tour)
                    <div class="rom-btm">
                        <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                            <img src="{{ URL::to('public/backend/pacakgeimages/' . $tour->package_image) }}"
                                class="img-responsive" alt="">
                        </div>
                        <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                            <h4>Tên: {{ $tour->package_name }}</h4>
                            <h6>Loại hình : {{ $tour->package_type }}</h6>
                            <p><b>Địa điểm: {{ $tour->package_location }}</b> </p>
                            <p><b>Mô tả: {{ $tour->package_details }}</b></p>
                        </div>
                        <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                            <h5> VND</h5>
                            <a href="{{ URL::to('/chi-tiet-tour-du-lich/' . $tour->package_id) }}"
                                class="view">Xem</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                @endforeach
                <div><a href="package-list.php" class="view">Xem thêm</a></div>
            </div>
            <div class="clearfix"></div>
        </div> --}}

    @endsection
