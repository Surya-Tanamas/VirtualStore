<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PostController extends Controller
{
    protected $name = "Pesanan";
    /**
     * Show the profile for the given user.
     * @return View
     */
    public function index( Request $request, $page = "index" )
    {
		dd( $request->except('_token') );
    }
	
	/**
     * Show the profile for the given user.
     * @return View
     */
    public function pesan( Request $request )
    {
        if( $request->submit == "Pesan" ) {
			return redirect('pesan');
		} else {
			$request->session()->forget( $this->name );
			return back();
		}
    }
	
	/**
     * Show the profile for the given user.
     * @return View
     */
    public function simpan( Request $request )
    {
		dd( $request->except("_token") );
		
		// Deleting Order Session
		$request->session()->forget( $this->name );
		
		// Saving New Request Data
		
		
		return redirect('selesai');
    }
}