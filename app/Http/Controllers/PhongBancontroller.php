<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhongBan;
use App\Http\Controllers\PhongBanController;
class PhongBanController extends Controller
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
	
	return view("addPB");
}
public function danhsach(){
	 $phongban=PhongBan::get();
	 return view("viewPB",compact('phongban'));
}
public function save(Request $request){
	$phongban=new PhongBan();
	$phongban->id=rand(1,10000);
	$phongban->name= $request->request->get("name");
	$phongban->mapb=$request->request->get("mapb");
	$phongban->save();
	return view('addPB');
}
public function edit($id){
	$phongban=PhongBan::find($id);
	return view("suaPB",compact('phongban'));
	
}
public function update(Request $request){
	$id= $request->request->get("id");
	$phongbane=PhongBan::find($id);
	$phongbane->name= $request->request->get("name");
	$phongbane->mapb=$request->request->get("mapb");
	$phongbane->save();
    $phongban=PhongBan::get();
	return view("viewPB",compact('phongban'));
	
}
public function xoa ($id){
	$phongban1=PhongBan::find($id);
	$phongban1->delete();
	 $phongban=PhongBan::get();
	return view("viewPB",compact('phongban'));
	
}
}
?>