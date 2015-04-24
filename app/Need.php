<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Need extends Model {

  public $timestamps = false;

	protected $table = 'needs';

	protected $fillable = ['name', 'description', 'needed_by', 'priority'];

}
