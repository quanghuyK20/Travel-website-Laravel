
<?php
$message = Session::get('message');
if ($message) {
	echo '<script language="javascript">';
	echo 'alert("Tài khoản hoặc mật khẩu không đúng")';
	echo '</script>';
	Session::put('message', null);
}
?>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-left">
                            <ul>
                                <li><a class="fb" href="#"><i></i>Facebook</a></li>
                                <li><a class="goog" href="#"><i></i>Google</a></li>
                            </ul>
                        </div>
                        <div class="login-right">
                            <form method="post" action="{{ route('loginuser') }}">
								{{ csrf_field() }}
                                <h3>Đăng nhâp</h3>
                                <input type="text" name="email" id="email" placeholder="Email" required="">
                                <input type="password" name="password" id="password" placeholder="Password" value=""
                                    required="">
                                <h4><a href="forgot-password.php">Quên mật khẩu</a></h4>
                                <input type="submit" name="signin" value="Đăng nhập">
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p>Bằng cách đăng nhập, bạn đồng ý với <a href="">Các điều khoản và điều kiện</a> và <a
                            href="">Chính sách bảo mật</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
