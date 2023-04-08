
@extends('BackEnd.Admin.Layouts.app')
@section('title','Update a Course')
@section('content')
<div class="content"> 
    <div class="col-md-6">
        <form action="{{ route('courseUpdate',$course->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <fieldset>
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Update Course</h6>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" placeholder="Course Name" name="CourseName" value="{{ old('CourseName', $course->CourseName) }}">
                    </div>

                    <div class="form-group">
                        <label>Category </label>
                        <select class="form-control" name="CourseCategory" id="Category">
                            <option value="Medical" {{ ($course->Category === 'Medical') ? 'selected' : '' }}>Medical</option>
                            <option value="University" {{ ($course->Category === 'University') ? 'selected' : '' }}>University</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Course Type</label>
                        <select class="form-control" name="CourseType" id="CourseType">
                            <option value="Full Course" {{ ($course->CourseType === 'Full Course') ? 'selected' : '' }}>Full Course</option>
                            <option value="Exam Batch" {{ ($course->CourseType === 'Exam Batch') ? 'selected' : '' }}>Exam Batch</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Course Status</label>
                        <select class="form-control" name="CourseStatus" id="CourseStatus">
                            <option value="Active" {{ ($course->CourseStatus === 'Full Course') ? 'selected' : '' }}> Active </option>
                            <option value="Inactive" {{ ($course->CourseStatus === 'Exam Batch') ? 'selected' : '' }}> Inactive </option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label>Course Fee </label>
                        <input type="number" class="form-control" placeholder="Amount" name="CourseFee" value="{{ old('CourseFee', $course->CourseFee) }}">
                    </div>

                    <div class="text-right" >
                        <a href="{{ route('courseIndex') }}" type="button"   class="btn btn-primary">Back to Course <i class="icon-square-left position-right"></i></a>
                        <button type="submit" class="btn bg-teal-400">Update Course <i class="icon-arrow-right14 position-right"></i></button>
                       
                    </div>
                </div>
            </div>
        </fieldset>
        </form>
    </div>
</div>

@endsection
