@extends('admin_layout')
@section('admin_content')
    {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="manage-view.php">Manage View</a><i class="fa fa-angle-right"></i>Update View </li>
                </ol> --}}
    <!--grid-->
    <div class="grid-form">
        <!---->
        <div class="grid-form1">
            <h3>Cập nhật</h3>
            <?php
            $message_tintuc = Session::get('message_tintuc');
            if ($message_tintuc) {
                echo '<script language="javascript">';
                echo 'alert("Thêm thành công")';
                echo '</script>';
                Session::put('message_tintuc', null);
            }
            ?>
            <div class="tab-content">
                @foreach ($update_tintuc as $key => $update_value)
                    <div class="tab-pane active" id="horizontal-form">
                        <form class="form-horizontal"
                            action="{{ URL::to('/update_tintuc/' . $update_value->id_baiviet) }}" name="package"
                            method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Tên bài viết</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="ten_bai_viet" id="imagename"
                                        placeholder="Create Package" value="{{ $update_value->ten_bai_viet }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Nội dung ngắn</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="noi_dung_ngan" id="viewinfor"
                                        placeholder=" Nhập thông tin địa điểm" value="{{ $update_value->noi_dung_ngan }}"
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Link</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="link" id="viewinfor1"
                                        placeholder="Nhập mô tả" value="{{ $update_value->link }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Chọn ảnh</label>
                                <div class="col-sm-8">
                                    <input type="file" name="image" id="image_gallery">
                                    <br>
                                    <img src="{{ URL::to('public/backend/pacakgeimages/' . $update_value->image) }}"
                                        width="200">&nbsp;&nbsp;&nbsp;
                                    {{-- <a href="{{ URL::to('/edit_image_gallery/' . $update_value->gallery_id) }}">Change Image</a> --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" name="update_tintuc" class="btn-primary btn">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer"></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
