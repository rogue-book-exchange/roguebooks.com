<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

  public $timestamps = false;

	protected $table = 'pages';

	protected $fillable = [
    'group_id',
    'heading1', 
    'heading2', 
    'body',
    'page_uri',
    'created_at', 
    'updated_at'
  ];

}
