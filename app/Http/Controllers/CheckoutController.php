<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Image;
use Cart;
session_start();

class CheckoutController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('adminid');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function login_checkout()
    {
        return view('pages.checkout.login_checkout');
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
        return redirect('/show-cart');
    }

    public function checkout()
    {
        return view('pages.checkout.show_checkout');
    }

    // admin - quan ly tour da dat
    public function manage_booking()
    {

        // $manage_packages = DB::table('tbl_booking')->orderBy('booking_id', 'desc')->get();
        // $manager_package = view('admin.manage_booking')->with('manage_packages', $manage_packages);
        // return view('admin_layout')->with('admin.manage_packages', $manager_package);
        $this->AuthLogin();
        $all_booking = DB::table('tbl_booking')
        ->join('tbl_user','tbl_booking.usid','=','tbl_user.usid')
        ->select('tbl_booking.*','tbl_user.name')
        ->orderBy('tbl_booking.booking_id', 'desc')->get();
        $manager_order = view('admin.manage-bookings')->with('all_booking', $all_booking);
        return view('admin_layout')->with('admin.manage_bookings_details', $manager_order);
    }

    public function view_booking($bookingId){
        $this->AuthLogin();
        $booking_by_id = DB::table('tbl_booking')
        ->join('tbl_user','tbl_booking.usid','=','tbl_user.usid')
        // ->join('tbl_booking','tbl_booking.usid','=','tbl_user.usid')
        ->join('tbl_order_details','tbl_booking.booking_id','=','tbl_order_details.booking_id')
        ->select('tbl_booking.*','tbl_user.*','tbl_order_details.*')->where('tbl_booking.booking_id', $bookingId)->get();
        // echo '<pre>';
        // print_r($booking_by_id);
        // echo '</pre>';
        $manager_order_by_id = view('admin.manage_booking_details')->with('booking_by_id', $booking_by_id);
        return view('admin_layout')->with('admin.manage_booking_details', $manager_order_by_id);
    }

    public function save_checkout_customer(Request $request)
    {
        // $package_id = DB::table('tbl_tourpackages')->get('package_id');
        // $email = DB::table('tbl_user')->get('usid');
        $email = $request->email_hidden;
        $fromdate = $request->fromdate_hidden;
        $todate = $request->todate_hidden;
        $note = $request->note_hidden;
        $status = '1';

        //insert booking
        $data = array();

        $data['usid'] = Session::get('usid');
        $data['customer_name'] = $request->customer_name;
        $data['email'] = $email;
        $data['fromdate'] = $fromdate;
        $data['todate'] = $todate;
        $data['note'] = $note;
       
        $data['buy_in_date'] = $request->buy_date;
        $data['package_name'] = $request->booking_name;
        $data['total'] = $request->booking_money;
        $data['status'] = $status;

        $booking_id = DB::table('tbl_booking')->insertGetId($data);
        Session::put('booking_id', $booking_id);
        Session::put('message4', 'Thanh toán thành công');

        // inser payment
        $data2 = array();
        
        $payment_option = 'visa';
        $data2['payment_method'] = $payment_option;
        $data2['payment_status'] = $status;

        $payment_id = DB::table('tbl_payment')->insertGetId($data2);

        //insert order details
        $content = Cart::content();
        foreach($content as $v_content){
            $data3['booking_id'] = $booking_id;
            $data3['package_id'] = $v_content->id;
            $data3['package_name'] = $v_content->name;
            $data3['package_price'] = $v_content->price;
            
            DB::table('tbl_order_details')->insert($data3);
        }

        if($data2['payment_method'] =='visa'){
            Cart::destroy();
            return view('pages.checkout.thanks');
        }
        // $data3 = array();
        // return Redirect::to('/show-cart');
    }

    public function payment()
    {
        return view('pages.checkout.show_checkout');
    }
}
