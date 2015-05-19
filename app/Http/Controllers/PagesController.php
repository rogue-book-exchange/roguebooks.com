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
		$page = $this->get_page_contents('home');
		// return $page;
		return view('pages.home', compact('page'));
	}

	public function show($page_uri)
	{
		if (View::exists('pages.'.$page_uri))
		{
			$page = $this->get_page_contents($page_uri);
			return view('pages.' . $page_uri, compact('page'));
		} else {
			return redirect('/');
		}
	}
	
	public function login()
	{
		return view('auth.login');
	}

	

	function get_page_contents($page_uri)
	{
		$contents = [];
    $page = [];
    if (Page::where('url', '=', $page_uri)->first()) {
    	$contents = Page::where('url', '=', $page_uri)->first()->blocks()->get();
			foreach ($contents as $content) {
				$page[$content['name']] = $content['content'];
			}
			$blocks = Block::where('page_id','=',0)->get();
			foreach ($blocks as $block) {
				$page['global-'.$block['name']] = $block['content'];
			}
    }
    return $page;
	}

}
