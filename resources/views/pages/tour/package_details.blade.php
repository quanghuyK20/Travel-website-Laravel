@extends('package_layout')
@section('content')
    <div class="banner-3">
        <div class="container">
            <h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Chi tiết Tour du lịch</h1>
        </div>
    </div>
    <div class="selectroom">
        <div class="container">
            @foreach ($package_details as $key => $value)
                <form action="{{ URL::to('/save-cart') }}" method="post">
                    {{ csrf_field() }}
                    <div class="selectroom_top">
                        <div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
                            <img src="{{ URL::to('public/backend/pacakgeimages/' . $value->package_image) }}"
                                class="img-responsive" alt="">
                        </div>
                        <div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
                            <h2></h2>
                            <p class="dow">#PKG-{{ $value->package_id }}</p>
                            <p><b>Tên tour : {{ $value->package_name }}</b> </p>
                            <p><b>Loại hình : {{ $value->package_type }}</b> </p>
                            <p><b>Địa điểm : {{ $value->package_location }}</b> </p>
                            <p><b>Mô tả : {{ $value->package_features }}</b> </p>
                            <input type="hidden" name="id_hidden" value="{{ $value->package_id }}">
                            <input type="hidden" name="time_hidden" value="{{ date('d/m/Y') }}">
                            <input type="hidden" name="email_hidden" value="{{ Session::get('email') }}">
                            <input type="hidden" name="customer_hidden" value="{{ Session::get('usid') }}">
                            {{-- <?php $time = date('d/m/Y');
echo $time;
?> --}}
                            <div class="ban-bottom">
                                <div class="bnr-right">
                                    <label class="inputLabel">Từ </label>
                                    <input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"
                                        name="fromdate" required="">
                                </div>
                                <div class="bnr-right">
                                    <label class="inputLabel">đến </label>
                                    <input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy"
                                        name="todate" required="">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="grand">
                                <p>Giá khởi điểm </p>
                                <h3>{{ number_format($value->package_price) . ' ' . 'VND' }}</h3>
                            </div>
                        </div>
                        <br>
                        <h3 style="text-align: center" class="wow fadeInUp animated" data-wow-delay=".5s">Chi tiết tour du
                            lịch </h3>
                        <p style="padding-top: 1%" class="wow fadeInUp animated" data-wow-delay=".5s">
                            {{ $value->package_details }} </p>
                        <br>
                        <div class="img fadeInUp wow fadeInLeft animated">
                            <a href="{{ URL::to('public/backend/pacakgeimages/' . $value->package_image1) }}">
                                <img src="{{ URL::to('public/backend/pacakgeimages/' . $value->package_image1) }}">
                            </a>
                            <div class="desc"></div>
                        </div>
                        <div class="img fadeInUp wow fadeInLeft animated">
                            <a href="{{ URL::to('public/backend/pacakgeimages/' . $value->package_image2) }}"
                                target="_blank">
                                <img src="{{ URL::to('public/backend/pacakgeimages/' . $value->package_image2) }}">
                            </a>
                            <div class="desc"></div>
                        </div>
                        <div class="img fadeInUp wow fadeInLeft animated">
                            <a href="{{ URL::to('public/backend/pacakgeimages/' . $value->package_image3) }}"
                                target="_blank">
                                <img src="{{ URL::to('public/backend/pacakgeimages/' . $value->package_image3) }}">
                            </a>
                            <div class="desc"></div>
                        </div>
                        <div class="img fadeInUp wow fadeInLeft animated">
                            <a href="{{ URL::to('public/backend/pacakgeimages/' . $value->package_image4) }}"
                                target="_blank">
                                <img src="{{ URL::to('public/backend/pacakgeimages/' . $value->package_image4) }}">
                            </a>
                            <div class="desc"></div>
                        </div>
                        <div class="clearfix"></div>

                    </div>

                    <div class="selectroom_top fadeInUp wow fadeInLeft animated">
                        <h2>Nhân Huy - Travels</h2>
                        <div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms"
                            data-wow-delay="500ms"
                            style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
                            <ul>
                                <li class="spe">
                                    <label class="inputLabel">Nhập thông tin lưu ý cho công ty</label>
                                    <input class="special" type="text" name="comment" required="">
                                </li>

                                <?php $login = Session::get('email');
                                if ($login) { ?>
                                <li class="spe" align="center">
                                    <button type="submit" name="submit" class="btn-primary btn">Đặt Tour</button>
                                </li>
                                <?php } else { ?>
                                <li class="sigi" align="center" style="margin-top: 1%">
                                    <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn"> Đặt
                                        Tour</a>
                                </li>
                                <?php } ?>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection
