<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class HomeController extends Controller
{
    public function index()
    {
        $all_tour = DB::table('tbl_tourpackages')->orderBy('package_id', 'desc')
            ->limit(6)
            ->get();
        $all_tour1 = DB::table('tbl_tourpackages')
            ->limit(6)
            ->get();
        $all_gallery = DB::table('tbl_gallery')->orderBy('gallery_id', 'desc')->get();
        return view('pages.home')->with('all_tour', $all_tour)->with('all_gallery', $all_gallery)->with('all_tour1', $all_tour1);
    }

    public function search(Request $request)
    {
        $keywords = $request->keywords_submit;
        $search_product = DB::table('tbl_tourpackages')->where('package_name', 'like', '%' . $keywords . '%')->get();
        return view('pages.tour.search')->with('search_product', $search_product);
    }

    public function index1()
    {
        $all_gallery = DB::table('tbl_gallery')->orderBy('gallery_id', 'desc')->get();
        return view('pages.home')->with('all_gallery', $all_gallery);
    }

    public function y_kien(Request $request)
    {
        $data = array();
        $data['email'] = Session::get('email');
        $data['chu_de'] = $request->issue;
        $data['noi_dung'] = $request->noi_dung;
        $data['status'] = 1;

        DB::table('tbl_ykien')->insert($data);
        Session::put('ykien_message', 'Gửi thông tin thành công');
        return Redirect::to('/lien-he');
    }

    public function gioi_thieu()
    {
        return view('pages.gioi-thieu.gioi_thieu');
    }
}
