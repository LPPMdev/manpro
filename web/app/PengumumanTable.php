<?php namespace App;


use Illuminate\Database\Eloquent\Model;

class PengumumanTable extends Model
{

	protected $table = 'pengumuman';
	protected $fillable = ['title', 'url', 'content', 'attachment'];

}
 ?>