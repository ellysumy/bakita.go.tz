<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliders;
use App\Models\Contents;
use App\Models\Words;
use App\Models\Book;
use App\Models\Users;

use Cviebrock\EloquentSluggable\Services\SlugService;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::orderBy('updated_at', 'DESC')->take(3)->get();
        $sliders = Sliders::all();
        $contents = Contents::OrderBy('updated_at', 'DESC')->take(3)->get();
         $words = Words::all();
         $slider1 = Sliders::OrderBy('updated_at', 'DESC')->take(1)->get();

        return view('sw.home', compact('books', 'sliders','slider1', 'contents', 'words'));
    }

    public function guestindex()
    {
        $books=Book::orderBy('updated_at', 'DESC')->take(3)->get();
        $sliders = Sliders::all();
        $contents = Contents::all();
         $words = Words::all();

        return view('sw.vitabupage')->with('books' , Book::paginate(3), Book::orderBy('updated_at', 'DESC')->get());
    }

    public function showbook($slug)
    {
        return view('en.showbook')
            ->with('books', Book::where('slug', $slug)->first());
    }
    public function sliders()
    {
       
        return view('en.slider')
            ->with('sliders', Sliders::orderBy('updated_at', 'DESC')->take(3)->get());
    }

     public function bookslist()
    {
        return view('en.bookslist')->with('books', Book::paginate(3), Book::orderBy('updated_at', 'DESC')->get());
    }

    public function enindex()
    {
        $books=Book::orderBy('updated_at', 'DESC')->take(3)->get();
        $sliders = Sliders::all();
        $contents = Contents::all();
        $words = Words::all();
        $slider2 = Sliders::OrderBy('updated_at', 'DESC')->take(1)->get();

        return view('en.home', compact('books', 'sliders', 'slider2','contents', 'words'));
    }
    public function en()
    {
        $books=Book::orderBy('updated_at', 'DESC')->take(3)->get();
        $sliders = Sliders::all();
        $contents = Contents::OrderBy('updated_at', 'DESC')->take(3)->get();
        $words = Words::all();

        return view('en.home', compact('books', 'sliders', 'contents', 'words'));
    }

    public function sliding()
    {
        $books=Book::all();
        $sliders = Sliders::all();
        $contents = Contents::all();

        return view('sw.vitabuslider', compact('books', 'sliders', 'contents', 'words'));
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
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $books = Book::where('slug', $slug)->first();

        return view('en.showbook')->with('books', compact('books'));
    }
     public function swshow($slug)
    {
        //
        $books = Book::where('slug', $slug)->first();

        return view('sw.kitabuview')->with('books', compact('books'));
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
