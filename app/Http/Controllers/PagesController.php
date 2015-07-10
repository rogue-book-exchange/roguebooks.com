<?php namespace App\Http\Controllers;

use App\Http\Requests;
use View;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Page;
use App\Block;
use App\Faq;
use App\User;
use App\Support;
use App\AdminEmail;

use Auth;
use App\Wishlist;
use App\Http\Requests\PageUpdateRequest;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{
		$page = get_page_contents('home');
		$wishlistitems = Wishlist::all();
		// return $page;
		return view('pages.home', compact('page', 'wishlistitems'));
	}
	
	public function faqs()
	{
		$page = get_page_contents('faqs');
		$faqs = Faq::get();
		return view('faqs.index', compact('faqs', 'page'));
	}
	
	public function volunteer()
	{
		$page = get_page_contents('volunteer');
		return view('pages.volunteer', compact('page'));
	}
	
	public function calendar()
	{
		$page = get_page_contents('calendar');
		return view('pages.calendar', compact('page'));
	}
	
	public function tour()
	{
		$page = get_page_contents('tour');
		return view('pages.tour', compact('page'));
	}
	
	public function support()
	{
		$page = get_page_contents('support');
		$wishlistitems = Wishlist::all();
		$supportitems = Support::all();
		//return dump($page);
		return view('pages.support', compact('page', 'wishlistitems', 'supportitems'));
	}

	public function contact()
	{
		$page = get_page_contents('contact');
		return view('pages.contact', compact('page'));
	}

	public function admin()
	{
		$page = get_page_contents();
		$user = Auth::user();
		$emails = AdminEmail::all();
		return view('pages.admin', compact('user', 'page', 'emails'));
	}

	public function update_content(PageUpdateRequest $request)
	{
		$page_contents = $request->all();
		array_shift($page_contents);
		$keys = array_keys($page_contents);
		$values = array_values($page_contents);

		foreach ($keys as $i => $key) {
			if (substr($key, 0, 7) == 'global-') {
				$key = substr($key, 7);
			}
			Block::where('name','=',$key)->update(['content'=>$values[$i]]);
		}
		return Redirect::back()->with('update', 'PAGE UPDATED SUCCESSFULLY!');
		// return var_dump($page_contents);
	}
	
	public function login()
	{
		$page = get_page_contents('login');
		return view('auth.login', compact('page'));
	}

}
