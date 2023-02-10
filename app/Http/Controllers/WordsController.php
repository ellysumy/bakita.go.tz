<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Words;
use Cviebrock\EloquentSluggable\Services\SlugService;

class WordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        //
        return view('pages.contents.showwords')
            ->with('words');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.contents.addword')
            ->with('word');
        // return view('pages.contents.contents')
        //     ->with('content', Content::orderBy('updated_at', 'DESC')->get());
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
            'word' => 'required',
            'meaning' => 'required',
            'example1' => 'required',
            'example2' => 'required',
            'description' => 'required',
        ]);

        Words::create([
            'word' => $request->input('word'),
            'meaning' => $request->input('meaning'),
            'example1' => $request->input('example1'),
            'example2' => $request->input('example2'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Words::class, 'slug', $request->word),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/showwords')
            ->with('message', 'Your content has been added!');
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
