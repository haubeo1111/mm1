<?php

namespace App\Http\Controllers;

use App\ChucNang;
use Illuminate\Http\Request;
use App\Http\Controllers\ChucnangController;
class ChucnangController extends Controller
{
	
	public function dangky(){
	//return "www";
	return view("addCN");
}
public function danhsach(){
	 $chucnang=chucnang::get();
	 return view("viewCN",compact('chucnang'));
}
public function save(Request $request){
	$chucnang=new chucnang();
	$chucnang->id=rand(1,10000);
	$chucnang->name= $request->request->get("name");
	$chucnang->macn=$request->request->get("macn");
	$chucnang->routename=$request->request->get("routename");
	$chucnang->save();
	return view('addCN');
}
public function edit($id){
	$chucnang=chucnang::find($id);
	return view("suaCN",compact('chucnang'));
	
}
public function update(Request $request){
	$id= $request->request->get("id");
	$chucnange=chucnang::find($id);
	$chucnange->name= $request->request->get("name");
	$chucnange->macn=$request->request->get("macn");
	$chucnange->routename=$request->request->get("routename");
	$chucnange->save();
    $chucnang=chucnang::get();
	return view("viewCN",compact('chucnang'));
	
}
public function xoa ($id){
	$chucnang1=chucnang::find($id);
	$chucnang1->delete();
	 $chucnang=chucnang::get();
	return view("viewCN",compact('chucnang'));
	
}
}
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     
    public function create()
    {
        //
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chucnang  $chucnang
     * @return \Illuminate\Http\Response
     
    public function show(chucnang $chucnang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chucnang  $chucnang
     * @return \Illuminate\Http\Response
     
    public function edit(chucnang $chucnang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chucnang  $chucnang
     * @return \Illuminate\Http\Response
     
    public function update(Request $request, chucnang $chucnang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chucnang  $chucnang
     * @return \Illuminate\Http\Response
     
    public function destroy(chucnang $chucnang)
    {
        //
    }
}
