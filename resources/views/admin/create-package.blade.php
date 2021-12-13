@extends('admin_layout')
@section('admin_content')


    <li class="breadcrumb-item">
        Quản Lý Tour du lịch </li>
    <div class="grid-form">
        <div class="grid-form1">
            <h3>Thêm mới</h3>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<script language="javascript">';
                echo 'alert("Thêm thành công")';
                echo '</script>';
                Session::put('message', null);
            }
            ?>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" action="{{ URL::to('/create_tour') }}" name="package" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Tên tour</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="package_name" id="packagename"
                                    placeholder="   Nhập nội dung" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Loại hình</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="package_type" id="packagetype"
                                    placeholder="   Gia đình/ Cơ quan/ Cặp đôi,..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Địa điểm</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="package_location" id="packagelocation"
                                    placeholder="   Nhập nội dung" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Giá khởi điểm</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="package_price" id="packageprice"
                                    placeholder="   Nhập số tiền" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label"> Mô tả tour du lịch</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="package_mota" id="packagemota"
                                    placeholder="   Nhập nội dung" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Chi tiết tour</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="5" cols="50" name="package_details"
                                    id="packagedetails" placeholder="  Nhập nội dung" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Ảnh chính</label>
                            <div class="col-sm-8">
                                <input type="file" name="package_image" id="packageimage" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Ảnh mô tả 1</label>
                            <div class="col-sm-8">
                                <input type="file" name="package_image1" id="packageimage1" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Nhập tiêu đề</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="mota1" id="mota1"
                                    placeholder="   Nhập nội dung" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Ảnh mô tả 2</label>
                            <div class="col-sm-8">
                                <input type="file" name="package_image2" id="packageimage2" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label"> Nhập tiêu đề</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="mota2" id="mota2"
                                    placeholder="   Nhập nội dung" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Ảnh mô tả 3</label>
                            <div class="col-sm-8">
                                <input type="file" name="package_image3" id="packageimage3" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label"> Nhập tiêu đề</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="mota3" id="mota3"
                                    placeholder="   Nhập nội dung" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Ảnh mô tả 4</label>
                            <div class="col-sm-8">
                                <input type="file" name="package_image4" id="packageimage4" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label"> Nhập tiêu đề</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="mota4" id="mota4"
                                    placeholder="   Nhập nội dung" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" name="add_tour" class="btn-primary btn">Tạo</button>
                                <button type="reset" class="btn-inverse btn">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
