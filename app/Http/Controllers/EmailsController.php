<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use Request;
use Mail;
use Illuminate\Support\Facades\Redirect;
use App\Email;
use App\AdminEmail;

class EmailsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('emails/index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('emails.create');
	}

	public function update(EmailRequest $request, $id)
	{
		$email = $request->all();
		AdminEmail::findOrFail($id)->update(['email' => $email['email']]);
		return redirect('/admin');
	}

	public function send_email()
	{
		$emails = Email::all();
		Mail::send('emailtemplates.newsletter',
        array(
            'user_message' => Request::get('message')
        ), function($message) use ($emails)
		    {
	        $message->from('roguebookexchange@gmail.com');
	        $message->to($emails)->subject('Rogue Book Exchange News Letter');
		    });

	  return redirect('admin/email')->with('message', 'Your message has been sent!');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(EmailRequest $request)
	{
		Email::create($request->all());
    return Redirect::back()->with('emailSubscribe', 'Thank you for subscribing!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Email::where('email', '=', Request::get('email'))->delete();
    return redirect('/')->with('update', 'Sorry to see you go!');
	}

}
