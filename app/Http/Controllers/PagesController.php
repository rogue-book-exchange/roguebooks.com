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
		$contents = [];
		$page = [];
		if (Page::where('url', '=', 'home')->first()) {
			$contents = Page::where('url', '=', 'home')->first()->blocks()->get();
			foreach ($contents as $content) {
				$page[$content['name']] = $content['content'];
			}
		}
		// return $page;
		// return var_dump(array_key_exists('hours-header', $page));
		return view('pages.home', compact('page'));
	}

	public function login()
	{
		return view('auth.login');
	}

	public function show($page_uri)
	{
		if (View::exists('pages.'.$page_uri))
		{
			$contents = [];
	    $page = [];
	    if (Page::where('url', '=', $page_uri)->first()) {
	    	$contents = Page::where('url', '=', $page_uri)->first()->blocks()->get();
				foreach ($contents as $content) {
					$page[$content['name']] = $content['content'];
				}
	    }
			return view('pages.' . $page_uri, compact('page'));
		} else {
			return redirect('/');
		}
	}

}
