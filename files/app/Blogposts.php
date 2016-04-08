<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogposts extends Model {

	protected $table = 'blogposts';
	protected $fillable = ['title', 'url', 'description', 'image', 'content'];

}
