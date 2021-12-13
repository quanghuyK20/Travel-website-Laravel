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
            $gallery_message = Session::get('gallery_message');
            if ($gallery_message) {
                echo '<script language="javascript">';
                echo 'alert("Cập nhật thành công")';
                echo '</script>';
                Session::put('gallery_message', null);
            }
            ?>
            <div class="tab-content">
                @foreach ($update_gallery as $key => $update_value)
                    <div class="tab-pane active" id="horizontal-form">
                        <form class="form-horizontal"
                            action="{{ URL::to('/update_gallery/' . $update_value->gallery_id) }}" name="package"
                            method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Địa điểm</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="location" id="imagename"
                                        placeholder="Create Package" value="{{ $update_value->location }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">View Infor</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="location_infor" id="viewinfor"
                                        placeholder=" Nhập thông tin địa điểm" value="{{ $update_value->location_infor }}"
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Mô tả 1</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="gallery_mt1" id="viewinfor1"
                                        placeholder="Nhập mô tả" value="{{ $update_value->gallery_mt1 }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Mô tả 2</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="gallery_mt2" id="viewinfor2"
                                        placeholder="Nhập mô tả" value="{{ $update_value->gallery_mt2 }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Mô tả 3</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="gallery_mt3" id="viewinfor3"
                                        placeholder="Nhập mô tả" value="{{ $update_value->gallery_mt3 }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Chọn ảnh</label>
                                <div class="col-sm-8">
                                    <input type="file" name="image_gallery" id="image_gallery">
                                    <br>
                                    <img src="{{ URL::to('public/backend/pacakgeimages/' . $update_value->image_gallery) }}"
                                        width="200">&nbsp;&nbsp;&nbsp;
                                        {{-- <a href="{{ URL::to('/edit_image_gallery/' . $update_value->gallery_id) }}">Change Image</a> --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" name="update_gallery" class="btn-primary btn">Update</button>
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
