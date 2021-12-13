<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Cart;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;

session_start();
class CartController extends Controller
{
    public function show_cart()
    {
        $all_tour = DB::table('tbl_tourpackages')->orderBy('package_id', 'desc')->get();
        return view('pages.cart.show_cart')->with('all_tour', $all_tour);
    }

    public function save_cart(Request $request)
    {

        $productId = $request->id_hidden;
        $fromdate = $request->fromdate;
        $todate = $request->todate;
        $time = $request->time_hidden;
        $comment = $request->comment;
        $product_infor = DB::table('tbl_tourpackages')->where('package_id', $productId)->first();
        $status = 0;
        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);

        $quantity = 1;
        $data['id'] = $product_infor->package_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_infor->package_name;
        $data['price'] = $product_infor->package_price;
        $data['weight'] = $product_infor->package_price;
        $data['options']['location'] = $product_infor->package_location;
        $data['options']['fromdate'] = $fromdate;
        $data['options']['todate'] = $todate;
        $data['options']['time'] = $time;
        $data['options']['comment'] = $comment;
        $data['options']['status'] = $status;

        Cart::add($data);
        Cart::setGlobalTax(15);
        return Redirect::to('/show-cart');
        // return view('pages.cart.show_cart');
    }

    // public function add_cart(Request $request)
    // {
    //     $data = array();

    //     // $package_id = DB::table('tbl_tourpackages')->get('package_id');
    //     // $email = DB::table('tbl_user')->get('usid');
    //     $package_id = $request->id_hidden;
	//     $email = $request->email_hidden;
    //     $status = 0;
        
    //     $data['package_id'] = $package_id;
    //     $data['email'] = $email;
    //     $data['fromdate'] = $request->fromdate;
    //     $data['todate'] = $request->todate;
    //     $data['note'] = $request->comment;
    //     $data['status'] = $status;

    //     DB::table('tbl_booking')->insert($data);

    //     Session::put('message3', 'Đặt thành công');
    //     return Redirect::to('/show-cart');
    // }

    public function delete_to_cart($rowId)
    {
        Cart::update($rowId, 0);
        return Redirect::to('/show-cart');
    }
}
