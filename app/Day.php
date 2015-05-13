<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model {

  public $timestamps = false;

  protected $fillable = [
    'volunteer_id',
    'date'
  ];

	public function volunteer()
  {
    return $this->belongsTo('App\Volunteer');
  }

}
