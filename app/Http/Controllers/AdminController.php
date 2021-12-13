<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
session_start();

class AdminController extends Controller
{

    public function AuthLogin()
    {
        $admin_id = Session::get('adminid');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function index()
    {
        return view('admin_login');
    }

    public function show_dashboard()
    {
        $this->AuthLogin();
        $user = DB::table('tbl_user')->get()->count('usid');
        $booking = DB::table('tbl_booking')->get()->count('boooking_id');
        $ykien = DB::table('tbl_ykien')->get()->count('isid');
        $tongtour=  DB::table('tbl_tourpackages')->get()->count('package_id');
        return view('admin.dashboard')->with('user', $user)->with('booking', $booking)->with('ykien', $ykien)->with('tongtour', $tongtour);
    }

    public function dashboard(Request $request)
    {
        $username = $request->username;
        $password = md5($request->password);
        $result = DB::table('tbl_admin')->where('username', $username)->where('password', $password)->first();
        if ($result) {
            Session::put('username', $result->username);
            Session::put('adminid', $result->adminid);
            return view('admin.dashboard');
        } else {
            Session::put('message', 'User name hoặc mật khẩu không đúng');
            return Redirect::to('/admin');
        }
    }

    public function logout()
    {
        $this->AuthLogin();
        Session::put('username', null);
        Session::put('adminid', null);
        return Redirect::to('/admin');
    }

    // public function bookings()
    // {
    //     $this->AuthLogin();
    //     $all_booking = DB::table('tbl_booking')
    //     ->join('tbl_user','tbl_booking.usid','=','tbl_user.usid')
    //     ->select('tbl_booking.*','tbl_user.name')
    //     ->orderBy('tbl_booking.booking_id', 'desc')->get();
    //     $manager_order = view('admin.manage-bookings')->with('all_booking', $all_booking);
    //     return view('admin_layout')->with('all_booking', $all_booking);
    // }

    public function enquires()
    {
        $this->AuthLogin();
        $manage_enquires = DB::table('tbl_contact')->orderBy('contact_id', 'desc')->get();
        $manager_enquires = view('admin.manage-enquires')->with('manage_enquires', $manage_enquires);
        return view('admin_layout')->with('admin.manage-enquires', $manager_enquires);
    }

    public function show_tintuc()
    {
        $this->AuthLogin();
        return view('admin.manage_tintuc');
    }

    public function show_users()
    {
        $this->AuthLogin();
        $manage_user = DB::table('tbl_user')->orderBy('usid', 'desc')->get();
        $manager_user = view('admin.manage-users')->with('manage_user', $manage_user);
        return view('admin_layout')->with('admin.manage-users', $manager_user);
        return view('admin.manage-users');
    }

    public function show_issues()
    {
        $this->AuthLogin();
        return view('admin.manageissues');
    }
}
