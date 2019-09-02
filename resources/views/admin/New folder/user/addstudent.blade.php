@extends('layouts.admin')
@section('content')


<h3 class="text-center text-success">Grade</h3>


<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Grade  
</button></div>


<p class="lead section-title">Student Info:</p>

                            <div class="row">
                           
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="name">Frist Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="name" value="" required minlength="2" maxlength="255">
                                        <span class="fa fa-info form-control-feedback"></span>

                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                <div class="form-group has-feedback">
                                        <label for="name">Last Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="name" value="" required minlength="2" maxlength="255">
                                        <span class="fa fa-info form-control-feedback"></span>

                                    </div>
                                    </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="dob">Date of birth<span class=" text-danger fa fa-calendar">*</span></label>
                                        <input type='date' class="form-control" name="dob" placeholder="date" value="" required minlength="10" maxlength="255" />

                                    </div>
                                </div>
                                

                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                      

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        


                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                       

                                        <!-- <span class="form-control-feedback"></span> -->

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        


                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="photo">Photo<span class="text-danger">[min 150 X 150 size and max 200kb]</span></label>
                                        <input  type="file" class="form-control" accept=".jpeg, .jpg, .png" name="photo" placeholder="Photo image">


                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="email">Email</label>
                                        <input  type="email" class="form-control" name="email"  placeholder="email address" value="" maxlength="100" >
                                        <span class="fa fa-envelope form-control-feedback"></span>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="phone_no">Phone/Mobile No.</label>
                                        <input  type="text" class="form-control" name="phone_no" placeholder="phone or mobile number" value="" maxlength="15">
                                        <span class="fa fa-phone form-control-feedback"></span>

                                    </div>
                                </div>
                            </div>
                        
                            <p class="lead  section-title">Guardian Info:</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="father_name">Father Name</label>
                                        <input type="text" class="form-control" name="father_name" placeholder="name" value=""  maxlength="255">
                                        <span class="fa fa-info form-control-feedback"></span>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="father_phone_no">Father Phone/Mobile No.</label>
                                        <input  type="text" class="form-control" name="father_phone_no" placeholder="phone or mobile number" value="" maxlength="15">
                                        <span class="fa fa-phone form-control-feedback"></span>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="mother_name">Mother Name</label>
                                        <input  type="text" class="form-control" name="mother_name" placeholder="name" value="" maxlength="255">
                                        <span class="fa fa-info form-control-feedback"></span>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="mother_phone_no">Mother Phone/Mobile No.</label>
                                        <input  type="text" class="form-control" name="mother_phone_no"  placeholder="phone or mobile number" value=""  maxlength="15">
                                        <span class="fa fa-phone form-control-feedback"></span>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="guardian">Local Guardian</label>
                                        <input  type="text" class="form-control" name="guardian" placeholder="name" value="" maxlength="255">
                                        <span class="fa fa-info form-control-feedback"></span>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="guardian_phone_no">Guardian Phone/Mobile No.</label>
                                        <input  type="text" class="form-control" name="guardian_phone_no" placeholder="phone or mobile number" value=""  maxlength="15">
                                        <span class="fa fa-phone form-control-feedback"></span>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="present_address">Present Address</label>
                                        <textarea name="present_address" class="form-control"  maxlength="500" ></textarea>
                                        <span class="fa fa-location-arrow form-control-feedback"></span>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="permanent_address">Permanent Address<span class="text-danger">*</span></label>
                                        <textarea name="permanent_address" class="form-control" required minlength="10" maxlength="500" ></textarea>
                                        <span class="fa fa-location-arrow form-control-feedback"></span>

                                    </div>
                                </div>
                            </div>
                            <p class="lead section-title">Academic Info:</p>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group has-feedback">
                                        <label for="regi_no">Registration No.

                                        </label>
                                        <input  type="text" class="form-control" name="regi_no" readonly  placeholder="will auto generate after saving the form" value="">
                                        <span class="fa fa-id-card form-control-feedback"></span>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="class_id">Class Name

                                            <span class="text-danger">*</span>
                                        </label>



                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="section_id">Section

                                            <span class="text-danger">*</span>
                                        </label>

                                        <span class="form-control-feedback"></span>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="shift">Shift

                                        </label>

                                        <span class="form-control-feedback"></span>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="card_no">ID Card No.</label>
                                        <input  type="text" class="form-control" name="card_no"  placeholder="id card number" value=""  min="4" maxlength="50">
                                        <span class="fa fa-id-card form-control-feedback"></span>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="roll_no">Roll No.</label>
                                        <input  type="number" class="form-control" name="roll_no"  placeholder="roll number" value=""  maxlength="20">
                                        <span class="fa fa-sort-numeric-asc form-control-feedback"></span>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="board_regi_no">Board Registration No.</label>
                                        <input  type="number" class="form-control" name="board_regi_no"  placeholder="registration number" value=""  maxlength="20">
                                        <span class="fa fa-sort-numeric-asc form-control-feedback"></span>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="fourth_subject">Elective/4th subject

                                        </label>

                                        <span class="fa form-control-feedback"></span>

                                    </div>
                                </div>
                            </div>

                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group has-feedback">
                                            <label for="academic_year">Academic Year

                                            </label>

                                                <br><span class="text-danger">Year can't be change.</span>

                                            <span class="form-control-feedback"></span>


                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group has-feedback">
                                            <label for="fourth_subject">Alternate Elective/4th subject

                                            </label>

                                            <span class="fa form-control-feedback"></span>

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group has-feedback">
                                            <label for="house">House Name
                                                <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="if student group by its hostel name"></i>
                                            </label>
                                            <input  type="text" class="form-control" value="" name="house" placeholder="leave blank if not needed"  maxlength="100">
                                            <span class="glyphicon glyphicon-info-sign form-control-feedback"></span>

                                        </div>
                                    </div>

                                </div>

                                <p class="lead section-title">Access Info:</p>
                                <div class="row">

                                    <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="username">Username</label>
                                        <input  type="text" class="form-control" value="" name="username" placeholder="leave blank if not need to create user"  minlength="5" maxlength="255">
                                        <span class="glyphicon glyphicon-info-sign form-control-feedback"></span>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="password">Passwrod</label>
                                        <input type="password" class="form-control" name="password" placeholder="leave blank if not need to create user" >
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                    </div>
                                </div>


                            </div>


                        </div>
                     



       <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Default form</h4>
                      <p class="card-description">
                        Basic form layout
                      </p>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>




@endsection