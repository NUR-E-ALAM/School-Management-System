<h1 class="text-center text-success">Add Teacher Information</h1>
<div class="text-right"> <a class="btn btn-warning" href="{{url('admin/professor')}}">View Teacher</a></div>
{{-- <div class="text-right"> <a class="btn btn-warning" href="{{route=>('admin.professor.index')}}">View Teacher</a></div> --}}


<p class="lead section-title">Teacher Info:</p>


    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="first_name"><span class="fa fa-graduation-cap"></span>Frist Name<span class="text-danger">*</span>

                                        </label>
                                       {!! Form::text('first_name', null,array('required', 'id'=>'first_name', 'class'=>'form-control')) !!}


                                    </div>

                                </div>
                                <div class="col-md-6">
                                <div class="form-group has-feedback">
                                        <label for="last_name"> <span class="fa fa-graduation-cap"></span>Last Name<span class="text-danger">*</span>

                                        </label>
                                        {!! Form::text('last_name', null,array('required', 'id'=>'last_name', 'class'=>'form-control')) !!}



                                    </div>


                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="picture"> <span class="fa fa-camera"></span>Photo<span class="text-danger">[min 150 X 150 size and max 200kb]</span>

                                        </label>
                                        {!! Form::file('image', null, array('required', 'id'=>'picture', 'class'=>'form-control','value'=>'image',)) !!}


                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="contact_no"> <span class="fa fa-phone"></span>Phone/Mobile No.


                                        </label>
                                         {!! Form::number('contact_no', null,array('required', 'id'=>'contact_no', 'class'=>'form-control')) !!}


                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="national_idcard"> <span class="fa fa-phone"></span>NID Card


                                        </label>
                                       {!! Form::number('national_idcard', null,array('required', 'id'=>'national_idcard', 'class'=>'form-control')) !!}

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="date_of_birth"><span class="fa fa-calendar"></span>Date of birth<span class="text-danger">*</span>

                                        </label>
                                        {!! Form::date('date_of_birth', null,array('required', 'id'=>'date_of_birth', 'class'=>'form-control')) !!}

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

                                        {!! Form::textarea('present_address', null,array('required', 'id'=>'present_address','rows'=>3, 'class'=>'form-control')) !!}


                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="permanent_address"><span class="fa fa-map-marker"></span>Permanent Address<span class="text-danger">*</span>


                                        </label>
                                         {!! Form::textarea('permanent_address', null,array('required', 'id'=>'permanent_address','rows'=>3, 'class'=>'form-control')) !!}

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
                                        <label for="religion_id">Religion<span class="text-danger">*</span>



                           </label>

                           {!! Form::select('religion_id', $religion, null,
array('name'=>'religion_id','class'=>'form-control','placeholder'=>'Select Religion')) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="blood_id">Blood Group<span class="text-danger">*</span>

                                        </label>

                                        {!! Form::select('blood_id', $blood_groups, null,
array('name'=>'blood_id','class'=>'form-control','placeholder'=>'Select Blood')) !!}
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="gender_id">Gender<span class="text-danger">*</span>

                                        </label>
                                        {!! Form::select('gender_id', $gender, null,
array('name'=>'gender_id','class'=>'form-control','placeholder'=>'Select Religion')) !!}
                                        <!-- <span class="form-control-feedback"></span> -->

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="nationaliti_id">Nationality<span class="text-danger">*</span>
                                            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="select nationality"></i>
                                        </label>

                                        {!! Form::select('nationaliti_id', $nationality, null,array('name'=>'nationaliti_id','class'=>'form-control','placeholder'=>'Select Nationality')) !!}
                                    </div>
                                </div>
                                    </div>
                                  <div class="row">

                                  <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="language_id"> <span class="fa fa-phone"></span>Language


                                        </label>
                                        {!!Form::select('language_id',$language,null,array('name'=>'language_id','class'=>'form-control','placeholder'=>'Select Language'))!!}


                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="subject_id">Subject</label>

                                        {!! Form::select('subject_id', $subject_name, null,array('name'=>'subject_id','class'=>'form-control','placeholder'=>'Select Subject')) !!}

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="joining_date"> <span class=""></span>Joining Date


                                        </label>
                                       {!! Form::date('joining_date', null,array('required', 'id'=>'joining_date', 'class'=>'form-control')) !!}


                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="active_id"> <span class=""></span>Active


                                        </label>
                                        {!! Form::select('active_id', $active_name, null,
array('name'=>'active_id','class'=>'form-control','placeholder'=>'Select Activity')) !!}


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
                                      {!! Form::email('email', null,array('required', 'id'=>'email', 'class'=>'form-control')) !!}



                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="password">Passwrod</label>
                                       {!! Form::password('password',array('required', 'id'=>'password', 'class'=>'form-control')) !!}
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                    </div>
                                </div>


                            </div>

                        </div>


                        <div class="box-footer">



                        </div>
                        <button type="submit" class="btn btn-info ">Save Teacher  </button>







