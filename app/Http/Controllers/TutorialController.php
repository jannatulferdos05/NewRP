<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Donations;
use App\Models\Tokens;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Showcase;

class TutorialController extends Controller
{
    //

    public function tutorial(){


        $tutorials=Tutorial::all();


        return view('home.tutorial',compact('tutorials'));
    }

    public function add_tutorial(Request $request){
        return view('home.add_tutorial');

    }

  public function save_tutorial(Request $request){
      if(Auth::id()){

          $blog=new Tutorial;
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
          $blogs=Tutorial::all();

          //return view('home.blog',compact('blogs'))->with('message','Successfully added the Blog.');
          return redirect()->back()->with('message','Successfully posted');
          //return view('home.add_blog',compact('blog'));
      }
      else{
          return redirect('login');
      }
  }

}
