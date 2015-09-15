<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

use Illuminate\Http\Request;

class AboutController extends Controller {

	public function create()
    {
        $name='name';$email='email';$user_message='user_message';
        //return view('emails.contact',compact('name','email','user_message'));
        return view('about.contact');
    }

    public function store(ContactFormRequest $request)
    { 

    	\Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message) use ($request)
	    {
	        $message->from(env('MAIL_FROMADDRESS'),env('MAIN_NAME'));
	        $message->to($request->get('email'))
	        		->cc(env('MAIL_FROMADDRESS'))
	        		->subject(trans('about.contact').' :: '.env('MAIL_FROMNAME'));
	    });

    	return \Redirect::route('contact')
      		   ->with('message', trans('about.thanks'));
    }

}
