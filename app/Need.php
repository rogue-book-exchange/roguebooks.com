<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Need extends Model {

	protected $table = 'needs';

	protected $fillable = ['name', 'description', 'needed_by', 'priority'];

}
