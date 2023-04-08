@extends('BackEnd.Admin.Layouts.app')
@section('title','Course List')
@section('content')
<div class="content"> 
    <!-- Order direction sequence control -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Cours List</h5>
            <div class="heading-elements">
              
                    <a href="{{ route('courseCreate') }}" type="button" class="btn btn-primary" >Add a New Course</a>
                
            </div>
        </div>

        <div class="panel-body">
            We launch these course in this year  
        </div>

        <table class="table datatable-sequence-control">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Course Category</th>
                    <th>Course Type</th>
                    <th>Course Fee</th>
                    <th>Course Stutus</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($courses as $course)
                    <td>{{ $course->CourseName }}</td>
                    <td><a href="#">{{ $course->CourseCategory }}</a></td>
                    <td>{{ $course->CourseType }}</td>
                    <td>{{ $course->CourseFee }}</td>
                    <td><span class="label label-success">{{ $course->CourseStatus }}</td>
                    <td class="text-center">
                        <ul class="icons-list">
                            
                            <div class="text-right">
                                <form action="{{ route('courseDelete',$course->id) }}" method="POST">
                                    
                                @csrf
                                @method('DELETE')
                                        <a type="button" style="margin-right: 5px" href="{{ route('courseEdit', $course->id) }}"  class="btn btn-primary"><i class="icon-pencil4"></i></a>
                                        <button  type="submit" class="btn btn-danger btn-sm "><i class="icon-trash"></i></button>  
                                </form>
                            </div>
                                   
                                
                            
                        </ul>
                    </td>
                    <tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <!-- /order direction sequence control -->
</div>

@endsection