<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App\Block;
use App\Volunteer;
use Request;

class FormController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function update_content()
	{
		$page_contents = Request::all();
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
		return redirect('/');
		// return var_dump($page_contents);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($url)
	{
		if (View::exists('forms.'.$url))
		{
			$volunteer = Volunteer::find(1);
			// return $volunteer;
			return view('forms.' . $url, compact('volunteer'));
		} else {
			return redirect('/');
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
