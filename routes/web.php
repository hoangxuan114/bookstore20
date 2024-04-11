<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('/index',['as'=>'trang-chu',
    'uses'=>'PageController@getIndex',
]);
Route::get('/',['as'=>'trang-chu',
    'uses'=>'PageController@getIndex',
]);
Route::get('/index',['as'=>'trang-chu',
    'uses'=>'PageController@getIndex',
]);
Route::get('/product',['as'=>'sanpham',
    'uses'=>'PageController@getProduct',
]);

Route::get('/category/{num}', [
    'as' => 'dmsanpham',
    'uses' => 'PageController@getCategory',
]);
//test
Route::get('/ct/{num}', function ($num) {
    return redirect()->route('dmsanpham',['num' => $num]);
});

Route::get('/detail/{num}',['as'=>'chitietsp',
    'uses'=>'PageController@getDetail',
]);
Route::get('/dt/{num}', function ($num) {
    return redirect()->route('chitietsp',['num' => $num]);
});

Route::get('addtocart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart',
]);

Route::post('addtocartM/{id}',[
    'as'=>'themgiohangM',
    'uses'=>'PageController@getAddtoCartM',
]);

Route::post('addtocartMs/{id}',[
    'as'=>'themgiohangMs',
    'uses'=>'PageController@getAddtoCartMs',
]);

Route::get('deletetocart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDeletetoCart',
]);

Route::get('/about',['as'=>'gioithieu',
    'uses'=>'PageController@getAbout',
]);
Route::get('/contact',['as'=>'lienhe',
    'uses'=>'PageController@getContact',
]);

Route::get('/checkout',['as'=>'thanhtoan',
    'uses'=>'PageController@getCheckout',
]);

Route::post('/dathang',['as'=>'muahang',
    'uses'=>'PageController@getBuy',
]);

Route::get('/login',['as'=>'dangnhap',
    'uses'=>'PageController@getLogin',
]);

Route::post('/plogin',['as'=>'postdangnhap',
    'uses'=>'PageController@postLogin',
]);

Route::get('/register',['as'=>'dangky',
    'uses'=>'PageController@getRegister',
]);

Route::post('/pregister',['as'=>'postdangky',
    'uses'=>'PageController@postRegister',
]);

Route::get('/logout',['as'=>'dangxuat',
    'uses'=>'PageController@getLogoutu',
]);

Route::post('/timkiem',['as'=>'search',
    'uses'=>'PageController@getFind',
]);

Route::get('/edaccount',['as'=>'edac',
    'uses'=>'PageController@getEditAccount',
]);

Route::post('/ulogin',['as'=>'updatein',
    'uses'=>'PageController@getUpdatein',
]);

Route::get('/billdetail/{id}',['as'=>'chitietdon',
    'uses'=>'PageController@getBillDetail',
]);


Route::get('/alogin',['as'=>'lgadmin',
    'uses'=>'AdminController@getLogin',
]);

Route::get('/admin/dashboard',['as'=>'lgadmin',
    'uses'=>'AdminController@getOut',
]);

Route::post('/admin/dashboard',['as'=>'dangnhapad',
    'uses'=>'AdminController@postLogin',
]);

Route::get('/admin/dashboard',['as'=>'getAdmin',
    'uses'=>'AdminController@getAdmin',
]);

Route::get('/admin/logout',['as'=>'logOut',
    'uses'=>'AdminController@getlogOut',
]);


Route::post('/sendcomment',['as'=>'sendcm',
    'uses'=>'PageController@sendcomment',
]);


Route::group(['middleware' => ['admin']], function () {

   Route::get('/admin/bill',['as'=>'bill',
    'uses'=>'AdminController@getBill',
]);
   Route::get('/admin/bills/{num}',['as'=>'bills',
    'uses'=>'AdminController@getBills',
]);
   Route::get('/admin/bills2/{num}',['as'=>'bills2',
    'uses'=>'AdminController@getBills2',
]);
   Route::get('/admin/billd/{num}',['as'=>'billd',
    'uses'=>'AdminController@getBilld',
]);
   
   Route::post('/admin/billz',['as'=>'changest',
    'uses'=>'AdminController@changest',
]);
   Route::post('/admin/billz2',['as'=>'changest2',
    'uses'=>'AdminController@changest2',
]);
   Route::get('/admin/category',['as'=>'danhmuc',
    'uses'=>'AdminController@getcategory',
]);
   Route::post('/admin/categoryz',['as'=>'ccate1',
    'uses'=>'AdminController@ccate1',
]);
   Route::post('/admin/categoryz2',['as'=>'ccate2',
    'uses'=>'AdminController@ccate2',
]);
   Route::post('/admin/addcategory',['as'=>'addcate',
    'uses'=>'AdminController@addcate',
]);
   Route::get('/admin/maccount',['as'=>'qtaikhoan',
    'uses'=>'AdminController@qtaikhoan',
]);
   Route::get('/admin/daccount/{num}',['as'=>'deaccount',
    'uses'=>'AdminController@daccount',
]);
   Route::get('/admin/changesta/{num}',['as'=>'changesta',
    'uses'=>'AdminController@changesta',
]);
   Route::get('/admin/lproduct',['as'=>'lproduct',
    'uses'=>'AdminController@lproduct',
]);
   Route::get('/admin/deproduct/{num}',['as'=>'deproduct',
    'uses'=>'AdminController@deproduct',
]);
   Route::get('/admin/comment',['as'=>'qcomment',
    'uses'=>'AdminController@qcomment',
]);
Route::post('/admin/decomment',['as'=>'decomment',
    'uses'=>'AdminController@decomment',
]);




});








