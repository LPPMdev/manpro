<?php namespace App\Http\Controllers;

use App\Blogposts;
use App\User;
use Session;
use DB;
use Redirect;
use Meta;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QueryController extends Controller
{
	public function publishBerita()
	{
		if(Input::file('image')->isValid())
		{
			$title = Input::get('title');

			$destinationPath = "public/images/berita/";
			$extension = Input::file('image')->getClientOriginalExtension();
			$fileName = $title . "_" . $title . "." . $extension;
			$image = $destinationPath.$fileName;
			Input::file('image')->move($destinationPath, $fileName);

			$url = str_slug($title);
			Blogposts::create([
				'title' => $title,
				'url' => $url,
				'description' => Input::get('description'),
				'image' => $image,
				'content' => Input::get('content')

				]);

			$type = "berita";
			$pageUrl = "berita/".$url;
			Session::flash('success', true);
			return view('success')->with('type', $type)->with('pageUrl', $pageUrl);
		}
	}

	public function tambahUser()
	{
		$username = Input::get('username');
		$email = Input::get('email');
		$password = Input::get('password');

		User::create([
			'name' => $username,
			'email' => $email,
			'password' => $password
			]);

		Session::flash('success', true);
		return view('success')->with('type', 'tambah-user');
	}
}

 ?>