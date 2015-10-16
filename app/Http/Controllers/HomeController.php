<?php
namespace App\Http\Controllers;

use App\Content;

class HomeController extends Controller
{
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
        //\Artisan::call('route:cache');
    }

    public function gallery($id = false)
    {
        $edit = false;
        $gallery = Content::where('type', 'gallery')->orderBy('id');

        if ($id) {
            $gallery->where('dad', $id)->orWhere('id', $id);
        } else {
            $gallery->whereNull('dad');
        }

        $gallery = $gallery->paginate(20);

        return view('partial.gallery', compact('gallery', 'edit', 'id'));
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        $edit = false;
        $sliders = Content::where('type', 'slider')
                            ->orderBy('id')
                            ->take(5)
                            ->get();

        $courses = Content::where('type', 'course')
                            ->orderBy('id')
                            ->take(4)
                            ->get();

        $reviews = Content::where('type', 'review')
                            ->orderByRaw("RAND()")
                            ->take(3)
                            ->get();

        $us = Content::where('type', 'us')->first();

        $mision = Content::where('type', 'mision')->first();

        $owners = Content::where('type', 'owners')
                            ->orderBy('id')
                            ->take(3)
                            ->get();

        $staff = Content::where('type', 'staff')
                            ->orderBy('id')
                            ->take(10)
                            ->get();

        $events = Content::where('type', 'event')
                            ->orderBy('id')
                            ->take(10)
                            ->get();

        $schedules = Content::where('type', 'schedule')
                            ->orderBy('id')
                            ->take(10)
                            ->get();
                                               
        return view('home', compact('edit', 'sliders', 'courses', 'reviews', 'us', 'staff', 'mision', 'owners', 'events', 'schedules'));
    }
}
