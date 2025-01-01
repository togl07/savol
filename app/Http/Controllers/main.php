<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\data;
use App\Models\judger;


function slice($massiv){

  $result=explode(" ",$massiv);
  $arr=[];
  $a=explode("-",$result[0]);
  foreach ($a as $key2) {
      $arr[]=intval($key2);
  }
  $a2=explode(":",$result[1]);
  foreach ($a2 as $key2) {
      $arr[]=intval($key2);
  }
  return $arr;
}

class main extends Controller
{
    public function asosiy(Request $rep){
      $mal=judger::all();
      $tugagan=[];
      $boshlangan=[];
      $boshlanmagan=[];
      foreach ($mal as $req) {
        date_default_timezone_set('Asia/Tashkent');
        $datetime=slice(date('Y-m-d H:i'));
        $start=slice($req->start);
        $end=slice($req->end);
        if ($datetime[0] === $start[0] && $datetime[1] === $start[1] && $datetime[2] === $start[2] &&
            (
                ($datetime[3] > $start[3] && $datetime[3] < $end[3]) ||
                ($datetime[3] === $start[3] && $datetime[4] >= $start[4]) ||
                ($datetime[3] === $end[3] && $datetime[4] <= $end[4])
            )) {
            $boshlangan[]=$req;
        }
        else if ($datetime[0] === $start[0] && $datetime[1] === $start[1] && $datetime[2] === $start[2] &&
            (
                ($datetime[3] < $start[3]) ||
                ($datetime[3] === $start[3] && $datetime[4] < $start[4])
            )) {
            $boshlanmagan[]=$req;
        }
        else{
            $tugagan[]=$req;
        }
      }
      $data=data::all();
      $items = data::orderBy("rate",'desc')->paginate(10);
      return view('main',['data'=>$data,"tugagan"=>array_reverse($tugagan),"boshlanmagan"=>array_reverse($boshlanmagan),"boshlangan"=>$boshlangan,"page"=>$rep->page],compact('items'));
    }
    public function about(){
      $data=judger::all();
      return view('about',["data"=>$data]);
    }
    public function comps(Request $rep){
      $mal=judger::all();
      $tugagan=[];
      $boshlangan=[];
      $boshlanmagan=[];
      foreach ($mal as $req) {
        date_default_timezone_set('Asia/Tashkent');
        $datetime=slice(date('Y-m-d H:i'));
        $start=slice($req->start);
        $end=slice($req->end);
        if ($datetime[0] === $start[0] && $datetime[1] === $start[1] && $datetime[2] === $start[2] &&
            (
                ($datetime[3] > $start[3] && $datetime[3] < $end[3]) ||
                ($datetime[3] === $start[3] && $datetime[4] >= $start[4]) ||
                ($datetime[3] === $end[3] && $datetime[4] <= $end[4])
            )) {
            $boshlangan[]=$req;
        }
        else if ($datetime[0] === $start[0] && $datetime[1] === $start[1] && $datetime[2] === $start[2] &&
            (
                ($datetime[3] < $start[3]) ||
                ($datetime[3] === $start[3] && $datetime[4] < $start[4])
            )) {
            $boshlanmagan[]=$req;
        }
        else{
            $tugagan[]=$req;
        }
      }
      return view("competitions",["tugagan"=>array_reverse($tugagan),"boshlanmagan"=>array_reverse($boshlanmagan),"boshlangan"=>$boshlangan,"page"=>$rep->page]);
    }
    public function compete($var){
      return $var;
    }
    public function signup(Request $req){
      $yes=$req->error;
      if(empty($yes)){
         return view('signup',['error'=>'']);
      } else{
        if($yes==="email_exists"){
          return view('signup',['error'=>"bu email orqali ro'yhatdan o'tilgan"]);
        }
        else if($yes==="username_exists"){
          return view('signup',['error'=>"Bu username orqali foydalanuvchi topildi"]);
        }
      }
    }
    public function createuser(Request $req)
    {
        $name = $req->name;
        $username = $req->username;
        $email = $req->email;
        $number = $req->number;
        $pass = $req->password;

        $userExists = data::where('username', $username)->exists();
        $emailExists = data::where('email', $email)->exists();

        if ($userExists) {
            return redirect("/signup?error=username_exists");
        }

        if ($emailExists) {
            return redirect("/signup?error=email_exists");
        }

        $user = new data;
        $user->name = $name;
        $user->username = $username;
        $user->email = $email;
        $user->number = $number;
        $user->password = $pass;
        $user->image = '/images/salom.png';
        $user->status = 'user';
        $user->rate = 1400;
        $user->save();

        return redirect("/signup");
    }
    public function data(Request $req){

    }
}
