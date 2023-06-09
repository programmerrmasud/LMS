<?php

namespace App\Http\Controllers\UserData;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Book\Bookform;
use App\Models\Place\District;
use App\Models\Place\Location;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    // This method returns all of the courses to the view.
    public function index()
    {
         // Get all the top level dependencies
         $districts = District::whereNull('id')->get();
         return view('FrontEnd.UserForm.create', compact('districts'));
    }
     
    public function getLocations($id)
    {
        // Find the dependent of the given dependency id
        $dependency = District::find($id);

        // Get all the dependent's children
        $dependentChildren = $dependency->children;

        return response()->json($dependentChildren);
    
    }

     public function store(Request $request)
     {
         $validator = Validator::make($request->all(), [
             'name' => 'required',
             'phone' => 'required',
             'veriphone' => 'required',
             'district' => 'required',
             'area' => 'required',
             'address' => 'required',
             'course' => 'required',
             'batch' => 'required',
             'book' => 'required',
             'session' => 'required',
             'SubmitTime' => 'required',
             'fee' => 'required',
         ]);
     
         if ($validator->fails()) {
            //  If validation fails, redirect back to the form with an error message
             return redirect()
                 ->route('/')
                 ->withInput()
                 ->withErrors($validator);
           
         }
     
         // If validation passes, save the data to the database
         $book = new Bookform();
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
     
         // Redirect back to the form with a success message
         return redirect()->route('from.index')
             ->with('success', 'Form Submitted successfully.');

     }
     
     
}
