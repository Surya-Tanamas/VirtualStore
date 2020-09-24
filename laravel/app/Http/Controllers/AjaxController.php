<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AjaxController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index( Request $request, $page = "tambah" )
    {
        $val = $request->val;
		$name = "pesanan";
		$mins = 6;
		
		if( Cookie::get($name) ){
			//Get Old Array
			$arrdata = json_decode( Cookie::get($name) );
			// Add New Data into Array
			$arrdata[] = $val;
		} else {
			// Make New Array
			$arrdata[] = $val;
		}
		
		$arrdata = array_unique($arrdata);
		$value = json_encode($arrdata);
		Cookie::queue($name, $value, $mins);
		
		return view( $page, [
			"page_title" => "Tambah Pesanan",
			"value" => $arrdata,
			"page" => $page
		]);
    }
}