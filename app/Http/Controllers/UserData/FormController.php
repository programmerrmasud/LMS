<?php

namespace App\Http\Controllers\UserData;

use App\Http\Controllers\Controller;
use App\Models\BookForm\BookForm;
use Illuminate\Http\Request;

class FormController extends Controller
{
    // This method returns all of the courses to the view.
    public function index()
    {
        return view('FrontEnd.UserForm.create');
    }
     // This method returns all of the courses to the view.
     public function store(Request $request)
     {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|min:11|max:11',
            'veriphone' => 'required|numeric|min:11|max:11',
            'district' => 'required|string',
            'area' => 'required',
            'address' => 'required',
            'course' => 'required',
            'batch' => 'required',
            'book' => 'required',
            'session' => 'required',
            'SubmitTime' => 'required',
            'fee' => 'required|numeric',
        ]);

        $book = new BookForm();
        $book->name = $request->input('name');
        $book->phone = $request->input('phone');
        $book->veriphone = $request->input('veriphone');
        $book->district = $request->input('district');
        $book->area = $request->input('area');
        $book->address = $request->input('address');
        $book->course = $request->input('course');
        $book->batch = $request->input('batch');
        $book->book = $request->input('book');
        $book->session = $request->input('session');
        $book->SubmitTime = $request->input('SubmitTime');
        $book->fee = $request->input('fee');
        $book->save();

        return redirect()->route('from.ndex')
            ->with('success', 'Form Submitted successfully.');
     }
}
