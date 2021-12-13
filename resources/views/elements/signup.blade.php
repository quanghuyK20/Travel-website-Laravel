<!--Javascript for check email availabilty-->
<script>
    function checkAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            data: 'email=' + $("#email").val(),
            type: "POST",
            success: function(data) {
                $("#user-availability-status").html(data);
                $("#loaderIcon").hide();
            },
            error: function() {}
        });
    }
</script>

<?php
$message2 = Session::get('message2');
if ($message2) {
    echo '<script language="javascript">';
    echo 'alert("Đăng kí thành công")';
    echo '</script>';
    Session::put('message2', null);
}
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <section>
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
                                <form name="signup" action="{{ URL::to('/add-customer') }}" method="post">
                                    {{ csrf_field() }}
                                    <h3>Đăng kí</h3>
                                    <input type="text" value="" placeholder="Tên nguời dung" name="name"
                                        autocomplete="off" required="">
                                    <input type="text" value="" placeholder="Số điện thoại" maxlength="10"
                                        name="mobilenumber" autocomplete="off" required="">
                                    <input type="text" value="" placeholder="Email" name="email" id="email"
                                        onBlur="checkAvailability()" autocomplete="off" required="">
                                    <span id="user-availability-status" style="font-size:12px;"></span>
                                    <input type="password" value="" placeholder="Mật khẩu" name="password" required="">
                                    <input type="submit" name="submit" id="submit" value="Tạo">
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p>Bằng cách đăng kí, bạn đồng ý với <a href="">Các điều khoản và điều kiện</a> và <a
                                href="">Chính sách bảo mật</a></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
