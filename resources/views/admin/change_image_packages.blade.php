@extends('admin_layout')
@section('admin_content')
    <div class="grid-form">
        <!---->
        <div class="grid-form1">
            <h3>Cập nhật ảnh</h3>
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
                @foreach ($update_image as $key => $update_value)
                    <div class="tab-pane active" id="horizontal-form">
                        <form class="form-horizontal"
                            action="{{ URL::to('/update_image_packages/' . $update_value->package_id) }}" name="package"
                            method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label"> Tour Image </label>
                                <div class="col-sm-8">
                                    <img src="{{ URL::to('public/backend/pacakgeimages/' . $update_value->package_image) }}"
                                        width="200">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">New Image</label>
                                <div class="col-sm-8">
                                    <input type="file" name="package_image" id="packageimage" required>
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label"> Package Image 1</label>
                                <div class="col-sm-8">
                                    <img src=" " width="200">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">New Image 1</label>
                                <div class="col-sm-8">
                                    <input type="file" name="packageimage1" id="packageimage1" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label"> Package Image 2</label>
                                <div class="col-sm-8">
                                    <img src=" " width="200">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">New Image 2</label>
                                <div class="col-sm-8">
                                    <input type="file" name="packageimage2" id="packageimage2" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label"> Package Image 3</label>
                                <div class="col-sm-8">
                                    <img src=" " width="200">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">New Image 3</label>
                                <div class="col-sm-8">
                                    <input type="file" name="packageimage3" id="packageimage3" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label"> Package Image 4</label>
                                <div class="col-sm-8">
                                    <img src=" " width="200">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">New Image 4</label>
                                <div class="col-sm-8">
                                    <input type="file" name="packageimage4" id="packageimage4" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-8">
                                    <img src=" " width="200">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">New Image</label>
                                <div class="col-sm-8">
                                    <input type="file" name="packageimage5" id="packageimage5" required>
                                </div>
                            </div--}}
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" name="update_image_packages" class="btn-primary btn">Update</button>
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
