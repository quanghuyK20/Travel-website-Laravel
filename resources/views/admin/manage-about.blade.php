@extends('admin_layout')
@section('admin_content')
    {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ URL::to('/dashboard') }}">Home</a><i
                        class="fa fa-angle-right"></i>Quản lý thông
                    tin giới thiệu</li>
            </ol> --}}
    <div class="agile-grids">
        <!-- tables -->

        <div class="agile-tables">
            <div class="w3l-table-info">
                <h2>Manage Infor</h2>
                <?php
                $about_message = Session::get('about_message');
                if ($about_message) {
                    echo '<script language="javascript">';
                    echo 'alert("Thành công")';
                    echo '</script>';
                    Session::put('about_message', null);
                }
                ?>
                <table id="table">
                    <thead>
                        <td><a href="{{ URL::to('/them-thong-tin') }}"><button type="button"
                                    class="btn btn-primary btn-block">Thêm</button></a></td>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Ảnh</th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($manage_about as $key => $v_infor)
                            <tr>
                                <td>{{ $v_infor->gtid }}</td>
                                <td>{{ $v_infor->tieu_de }}</td>
                                <td>{{ $v_infor->noi_dung }}</td>
                                {{-- <td style="max-width: 170px;"> <img src="{{ URL::to('public/backend/pacakgeimages/' . $v_infor->image_gt) }}"
                                    class="img-responsive" alt=""></td> --}}
                                    <td style="max-width: 170px;">{{ $v_infor->image_gt }}</td>
                                <td><a href="{{ URL::to('/edit_about/' . $v_infor->gtid) }}"><button type="button" class="btn btn-primary btn-block">Sửa</button></a></td>
                                <td><a href="{{ URL::to('/delete_gt/' . $v_infor->gtid) }}"><button type="submit1" name="submit1" class="btn btn-primary btn-block"
                                            style="background-color: #DF3A01;"
                                            onclick="return confirm('Bạn muốn xóa thông tin ?')">Xóa</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </table>

        </div>
    </div>
@endsection
