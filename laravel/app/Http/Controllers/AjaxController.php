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
        $value = $request->item;
		$name = "Pesanan";
		
		if( $request->session()->has($name) ){
			//Get Old Array
			$arrdata = json_decode( session( $name ) );
			
			// Add New Data into Array
			$arrdata[] = $value;
		} else {
			// Make New Array
			$arrdata[] = $value;
		}
		// Filtering same item
		$arrdata = array_unique( $arrdata );
		
		// Storing data into Session
		session([ $name => json_encode($arrdata) ]);
		
		return view( $page, [
			"page_title" => "Tambah Pesanan",
			"value" => $arrdata
		]);
    }
}