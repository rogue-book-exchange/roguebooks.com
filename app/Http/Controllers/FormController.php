<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use View;
use App\User;
use Mail;
use App\Block;
use App\Volunteer;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\PasswordChangeRequest;
use App\Http\Requests\UserInfoChangeRequest;

class FormController extends Controller {
	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ContactFormRequest $request)
	{
		// return var_dump($request->get('email'));
		// $user = $request->all();
		Mail::send('emails.contactform',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
		    {
		    	$user_email = User::find(1);
		    	var_dump($user_email->email);
	        $message->from('roguebookexchange@gmail.com');
	        $message->to('tinaamador@gmail.com', 'Admin')->subject('RBE Contact Message');
		    });

	  return redirect('contact')->with('message', 'Thanks for contacting us!');

	}

	public function change_password(PasswordChangeRequest $request)
	{
		$password = $request->all();
		if ($password['password'] === $password['password_confirmation']) {
			User::find(Auth::user()->id)->update(['password'=>bcrypt($password['password'])]);
			
			return redirect('/admin')->with([
					'password_update' => 'Your password has been updated', 
					'class'=>'success'
				]);
		} else {
			return redirect('/admin')->with([
					'password_update' => 'Your passwords don\'t match',
					'class' => 'danger'
				]);
		}
	}

	public function update_user_info(UserInfoChangeRequest $request)
	{
		$user = $request->all();
		User::find(Auth::user()->id)->update([
				'first_name'=>$user['first_name'],
				'last_name'=>$user['last_name'],
				'email'=>$user['email']
			]);
		return redirect('/admin')->with([
				'user_update' => 'Info updated successfully',
				'class' => 'success'
			]);
	}

}
