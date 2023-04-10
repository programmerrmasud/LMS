@extends('FrontEnd.UserForm.Layouts.app')
@section('title','User Form')
@section('content')
<div class="content"> 
   <!-- Content area -->
   <div class="content">


    <!-- Wizard with validation -->
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title text-center">Books Booking Form</h6>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <form class="steps-validation" id="bookform" action="{{ route('from.store') }}" method="POST" >
            @csrf
            <h6>Personal data</h6>
            <fieldset>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Applicant name: <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control required" placeholder="Enter Your Name">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>District <span class="text-danger">*</span></label>
                            <select name="district" data-placeholder="Select District" class="select required">
                                <option></option>
                                <optgroup label="Your District">
                                    <option value="Engineer">Sales Engineer</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="phpone" name="phone" class="form-control" placeholder="01700000000" >
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Area  <span class="text-danger">*</span></label>
                            <select name="area" data-placeholder="Select Area" class="select required">
                                <option></option>
                                <optgroup label="Select Area">
                                    <option value="Engineer">Sales Engineer</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Verified Phone</label>
                            <input type="veriphone" name="veriphone" class="form-control" placeholder="01700000000" >
                        </div>
                    </div>

                    <div class="col-md-6">
                       
                   
                        <div class="form-group">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="01700000000" >
                            </div>
                        </div>
                    
                    </div>
                </div>
            </fieldset>

            <h6>Course Data</h6>
            <fieldset>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Enrolled Course<span class="text-danger">*</span></label>
                            <select name="course" data-placeholder="Select course" class="select required">
                                <option></option>
                                <optgroup label="Select Course">
                                    <option value="Engineer">Sales Engineer</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Session</label>
                            <select name="session" data-placeholder="session" class="select">
                                <option></option> 
                                <option value="1">2023</option> 
                                <option value="2">2024</option> 
                                <option value="3">2025</option> 
                                <option value="4">2026</option> 
                                <option value="4">2027</option> 
                                <option value="4">2028</option> 
                                <option value="4">2029</option> 
                                <option value="4">2030</option> 
                                <option value="4">2031</option> 
                                <option value="4">2032</option> 
                                <option value="4">2033</option> 
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Batch  <span class="text-danger">*</span></label>
                            <select name="batch" data-placeholder="Select batch" class="select required">
                                <option></option>
                                <optgroup label="Developer Relations">
                                    <option value="Engineer">Sales Engineer</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Book <span class="text-danger">*</span></label>
                            <select name="book" data-placeholder="Select Book" class="select required">
                                <option></option>
                                <optgroup label="Book">
                                    <option value="Sales Engineer">Sales Engineer</option>   
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Submit time</label>
                            <select name="SubmitTime" data-placeholder="Once or Twice" class="select">
                                <option></option> 
                                <option value="Once">2023</option> 
                                <option value="Twice">2024</option>   
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Course Fee </label>
                            <input type="fee" name="fee" placeholder="Enter Your Fee " class="form-control">
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- /wizard with validation -->

</div>
<!-- /content area -->
</div>

@endsection