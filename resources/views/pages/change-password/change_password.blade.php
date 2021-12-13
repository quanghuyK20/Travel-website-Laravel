@extends('package_layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/frontend/css/stylelog.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->

    <script type="text/javascript">
        function valid() {
            if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
                alert("Mật khẩu mới bạn nhập không khớp !!");
                document.chngpwd.confirmpassword.focus();
                return false;
            }
            return true;
        }
    </script>

    <div class="privacy">
        <div class="w3ls-header">
            <h1>Quên mật khẩu</h1>
            <?php
            $change_pass_message = Session::get('change_pass_message');
            if ($change_pass_message) {
                echo '<script language="javascript">';
                echo 'alert("Thành công")';
                echo '</script>';
                Session::put('change_pass_message', null);
            }
            ?>
            <div class="header-main">
                <h2 class="wow fadeInUp animated" style="color: #41B7FC">Đổi mật khẩu</h2>
                <div class="header-bottom wow fadeInUp animated">
                    <div class="header-right w3agile">
                        <div class="header-left-bottom agileinfo">
                            <form name="chngpwd" action="{{ URL::to('/change_pass') }}" method="post"
                                onSubmit="return valid();">
                                {{ csrf_field() }}
                                <div class="icon1">
                                    <i class="fa fa-lock" aria-hidden="true" style="color: #41B7FC"></i>
                                    <input type="password" name="password" id="exampleInputPassword1"
                                        placeholder="Mật khẩu cũ" required="" />
                                </div>
                                <div class="icon1">
                                    <i class="fa fa-lock" aria-hidden="true" style="color: #41B7FC"></i>
                                    <input type="password" name="newpassword" id="newpassword" placeholder="Mật khẩu mới"
                                        required="" />
                                </div>
                                <div class="icon1">
                                    <i class="fa fa-lock" aria-hidden="true" style="color: #41B7FC"></i>
                                    <input type="password" name="confirmpassword" id="confirmpassword"
                                        placeholder="Nhập lại mật khẩu mới" required="" />
                                </div>
                                <div class="bottom" style="text-align: center">
                                    <input style="background-color: #41B7FC" type="submit" name="submit50"
                                        value="Đặt lại" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
