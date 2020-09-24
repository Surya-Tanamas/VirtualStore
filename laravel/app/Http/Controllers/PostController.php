<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PostController extends Controller
{
    /**
     * Show the profile for the given user.
     * @return View
     */
    public function index( Request $request, $page = "index" )
    {
        return view( $page, [
			"page_title" => "Mulai Memesan",
			"request" => $request,
			"page" => $page
		]);
    }
	
	/**
     * Show the profile for the given user.
     * @return View
     */
    public function pesan( Request $request, $page = "pesan" )
    {
        if( $request->submit == "Pesan" ) {
			return view( $page, [
				"page_title" => "Mulai Memesan",
				"request" => $request,
				"page" => $page
			]);
		} else {
			Cookie::queue(Cookie::forget('pesanan'));
			return back();
		}		
    }
}