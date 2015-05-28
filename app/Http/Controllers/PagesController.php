<?php namespace App\Http\Controllers;

use App\Http\Requests;
use View;
use App\Http\Controllers\Controller;
use App\Page;
use App\Block;
use App\Http\Requests\PageUpdateRequest;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{
		$page = get_page_contents('home');
		// return $page;
		return view('pages.home', compact('page'));
	}

	public function show($page_uri)
	{
		if (View::exists('pages.'.$page_uri))
		{
			$page = get_page_contents($page_uri);
			return view('pages.' . $page_uri, compact('page'));
		} else {
			return redirect('/');
		}
	}

	public function update_content(PageUpdateRequest $request)
	{
		$page_contents = $request->all();
		array_shift($page_contents);
		$keys = array_keys($page_contents);
		array_shift($keys);
		$values = array_values($page_contents);
		array_shift($values);
		foreach ($keys as $i => $key) {
			if (substr($key, 0, 7) == 'global-') {
				$key = substr($key, 7);
			}
			Block::where('name','=',$key)->update(['content'=>$values[$i]]);
		}
		return redirect('/')->with('update', 'PAGE UPDATED SUCCESSFULLY!');
		// return var_dump($page_contents);
	}
	
	public function login()
	{
		$page = get_global_blocks();
		return view('auth.login', compact('page'));
	}

}
