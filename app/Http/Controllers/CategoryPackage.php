<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Image;

session_start();

class CategoryPackage extends Controller
{
    // lấy thông tin đăng nhập
    public function AuthLogin(){
        $admin_id = Session::get('adminid');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    //hiển thị toàn bộ tour trong admin
    public function show_packages()
    {
        $this->AuthLogin();
        $manage_packages = DB::table('tbl_tourpackages')->orderBy('package_id', 'desc')->get();
        $manager_package = view('admin.manage_packages')->with('manage_packages', $manage_packages);
        return view('admin_layout')->with('admin.manage_packages', $manager_package);
    }

    // đi đến trang thêm tour
    public function create_packages()
    {
        $this->AuthLogin();
        return view('admin.create-package');
    }

    // thêm tour
    public function save_package(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['package_name'] = $request->package_name;
        $data['package_type'] = $request->package_type;
        $data['package_location'] = $request->package_location;
        $data['package_price'] = $request->package_price;
        $data['package_features'] = $request->package_mota;
        $data['package_details'] = $request->package_details;
        $data['package_image'] = $request->package_image;
        $data['package_image1'] = $request->package_image1;
        $data['package_image2'] = $request->package_image2;
        $data['package_image3'] = $request->package_image3;
        $data['package_image4'] = $request->package_image4;

        $get_image  = $request->file('package_image');
        $get_image1 = $request->file('package_image1');
        $get_image2 = $request->file('package_image2');
        $get_image3 = $request->file('package_image3');
        $get_image4 = $request->file('package_image4');

        $data['mota1'] = $request->mota1;
        $data['mota2'] = $request->mota2;
        $data['mota3'] = $request->mota3;
        $data['mota4'] = $request->mota4;

        if ($get_image && $get_image1 && $get_image2 && $get_image3 && $get_image4) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 1099) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/pacakgeimages', $new_image);
            $data['package_image'] = $new_image;

            $get_name_image1 = $get_image1->getClientOriginalExtension();
            $name_image1 = current(explode('.', $get_name_image1));
            $new_image1 = $name_image1 . rand(0, 1099) . '.' . $get_image1->getClientOriginalExtension();
            $get_image1->move('public/backend/pacakgeimages', $new_image1);
            $data['package_image1'] = $new_image1;

            $get_name_image2 = $get_image2->getClientOriginalExtension();
            $name_image2 = current(explode('.', $get_name_image2));
            $new_image2 = $name_image2 . rand(0, 1099) . '.' . $get_image2->getClientOriginalExtension();
            $get_image2->move('public/backend/pacakgeimages', $new_image2);
            $data['package_image2'] = $new_image2;

            $get_name_image3 = $get_image3->getClientOriginalExtension();
            $name_image3 = current(explode('.', $get_name_image3));
            $new_image3 = $name_image3 . rand(0, 1099) . '.' . $get_image3->getClientOriginalExtension();
            $get_image3->move('public/backend/pacakgeimages', $new_image3);
            $data['package_image3'] = $new_image3;

            $get_name_image4 = $get_image4->getClientOriginalExtension();
            $name_image4 = current(explode('.', $get_name_image4));
            $new_image4 = $name_image4 . rand(0, 1099) . '.' . $get_image4->getClientOriginalExtension();
            $get_image4->move('public/backend/pacakgeimages', $new_image4);
            $data['package_image4'] = $new_image4;

            DB::table('tbl_tourpackages')->insert($data);
            Session::put('message', 'Tạo tour thành công');
            return Redirect::to('/danhsachtour');
        }
        $data['package_image'] = '';
        $data['package_image1'] = '';
        $data['package_image2'] = '';
        $data['package_image3'] = '';
        $data['package_image4'] = '';
        DB::table('tbl_tourpackages')->insert($data);
        Session::put('message', 'Tạo tour thất bại');
        return Redirect::to('/danhsachtour');
    }

    // đi đến trang chỉnh sửa
    public function edit_packages($tour_id)
    {
        $this->AuthLogin();
        $update_packages = DB::table('tbl_tourpackages')->where('package_id', $tour_id)->get();
        $manager_package = view('admin.update_package')->with('update_packages', $update_packages);
        return view('admin_layout')->with('admin.update_package', $manager_package);
    }

    public function delete_packages($tour_id)
    {
        $this->AuthLogin();
        DB::table('tbl_tourpackages')->where('package_id', $tour_id)->delete();
        Session::put('message', 'Xóa thành công');
        return Redirect::to('/danhsachtour');
    }

    public function update_packages(Request $request, $tour_id)
    {
        $this->AuthLogin();
        $data = array();
        $data['package_name'] = $request->package_name;
        $data['package_type'] = $request->package_type;
        $data['package_location'] = $request->package_location;
        $data['package_price'] = $request->package_price;
        $data['package_features'] = $request->package_mota;
        $data['package_details'] = $request->package_details;
        $data['mota1'] = $request->mota1;
        $data['mota2'] = $request->mota2;
        $data['mota3'] = $request->mota3;
        $data['mota4'] = $request->mota4;

        $get_image  = $request->file('package_image');
        $get_image1 = $request->file('package_image1');
        $get_image2 = $request->file('package_image2');
        $get_image3 = $request->file('package_image3');
        $get_image4 = $request->file('package_image4');

        if ($get_image && $get_image1 && $get_image2 && $get_image3 && $get_image4) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 1099) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/pacakgeimages', $new_image);
            $data['package_image'] = $new_image;

            $get_name_image1 = $get_image1->getClientOriginalExtension();
            $name_image1 = current(explode('.', $get_name_image1));
            $new_image1 = $name_image1 . rand(0, 1099) . '.' . $get_image1->getClientOriginalExtension();
            $get_image1->move('public/backend/pacakgeimages', $new_image1);
            $data['package_image1'] = $new_image1;

            $get_name_image2 = $get_image2->getClientOriginalExtension();
            $name_image2 = current(explode('.', $get_name_image2));
            $new_image2 = $name_image2 . rand(0, 1099) . '.' . $get_image2->getClientOriginalExtension();
            $get_image2->move('public/backend/pacakgeimages', $new_image2);
            $data['package_image2'] = $new_image2;

            $get_name_image3 = $get_image3->getClientOriginalExtension();
            $name_image3 = current(explode('.', $get_name_image3));
            $new_image3 = $name_image3 . rand(0, 1099) . '.' . $get_image3->getClientOriginalExtension();
            $get_image3->move('public/backend/pacakgeimages', $new_image3);
            $data['package_image3'] = $new_image3;

            $get_name_image4 = $get_image4->getClientOriginalExtension();
            $name_image4 = current(explode('.', $get_name_image4));
            $new_image4 = $name_image4 . rand(0, 1099) . '.' . $get_image4->getClientOriginalExtension();
            $get_image4->move('public/backend/pacakgeimages', $new_image4);
            $data['package_image4'] = $new_image4;

            DB::table('tbl_tourpackages')->where('package_id', $tour_id)->update($data);
            Session::put('message', 'Cập nhật tour thành công');
            return Redirect::to('/danhsachtour');
        }

        DB::table('tbl_tourpackages')->where('package_id', $tour_id)->update($data);
        Session::put('message', 'Cập nhật thất bại');
        return Redirect::to('/danhsachtour');
    }

    public function edit_image_layout($tour_id)
    {
        $this->AuthLogin();
        $change_image_layout = DB::table('tbl_tourpackages')->where('package_id', $tour_id)->get();
        $manager_package = view('admin.change_image_packages')->with('update_image', $change_image_layout);
        return view('admin_layout')->with('admin.change_image_packages', $manager_package);
    }

    public function update_image_tour(Request $request, $tour_id)
    {
        $this->AuthLogin();
        $data = array();

        $get_image  = $request->file('package_image');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 1099) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/backend/pacakgeimages', $new_image);
            $data['package_image'] = $new_image;

            DB::table('tbl_tourpackages')->where('package_id', $tour_id)->update($data);
            Session::put('message', 'Cập nhật thành công');
            return Redirect::to('/danhsachtour');
        }

        DB::table('tbl_tourpackages')->where('package_id', $tour_id)->update($data);
        Session::put('message', 'Cập nhật thất bại');
        return Redirect::to('/danhsachtour');
    }

    //End Admin page

    public function package_list()
    {
        $all_tour = DB::table('tbl_tourpackages')->orderBy('package_id', 'desc')->get();
        return view('pages.tour.package_list')->with('all_tour', $all_tour);
    }

    public function package_details($pkg_id)
    {
        $tour = DB::table('tbl_tourpackages')->where('package_id',$pkg_id)->get();
        return view('pages.tour.package_details')->with('package_details', $tour);
    }

    
}
