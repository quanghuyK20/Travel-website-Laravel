@extends('admin_layout')
@section('admin_content')
    {{-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="manage-service.php">Manage Services</a><i class="fa fa-angle-right"></i>Update
            Services </li>
    </ol>
    <!--grid--> --}}
    <div class="grid-form">
        <!---->
        <div class="grid-form1">
            <h3>Cập nhật dịch vụ</h3>

            <div class="tab-content">
                @foreach ($update_dichvu as $key => $update_value)
                    <div class="tab-pane active" id="horizontal-form">
                        <form class="form-horizontal" action="{{ URL::to('/update-dichvu/' . $update_value->svid) }}"
                            name="package" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Dịch vụ</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="ten_dich_vu" id="ten_dich_vu"
                                        placeholder="Nhập thông tin" value="{{ $update_value->ten_dich_vu }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Mô tả dịch vụ</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control1" name="noi_dung" id="noi_dung"
                                        placeholder=" Nhập thông tin " value="{{ $update_value->noi_dung }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" name="submit" class="btn-primary btn">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
                <div class="panel-footer"></div>
            </div>

        </div>
    </div>
@endsection
