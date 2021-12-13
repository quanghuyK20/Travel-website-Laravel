<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;

session_start();

class UserController extends Controller
{

    public function AuthLogin()
    {
        $usid = Session::get('usid');
    }

    public function post_authlogin(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('tbl_user')->where('email', $email)->where('password', $password)->first();
        if ($result) {
            Session::put('email', $result->email);
            Session::put('usid', $result->usid);
            Session::put('password', $result->password);
            $all_tour = DB::table('tbl_tourpackages')
                ->inRandomOrder()
                ->limit(6)
                ->get();
            $all_tour1 = DB::table('tbl_tourpackages')->orderBy('package_id', 'asc')
                ->limit(6)
                ->get();
            $all_gallery = DB::table('tbl_gallery')->orderBy('gallery_id', 'desc')->get();
            return view('pages.home')->with('all_tour', $all_tour)->with('all_gallery', $all_gallery)->with('all_tour1', $all_tour1);
        } else {
            Session::put('message', 'Email hoặc mật khẩu không đúng');
            return Redirect::to('/trang-chu');
        }
    }

    public function logout_user()
    {
        $this->AuthLogin();
        Session::put('email', null);
        Session::put('password', null);
        return Redirect::to('/trang-chu');
    }

    public function add_customer(Request $request)
    {
        $data = array();

        $data['name'] = $request->name;
        $data['mobienumber'] = $request->mobilenumber;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);

        $customer_id = DB::table('tbl_user')->insertGetId($data);

        Session::put('usid', $customer_id);
        Session::put('name', $request->name);

        Session::put('message2', 'Đăng kí thành công');
        return Redirect::to('/trang-chu');
    }

    // public function check_customer(Request $request){

    //     if (!empty($request->email)) {
    //         $email = $request->email;
    //         if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    //             echo "error : Tài khoản đã tồn tại";
    //         } else {
    //             $customer = DB::table('tbl_user')->select('email')->where('email', $email)->get();
    //             $sql = "SELECT email FROM tbl_user WHERE email=:email";
    //             $cnt = 1;
    //             if ($customer->rowCount() > 0) {
    //                 echo "<span style='color:red'> Email already exists .</span>";
    //                 echo "<script>$('#submit').prop('disabled',true);</script>";
    //             } else {

    //                 echo "<span style='color:green'> Email available for Registration .</span>";
    //                 echo "<script>$('#submit').prop('disabled',false);</script>";
    //             }
    //         }
    //     }
    // }

    public function show_change_password()
    {
        return view('pages.change-password.change_password');
    }


    public function change_password(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $email = Session::get('email');
        $usid = Session::get('usid');

        $result = DB::table('tbl_user')->where('usid', $usid)->first();
        $password1 = $result->password;
        $password2 = md5($request->password);

        if ($password1 == $password2) {
            $data['password'] = md5($request->newpassword);
            DB::table('tbl_user')->where('email', $email)->update($data);
            Session::put('change_pass_message', 'Thành công');
            return Redirect::to('/change-password');
        } else {
            echo '<script language="javascript">';
            echo 'alert("Thành nhân")';
            echo '</script>';
            return Redirect::to('/change-password');
        }
    }
}
