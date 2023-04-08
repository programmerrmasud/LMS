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

        <form class="steps-validation" action="#">
            <h6>Personal data</h6>
            <fieldset>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Applicant name: <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control required" placeholder="John Doe">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>District <span class="text-danger">*</span></label>
                            <select name="position" data-placeholder="Select position" class="select required">
                                <option></option>
                                <optgroup label="Developer Relations">
                                    <option value="1">Sales Engineer</option>
                                    <option value="2">Ads Solutions Consultant</option>
                                    <option value="3">Technical Solutions Consultant</option>
                                    <option value="4">Business Intern</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="tel" class="form-control" placeholder="01700000000" >
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Area  <span class="text-danger">*</span></label>
                            <select name="position" data-placeholder="Select position" class="select required">
                                <option></option>
                                <optgroup label="Developer Relations">
                                    <option value="1">Sales Engineer</option>
                                    <option value="2">Ads Solutions Consultant</option>
                                    <option value="3">Technical Solutions Consultant</option>
                                    <option value="4">Business Intern</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Verified Phone</label>
                            <input type="text" name="tel" class="form-control" placeholder="01700000000" >
                        </div>
                    </div>

                    <div class="col-md-6">
                       
                   
                        <div class="form-group">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="tel" class="form-control" placeholder="01700000000" >
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
                            <select name="position" data-placeholder="Select position" class="select required">
                                <option></option>
                                <optgroup label="Developer Relations">
                                    <option value="1">Sales Engineer</option>
                                    <option value="2">Ads Solutions Consultant</option>
                                    <option value="3">Technical Solutions Consultant</option>
                                    <option value="4">Business Intern</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Session</label>
                            <select name="university-country" data-placeholder="Choose a Country..." class="select">
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
                            <select name="position" data-placeholder="Select position" class="select required">
                                <option></option>
                                <optgroup label="Developer Relations">
                                    <option value="1">Sales Engineer</option>
                                    <option value="2">Ads Solutions Consultant</option>
                                    <option value="3">Technical Solutions Consultant</option>
                                    <option value="4">Business Intern</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Book <span class="text-danger">*</span></label>
                            <select name="position" data-placeholder="Select position" class="select required">
                                <option></option>
                                <optgroup label="Developer Relations">
                                    <option value="1">Sales Engineer</option>
                                    <option value="2">Ads Solutions Consultant</option>
                                    <option value="3">Technical Solutions Consultant</option>
                                    <option value="4">Business Intern</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Submit time</label>
                            <select name="university-country" data-placeholder="Choose a Country..." class="select">
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

                        <div class="form-group">
                            <label>Course Fee </label>
                            <input type="text" name="education-language" placeholder="4500 " class="form-control">
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