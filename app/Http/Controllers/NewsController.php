<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
session_start();

class NewsController extends Controller
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

    public function tin_tuc()
    {
        $all_tintuc = DB::table('tbl_tintuc')->orderBy('id_baiviet', 'desc')->get();
        return view('pages.tintuc.tin_tuc')->with('all_tintuc', $all_tintuc);
    }

    // public function show_tintuc()
    // {
    //     $all_tintuc = DB::table('tbl_tintuc')->orderBy('id_baiviet', 'desc')->get();
    //     return view('pages.tintuc.tin_tuc')->with('all_tintuc', $all_tintuc);
    // }

    public function manage_tin_tuc()
    {
        $this->AuthLogin();
        $manage_tintuc = DB::table('tbl_tintuc')->orderBy('id_baiviet', 'desc')->get();
        $manager_tintuc = view('admin.manage_tintuc')->with('manage_tintuc', $manage_tintuc);
        return view('admin_layout')->with('admin.manage_tintuc', $manager_tintuc);
    }

    public function create_tintuc()
    {
        $this->AuthLogin();
        return view('admin.create_tintuc');
    }

    public function save_tintuc(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['ten_bai_viet'] = $request->ten_bai_viet;
        $data['noi_dung_ngan'] = $request->noi_dung_ngan;
        $data['image'] = $request->image;
        $data['link'] = $request->link;

        $get_image  = $request->file('image');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(1000, 1999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/pacakgeimages', $new_image);
            $data['image'] = $new_image;

            DB::table('tbl_tintuc')->insert($data);
            Session::put('message_tintuc', 'Tạo thông tin thành công');
            return Redirect::to('/manage-tin-tuc');
        }
        $data['image'] = '';
        DB::table('tbl_tintuc')->insert($data);
        Session::put('message_tintuc', 'Tạo thông tin thất bại');
        return Redirect::to('/manage-tin-tuc');
    }

    public function delete_baiviet($id_bai)
    {
        $this->AuthLogin();
        DB::table('tbl_tintuc')->where('id_baiviet', $id_bai)->delete();
        Session::put('message_tintuc', 'Xóa thành công');
        return Redirect::to('/manage-tin-tuc');
    }

    // đi đến trang chỉnh sửa
    public function edit_baiviet($id_bai)
    {
        $this->AuthLogin();
        $update_tintuc = DB::table('tbl_tintuc')->where('id_baiviet', $id_bai)->get();
        $manager_tintuc = view('admin.update_tintuc')->with('update_tintuc', $update_tintuc);
        return view('admin_layout')->with('admin.update_tintuc', $manager_tintuc);
    }

    public function update_tintuc(Request $request, $id_bai)
    {
        $this->AuthLogin();
        $data = array();
        $data['ten_bai_viet'] = $request->ten_bai_viet;
        $data['noi_dung_ngan'] = $request->noi_dung_ngan;
        $data['link'] = $request->link;

        $get_image  = $request->file('image');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(1000, 1999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/pacakgeimages', $new_image);
            $data['image'] = $new_image;

            DB::table('tbl_tintuc')->where('id_baiviet', $id_bai)->update($data);
            Session::put('message_tintuc', 'Tạo thông tin thành công');
            return Redirect::to('/manage-tin-tuc');
        }
        DB::table('tbl_tintuc')->where('id_baiviet', $id_bai)->update($data);
        Session::put('message_tintuc', 'Tạo thông tin thất bại');
        return Redirect::to('/manage-tin-tuc');
    }
}
