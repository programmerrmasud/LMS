<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('BackEnd.Admin.Course.index', compact('courses'));
    }

    public function create()
    {
        return view('BackEnd.Admin.Course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'CourseName' => 'required|string|max:255',
            'CourseCategory' => 'required',
            'CourseType' => 'required',
            'CourseStatus' => 'required',
            'CourseFee' => 'required|numeric|min:0',
            
        ]);

        $course = new Course();
        $course->CourseName = $request->input('CourseName');
        $course->CourseCategory = $request->input('CourseCategory');
        $course->CourseType = $request->input('CourseType');
        $course->CourseStatus = $request->input('CourseStatus');
        $course->CourseFee = $request->input('CourseFee');
        $course->save();

        return redirect()->route('courseIndex')
            ->with('success', 'Course created successfully.');
    }

    public function Edit($id)
    {
        $course = Course::find($id);
        return view('BackEnd.Admin.Course.Update',compact('course'));
        
    }
    public function Update(Request $request,$id)
    {
       
        $course = Course::findOrFail( $id);
        $course->CourseName = $request->input('CourseName');
        $course->CourseCategory = $request->input('CourseCategory');
        $course->CourseType = $request->input('CourseType');
        $course->CourseStatus = $request->input('CourseStatus');
        $course->CourseFee = $request->input('CourseFee');
        $course->save();

        return redirect()->route('courseIndex')
            ->with('success', 'Course updated successfully.');
        
    }

    public function Delete($id)
    {
    $course = Course::findOrFail($id);
    $course->delete();

    return redirect()->route('courseIndex')
        ->with('success', 'Resource deleted successfully');
    }
}
