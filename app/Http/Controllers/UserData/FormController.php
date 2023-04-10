<?php

namespace App\Http\Controllers\UserData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    // This method returns all of the courses to the view.
    public function index()
    {
        return view('FrontEnd.UserForm.create');
    }
     // This method returns all of the courses to the view.
     public function store()
     {
         return view('FrontEnd.UserForm.create');
     }
}
