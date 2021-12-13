@extends('admin_layout')
@section('admin_content')
    {{-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ URL::to('/dashboard') }}">Home</a><i class="fa fa-angle-right"></i>Quản lý
            đăt
            Tour
        </li>
    </ol> --}}
    <div class="agile-grids">
        <!-- tables -->
        <div class="agile-tables">
            <div class="w3l-table-info">
                <h2>Thông tin khách hàng</h2>
                <table id="table">
                    <thead>
                        <tr>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Tổng tiền</th>
                            <th>Lưu ý</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($booking_by_id as $v_content)
                        <tr>
                            <td>{{$v_content->name}}</td>
                            <td>{{$v_content->mobienumber}}</td>
                            <td>{{$v_content->email}}</td>
                            <td>{{$v_content->total}}</td>
                            <td>{{$v_content->note}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="agile-tables">
            <div class="w3l-table-info">
                <h2>Chi tiết tour đã đặt</h2>
                <table id="table">
                    <thead>
                        <tr>
                            <th>Mã đặt tour</th>
                            <th>Tên tour</th>
                            <th>Ngày đặt</th>
                            <th>Thời gian khởi hành</th>
                            <th>Tình trạng</th>
                            <th>Giá chưa thuế </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($booking_by_id as $v_content)
                        <tr>
                            <td>{{$v_content->booking_id}}</td>
                            <td>{{$v_content->package_name}}</td>
                            <td>{{$v_content->created_at}}</td>
                            <td>{{$v_content->fromdate}}</td>
                            <td>{{$v_content->status}}</td>
                            <td>{{$v_content->package_price}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
