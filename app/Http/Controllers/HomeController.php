<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use App\Models\Tokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;


class HomeController extends Controller
{

    public function index(){
        $product=Product::paginate(3);
        return view('home.userpage',compact('product'));
    }
    public function redirect(){

        $usertype=Auth::user()->usertype;

        $allearnings=Donations::query()->select("*")->get();
        $sum=0;
        foreach ($allearnings as &$a){
            $token=$a->token_used;
            $tkn=Tokens::query()->select("*")->where('token','=',$token)->get();
            if($a->user_id>=0){
                $user=User::query()->select('*')->where('id','=',$a->user_id)->get();
                $a->donator="Unknown";
                if(count($user)>0){
                    $a->donator=$user[0]->name;
                }
            }
            if(count($tkn)>0) {
                $a->value = $tkn[0]->value;
                $sum += $a->value;
            }
        }

        if($usertype==1){
            return view('admin.home')->with('earning',$sum)->with('allearnings',$allearnings);
        }
        else{
            $product=Product::paginate(3);
            return view('home.userpage',compact('product'));
        }
    }

    public function robotics(){
        $product=Product::paginate(3);
        return view('home.robotics',compact('product'));
    }

    public function product_details($id){
        $product=product::find($id);
        return view('home.product_details',compact('product'));
    }



    public function add_cart(Request $request ,$id){
        if(Auth::id()){

            $user=Auth::user();
            $product=product::find($id);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->roll=$user->roll;
            $cart->session=$user->session;
            $cart->user_id=$user->id;
            $cart->product_title=$product->title;
            $cart->price=$product->price * $request->quantity;
            $cart->image=$product->image;

            $cart->quantity=$request->quantity;

            $cart->Product_id=$product->id;
            $cart->save();
            return redirect()->back();

        }
        else{
            return redirect('login');

        }
    }

    public function show_cart(){

        if(Auth::id()){
            $id=Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();
            return view('home.show_cart',compact('cart'));
        }
        else{
            return redirect('login');
        }

    }

    public function remove_cart($id){
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function holder($id,$idd){
        $product=product::find($idd);
        $user=user::find($id);
        return view('home.holder',compact('user','product'));
    }

    public function apply($id){
        $cart=cart::find($id);
        $order=new order;
        $order->name=$cart->name;
        $order->email=$cart->email;
        $order->roll=$cart->roll;
        $order->session=$cart->session;
        $order->user_id=$cart->user_id;
        $order->product_title=$cart->product_title;

        $order->price=$cart->price;
        $order->image=$cart->image;

        $order->quantity=$cart->quantity;

        $order->product_id=$cart->Product_id;
        $cart->delete();
        $uid=Auth::user()->id;
        $cart=cart::where('user_id','=',$uid)->get();
        $order->save();
        return view('home.apply',compact('cart'));
    }

    public function contact(){

        return view('home.contact');
    }
    public function blog(){

        return view('home.blog');
    }


}
