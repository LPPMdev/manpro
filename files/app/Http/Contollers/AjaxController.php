<?php namespace App\Http\Controllers;
use DB;
use App\PengumumanTable;
use Response;
use Input;

class AjaxController extends Controller
{
	public function pengumumanJudul()
	{
		$isExists = DB::table('pengumuman')->where('title','=', Input::get('title'))->select("id")->first();
		if($isExists) $response = array('status' => 'ada',);

		else $response = array('status' => 'tidakada',);


        return Response::json($response); 
	}
}

 ?>