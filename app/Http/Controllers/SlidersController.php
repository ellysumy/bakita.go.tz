<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliders;
use Cviebrock\EloquentSluggable\Services\SlugService;
Use Image;



class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.contents.showsliders')
            ->with('sliders', Sliders::paginate(5), Sliders::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.contents.addslider')
            ->with('slider');
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
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:1024'
        ]);
        $file = $request->file('image');
        $newImageName = uniqid() . '-' . $request->title;
        $extension = $file->getClientOriginalExtension(); 
         $main_slider = $newImageName.'_post_main'.'.'.$extension; 
         $thumb_image = $newImageName.'_post_thumb'.'.'.$extension; 
         $list_image = $newImageName.'_post_list'.'.'.$extension;

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

             Image::make($file)->resize(1228,700)->save(public_path('/images/sliders/'.$main_slider));
             Image::make($file)->resize(360,309)->save(public_path('/images/sliders/'.$list_image));
             Image::make($file)->resize(122,122)->save(public_path('/images/sliders/'.$thumb_image));
             $newImageName=$main_slider;

        $request->image->move(public_path('images'), $newImageName);

        Sliders::create([
            'title' => $request->input('title'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Sliders::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/sliders')
            ->with('message', 'Your content has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        return view('pages.contents.viewslider')
            ->with('slider', Sliders::where('slug', $slug)->first());
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
        //
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
