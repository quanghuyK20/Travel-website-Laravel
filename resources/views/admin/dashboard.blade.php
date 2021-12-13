@extends('admin_layout')
@section('admin_content')

    @php
    $user = DB::table('tbl_user')
        ->get()
        ->count('usid');
    $booking = DB::table('tbl_booking')
        ->get()
        ->count('boooking_id');
    $ykien = DB::table('tbl_ykien')
        ->get()
        ->count('isid');
    $tongtour = DB::table('tbl_tourpackages')
        ->get()
        ->count('package_id');
    @endphp
    <div class="col-md-3 four-grid">

        <div class="four-agileits">
            <div class="icon">
                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
            </div>
            <div class="four-text">
                <h3>Tài khoản người dùng</h3>

                <h4><?php echo $user; ?></h4>
            </div>

        </div>
    </div>
    <div class="col-md-3 four-grid">
        <div class="four-agileinfo">
            <div class="icon">
                <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
            </div>
            <div class="four-text">
                <h3>Lượt đặt Tour</h3>

                <h4><?php echo $booking; ?></h4>

            </div>

        </div>
    </div>
    <div class="col-md-3 four-grid">
        <div class="four-w3ls">
            <div class="icon">
                <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
            </div>
            <div class="four-text">
                <h3>Góp ý/ Khiếu nại</h3>

                <h4><?php echo $ykien; ?></h4>

            </div>

        </div>
    </div>
    <div class="col-md-3 four-grid">
        <div class="four-wthree">
            <div class="icon">
                <i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
            </div>
            <div class="four-text">
                <h3>Tổng Tours</h3>

                <h4><?php echo $tongtour; ?></h4>

            </div>

        </div>
    </div>

@endsection

@section('admin_content2')
    <div class="col-md-3 four-grid">
        <div class="four-w3ls">
            <div class="icon">
                <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
            </div>
            <div class="four-text">
                <h3>Vấn đề đã được giải quyết</h3>

                <h4></h4>

            </div>

        </div>
    </div>
@endsection
