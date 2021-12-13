@extends('admin_layout')
@section('admin_content')
    {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="manage-about.php">Home</a><i class="fa fa-angle-right"></i>Update Infor About </li>
                </ol> --}}
    <!--grid-->
    <div class="grid-form">
        <?php
            $about_message = Session::get('about_message');
            if ($about_message) {
                echo '<script language="javascript">';
                echo 'alert("Thêm thành công")';
                echo '</script>';
                Session::put('about_message', null);
            }
            ?>
        <!---->
        <div class="grid-form1">
            <h3>Thêm thông tin giới thiệu</h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" action="{{ URL::to('/them_thong_tin') }}" name="package" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Tiêu đề</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="tieu_de" id="tieu_de"
                                    placeholder="Nhập mô tả" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Nội dung chính</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="noi_dung" id="noi_dung"
                                    placeholder="Nhập mô tả" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label"> Image</label>
                            <div class="col-sm-8">
                                <input type="file" name="image_gt" id="image_gt" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" name="submit" class="btn-primary btn">Create</button>
                                <button type="reset" class="btn-inverse btn">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
@endsection
