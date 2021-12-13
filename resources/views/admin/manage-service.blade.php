@extends('admin_layout')
@section('admin_content')
    {{-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ URL::to('/dashboard') }}">Trang chủ</a><i class="fa fa-angle-right"></i>Quản
            lí dịch vụ</li>
    </ol>
    <div class="agile-grids"> --}}
    <!-- tables -->
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Quản lí dịch vụ</h2>
            <?php
            $message_dichvu = Session::get('message_dichvu');
            if ($message_dichvu) {
                echo '<script language="javascript">';
                echo 'alert("Thành công")';
                echo '</script>';
                Session::put('message_dichvu', null);
            }
            ?>
            <table id="table">
                <thead>
                    <td><a href="{{ URL::to('/create-service') }}"><button type="button"
                                class="btn btn-primary btn-block">Thêm</button></a></td>
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Dịch vụ</th>
                        <th>Chi tiết</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($manage_dichvu as $key => $v_new)
                        <tr>
                            <td>{{ $v_new->svid }}</td>
                            <td>{{ $v_new->ten_dich_vu }}</td>
                            <td>{{ $v_new->noi_dung }}</td>
                            <td>{{ $v_new->created_at }}</td>
                            <td>{{ $v_new->updated_at }}</td>
                            <td><a href="{{ URL::to('/edit-dichvu/' . $v_new->svid) }}"><button type="button" class="btn btn-primary btn-block">Sửa</button></a></td>
                            <td><a href="{{ URL::to('/delete-dichvu/' . $v_new->svid) }}"><button type="submit1" name="submit1" class="btn btn-primary btn-block"
                                        style="background-color: #DF3A01;"
                                        onclick="return confirm('Bạn muốn xóa thông tin ?')">Xóa</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
