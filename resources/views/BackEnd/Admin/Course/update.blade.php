@extends('BackEnd.Admin.Layouts.app')
@section('title','Update a Course')
@section('content')
<div class="content"> 
    <div class="col-md-6">
        <form action="{{ route('courseUpdate',$course->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Update Course</h6>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label>Course </label>
                        <input type="text" class="form-control" placeholder="Course Name" value="{{ old('CourseName', $course->CourseName) }}">
                    </div>

                    <div class="form-group">
                        <label>Category </label>
                        <select class="form-control" name="" id="">
                            <option value="Medical">Medical</option>
                            <option value="University">University</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Course Type</label>
                        <select class="form-control" name="" id="">
                            <option value="Full Coures">Full Coures</option>
                            <option value="Exam Batch">Exam Batch</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Course Fee </label>
                        <input type="number" class="form-control" placeholder="Amount" value="{{ old('CourseFee', $course->CourseFee) }}">
                    </div>

                    <div class="text-right" >
                        <a type="button"   class="btn btn-primary">Back to Course <i class="icon-square-left position-right"></i></a>
                        <button type="submit" class="btn bg-teal-400">Update Course <i class="icon-arrow-right14 position-right"></i></button>
                       
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection