<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
     // This method returns all of the courses to the view.
     public function index()
     {
         $books = Book::all();
         return view('BackEnd.Admin.Book.index', compact('books'));
     }
 
     // This method shows the form to create a new course.
     public function create()
     {
         return view('BackEnd.Admin.Book.create');
     }
 
     // This method stores a newly created course in the database.
     public function store(Request $request)
     {
         $request->validate([
             'BooksName' => 'required|string|max:255',
             'BooksCategory' => 'required',
             'BooksStatus' => 'required',
             'BooksPrice' => 'required|numeric|min:0',
         ]);
 
         $book = new Book();
         $book->BooksName = $request->input('BooksName');
         $book->BooksCategory = $request->input('BooksCategory');
         $book->BooksStatus = $request->input('BooksStatus');
         $book->BooksPrice = $request->input('BooksPrice');
         $book->save();
 
         return redirect()->route('bookIndex')
             ->with('success', 'Course created successfully.');
     }
     
     // This method shows the form to edit an existing course.
     public function Edit($id)
     {
         $book = Book::find($id);
         return view('BackEnd.Admin.Book.Update',compact('book'));
     }
     
     // This method updates an existing course in the database.
     public function Update(Request $request,$id)
     {
         $book = Book::findOrFail( $id);
         $book->BooksName = $request->input('BooksName');
         $book->BooksCategory = $request->input('BooksCategory');
         $book->BooksStatus = $request->input('BooksStatus');
         $book->BooksPrice = $request->input('BooksPrice');
         $book->save();
 
         return redirect()->route('bookIndex')
             ->with('success', 'Book updated successfully.');
     }
 
     // This method deletes the specified course from the database.
     public function Delete($id)
     {
         $book = Book::findOrFail($id);
         $book->delete();
 
         return redirect()->route('bookIndex')
             ->with('success', 'Book deleted successfully');
     }
}
