@extends('admin_layout')
@section('admin_content')
    <li class="breadcrumb-item">Quản lý Tour du lịch</li>
    <div class="agile-grids">
        <!-- tables -->
        <div class="agile-tables">
            <div class="w3l-table-info">
                <h2>Quản lý Tour</h2>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<script language="javascript">';
                    echo 'alert("Thành công")';
                    echo '</script>';
                    Session::put('message', null);
                }
                ?>
                <table id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Loại hình</th>
                            <th>Địa chỉ</th>
                            <th>Giá</th>
                            <th>Ngày tạo</th>
                            <th>Action</th>
                            <th></th>
                        </tr>

                    </thead>
                    <tbody id="danhsach">
                        @foreach ($manage_packages as $key => $cate_pro)
                            <tr>
                                <td>{{ $cate_pro->package_id }}</td>
                                <td>{{ $cate_pro->package_name }}</td>
                                <td>{{ $cate_pro->package_type }}</td>
                                <td>{{ $cate_pro->package_location }}</td>
                                <td>{{ $cate_pro->package_price }} VND</td>
                                <td>{{ $cate_pro->created_at }}</td>
                                <td><a href="{{ URL::to('/edit_tour/' . $cate_pro->package_id) }}"><button type="button"
                                            class="btn btn-primary btn-block">Sửa
                                        </button></a></td>
                                <td><a href="{{ URL::to('/deletetour/' . $cate_pro->package_id) }}"><button type="submit1"
                                            name="submit1" class="btn btn-primary btn-block"
                                            style="background-color: #DF3A01;"
                                            onclick="return confirm('Bạn muốn xóa thông tin ?')">Xóa
                                        </button></a></td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            </table>

        </div>
    </div>
@endsection
