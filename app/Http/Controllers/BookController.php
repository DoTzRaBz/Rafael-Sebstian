<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

   public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'page_count' => 'required|integer', 
        'author_name' => 'required|string|max:255',
        'author_email' => 'required|email|max:255',
        'published_date' => 'required|date',
    ]);


    if (!$request->has('page_count')) {
        $validatedData['page_count'] = 0;
    }

    Book::create($validatedData);

    return redirect()->route('books.index')->with('success', 'Book added successfully.');
}
}
