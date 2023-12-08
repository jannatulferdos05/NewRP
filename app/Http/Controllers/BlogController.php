<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

use App\Models\Donations;
use App\Models\Tokens;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Showcase;


class BlogController extends Controller
{
    public function blog(){
        $blogs=Blog::all();

        return view('home.blog',compact('blogs'));
    }
    public function add_blog(Request $request){
        return view('home.add_blog');

    }
    public function save_blog(Request $request){
        if(Auth::id()){
            $blog=new blog;
            $blog->title=$request->title;
            //$user = Auth::user();
            $blog->description=$request->description;
            $blog->author=Auth::user()->name;
            $blog->extra=$request->category;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imagename = time() . '.' . $image->getClientOriginalExtension();

                $request->image->move('product', $imagename);
                $showcase->image = $imagename;

            }
            $blog->save();
            $blogs=Blog::all();
            //return view('home.blog',compact('blogs'))->with('message','Successfully added the Blog.');
            return redirect()->route('blogs')->with('message','Successfully posted');
            //return view('home.add_blog',compact('blog'));
        }
        else{
            return redirect('login');
        }
    }

}
