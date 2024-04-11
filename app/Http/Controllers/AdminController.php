<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Product;
use App\ProductType;

use App\Cart;
use Session;

use App\User;
use App\BillDetail;
use App\Bill;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use  Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getLogin(){
    	return view('admin.login');
    }

    public function postLogin(Request $req){
    	if (Auth::guard('admin')->attempt(['name'=>$req->name,'password'=>$req->password])) {
            $ProductType = ProductType::all();
            $Product = Product::all();
            $Bill = Bill::all();
            $User = User::all();
    		return view('admin1',compact('ProductType','Product','Bill','User'));
    	} else {
    		return redirect()->route('trang-chu');
    	}
    }
    public function getAdmin(){
    	$ProductType = ProductType::all();
            $Product = Product::all();
            $Bill = Bill::all();
            $User = User::all();
    	return view('admin1',compact('ProductType','Product','Bill','User'));
    }
    public function getOut(){
    	return redirect()->route('trang-chu');
    }
    public function getlogOut(){
    	Auth::guard('admin')->logout();
    	return redirect()->route('lgadmin');
    }
    public function getBill(){
    	$bill = Bill::all();
        return view('cnadmin.bill',compact('bill'));
    }
    public function getBills($num){
    	$bill = Bill::all()->where('id_status',$num);
        return view('cnadmin.bills',compact('bill','num'));
    }
    public function getBills2($num){
    	$bill = Bill::all()->where('id_status',$num);
        return view('cnadmin.bills2',compact('bill','num'));
    }
     public function getBilld($num){
    	$bill = BillDetail::where('id_bill',$num)
    	        ->join('products', 'bill_detail.id_product', '=', 'products.id')
    	        ->get();
        return view('cnadmin.billd',compact('bill','num'));
    }
    
    public function changest(Request $req){
        $data=array('id_status'=>1,'status'=>"Đang giao hàng");
        Bill::where('id', $req->id)->update($data);
        return redirect()->route('bills2',1);
    }
    public function changest2(Request $req){
        $data=array('id_status'=>2,'status'=>"Đã giao hàng");
        Bill::where('id', $req->id)->update($data);
        return redirect()->route('bills',2);
    }
    public function getcategory(){
    	$type = ProductType::all();
        return view('cnadmin.category',compact('type'));
    }
    public function ccate1(Request $req){
    	$data=array('name'=>$req->input('name'));
        ProductType::where('tid', $req->id)->update($data);
        return redirect()->back();
    }
    public function ccate2(Request $req){
    	DB::delete('DELETE FROM products WHERE id_type = ?', [$req->id]);
        DB::delete('DELETE FROM type_products WHERE tid = ?', [$req->id]);
        return redirect()->back();
    }
    public function addcate(Request $req){
    	$pdt = new ProductType;
    	$pdt->name = $req->name;
        $pdt->save();
        return redirect()->back();
    }
    public function qtaikhoan(){
    	$account = User::all();
    	return view('cnadmin.maccount',compact('account'));
    }
    public function daccount($num){
    	DB::delete('DELETE FROM bills WHERE id_customer = ?', [$num]);
        DB::delete('DELETE FROM users WHERE id = ?', [$num]);
        return redirect()->back();
    }
    public function changesta($num){
    	$user = User::where('id',$num)->get();
    	foreach ($user as $u): {
    		if ($u->status==0) {
            DB::update('update users set status = ? where id = ?',[1,$num]);
    	    }else{
            DB::update('update users set status = ? where id = ?',[0,$num]);
    	    }
    	}endforeach;
    	
        return redirect()->back();
    }

    public function lproduct(){
    	$product = Product::all();
        return view('cnadmin.product',compact('product'));
    }
     public function deproduct($num){
    	DB::delete('DELETE FROM products WHERE id = ?', [$num]);
        return redirect()->back();
    }
    public function qcomment(){
        $comment = Comment::all();
        return view('cnadmin.comment',compact('comment'));
    }
    public function decomment(Request $req){
        DB::delete('DELETE FROM comment WHERE id = ?', [$req->input('id')]);
        return redirect()->back();
    }

}

