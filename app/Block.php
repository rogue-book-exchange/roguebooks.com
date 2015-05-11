<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model {

	protected $table = 'blocks';

  public $timestamps = false;

  protected $fillable = [
    'page_id',
    'name', 
    'content',
    'created_at',
    'updated_at'
  ];

  public function page()
  {
      return $this->belongsTo('App\Page');
  }

}
