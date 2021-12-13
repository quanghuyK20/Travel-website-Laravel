@extends('admin_layout')
@section('admin_content')
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Tour gợi ý</h2>
            <?php
            $gallery_message = Session::get('gallery_message');
            if ($gallery_message) {
                echo '<script language="javascript">';
                echo 'alert("Thành công")';
                echo '</script>';
                Session::put('gallery_message', null);
            }
            ?>
            <table id="table">
                <thead>
                    <td><a href="{{URL::to('/create_gallery')}}"><button type="button" class="btn btn-primary btn-block">Thêm</button></a></td>
                    <tr>
                        <th>ImageID</th>
                        <th>Tên địa điểm</th>
                        <th>Thông tin</th>
                        <th>Ảnh</th>
                        <th>Mô tả 1</th>
                        <th>Mô tả 2</th>
                        <th>Mô tả 3</th>
                        <th>Action</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($manage_gallery as $key => $v_gallery)
                    <tr>
                        <td>{{ $v_gallery->gallery_id }}</td>
                        <td>{{ $v_gallery->location }}</td>
                        <td>{{ $v_gallery->location_infor }}</td>
                        <td>{{ $v_gallery->image_gallery }}</td>
                        <td>{{ $v_gallery->gallery_mt1 }}</td>
                        <td>{{ $v_gallery->gallery_mt2 }}</td>
                        <td>{{ $v_gallery->gallery_mt3 }}</td>
                        <td><a href="{{ URL::to('/edit_gallery/' . $v_gallery->gallery_id) }}"><button type="button" class="btn btn-primary btn-block">Cập nhật</button></a></td>
                        <td><a href="{{ URL::to('/delete_gallery/' . $v_gallery->gallery_id) }}"><button type="submit1" name="submit1" class="btn btn-primary btn-block"
                                    style="background-color: #DF3A01;"
                                    onclick="return confirm('Bạn muốn xóa thông tin ?')">Xóa</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </table>

    </div>

@endsection
