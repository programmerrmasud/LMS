
@extends('BackEnd.Admin.Layouts.app')
@section('title','Update a BSc Student')
@section('content')
<div class="content"> 
    <div class="col-md-6">
        <form action="{{ route('bscUpdate',$data->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <fieldset>
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Update a BSc Student</h6>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label> Name</label>
                        <input type="text" class="form-control" placeholder="Course Name" name="BscStName" value="{{ old('BscStName', $data->BscStName) }}">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="phone" class="form-control" placeholder="Phone No" name="BscStPhone" value="{{ old('BscStPhone', $data->BscStPhone) }}">
                    </div>
                    <div class="form-group">
                        <label>Verified Phone</label>
                        <input type="phone" class="form-control" placeholder="BscStVeriPhone" name="BscStVeriPhone" value="{{ old('BscStVeriPhone', $data->BscStVeriPhone) }}">
                    </div>

                    <div class="form-group">
                        <label>Batch</label>
                        <select class="form-control" name="BscStCours" id="BscStCours">
                            <option value="Medical" {{ ($data->BscStCours === 'Medical') ? 'selected' : '' }}>Medical</option>
                            <option value="University" {{ ($data->BscStCours === 'University') ? 'selected' : '' }}>University</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Books</label>
                        <select class="form-control" name="BscStBooks" id="BscStBooks">
                            <option value="Full Course" {{ ($data->BscStBooks === 'Full Course') ? 'selected' : '' }}>Full Course</option>
                            <option value="Exam Batch" {{ ($data->BscStBooks === 'Exam Batch') ? 'selected' : '' }}>Exam Batch</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>District</label>
                        <select class="form-control" name="BscStDistrict" id="BscStDistrict">
                            <option value="Active" {{ ($data->BscStDistrict === 'Full Course') ? 'selected' : '' }}> Active </option>
                            <option value="Inactive" {{ ($data->BscStDistrict === 'Exam Batch') ? 'selected' : '' }}> Inactive </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Area</label>
                        <select class="form-control" name="BscStArea" id="BscStArea">
                            <option value="Active" {{ ($data->BscStArea === 'Full Course') ? 'selected' : '' }}> Active </option>
                            <option value="Inactive" {{ ($data->BscStArea === 'Exam Batch') ? 'selected' : '' }}> Inactive </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label> Address</label>
                        <input type="text" class="form-control" placeholder="Address" name="BscStAddress" value="{{ old('BscStAddress', $data->BscStAddress) }}">
                    </div>
                   
                    <div class="form-group">
                        <label>Course Fee </label>
                        <input type="number" class="form-control" placeholder="Amount" name="BscStFee" value="{{ old('BscStFee', $data->BscStFee) }}">
                    </div>

                    <div class="text-right" >
                        <a href="{{ route('bscIndex') }}" type="button"   class="btn btn-primary">Back to Course <i class="icon-square-left position-right"></i></a>
                        <button type="submit" class="btn bg-teal-400">Update Student <i class="icon-arrow-right14 position-right"></i></button>
                       
                    </div>
                </div>
            </div>
        </fieldset>
        </form>
    </div>
</div>

@endsection
