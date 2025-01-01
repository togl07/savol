<?php
namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class sorting extends Controller
{
    public function sorting(Request $req){
      if(empty($req->page)){
        return redirect("/profil?page=1");
      }
      else{
        $items=data::orderBy("rate",'desc')->paginate(11);
        return view("prfil",compact('items'),['page'=>$req->page]);
      }
    }
    public function login(Request $req){
      if(!$req->error){
        return view('login',['error'=>""]);
      }
      else{
        return view('login',['error'=>"login yoki username hato"]);
      }

    }
    public function enter(Request $req){
      $user=data::where('username',$req->username)->get();
      $userExists=data::where('username',$req->username)->exists();

      if(!$userExists){
        return redirect('login?error=salom');
      }
      else if($user[0]->username === $req->username && $user[0]->password === $req->password){
        Session::put('username',$user[0]->username);
        Session::put('status',$user[0]->status);
        $value=session("username");
        return redirect('/');
      }
      else{
        return redirect('login?error=salom');
      }
    }
}
