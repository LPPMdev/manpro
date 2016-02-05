<?php namespace App\Http\Controllers;

use Session;

class PageController extends Controller
{
	public function login()
	{
		Session::set('session', "ini session");

		return view('login2');
	}
}

 ?>