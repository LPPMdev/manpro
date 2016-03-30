<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){return view('index');});
Route::get('/login', function(){return view('login');});
Route::get('/visi-misi', function(){return view('visi');});
Route::get('/sejarah', function(){return view('sejarah');});
Route::get('/staff', function(){return view('staff');});
Route::get('/berita', "PageController@berita");
Route::get('pengumuman', "PageController@pengumuman");
Route::get('download/{filename}', "StorageController@download");
Route::post('/login', array("before" => "csrf", "uses" => "ValidateController@authenticate"));

Route::group(array('before' => 'loginsession'), function()
{
	Route::get('/tulis-berita', function(){return view('tulis-berita');});
	Route::get('/buat-pengumuman', "PageController@buatPengumuman");
	Route::get('/logout', "PageController@logout");
	Route::post('/tulis-berita', array('before' => 'csrf', "uses" => "QueryController@publishBerita"));
	Route::post('/buat-pengumuman',array("before" => "csrf", "uses" => "StorageController@publishPengumuman"));
	Route::post('ajax/pengumuman-judul', array("before" => "csrf", "uses" => "AjaxController@pengumumanJudul"));
});


Route::filter('loginsession', function()
{
    if(!Auth::check())
        return Redirect::to('login');
});

Route::filter('csrf', function()

{
   $token = Request::ajax() ? Request::header('X-CSRF-Token') : Input::get('_token');
   if (Session::token() != $token) {
      throw new Illuminate\Session\TokenMismatchException;
   }
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
