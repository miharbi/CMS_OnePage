<?php 
namespace App\Http\Controllers;
use App\Content;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$edit = true;
        $sliders = Content::where('type', 'slider')
                            ->orderBy('updated_at', 'desc')
                            ->take(5)
                            ->get();

        $courses = Content::where('type', 'course')
                            ->orderBy('updated_at', 'desc')
                            ->take(4)
                            ->get();   

        $reviews = Content::where('type', 'review')
                            ->orderBy('updated_at', 'desc')
                            ->take(3)
                            ->get(); 

        $us = Content::where('type', 'us')
                            ->orderBy('updated_at', 'desc')
                            ->take(3)
                            ->get();  

        $staff = Content::where('type', 'staff')
                            ->orderBy('updated_at', 'desc')
                            ->take(3)
                            ->get();                        
                                               
        return view('home', compact('edit', 'sliders', 'courses', 'reviews', 'us', 'staff') );
	}

}
