<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $books = Book::all();
        return view('pages.books')
            ->with('books', Book::orderBy('updated_at', 'DESC')->get());

    }
    public function guestindex()

    {
        $books = Book::all();
        return view('sw.vitabupage')
            ->with('books',Book::paginate(3), Book::orderBy('updated_at', 'DESC')->get());

    }
    
    public function show()

    {
        // $books = Book::all();
        return view('pages.bookspage')
            ->with('books', Book::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'isbn' => 'required',
            'category' => 'required',
            'publisher' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Book::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'isbn' => $request->input('isbn'),
            'publisher' => $request->input('publisher'),
            'category' => $request->input('category'),
            'slug' => SlugService::createSlug(Book::class, 'slug', $request->name),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/bookspage')
            ->with('message', 'Your book has been added!');
    }



    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show1($slug)
    {
        return view('book.show')
            ->with('book', Book::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('book.edit')
            ->with('book', Book::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Book::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Book::class, 'slug', $request->title),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/book')
            ->with('message', 'Your book has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $book = Book::where('slug', $slug);
        $book->delete();

        return redirect('/books')
            ->with('message', 'Your book has been deleted!');
    }

}
