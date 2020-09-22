<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChucDanh;
use App\Http\Controllers\ChucDanhController;
class ChucDanhController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 //   public function __construct()
  //  {
  //      $this->middleware('auth');
  //  }
public function dangky(){
	//return "www";
	return view("addCD");
}
public function danhsach(){
	 $chucdanh=chucdanh::get();
	 return view("viewCD",compact('chucdanh'));
}
public function save(Request $request){
	$chucdanh=new chucdanh();
	$chucdanh->id=rand(1,10000);
	$chucdanh->name= $request->request->get("name");
	$chucdanh->macd=$request->request->get("macd");
	$chucdanh->save();
	return view('addCD');
}
public function edit($id){
	$chucdanh=chucdanh::find($id);
	return view("suaCD",compact('chucdanh'));
	
}
public function update(Request $request){
	$id= $request->request->get("id");
	$chucdanhe=chucdanh::find($id);
	$chucdanhe->name= $request->request->get("name");
	$chucdanhe->macd=$request->request->get("macd");
	$chucdanhe->save();
    $chucdanh=chucdanh::get();
	return view("viewCD",compact('chucdanh'));
	
}
public function xoa ($id){
	$chucdanh1=chucdanh::find($id);
	$chucdanh1->delete();
	 $chucdanh=chucdanh::get();
	return view("viewCD",compact('chucdanh'));
	
}
}
?>