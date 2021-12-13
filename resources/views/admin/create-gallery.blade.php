@extends('admin_layout')
@section('admin_content')
    {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="manage-view.php">Home</a><i class="fa fa-angle-right"></i>Create views</li>
            </ol> --}}
    <!--grid-->
    <div class="grid-form">
        <!---->
        <div class="grid-form1">
            <h3>Thêm tour gợi ý</h3>
            <?php
            $message_gallery = Session::get('message_gallery');
            if ($message_gallery) {
                echo '<script language="javascript">';
                echo 'alert("Thêm thành công")';
                echo '</script>';
                Session::put('message_gallery', null);
            }
            ?>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" name="view"action="{{ URL::to('/create_infor') }}"  method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Tên địa điểm</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="location" id="imagename"
                                    placeholder="Create image" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Thông tin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="location_infor" id="viewinfor"
                                    placeholder="Create Infor" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Mô tả 1</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="gallery_mt1" id="viewinfor1"
                                    placeholder="Thêm mô tả" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Mô tả 2</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="gallery_mt2" id="viewinfor2"
                                    placeholder="Thêm mô tả" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Mô tả 3</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="gallery_mt3" id="viewinfor3"
                                    placeholder="Thêm mô tả" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Choose Image</label>
                            <div class="col-sm-8">
                                <input type="file" name="image_gallery" id="viewimage" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" name="create_gallery" class="btn-primary btn">Create</button>

                                <button type="reset" class="btn-inverse btn">Reset</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
            <div class="panel-footer">
            </div>
            </form>
        </div>
    </div>
@endsection
