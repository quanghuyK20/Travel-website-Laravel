<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryPackage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Cart;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Front end
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');
Route::post('/tim-kiem', 'App\Http\Controllers\HomeController@search');
Route::post('/y-kien', 'App\Http\Controllers\HomeController@y_kien');
Route::get('/gioi-thieu', 'App\Http\Controllers\AboutController@gioi_thieu');
Route::get('/chi-tiet-tour/{$tour_id}', 'App\Http\Controllers\CategoryPackage@details_tour');//trang chu
Route::get('/danh-sach-tour-du-lich', 'App\Http\Controllers\CategoryPackage@package_list');  //danh sach tour
Route::get('/chi-tiet-tour-du-lich/{pkg_id}', 'App\Http\Controllers\CategoryPackage@package_details'); //chi tiet tour
Route::get('/tin-tuc', 'App\Http\Controllers\NewsController@tin_tuc');//tin tức 
Route::get('/dich-vu', 'App\Http\Controllers\ServicesController@dich_vu');//dich vu 

//Dang nhap
Route::post('authlogin', [UserController::class, 'post_authlogin'])->name('loginuser');
//Dang ki
Route::post('/add-customer', 'App\Http\Controllers\UserController@add_customer');
//Dang xuat
Route::get('/logoutuser', [UserController::class, 'logout_user'])->name('logoutuser');

//cart
Route::get('/show-cart', 'App\Http\Controllers\CartController@show_cart');
Route::post('/save-cart', 'App\Http\Controllers\CartController@save_cart');
Route::get('/delete-to-cart/{rowId}', 'App\Http\Controllers\CartController@delete_to_cart');

//Checkout
Route::get('/login-checkout', 'App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@checkout');
Route::post('/add-customer', 'App\Http\Controllers\CheckoutController@add_customer');
Route::post('/save-checkout-customer', 'App\Http\Controllers\CheckoutController@save_checkout_customer');
Route::get('/payment', 'App\Http\Controllers\CheckoutController@payment');

//Đổi mật khẩu
Route::get('/change-password', 'App\Http\Controllers\UserController@show_change_password');

//Back end 
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');
Route::post('admin-dashboard', [AdminController::class, 'dashboard'])->name('login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

//tour
Route::get('/danhsachtour', 'App\Http\Controllers\CategoryPackage@show_packages');

//Them tour
Route::get('/themtour', 'App\Http\Controllers\CategoryPackage@create_packages');
Route::post('/create_tour', 'App\Http\Controllers\CategoryPackage@save_package');
// Route::post('/savepackage', [CategoryPackage::class, 'save_package'])->name('create_tour');

//update tour
Route::get('/edit_tour/{tour_id}', 'App\Http\Controllers\CategoryPackage@edit_packages');       // đi đến trang chỉnh sửa lấy theo id 
Route::post('/update_tour/{tour_id}', [CategoryPackage::class, 'update_packages'])->name('update_tour');
Route::get('/edit_image_packages/{tour_id}', 'App\Http\Controllers\CategoryPackage@edit_image_layout');
Route::post('/update_image_packges/{tour_id}', [CategoryPackage::class, 'update_image_tour'])->name('update_image_packages');

//quản lý tour - xóa tour
Route::get('/deletetour/{tour_id}', 'App\Http\Controllers\CategoryPackage@delete_packages');    //xóa tour, lấy index trên thanh địa chỉ

//booking
// Route::get('/bookings', 'App\Http\Controllers\AdminController@bookings');
Route::get('/manage-booking', 'App\Http\Controllers\CheckoutController@manage_booking');
Route::get('/view-booking/{bookingId}', 'App\Http\Controllers\CheckoutController@view_booking');

//quản lý tour gợi ý
Route::get('/manage_gallery', 'App\Http\Controllers\GalleryController@show_gallery');   //hiên hị toàn bộ tour
Route::get('/create_gallery', 'App\Http\Controllers\GalleryController@create_gallery'); //đi đến trang thêm thông tin
Route::post('/create_infor', 'App\Http\Controllers\GalleryController@save_gallery');    //tạo tour
Route::get('/delete_gallery/{gallery_index}', 'App\Http\Controllers\GalleryController@delete_gallery'); //xóa  
Route::get('/edit_gallery/{gallery_index}', 'App\Http\Controllers\GalleryController@edit_gallery');   // đi đến trang chỉnh sửa
Route::post('/update_gallery/{gallery_index}', 'App\Http\Controllers\GalleryController@update_gallery');    //chỉnh sửa thông tin
Route::post('/update_image_gallery/{gallery_index}', 'App\Http\Controllers\GalleryController@update_gallery_infor');

//quản lý liên hệ
Route::get('/lien-he', 'App\Http\Controllers\ContactController@show_contact');
Route::post('/contact-us', 'App\Http\Controllers\ContactController@contact_us');    //gửi thông tin liên hệ

//Đổi mật khẩu
Route::post('/change_pass', 'App\Http\Controllers\UserController@change_password');

//Quản lý thông tin giới thiệu
Route::get('/about', 'App\Http\Controllers\AboutController@show_about');
Route::get('/them-thong-tin', 'App\Http\Controllers\AboutController@create_about');
Route::post('/them_thong_tin', 'App\Http\Controllers\AboutController@save_thong_tin');
Route::get('/delete_gt/{gt_index}', 'App\Http\Controllers\AboutController@delete_about'); //xóa  
Route::get('/edit_about/{gt_index}', 'App\Http\Controllers\AboutController@edit_about');  
Route::post('/update_about_infor/{gt_index}', 'App\Http\Controllers\AboutController@update_about');

//tin tức 
Route::get('/manage-tin-tuc', 'App\Http\Controllers\NewsController@manage_tin_tuc');
Route::get('/create-tin-tuc', 'App\Http\Controllers\NewsController@create_tintuc');
Route::post('/create_tintuc', 'App\Http\Controllers\NewsController@save_tintuc');
Route::get('/delete_bai_viet/{id_bai}', 'App\Http\Controllers\NewsController@delete_baiviet'); 
Route::get('/edit_bai_viet/{id_bai}', 'App\Http\Controllers\NewsController@edit_baiviet');   // đi đến trang chỉnh sửa
Route::post('/update_tintuc/{id_bai}', 'App\Http\Controllers\NewsController@update_tintuc');

//dịch vụ
Route::get('/manage_dichvu', 'App\Http\Controllers\ServicesController@show_services');//dich vu 
Route::get('/create-service', 'App\Http\Controllers\ServicesController@create_service');//dich vu 
Route::post('/save-dichvu', 'App\Http\Controllers\ServicesController@save_dichvu');
Route::get('/edit-dichvu/{dv_index}', 'App\Http\Controllers\ServicesController@edit_dichvu');  
Route::post('/update-dichvu/{dv_index}', 'App\Http\Controllers\ServicesController@update_dichvu');
Route::get('/delete-dichvu/{dv_index}', 'App\Http\Controllers\ServicesController@delete_dichvu'); 

Route::get('/yeucau', 'App\Http\Controllers\AdminController@enquires');
Route::get('/manageusers', 'App\Http\Controllers\AdminController@show_users');
Route::get('/ykienkhachhang', 'App\Http\Controllers\AdminController@show_issues');


