@extends('admin_layout')
@section('admin_content')
    {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ URL::to('/dashboard') }}">Home</a><i
                        class="fa fa-angle-right"></i>Quản lý tin
                    tức</li>
            </ol> --}}
    <div class="agile-grids">
        <!-- tables -->
        <div class="agile-tables">
            <div class="w3l-table-info">
                <h2>Quản lý tin tức</h2>
                <?php
                $message_tintuc = Session::get('message_tintuc');
                if ($message_tintuc) {
                    echo '<script language="javascript">';
                    echo 'alert("Thành công")';
                    echo '</script>';
                    Session::put('message_tintuc', null);
                }
                ?>
                <table id="table">
                    <thead>
                        <td><a href="{{ URL::to('/create-tin-tuc') }}"><button type="button"
                                    class="btn btn-primary btn-block">Thêm</button></a></td>
                        <tr>
                            <th>ID</th>
                            <th>Tên bài viết</th>
                            <th>Nội dung ngắn</th>
                            <th>Image</th>
                            <th>Links</th>
                            <th>Action</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($manage_tintuc as $key => $v_new)
                        <tr>
                            <td>{{ $v_new->id_baiviet }}</td>
                            <td>{{ $v_new->ten_bai_viet }}</td>
                            <td>{{ $v_new->noi_dung_ngan }}</td>
                            <td>{{ $v_new->image }}</td>
                            <td><a href="{{ $v_new->link }}">links</a></td>
                            <td><a href="{{ URL::to('/edit_bai_viet/' . $v_new->id_baiviet) }}"><button type="button" class="btn btn-primary btn-block">Cập nhật</button></a></td>
                            <td><a href="{{ URL::to('/delete_bai_viet/' . $v_new->id_baiviet) }}"><button type="submit" name="submit1" class="btn btn-primary btn-block"
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
