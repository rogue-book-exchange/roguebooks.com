<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\WishListRequest;
use Illuminate\Http\Request;
use App\Wishlist;

class WishListController extends Controller {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(WishListRequest $request)
	{
		Wishlist::create($request->all());
		return redirect('/');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$item = Wishlist::find($id);
		return view('wishlist.edit', compact('item'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(WishListRequest $request, $id)
	{
		Wishlist::findOrFail($id)->update($request->all());
		return redirect('/');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Wishlist::destroy($id);
		return redirect('/');
	}

}
