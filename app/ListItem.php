<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ListItem extends Model {

  public $timestamps = false;

	protected $table = 'list_items';

	protected $fillable = ['head', 'body'];

}
