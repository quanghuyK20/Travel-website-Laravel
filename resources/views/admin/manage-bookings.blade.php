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
                <h2>Quản lý đặt tour</h2>
                <table id="table">
                    <thead>
                        <tr>
                            <th>Mã đặt tour</th>
                            <th>Khách hàng</th>
                            <th>Ngày đặt</th>
                            <th>Tên tour </th>
                            <th>Email</th>
                            <th>Chi tiết</th>
                            <th>Status </th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_booking as $key => $value)
                            <tr>
                                <td>{{ $value->booking_id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->buy_in_date }}</td>
                                <td><a href="{{URL::to('/view-booking/'.$value->booking_id)}}">{{ $value->package_name }}</a>
                                </td>
                                <td>{{ $value->email }}</td>
                                <td><a href="{{URL::to('/view-booking/'.$value->booking_id)}}">Xem</a></td>
                                <td>Cancelled</td>
                                <td><a href="" onclick="return confirm('Bạn muốn hủy Tour ?')">Hủy</a>
                                    / <a href="" onclick="return confirm('Duyệt tour >')">Duyệt</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
