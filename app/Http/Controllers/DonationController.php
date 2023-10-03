<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use App\Models\Tokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TheSeer\Tokenizer\Token;

class DonationController extends Controller
{
    public function index(){
        $alltokens=Tokens::query()->select("*")->where('is_used','=',0)->get();

        $allearnings=Donations::query()->select("*")->get();
        $sum=0;
        foreach ($allearnings as &$a){
            $token=$a->token_used;
            $tkn=Tokens::query()->select("*")->where('token','=',$token)->get();
            if(count($tkn)>0) {
                $a->value = $tkn[0]->value;
                $sum += $a->value;
            }
        }
        return view('admin.dontations')->with('tokens',$alltokens)->with('total',$sum);
    }

    public function createtoken(Request $request){
        $count=$request->get('count');
        for($i=0;$i<$count;$i++){
            $token=new Tokens();
            $token->token=strtoupper(uniqid());
            $token->is_used=false;
            $token->save();
        }
        return redirect()->route('donations')->with('message',$count." token created!");
    }

    public function delete($id){
        Tokens::query()->select("*")->where('id','=',$id)->delete();
        return redirect()->route('donations')->with('message','Item deleted!');
    }

    public function makeDonate(){
        $token=\request()->post()['token'];
        $uid=-1;
        $t=Tokens::query()->select("*")->where('token','=',$token)->where('is_used','=',0)->get();
        if(count($t)){
            $t[0]->is_used=true;
            $t[0]->save();
            if(Auth::user()) $uid=Auth::user()->id;

            $donation=new Donations();
            $donation->user_id=$uid;
            $donation->token_used=$token;
            $donation->created_at=today();
            $donation->save();
            return redirect()->back()->with('message','Donation successful');
        }

        return redirect()->back()->with('message','invalid token');

    }
}
