 @extends('admin_layout')
 @section('admin_content')
     <!--heder end here-->
     {{-- <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="manage-service.php">Home</a><i class="fa fa-angle-right"></i>Thêm dịch vụ</li>
     </ol> --}}
     <!--grid-->
     <div class="grid-form">
         <!---->
         <div class="grid-form1">
             <h3>Thêm dịch vụ</h3>
             <?php
            $message_dichvu = Session::get('message_dichvu');
            if ($message_dichvu) {
                echo '<script language="javascript">';
                echo 'alert("Thêm thành công")';
                echo '</script>';
                Session::put('message_dichvu', null);
            }
            ?>
             <div class="tab-content">
                 <div class="tab-pane active" id="horizontal-form">
                     <form class="form-horizontal" action="{{ URL::to('/save-dichvu') }}" name="view" method="post"
                         enctype="multipart/form-data">
                         {{ csrf_field() }}
                         <div class="form-group">
                             <label for="focusedinput" class="col-sm-2 control-label">Dịch vụ</label>
                             <div class="col-sm-8">
                                 <input type="text" class="form-control1" name="ten_dich_vu" id="ten_dich_vu"
                                     placeholder="Nhập nội dung" required>
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="focusedinput" class="col-sm-2 control-label">Chi tiết</label>
                             <div class="col-sm-8">
                                 <input type="text" class="form-control1" name="noi_dung" id="noi_dung"
                                     placeholder="Nhập nội dung" required>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-8 col-sm-offset-2">
                                 <button type="submit" name="submit" class="btn-primary btn">Thêm</button>
                                 <button type="reset" class="btn-inverse btn">Reset</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     <!--//grid-->
 @endsection
