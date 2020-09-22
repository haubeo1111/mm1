<?php

namespace App\Http\Controllers;

use App\ChucnangUser;
use Illuminate\Http\Request;
use App\Http\Controllers\ChucnangUserController;
class ChucnangUserController extends Controller
{
    public function dangky(){
	//return "www";
	return view("addCNU");
}
public function danhsach(){
	 $chucnanguser=chucnanguser::get();
	 return view("viewCNU",compact('chucnanguser'));
}
public function save(Request $request){
	$chucnanguser=new chucnanguser();
	$chucnanguser->id=rand(1,10000);
	$chucnanguser->iduser= $request->request->get("iduser");
	$chucnanguser->idchucnang=$request->request->get("idchucnang");
	
	$chucnanguser->save();
	return view('addCNU');
}
public function edit($id){
	$chucnanguser=chucnanguser::find($id);
	return view("suaCNU",compact('chucnanguser'));
	
}
public function update(Request $request){
	$id= $request->request->get("id");
	$chucnangusere=chucnanguser::find($id);
	$chucnangusere->iduser= $request->request->get("iduser");
	$chucnangusere->idchucnang=$request->request->get("idchucnang");
	
	$chucnangusere->save();
    $chucnanguser=chucnanguser::get();
	return view("viewCNU",compact('chucnanguser'));
	
}
public function xoa ($id){
	$chucnanguser1=chucnanguser::find($id);
	$chucnanguser1->delete();
	 $chucnanguser=chucnanguser::get();
	return view("viewCNU",compact('chucnanguser'));
	
}
    
}
