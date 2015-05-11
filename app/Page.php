<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	protected $table = 'pages';

  public $timestamps = false;

	protected $fillable = [
    'name',
    'url',
    'created_at',
    'updated_at'
  ];

  public function blocks()
  {
    return $this->hasMany('App\Block');
  }

}
