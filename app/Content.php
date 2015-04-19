<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model {

	protected $table = 'contents';

	protected $fillable = ['heading1', 'heading2', 'body'];

}
