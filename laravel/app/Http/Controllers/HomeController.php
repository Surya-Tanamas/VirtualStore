<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index( $page = "index" )
    {
        return view( $page, [
			'page' => $page
		]);
    }
}