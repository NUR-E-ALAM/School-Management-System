<h1 class="text-center text-success">Add Teacher Information</h1>
<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp; <a href="{{url('show_professor')}}">Show Teacher </a><i class="fa fa-plus"></i> 
</button></div>


<p class="lead section-title">Teacher Info:</p>

   
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                            <div class="row">
                           
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="name"><span class="fa fa-graduation-cap"></span>Frist Name<span class="text-danger">*</span>
                                        
                                        </label>
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="" required minlength="2" maxlength="255">
                                     

                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                <div class="form-group has-feedback">
                                        <label for="last_name"> <span class="fa fa-graduation-cap"></span>Last Name<span class="text-danger">*</span>
                                           
                                        </label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="" required minlength="2" maxlength="255">
                                        

                                    </div>
                             

                            </div>
                          
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="photo"> <span class="fa fa-camera"></span>Photo<span class="text-danger">[min 150 X 150 size and max 200kb]</span>
                                           
                                        </label>
                                        <input  type="file" class="form-control" accept=".jpeg, .jpg, .png" name="image" placeholder="Photo image">

                                        <!-- {!! Form::file('image', null) !!} -->


                                    </div>
                                </div>
                               
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="phone_no"> <span class="fa fa-phone"></span>Phone/Mobile No.
                                           

                                        </label>
                                        <input  type="text" class="form-control" name="phone_no" placeholder="phone or mobile number" value="" maxlength="15">
                                        

                                    </div>
                                </div>
                                 
                               
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="national_idcard"> <span class="fa fa-phone"></span>NID Card
                                           

                                        </label>
                                        <input  type="text" class="form-control" name="national_idcard" placeholder="national_idcard" value="" maxlength="15">
                                        

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="dob"><span class="fa fa-calendar"></span>Date of birth<span class=" text-danger">*</span>
                                            
                                        </label>
                                        <input type='date' class="form-control" name="dob" placeholder="date" value="" required minlength="10" maxlength="255" />

                                    </div>
                                </div>
                                </div>
                              
                                
                                
                            </div>
                          </div>
                                </div>
                          
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="present_address"> <span class="fa fa-address-book"></span>Present Address </label>
                                        <textarea name="present_address" class="form-control"  maxlength="500" ></textarea>
                                     

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="permanent_address"><span class="fa fa-map-marker"></span>Permanent Address<span class="text-danger">*</span>
                                        
                                        </label>
                                        <textarea name="permanent_address" class="form-control" required minlength="10" maxlength="500" ></textarea>
                                       

                                    </div>
                                </div>
                            </div>
                        <hr>
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="religion">Religion<span class="text-danger">*</span>
                                    
                                    

                           </label>

                           {!! Form::select('religions', $religion, null,
array('name'=>'religion_name','class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="blood_group">Blood Group<span class="text-danger">*</span>

                                        </label>

                                        {!! Form::select('blood_groups', $blood_groups, null,
array('name'=>'blood_name','class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="gender">Gender<span class="text-danger">*</span>
                                       
                                        </label>
                                        {!! Form::select('genders', $gender, null,
array('name'=>'gender_name','class'=>'form-control')) !!}
                                        <!-- <span class="form-control-feedback"></span> -->

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="nationality">Nationality<span class="text-danger">*</span>
                                            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="select nationality"></i>
                                        </label>

                                        {!! Form::select('nationalities', $nationality, 2,
array('name'=>'nation_name','class'=>'form-control')) !!}
                                    </div>
                                </div>
                                    </div>
                                  <div class="row">
                                  
                                  <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="phone_no"> <span class="fa fa-phone"></span>Language
                                           

                                        </label>
                                        <input  type="text" class="form-control" name="language" placeholder="Language" value="" maxlength="15">
                                        

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="phone_no"> <span class=""></span>Joining Date
                                           

                                        </label>
                                        <input  type="date" class="form-control" name="joining_date" placeholder="Joining Date" value="" maxlength="15">
                                        

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="active_name"> <span class=""></span>Active
                                           

                                        </label>
                                        {!! Form::select('active_name', $active_name, null,
array('name'=>'active_name','class'=>'form-control')) !!}
                                        

                                    </div>
                                </div>
                                  </div>
</div>
</div>

<p class="lead section-title">Access Info:</p>
                                <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="email"><span class="fa fa-envelope"></span>Email</label>
                                        <input  type="email" class="form-control" name="email"  placeholder="email address" value="" maxlength="100" >
                                       

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
                        <div class="box-footer">
                         
                            <button type="submit" class="btn btn-info pull-right">Submit Student</button>

                        </div>

             






