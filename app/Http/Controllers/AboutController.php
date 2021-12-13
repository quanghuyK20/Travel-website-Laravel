<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
session_start();

class AboutController extends Controller
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

    public function gioi_thieu()
    {
        $all_infor = DB::table('tbl_gioithieu')->orderBy('gtid', 'desc')->get();
        return view('pages.gioi-thieu.gioi_thieu')->with('all_infor', $all_infor);
    }

    public function show_about()
    {
        $this->AuthLogin();
        $manage_about = DB::table('tbl_gioithieu')->orderBy('gtid', 'desc')->get();
        $manager_about = view('admin.manage-about')->with('manage_about', $manage_about);
        return view('admin_layout')->with('admin.manage-about', $manager_about);
    }

    public function create_about()
    {
        $this->AuthLogin();
        return view('admin.create_about');
    }

    public function save_thong_tin(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['tieu_de'] = $request->tieu_de;
        $data['noi_dung'] = $request->noi_dung;
        $data['image_gt'] = $request->image_gt;

        $get_image  = $request->file('image_gt');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(1099, 1999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/pacakgeimages', $new_image);
            $data['image_gt'] = $new_image;

            DB::table('tbl_gioithieu')->insert($data);
            Session::put('about_message', 'Tạo thông tin thành công');
            return Redirect::to('/about');
        }
        $data['image_gt'] = '';
        DB::table('tbl_gioithieu')->insert($data);
        Session::put('about_message', 'Tạo thông tin thất bại');
        return Redirect::to('/about');
    }

    // đi đến trang chỉnh sửa
    public function edit_about($gt_index)
    {
        $this->AuthLogin();
        $update_infor = DB::table('tbl_gioithieu')->where('gtid', $gt_index)->get();
        $manager_infor = view('admin.update_about')->with('update_infor', $update_infor);
        return view('admin_layout')->with('admin.update_about', $manager_infor);
    }

    public function update_about(Request $request, $gt_index)
    {
        $this->AuthLogin();
        $data = array();

        $data['tieu_de'] = $request->tieu_de;
        $data['noi_dung'] = $request->noi_dung;

        $get_image  = $request->file('image_gt');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 1099) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/pacakgeimages', $new_image);
            $data['image_gt'] = $new_image;

            DB::table('tbl_gioithieu')->where('gtid', $gt_index)->update($data);
            Session::put('about_message', 'Update thành công');
            return Redirect::to('/about');
        }
        DB::table('tbl_gioithieu')->where('gtid', $gt_index)->update($data);
        Session::put('about_message', 'Update thất bại');
        return Redirect::to('/about');
    }

    public function delete_about($gt_index)
    {
        $this->AuthLogin();
        DB::table('tbl_gioithieu')->where('gtid', $gt_index)->delete();
        Session::put('about_message', 'Xóa thành công');
        return Redirect::to('/about');
    }
}
