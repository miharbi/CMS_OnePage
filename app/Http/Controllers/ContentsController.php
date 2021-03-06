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
    {
        $edit = true;
        $sliders = Content::where('type', 'slider')
                            ->orderBy('id')
                            ->take(5)
                            ->get();

        $courses = Content::where('type', 'course')
                            ->orderBy('id')
                            //->take(4)
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
                           // ->take(10)
                            ->get();

        $events = Content::where('type', 'event')
                            ->orderBy('id')
                           // ->take(10)
                            ->get();

        $schedules = Content::where('type', 'schedule')
                            ->orderBy('id')
                            ->take(10)
                            ->get();
                                               
        return view('home', compact('edit', 'sliders', 'courses', 'reviews', 'us', 'staff', 'mision', 'owners', 'events', 'schedules'));
    }

    public function reviews()
    {
        $edit = true;

        $reviews = Content::where('type', 'review')
                            ->orderBy("id")
                            ->paginate(5);
                                               
        return view('partial.reviews', compact('edit', 'reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        switch ($request->input('type')) {

            case 'gallery':
                $options = [
                        'title'      => 'Nuevo Album',
                        'hasTitle'   => true,
                        'hasContent' => false,
                        'path'       => 'gallery', 
                        'hasImg'     => [
                                        'width'  => 800,
                                        'height' => 450 
                                        ],  
                        ];
                break;

            case 'slider':
                $options = [
                        'title'      => 'Nuevo Slider',
                        'hasTitle'   => false,
                        'hasContent' => false,
                        'path'       => 'slider', 
                        'hasImg'     => [
                                        'width'  => 1345,
                                        'height' => 450 
                                        ],  
                        ];
                break;    

            case 'course':
                $options = [
                        'title'      => 'Nueva Clase',
                        'hasTitle'   => true,
                        'hasContent' => true,
                        'path'       => 'course', 
                        'hasImg'     => [
                                        'width'  => 570,
                                        'height' => 332 
                                        ],  
                        ];
                break; 

            case 'review':
                $options = [
                        'title'      => 'Nuevo Testimonio',
                        'hasTitle'   => true,
                        'hasContent' => true,
                        'path'       => 'review', 
                        'hasImg'     => [
                                        'width'  => 570,
                                        'height' => 332 
                                        ],  
                        ];
                break; 

            case 'staff':
                $options = [
                        'title'      => 'Nuevo Staff',
                        'hasTitle'   => true,
                        'hasContent' => true,
                        'path'       => 'staff', 
                        'hasImg'     => [
                                        'width'  => 265,
                                        'height' => 444 
                                        ],  
                        ];
                break;

            case 'event':
                $options = [
                        'title'      => 'Nuevo Evento',
                        'hasTitle'   => true,
                        'hasContent' => true,
                        'path'       => 'event', 
                        'hasImg'     => [
                                        'width'  => 265,
                                        'height' => 444 
                                        ],  
                        ];
                break;    
                case 'schedule':
                $options = [
                        'title'      => 'Nuevo Horario',
                        'hasTitle'   => true,
                        'hasContent' => true,
                        'path'       => 'schedule', 
                        'hasImg'     => [
                                        'width'  => 265,
                                        'height' => 444 
                                        ],  
                        ];
                break;

            default:
                # code...
                break;
        }
        

        return view('partial.newContent', $options);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'image'
        ]);
        $insert = [];
        if ($request->input('dad')) {

            $insert = [
                       'dad'     => $request->input('dad'), 
                       'type'    => $request->input('path'), 
                       'youtube' => $request->input('youtube'), 
                       ];

        }elseif($request->input('title')){
            $insert = [
                        'title' => $request->input('title'),
                        'type'    => $request->input('path'), 
                        'content' => $request->input('content'),
                      ];
        }
        $id = Content::insertGetId($insert);

        if ($request->file('image') && $request->file('image')->isValid()) {
            $imageName = $id.'_'.$request->file('image')->getClientOriginalName();
            $path   = '../public_html/images/'.$request->input('path');
            //$path   = public_path().'/images/'.$request->input('path');
            if (!file_exists($path)) {
                mkdir($path, 0777);
            }
            $path = $path.'/';

            $image  = '/images/'.$request->input('path').'/'.$imageName;
            $width  = $request->input('width');
            $height = $request->input('height');
            
            Image::make($request->file('image'))
                   ->fit($width, $height, function ($constraint) { $constraint->upsize(); })
                   ->save($path.$imageName);

            if ($request->input('path') == 'gallery') { // thumbnail
                $imageNameThumbnail = 'thumbnail_'.$id.'_'.$request->file('image')->getClientOriginalName();
                Image::make($request->file('image'))
                   ->fit('200', '200', function ($constraint) { $constraint->upsize(); })
                   ->save($path.$imageNameThumbnail);
            }

            $data = ['image'   => $image];
            
        } elseif(!$request->input('youtube')) {
            return redirect()->to('cmsgallery');
        }
        if(isset($data)){
            $content = Content::find($id);
            $content->update($data);
        }


        if ($request->input('path') == 'gallery') {

            return redirect()->to('cmsgallery'.($request->input('dad') || $request->input('title') ? '/'.($request->input('dad')? $request->input('dad'):$id):''));
        }
        return redirect()->back();
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

        if ($request->file('image') && $request->file('image')->isValid()) {
            $imageName = $id.'_'.$request->file('image')->getClientOriginalName();
            $path   = '../public_html/images/'.$request->input('path').'/'; //production
            //$path   = public_path().'/images/'.$request->input('path').'/';
            $image  = '/images/'.$request->input('path').'/'.$imageName;
            $width  = $request->input('width');
            $height = $request->input('height');
            
            Image::make($request->file('image'))
                   ->fit($width, $height, function ($constraint) { $constraint->upsize(); })
                   ->save($path.$imageName);

            if ($request->input('path') == 'gallery') { // thumbnail
                $imageNameThumbnail = 'thumbnail_'.$id.'_'.$request->file('image')->getClientOriginalName();
                Image::make($request->file('image'))
                   ->fit('200', '200', function ($constraint) { $constraint->upsize(); })
                   ->save($path.$imageNameThumbnail);
            }

            @unlink('/'.$request->input('old'));

            $data = ['image'   => $image];
        } elseif ($request->input('title') || $request->input('content') || $request->input('youtube') ) {
            $data = [
                'title'   => trim(strip_tags($request->input('title'))),
                'youtube'   => trim(strip_tags($request->input('youtube'))),
                'content' => trim(strip_tags($request->input('content')))
            ];
        } else {
            return 'error';
        }

        $content = Content::find($id);
        $content->update($data);
        if ($request->ajax()) {
            return 'ok';
        }
        if ($request->input('path') == 'gallery') {
            return redirect()->to('cmsgallery'.($request->input('dad') ? '/'.$request->input('dad') :''));
        }
        return redirect()->back();
    }

    public function gallery($id = false)
    {
        $edit = true;
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
