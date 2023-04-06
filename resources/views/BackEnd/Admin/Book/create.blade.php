@extends('BackEnd.Admin.Layouts.app')
@section('title','Create a Book')
@section('content')
<div class="content"> 
    <div class="col-md-6">
        <form action="{{ route('bookStore')  }}" method="POST" >
            @csrf
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Create a new Book</h6>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label>Course </label>
                        <input type="text" name="BooksName" class="form-control" placeholder="Books Name">
                    </div>

                    <div class="form-group">
                        <label>Category </label>
                        <select class="form-control" name="BooksCategory" id="">
                            <option value="Medical">Medical</option>
                            <option value="University">University</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Course Status</label>
                        <select class="form-control" name="BooksStatus" id="">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Course Fee </label>
                        <input type="number" name="BooksPrice" class="form-control" placeholder="Amount">
                    </div>

                    <div class="text-right">
                        <a type="button" href="{{ route('bookIndex') }}"  class="btn btn-primary">Back to Course <i class="icon-square-left position-right"></i></a>
                        <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                       
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection