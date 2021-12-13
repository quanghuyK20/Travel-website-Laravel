<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function show_contact(){
        return view('pages.contact.contact');
    }

    public function contact_us(Request $request)
    {
        $data = array();
        $data['contact_name'] = $request->contact_name;
        $data['email'] = $request->email;
        $data['content'] = $request->content;
        $data['main_content'] = $request->main_content;
   
        $contactId = DB::table('tbl_contact')->insert($data);
        Session::put('contact_message', 'Gửi thông tin thành công');
        return Redirect::to('/lien-he');
    }
}
