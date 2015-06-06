<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Support;
use App\Http\Requests\SupportBlockRequest;
use Illuminate\Http\Request;

class SupportController extends Controller {

	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$support = new Support;
		return view('supports.create', compact('support'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SupportBlockRequest $request)
	{
		Support::create($request->all());

		return redirect('support');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$support = Support::findOrFail($id);
		return view('supports.edit', compact('support'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(SupportBlockRequest $request, $id)
	{
		Support::findOrFail($id)->update($request->all());
		return redirect('support');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Support::destroy($id);
		return redirect('support');
	}

}
