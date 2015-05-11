<?php namespace App\Http\Controllers;

use App\Http\Requests;
use View;
use App\Http\Controllers\Controller;
use App\Page;
use App\Block;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{
		if (Page::where('url', '=', 'home')->first()) {
			$contents = Page::where('url', '=', 'home')->first()->blocks()->get();
			$block = [];
			foreach ($contents as $content) {
				$block[$content['name']] = $content['content'];
			}
		} else {
			$contents = [];
		}
		return view('pages.home', compact('block'));
	}

	public function login()
	{
		return view('auth.login');
	}

	public function show($page_uri)
	{
		if (View::exists('pages.'.$page_uri))
		{
	    if (Page::where('url', '=', $page_uri)->first()) {
	    	$contents = Page::where('url', '=', $page_uri)->first()->blocks()->get();
		    $block = [];
				foreach ($contents as $content) {
					$block[$content['name']] = $content['content'];
				}
	    }
			return view('pages.' . $page_uri, compact('block'));
		} else {
			return redirect('/');
		}
	}
}
