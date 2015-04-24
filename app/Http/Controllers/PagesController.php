<?php namespace App\Http\Controllers;

use App\Http\Requests;
use View;
use App\Http\Controllers\Controller;
use App\Page;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{
		return view('pages.home');
	}

	public function show($page_uri)
	{
		if (View::exists('pages.'.$page_uri))
		{
			$block = array();
	    $contents = Page::where('page_uri', '=', $page_uri)->orderBy('group_id')->get();
			return view('pages.' . $page_uri, compact('contents'));
		} else {
			return redirect('/');
		}
	}

}
