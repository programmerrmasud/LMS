<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    // This method returns all of the courses to the view.
    public function index()
    {
        $courses = Course::all();
        return view('BackEnd.Admin.Course.index', compact('courses'));
    }

    // This method shows the form to create a new course.
    public function create()
    {
        return view('BackEnd.Admin.Course.create');
    }

    // This method stores a newly created course in the database.
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
    
    // This method shows the form to edit an existing course.
    public function Edit($id)
    {
        $course = Course::find($id);
        return view('BackEnd.Admin.Course.Update',compact('course'));
    }
    
    // This method updates an existing course in the database.
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

    // This method deletes the specified course from the database.
    public function Delete($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courseIndex')
            ->with('success', 'Resource deleted successfully');
    }
}
