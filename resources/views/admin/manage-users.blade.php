@extends('admin_layout')
@section('admin_content')
    {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ URL::to('/dashboard') }}">Home</a><i
                        class="fa fa-angle-right"></i>Manage Users</li>
            </ol> --}}
    <div class="agile-grids">
        <!-- tables -->
        <div class="agile-tables">
            <div class="w3l-table-info">
                <h2>Quản lý người dùng</h2>
                <table id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Ngày tạo </th>
                            <th>Ngày cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($manage_user as $key => $value)
                            <tr>
                                <td>{{$value->usid}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->mobienumber}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->created_at}}</td>
                                <td>{{$value->updated_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </table>


        </div>
    </div>
@endsection
