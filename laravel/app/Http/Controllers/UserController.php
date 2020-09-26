<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index( $page = "index" )
    {
		if( Cookie::get('pesanan') ) {
			Cookie::queue(Cookie::forget('pesanan'));
		}
		
		return view( $page, [
			"page_title" => "Mulai Memesan",
			"page" => $page
		]);
    }
}