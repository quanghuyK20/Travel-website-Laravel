@extends('admin_layout')
@section('admin_content')
    {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="manage-about.php">Manage Infor about</a><i class="fa fa-angle-right"></i>Update Infor</li>
                </ol> --}}
    <!--grid-->
    <div class="grid-form">

        <!---->
        <div class="grid-form1">
            <h3>Cập nhật thông tin</h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    @foreach ($update_infor as $key => $update_value)
                        <form class="form-horizontal"
                            action="{{ URL::to('/update_about_infor/' . $update_value->gtid) }}" name="package"
                            method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Tiêu đề</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="tieu_de" id="nameidea"
                                        placeholder="Create Package" value="{{ $update_value->tieu_de }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Nội dung</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="noi_dung" id="maincontent"
                                        placeholder="Nhập mô tả" value="{{ $update_value->noi_dung }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Chọn ảnh</label>
                                <div class="col-sm-8">
                                    <input type="file" name="image_gt" id="image_gt">
                                    <br>
                                    <img src="{{ URL::to('public/backend/pacakgeimages/' . $update_value->image_gt) }}"
                                        width="200">&nbsp;&nbsp;&nbsp;
                                        {{-- <a href="{{ URL::to('/edit_image_gallery/' . $update_value->gallery_id) }}">Change Image</a> --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" name="submit" class="btn-primary btn"
                                        onclick="return confirm('Bạn muốn cập nhật ?')">Update</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
            @endforeach
            <div class="panel-footer"></div>
        </div>
    </div>
@endsection
