<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model {

	protected $table = 'wishlists';

  public $timestamps = false;

  protected $fillable = [
    'name'
  ];

}
