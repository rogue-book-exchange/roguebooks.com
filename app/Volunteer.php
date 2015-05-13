<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model {

  public $timestamps = false;

  protected $fillable = [
    'name',
    'email',
    'phone',
    'password'
  ];

	public function days()
  {
    return $this->hasMany('App\Day');
  }

}
