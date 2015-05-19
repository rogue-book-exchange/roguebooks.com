<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Faq;
use App\Page;
use App\Block;

use Request;

class FaqController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blocks = Block::where('page_id','=',0)->get();
		$page = [];
		foreach ($blocks as $block) {
			$page['global-'.$block['name']] = $block['content'];
		}
		$faqs = Faq::get();
		return view('faqs.index', compact('faqs', 'page'));
		// return var_dump(count($faqs));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$faq = new Faq;
		return view('faqs.create', compact('faq'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Faq::create(Request::all());
		return redirect('faqs');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$faq = Faq::findOrFail($id);
		return view('faqs.edit', compact('faq'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		Faq::findOrFail($id)->update(Request::all());
		return redirect('faqs');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Faq::destroy($id);
		return redirect('faqs');
	}

}
