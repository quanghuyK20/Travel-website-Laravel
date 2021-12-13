@extends('admin_layout')
@section('admin_content')
    <li class="breadcrumb-item">Cập nhật Tour </li>

    <div class="grid-form">

        <div class="grid-form1">
            <h3>Cập nhật Tour</h3>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<script language="javascript">';
                echo 'alert("Cập nhật thành công")';
                echo '</script>';
                Session::put('message', null);
            }
            ?>
            <div class="tab-content">
                @foreach ($update_packages as $key => $update_value)
                    <div class="tab-pane active" id="horizontal-form">
                        <form class="form-horizontal" name="package"
                            action="{{ URL::to('/update_tour/' . $update_value->package_id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Tên tour</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="package_name" id="packagename"
                                        placeholder=" Nhập nội dung" value="{{ $update_value->package_name }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Loại hình</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="package_type" id="packagetype"
                                        placeholder=" Gia đình/ Cơ quan/ Cặp đôi,..."
                                        value="{{ $update_value->package_type }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Địa điểm</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="package_location" id="packagelocation"
                                        placeholder=" Nhập nội dung" value="{{ $update_value->package_location }}"
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Giá khởi điểm</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="package_price" id="packageprice"
                                        placeholder=" Nhập nội dung" value="{{ $update_value->package_price }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Mô tả tour du lịch</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="package_mota" id="packagefeatures"
                                        placeholder="Nhập nội dung" value="{{ $update_value->package_features }}"
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Chi tiết tour</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" rows="5" cols="50" name="package_details"
                                        id="packagedetails" placeholder=" Nhập nội dung"
                                        required>{{ $update_value->package_details }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Ảnh chính</label>
                                <div class="col-sm-8">
                                    <input type="file" name="package_image" id="package_image">
                                    <br>
                                    <img src="{{ URL::to('public/backend/pacakgeimages/' . $update_value->package_image) }}"
                                        width="200">&nbsp;&nbsp;&nbsp;
                                    {{-- <a href="{{ URL::to('/edit_image_packages/' . $update_value->package_id) }}">Change Image</a> --}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Ảnh mô tả 1</label>
                                <div class="col-sm-8">
                                    <input type="file" name="package_image1" id="package_image">
                                    <br>
                                    <img src="{{ URL::to('public/backend/pacakgeimages/' . $update_value->package_image1) }}"
                                        width="200">&nbsp;&nbsp;&nbsp;
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Nhập tiêu đề</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="mota1" id="mota1"
                                        placeholder="   Nhập nội dung" value="{{ $update_value->mota1 }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Ảnh mô tả 2</label>
                                <div class="col-sm-8">
                                    <input type="file" name="package_image2" id="package_image">
                                    <br>
                                    <img src="{{ URL::to('public/backend/pacakgeimages/' . $update_value->package_image2) }}"
                                        width="200">&nbsp;&nbsp;&nbsp;
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Nhập tiêu đề</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="mota2" id="mota2"
                                        placeholder="   Nhập nội dung" value="{{ $update_value->mota2 }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Ảnh mô tả 3</label>
                                <div class="col-sm-8">
                                    <input type="file" name="package_image3" id="package_image">
                                    <br>
                                    <img src="{{ URL::to('public/backend/pacakgeimages/' . $update_value->package_image3) }}"
                                        width="200">&nbsp;&nbsp;&nbsp;
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Nhập tiêu đề</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="mota3" id="mota3"
                                        placeholder="   Nhập nội dung" value="{{ $update_value->mota3 }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Ảnh mô tả 4</label>
                                <div class="col-sm-8">
                                    <input type="file" name="package_image4" id="package_image">
                                    <br>
                                    <img src="{{ URL::to('public/backend/pacakgeimages/' . $update_value->package_image4) }}"
                                        width="200">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Nhập tiêu đề</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="mota4" id="mota4"
                                        placeholder="   Nhập nội dung" value="{{ $update_value->mota4 }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Ngày cập nhật</label>
                                <div class="col-sm-8">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" name="update_tour" class="btn-primary btn">Cập nhật</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
            <!--//grid-->
        </div>
    </div>
@endsection
