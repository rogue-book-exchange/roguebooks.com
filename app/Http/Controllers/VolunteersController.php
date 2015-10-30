<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Mail;
use App\User;
use App\Volunteer;
use App\AdminEmail;
use App\Http\Requests\VolunteerFormRequest;

class VolunteersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$volunteers = Volunteer::all();
		// return var_dump($volunteers);
		$page = get_page_contents();
		return view('volunteers.index', compact('page', 'volunteers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(VolunteerFormRequest $request)
	{
    $data = $request->all();
    foreach ($data as $i=>$item) {
      if (is_array($item)) {
        $data[$i] = serialize($item);
      }
    }
    Volunteer::create($data);
    Mail::send('emailtemplates.volunteerform', $data,
    	function($message)
		    {
		    	$volunteer_email = AdminEmail::where('role', '=', 'volunteer_form');
			$volunteer_email = sprintf("\"%s\"", $volunteer_email);
	        $message->from('websitewizardguy@gmail.com');
	        $message->to($volunteer_email)->subject('RBE Volunteer Form');
		    });
    return redirect('/volunteer')->with('message', 'Thank you for your interest in volunteering!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$v = Volunteer::find($id);
		$page = get_page_contents();
		return view('volunteers.show', compact('v', 'page'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Volunteer::destroy($id);
		return redirect('volunteers');
	}

}
