@extends('admin_layout')
@section('admin_content')
    <li class="breadcrumb-item">Cập nhật ảnh
    </li>

    <!--grid-->
    <div class="grid-form">
        <!---->
        <div class="grid-form1">
            <h3>Cập nhật ảnh</h3>
            <?php
            $gallery_message = Session::get('gallery_message');
            if ($gallery_message) {
                echo '<script language="javascript">';
                echo 'alert("Thêm thành công")';
                echo '</script>';
                Session::put('gallery_message', null);
            }
            ?>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label"> View Image </label>
                            <div class="col-sm-8">
                                <img src="" width="200">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">New Image</label>
                            <div class="col-sm-8">
                                <input type="file" name="viewimage" id="viewimage" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" name="submit" class="btn-primary btn">Update</button>

                            </div>
                        </div>
                </div>

                </form>
                <div class="panel-footer">

                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
