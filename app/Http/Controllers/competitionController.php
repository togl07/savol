<?php

namespace App\Http\Controllers;
use App\Models\judger;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\problems;
//$uuid = Str::uuid();


class competitionController extends Controller
{

    public function judge(){
      return view('judge');
    }
    public function add_problem($comp_id){
      $author=judger::where('uuid',$comp_id)->get();
      return view("add_problem",["comp"=>$comp_id,'author'=>$author]);
    }
    public function create(Request $req){
      $r=judger::where("name",$req->statament)->exists();
      if($r){
        return redirect("/judge");
      }
      $cnt=count(judger::all());
      $res=new judger;
      $res->masala = session('username');
      $uuid = Str::uuid();
      $res->uuid = $uuid;
      $res->name=$req->statament;
      $res->short=$req->about;
      $res->start=$req->start;
      $res->end=$req->end;
      $res->save();
      return redirect("competitions/$uuid");
    }
    public function added(Request $req){
      return $req;
    }
    public function olimps(Request $req){
      $user=judger::where("masala",session('username'))->get();
      return view("comps",['user'=>$user]);
    }
    public function problematic(Request $req,$id)
    {
      $data=problems::where('olimp',$id)->get();
      //$data = problems::where("olimp",);
      return view("problematic",['data'=> $data,'uri'=>$id]);
    }
    public function add_problematic($id, $add){
      $data=problems::where('olimp',$id)->get();
      return view("add_problem",['id'=>$id,'add'=>$add,"len"=>count($data)+1]);
    }
    public function success(Request $req,$comp_id,$problem_id){
      $problem = new problems;
      $data=problems::where('olimp',$comp_id)->get();
      if(count($data)>$problem_id){
        $problem->masala = $problem_id;
        $problem->sharti=$req->latex;
        $problem->nechinchi=$problem_id;
        $problem->olimp=$comp_id;
        $problem->option1=$req->option1;
        $problem->option2=$req->option2;
        $problem->option3=$req->option3;
        $problem->correct=$req->true;
        $problem->save();
      }
      else{
        $problem_id = $problem_id-count($data);
        $problem = Problems::where('olimp', $comp_id)->where('masala', $problem_id)->first();
        $problem->masala = $problem_id;
        $problem->sharti=$req->latex;
        $problem->nechinchi=$problem_id;
        $problem->olimp=$comp_id;
        $problem->option1=$req->option1;
        $problem->option2=$req->option2;
        $problem->option3=$req->option3;
        $problem->correct=$req->true;
        $problem->save();
      }
      return redirect("competitions/$comp_id/add");
    }
    public function competitionid($id){
      $result=judger::where('uuid',$id)->get();
      return view("boshlash",['data'=>$result[0]]);
    }
}
