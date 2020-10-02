<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class UserController extends Controller
{
	protected $name = "Pesanan";
    
	/**
     * Halaman Selesai.
     * @param  int  $id
     * @return View
     */
    public function email()
    {
		$details = [ 'body' => 'Ini adalah percobaan pengiriman email dari Localhost dengan XAMPP' ];
		$return = Mail::to('suryatanamas@gmail.com')->send(new TestMail($details));
		if( $return ) {
			dd('Email is Sent Successfully');
		} else {
			dd('Email Failed to Send');
		}
    }
	
	/**
     * Halaman Utama.
     * @param  int  $id
     * @return View
     */
    public function index( Request $request )
    {
		//dd( $request->session()->all() );
		
		$param0 = $request->tambah;
		$param1 = $request->session()->has( $this->name );
		
		if( !$param0 AND $param1 ) {
			$request->session()->forget( $this->name );
		}
		
		return view( "index", [
			"page_title" => "Mulai Memesan",
			"username" => Auth::user()->name ?? null
		]);
    }
	
	/**
     * Halaman Perpesanan.
     * @param  int  $id
     * @return View
     */
    public function pesan( Request $request )
    {
		if( $request->session()->has( $this->name ) ) {
			return view( "pesan", [
				"page_title" => "Mulai Memesan",
				"username" => Auth::user()->name ?? null,
				"user" => Auth::user() ?? null,
				"pesanan" => session( $this->name )
			]);
		} else {
			return redirect('');
		}
    }
	
	/**
     * Halaman Selesai.
     * @param  int  $id
     * @return View
     */
    public function sementara( Request $request )
    {
		//dd( $request->session()->all() );
		if( $request->session()->has( "data_simpan" ) ) {
			return view( "konfirmasi", [
				"page_title" => "Mulai Memesan",
				"username" => Auth::user()->name ?? null,
				"request" => json_decode( session( "data_simpan" ), true )
			]);
		} else {
			return redirect('');
		}
    }
}