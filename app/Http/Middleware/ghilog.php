<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use App\ChucNang;
class ghilog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
		$name=Route::currentRouteName();
       $chucnang=DB::table('chucnang')
	    ->where('routename',Route::currentRouteName())
		->first();
		// var_dump( $chucnang);
		//echo $chucnang->id;
	  // return $next($request);
		//echo $name;
      //echo Auth::user()->id;
		if(isset($chucnang->id)&& isset(Auth::user()->id)){
			$quyen=DB::table('chucnang_user')
			
			->where('iduser',Auth::user()->id)
			->first();
			//echo $quyen->idchucnang;
			if(isset($quyen->id)&&$quyen->iduser==Auth::user()->id){
							
			return $next($request);
			}else{
				//echo $name;
				//return $next($request);
				return redirect('khongcoquyen');
			}
		}else{
			//echo $chucnang->id;
			//echo $name;
			//return $next($request);
        return redirect('khongduocquyen');
		}
    }
}
