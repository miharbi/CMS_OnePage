<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use App\Content;

class ContentsController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  //['new', 'blog', '']
        
        $edit = true;
        $sliders = Content::where('type', 'slider')
                            ->orderBy('id')
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
                            ->first();

        $mision = Content::where('type', 'mision')
                            ->orderBy('updated_at', 'desc')
                            ->first(); 

        $owners = Content::where('type', 'owners')
                            ->orderBy('updated_at', 'desc')
                            ->take(3)
                            ->get();                     

        $staff = Content::where('type', 'staff')
                            ->orderBy('updated_at', 'desc')
                            ->take(5)
                            ->get();                        
                                               
        return view('home', compact('edit', 'sliders', 'courses', 'reviews', 'us', 'staff', 'mision', 'owners') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'image'
        ]);

       if ($request->file('image')->isValid()) {
            $imageName = $id.'_'.$request->file('image')->getClientOriginalName();
            $path   = public_path().'/images/'.$request->input('path').'/'.$imageName;
            $image  = 'images/'.$request->input('path').'/'.$imageName;
            $width  = $request->input('width');
            $height = $request->input('height');
            
            Image::make($request->file('image'))
                   ->fit($width, $height, function ($constraint) { $constraint->upsize(); })
                   ->save($path);

            @unlink(public_path().'/'.$request->input('old'));

            $data = ['image'   => $image];

        }elseif($request->input('title') || $request->input('content')){

            $data = [
                'title'   => $request->input('title'),
                'content' => $request->input('content')
            ];

        }else{

            return;

        }

        $content = Content::find($id);
        $content->update($data);

        return redirect()->to('cms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
