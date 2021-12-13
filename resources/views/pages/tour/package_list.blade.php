@extends('package_layout')
@section('content')
    <div class="banner-3">
        <div class="container">
            <h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Danh sách Tour du lịch</h1>
        </div>
    </div>
    <div class="rooms">
        <div class="container">
            <div class="room-bottom">
                {{-- <h3>Tour hiện có</h3> --}}
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
                            <p><b>Mô tả: {{ $tour->package_features }}</b></p>
                        </div>
                        <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                            <h5>{{ number_format($tour->package_price) . ' ' . 'VND' }}</h5>
                            <a href="{{ URL::to('/chi-tiet-tour-du-lich/' . $tour->package_id) }}"
                                class="view">Xem</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    
@endsection
