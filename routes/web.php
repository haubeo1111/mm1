<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhongBanController;
use App\Http\Controllers\ChucDanhController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('dangkyPB','PhongBanController@dangky')->middleware("ghilog")->name("dangkyPB");
Route::get('danhsachPB','PhongBanController@danhsach')->name("danhsachPB");
Route::post('savePB','PhongBanController@save')->name("addPB");
Route::get('editPB/{id}','PhongBanController@edit')->name("suaPB");
Route::post('updatePB','PhongBanController@update')->name("updatePB");
Route::get('deletePB/{id}','PhongBanController@xoa')->name("deletePB");

Route::get('dangkyCD','ChucDanhController@dangky')->middleware("ghilog")->name("dangkyCD");
Route::get('danhsachCD','ChucDanhController@danhsach')->name("danhsachCD");
Route::post('saveCD','ChucDanhController@save')->name("addCD");
Route::get('editCD/{id}','ChucDanhController@edit')->name("suaCD");
Route::post('updateCD','ChucDanhController@update')->name("updateCD");
Route::get('deleteCD/{id}','ChucDanhController@xoa')->name("deleteCD");

Route::get('dangkyCN','ChucnangController@dangky')->middleware("ghilog")->name("dangkyCN");
Route::get('danhsachCN','ChucnangController@danhsach')->name("danhsachCN");
Route::post('saveCN','ChucnangController@save')->name("addCN");
Route::get('editCN/{id}','ChucnangController@edit')->name("suaCN");
Route::post('updateCN','ChucnangController@update')->name("updateCN");
Route::get('deleteCN/{id}','ChucnangController@xoa')->name("deleteCN");

Route::get('dangkyCNU','ChucnangUserController@dangky')->name("dangkyCNU");
Route::get('danhsachCNU','ChucnangUserController@danhsach')->name("danhsachCNU");
Route::post('saveCNU','ChucnangUserController@save')->name("addCNU");
Route::get('editCNU/{id}','ChucnangUserController@edit')->name("suaCNU");
Route::post('updateCNU','ChucnangUserController@update')->name("updateCNU");
Route::get('deleteCNU/{id}','ChucnangUserController@xoa')->name("deleteCNU");
Route::get('user/list',function(){
	$phongban=DB::table('phongban')->pluck('name','id');
	$chucdanh=DB::table('chucdanh')->pluck('name','id');
	$user=DB::table("users")->get();
	return view('viewUS',['user'=>$user,'phongban'=>$phongban,'chucdanh'=>$chucdanh]);
});
Route::get('suaU/{id}', function($id){
	//$user=DB::table("users")->get();
	$user=DB::table("users")
                 ->find($id);
	$phongban=DB::table("phongban")->pluck("name","id");
	$chucdanh=DB::table("chucdanh")->pluck("name","id");
	return view("suaU",['user'=>$user,'phongban'=>$phongban,'chucdanh'=>$chucdanh]);
	//compact(["phongban","chucdanh","user"])
})->name("suaU");
Route::post("updateU",function(Request $request){
	$id= $request->request->get("id");
	$user=DB::table("users")
                 ->find($id);
			$user1 = App\User::find($id);	 
	$user1->idphongban= $request->request->get("idphongban");
	$user1->idchucdanh=$request->request->get("idchucdanh");
	$user1->save();
	$user2=DB::table("users")->get();
	 return view("viewU",['user'=>$user2]);
})->name("updateU");
Route::get("danhsachU",function(){
		$user=DB::table("users")->get();
		return view("viewU",['user'=>$user]);
})->name("danhsachU");
Route::get('manhinh',function(){
	$user=DB::table("users")->get();
	foreach($user as $item ){
		echo $item->name;
	}
	//dd($user);
	//lay dong dau tien cua du lieu;
	$user=DB::table("users")->first();
		$user=DB::table("users")
		->where("email","=","hau.nguyenquanghau@yahoo.com.vn")
		->where("id","=",1)
		->get();//phan dieu kien <>=,like,@@
		$name=DB::table("users")
		->where("email","=","hau.nguyenquanghau@yahoo.com.vn")
		->where("id","=",1)
		->value("name");//lay du lieu theo cot thuong dung khi can lay cau hinh check quyen
		//lay du lieu theo id
				$user=DB::table("users")
                 ->find(1);
				 //lay mot mang theo cot co key value
				// $user=DB::table("users")->pluck("id");//mang ngoac vuong
				// foreach($user as $item){
				  $user=DB::table("users")->pluck("name","id");//value,key
				// }
	//dd($user->name);
//viet man hinh cap  nhat user phan vao chuc danh va phong ban
	dd($user);
})->middleware("ghilog")->name("manhinh");
Route::get('khongduocquyen',function(){
	echo "khongduocquyen ";
	
})->name("khongduocquyen");
Route::get('khongcoquyen',function(){
	echo "khongcoquyen ";
	
})->name("khongcoquyen");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
