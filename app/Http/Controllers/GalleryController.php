<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
session_start();

class GalleryController extends Controller
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

    //hiển thị toàn bộ tour trong admin
    public function show_gallery()
    {
        $this->AuthLogin();
        $manage_gallery = DB::table('tbl_gallery')->orderBy('gallery_id', 'desc')->get();
        $manager_gallery = view('admin.manage_gallery')->with('manage_gallery', $manage_gallery);
        return view('admin_layout')->with('admin.manage_gallery', $manager_gallery);
    }

    public function create_gallery()
    {
        $this->AuthLogin();
        return view('admin.create-gallery');
    }

    public function save_gallery(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['location'] = $request->location;
        $data['location_infor'] = $request->location_infor;
        $data['gallery_mt1'] = $request->gallery_mt1;
        $data['gallery_mt2'] = $request->gallery_mt2;
        $data['gallery_mt3'] = $request->gallery_mt3;
        $data['image_gallery'] = $request->image_gallery;

        $get_image  = $request->file('image_gallery');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 1099) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/pacakgeimages', $new_image);
            $data['image_gallery'] = $new_image;

            DB::table('tbl_gallery')->insert($data);
            Session::put('gallery_message', 'Tạo thông tin thành công');
            return Redirect::to('/manage_gallery');
        }
        $data['image_gallery'] = '';
        DB::table('tbl_gallery')->insert($data);
        Session::put('gallery_message', 'Tạo thông tin thất bại');
        return Redirect::to('/manage_gallery');
    }

    // đi đến trang chỉnh sửa
    public function edit_gallery($gallery_id)
    {
        $this->AuthLogin();
        $update_gallery = DB::table('tbl_gallery')->where('gallery_id', $gallery_id)->get();
        $manager_gallery = view('admin.update_gallery')->with('update_gallery', $update_gallery);
        return view('admin_layout')->with('admin.update_gallery', $manager_gallery);
    }

    public function update_gallery(Request $request, $gallery_index)
    {
        $this->AuthLogin();
        $data = array();
        $data['location'] = $request->location;
        $data['location_infor'] = $request->location_infor;
        $data['gallery_mt1'] = $request->gallery_mt1;
        $data['gallery_mt2'] = $request->gallery_mt2;
        $data['gallery_mt3'] = $request->gallery_mt3;

        $get_image  = $request->file('image_gallery');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 1099) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/pacakgeimages', $new_image);
            $data['image_gallery'] = $new_image;

            DB::table('tbl_gallery')->where('gallery_id', $gallery_index)->update($data);
            Session::put('gallery_message', 'Tạo thông tin thành công');
            return Redirect::to('/manage_gallery');
        }
        DB::table('tbl_gallery')->where('gallery_id', $gallery_index)->update($data);
        Session::put('gallery_message', 'Tạo thông tin thất bại');
        return Redirect::to('/manage_gallery');
    }

    public function delete_gallery($gallery_index)
    {
        $this->AuthLogin();
        DB::table('tbl_gallery')->where('gallery_id', $gallery_index)->delete();
        Session::put('gallery_message', 'Xóa thành công');
        return Redirect::to('/manage_gallery');
    }

}
