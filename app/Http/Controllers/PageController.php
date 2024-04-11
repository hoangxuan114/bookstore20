<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slide;
use App\Product;
use App\ProductType;


use App\Cart;
use Illuminate\Support\Facades\Session;

use App\User;
use App\BillDetail;
use App\Bill;
use Illuminate\Support\Facades\Auth;            
use App\Comment;

use Carbon\Carbon;           
class PageController extends Controller
{
    
    public function getIndex(){
      $slide = Slide::all();
    	//return view('page.trangchu',['slide'=>$slide]);
      //$new_product = Product::where('new',1)->get();
      $product = Product::paginate(8);
      $pran = Product::inRandomOrder()
               ->limit(3)->get();
      $psale = Product::orderByRaw('unit_price - promotion_price DESC')
               ->limit(3)->get();
      
      //dd($product);
      //dung dc dd() de in mang thu dc
      //dd($new_product);
      return view('page.trangchu',compact('slide','product','pran','psale'));
    }
     public function getProduct(){
      $product = Product::paginate(6);
    	return view('page.loai_sanpham',compact('product'));
    }

     public function getDetail($num){
      $product = Product::where('products.id',$num)
               ->join('type_products', 'products.id_type', '=', 'type_products.tid')
               ->get();
      $comment = Comment::where('id_product',$num)
                 ->join('users','comment.id_customer','=','users.id')
                 ->get();
    	return view('page.chitietsp',compact('product','comment'));
    }

      public function getCategory($num){
      $product = Product::where('id_type',$num)->paginate(3);
      return view('page.danhmucsp',compact('product'));
    }

     public function getAddtoCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return back()
                ->with('success','Đã thêm sản phẩm vào giỏ hàng !');
     }

       public function getAddtoCartM(Request $req,$id){
        $num = $req->input('quantity');
           $product = Product::find($id);
           $oldCart = Session('cart')?Session::get('cart'):null;
           $cart = new Cart($oldCart);
           $cart->addM($num,$product,$id);
           $req->session()->put('cart',$cart);
           return back()
                ->with('success','Đã thêm sản phẩm vào giỏ hàng !');
     }

      public function getDeletetoCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items)>0) {
          Session::put('cart',$cart);
        }
        else{
          Session::forget('cart');
        }
        
        return back()
                ->with('success','Đã xóa sản phẩm khỏi giỏ hàng !');
     }

     public function getAddtoCartMs(Request $req,$id){

           $oldCart = Session::has('cart')?Session::get('cart'):null;
           $cart = new Cart($oldCart);
           $cart->removeItem($id);
           if (count($cart->items)>0) {
           Session::put('cart',$cart);
           }
           else{
           Session::forget('cart');
           }

           $num = $req->input('quantity');
           $product = Product::find($id);
           $oldCart = Session('cart')?Session::get('cart'):null;
           $cart = new Cart($oldCart);
           $cart->addM($num,$product,$id);
           $req->session()->put('cart',$cart);
           return back()
                ->with('success','Đã cập nhật giỏ hàng !');
     }
     
     public function getBuy(Request $req){
        $cart=Session::get('cart');

        $bill = new Bill;
        $bill->id_customer = Auth::user()->id;
        $bill->date_order = Carbon::now('Asia/Ho_Chi_Minh');
        $bill->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->input('payment');
        $bill->note = $req->input('postcode');
        $bill->save();

        foreach (Session::get('cart')->items as $product): {
          $bill_detail = new BillDetail;
          $bill_detail->id_bill = $bill->id;
          $bill_detail->quantity = $product['qty'];
          $bill_detail->unit_price = ($product['price']/$product['qty']);
          $bill_detail->id_product = $product['item']['id'];
          $bill_detail->save();
        }
        endforeach;
        
        Session::forget('cart');
        return redirect()->route('trang-chu')
                ->with('success','Đặt hàng thành công');;
        
     }
     
      public function getAbout(){
    	return view('page.about');
    }
    public function getContact(){
      return view('page.contact');
    }
    public function getCheckout(){
      if (Auth::check()) {
        return view('page.checkout');
      } else {
        return back()
                ->with('fail','Vui lòng đăng nhập');
      }
      
     
    }

    public function getLogin(){
      return view('page.dangnhap');
    }

    public function postLogin(Request $req){
      if (Auth::attempt(['email'=>$req->email,'password'=>$req->password])) {
        if (Auth::user()->status==0) {
            return redirect()->route('trang-chu')
                ->with('success','Đăng nhập thành công');
        }else{
            return back()
                ->with('fail','Tài khoản chưa được duyệt');
        } 
      }
      else {
        return back()
                ->with('fail','Đăng nhập không thành công');
        }
    }

    public function getRegister(){
      return view('page.dangky');
    }
    
    public function postRegister(Request $req){
        $input = $req->all();

        $req->validate([
            'email' => 'unique:users,email',
            'telephone' => 'required|min:10|numeric',
            'password' => 'required|min:6|max:20',
            'password2' => 'same:password',
        ]);
        
        $u = new User;
        $u->full_name = $req->input('name');
        $u->email = $req->input('email');
        $u->password = bcrypt($req->input('password'));
        $u->phone = $req->input('telephone');
        $u->address = $req->input('address');

        $u->save();

        return back()
                ->with('success','Đăng ký thành công');
    }

    public function getLogoutu(){
      Auth::logout();
      return redirect()->route('trang-chu');
    }

    public function getFind(Request $req)
    {
        $keyword = $req->input('key');
    
        $products = Product::where(function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('author', 'LIKE', '%' . $keyword . '%')
                ->orWhere('description', 'LIKE', '%' . $keyword . '%')
                ->orWhere('promotion_price', 'LIKE', '%' . $keyword . '%');
        })->paginate(3);
    
        if ($products->count() > 0) {
            return view('page.find', compact('products'));
        } else {
            return back()->with('fail', 'Không tìm thấy kết quả');
        }
    }
    
    public function getEditAccount(){
      if (Auth::check()) {
        $bill = Bill::where('id_customer',Auth::user()->id)
            ->orderBy('id','asc')->get();

        return view('page.account',compact('bill'));
      } else {
        return redirect()->route('trang-chu')
                ->with('fail','Vui lòng đăng nhập');
      }
    }

    public function getUpdatein(Request $req){
       $data=array("full_name"=>$req->input('name'),"phone"=>$req->input('telephone'),"address"=>$req->input('address'));
       User::where('id',Auth::user()->id)->update($data);
       return back()
                ->with('success','Đã cập nhật thông tin thành công');
    }

    public function getBillDetail($id){
      if (Auth::check()) {
        $bill = BillDetail::where('id_bill',$id)
              ->join('products', 'bill_detail.id_product', '=', 'products.id')
              ->join('bills', 'bill_detail.id_bill', '=', 'bills.id')
              ->get();
        foreach ($bill as $b): {
          $i=$b->id_customer;
        }
        endforeach;
        if ($bill!=null&&($i==Auth::user()->id)) {
          return view('page.chitietdon',compact('bill','id'));
        } else {
          return redirect()->route('trang-chu')
                ->with('fail','Đơn hàng không được truy cập');
        }
      } else {
        return redirect()->route('trang-chu')
                ->with('fail','Vui lòng đăng nhập');
      }
    }


    public function sendcomment(Request $req){
      $comment = new Comment;
      $comment->id_product = $req->input('id_pd');
      $comment->id_customer = $req->input('id_us');
      $comment->comment = $req->input('comment');
      $comment->date = Carbon::now('Asia/Ho_Chi_Minh');
      $comment->save();
      return redirect()->back();
    }
}
