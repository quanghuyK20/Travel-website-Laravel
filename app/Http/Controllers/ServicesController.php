<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

session_start();

class ServicesController extends Controller
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

    public function dich_vu()
    {
        $all_dichvu = DB::table('tbl_services')->orderBy('svid', 'desc')->get();
        return view('pages.dich-vu.dich_vu')->with('all_dichvu', $all_dichvu);
    }

    public function show_services()
    {
        $this->AuthLogin();
        $manage_dichvu = DB::table('tbl_services')->orderBy('svid', 'desc')->get();
        $manager_dichvu = view('admin.manage-service')->with('manage_dichvu', $manage_dichvu);
        return view('admin_layout')->with('admin.manage-service', $manager_dichvu);
    }

    public function create_service()
    {
        $this->AuthLogin();
        return view('admin.create_service');
    }

    public function save_dichvu(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['ten_dich_vu'] = $request->ten_dich_vu;
        $data['noi_dung'] = $request->noi_dung;

        DB::table('tbl_services')->insert($data);
        Session::put('message_dichvu', 'Tạo thông tin thất bại');
        return Redirect::to('/manage_dichvu');
    }

    public function edit_dichvu($dv_index)
    {
        $this->AuthLogin();
        $update_dichvu = DB::table('tbl_services')->where('svid', $dv_index)->get();
        $manager_dichvu = view('admin.update_service')->with('update_dichvu', $update_dichvu);
        return view('admin_layout')->with('admin.update_service', $manager_dichvu);
    }

    public function update_dichvu(Request $request, $dv_index)
    {
        $this->AuthLogin();
        $data = array();
        $data['ten_dich_vu'] = $request->ten_dich_vu;
        $data['noi_dung'] = $request->noi_dung;

        DB::table('tbl_services')->where('svid', $dv_index)->update($data);
        Session::put('message_dichvu', 'Tạo thông tin thành công');
        return Redirect::to('/manage_dichvu');
    }
    public function delete_dichvu($dv_index)
    {
        $this->AuthLogin();
        DB::table('tbl_services')->where('svid', $dv_index)->delete();
        Session::put('message_dichvu', 'Xóa thành công');
        return Redirect::to('/manage_dichvu');
    }
}
