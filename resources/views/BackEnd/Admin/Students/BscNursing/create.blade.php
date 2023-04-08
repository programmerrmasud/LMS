@extends('BackEnd.Admin.Layouts.app')
@section('title','Add BSc Student')
@section('content')
<div class="content"> 
    <div class="col-md-6">
        <form action="{{ route('bscStore')  }}" method="POST" >
            @csrf
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Add a BSc Student</h6>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label>Name </label>
                        <input type="text" name="BscStName" class="form-control" placeholder="Student Name">
                    </div>
                    <div class="form-group">
                        <label>Phone </label>
                        <input type="phone" name="BscStPhone" class="form-control" placeholder="Student Phone">
                    </div>
                    <div class="form-group">
                        <label>Verified Phone </label>
                        <input type="phone" name="BscStVeriPhone" class="form-control" placeholder="Verified Phone">
                    </div>

                    <div class="form-group">
                        <label>Course Type</label>
                        <select class="form-control" name="BscStCours" id="">
                            <option value="Full Coures">Full Coures</option>
                            <option value="Exam Batch">Exam Batch</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Books</label>
                        <select class="form-control" name="BscStBooks" id="">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>District</label>
                        <select class="form-control" name="BscStDistrict" id="">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Area</label>
                        <select class="form-control" name="BscStArea" id="">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Address </label>
                        <input type="phone" name="BscStAddress" class="form-control" placeholder="House/Village/Road ">
                    </div>

                    <div class="form-group">
                        <label>Course Fee </label>
                        <input type="number" name="BscStFee" class="form-control" placeholder="Amount">
                    </div>

                    <div class="text-right">
                        <a type="button" href="{{ route('bscIndex') }}"  class="btn btn-primary">Back to Course <i class="icon-square-left position-right"></i></a>
                        <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                       
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection