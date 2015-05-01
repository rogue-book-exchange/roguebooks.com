<?php namespace App\Http\Controllers;

use App\Http\Requests;
use View;
use App\Http\Controllers\Controller;
use App\Page;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{
		$contents = Page::where('page_uri', '=', 'home')->orderBy('group_id')->get();
		return view('pages.home', compact('contents'));
		// return var_dump(isset($contents[0]));
	}

	public function login()
	{
		return view('auth.login');
	}

	public function show($page_uri)
	{
		if (View::exists('pages.'.$page_uri))
		{
	    $contents = Page::where('page_uri', '=', $page_uri)->orderBy('group_id')->get();
			// return view('pages.' . $page_uri, compact('contents'));
			
		} else if (View::exists('forms.'.$page_uri))
		{
	    $contents = Page::where('page_uri', '=', $page_uri)->orderBy('group_id')->get();
			return view('forms.' . $page_uri, compact('contents'));
		} else {
			return redirect('/');
		}
	}



}
