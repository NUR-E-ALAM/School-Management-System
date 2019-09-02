@extends('layouts.admin')
@section('content')
 @include('partial.message')
 @include('partial.form_errors')
{{-- {{dd($student_edit)}} --}}
{!! Form::model($student, array('method'=>'PATCH','route'=>['admin.addstudent.update',$student->user_id,],'class'=>'form','files' => true))!!}
 <input type="hidden" value="{{$student->user_id}}" />

<h1 class="text-center text-success">Update Student Information</h1>

<div class="text-right"> <a class="btn btn-warning" href="{{url('admin/addstudent')}}">View Student</a></div>



<p class="lead section-title">Student Info:</p>


    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                            <div class="row">


                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="name"><span class="fa fa-graduation-cap"></span>Frist Name<span class="text-danger">*</span>

                                        </label>
                                        {!! Form::text('first_name', null,array('required', 'id'=>'first_name', 'class'=>'form-control')) !!}


                                    </div>

                                </div>
                                <div class="col-md-4">
                                <div class="form-group has-feedback">
                                        <label for="last_name"> <span class="fa fa-graduation-cap"></span>Last Name<span class="text-danger">*</span>

                                        </label>

                                        {!! Form::text('last_name', null,array('required', 'id'=>'last_name', 'class'=>'form-control')) !!}


                                    </div>
                                    </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="dob"><span class="fa fa-calendar"></span>Date of birth<span class=" text-danger">*</span>

                                        </label>

                                        {!! Form::date('date_of_birth', null,array('required', 'id'=>'date_of_birth', 'class'=>'form-control')) !!}

                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                {{-- <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="photo"> <span class="fa fa-camera"></span>Photo<span class="text-danger">[min 150 X 150 size and max 200kb]</span>

                                        </label>
                                        {!! Form::file('image', null, array('required', 'id'=>'picture', 'class'=>'form-control','value'=>'image',)) !!}


                                    </div>
                                </div> --}}

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="contact_no"> <span class="fa fa-phone"></span>Phone/Mobile No.


                                        </label>

                                        {!! Form::number('contact_no', null,array('required', 'id'=>'contact_no', 'class'=>'form-control')) !!}


                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="language_id"> <span class="fa fa-phone"></span>Language


                                        </label>

                                        {!! Form::select('language_id',$language, null,array('required', 'id'=>'language_id', 'class'=>'form-control')) !!}



                                    </div>

                                </div>
                                      <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="religion_id">Religion<span class="text-danger">*</span>

                           </label>

                           {!! Form::select('religion_id', $religion, null,
array('id'=>'religion_id','class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="religion_id">Religion<span class="text-danger">*</span>



                           </label>

                           {!! Form::select('religion_id', $religion, null,
array('id'=>'religion_id','class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="blood_group">Blood Group<span class="text-danger">*</span>

                                        </label>

                                        {!! Form::select('blood_id', $blood_groups, null,
array('name'=>'blood_id','class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="gender_id">Gender<span class="text-danger">*</span>

                                        </label>
                                        {!! Form::select('gender_id', $gender, null,
array('id'=>'gender_id','class'=>'form-control')) !!}
                                        <!-- <span class="form-control-feedback"></span> -->

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="nationality_id">Nationality<span class="text-danger">*</span>
                                            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="select nationality"></i>
                                        </label>

                                        {!! Form::select('nationality_id', $nationality, null,
array('id'=>'nationality_id','class'=>'form-control')) !!}
                                    </div>
                                </div>
                                    </div></div>
                                </div>
                            <p class="lead  section-title">Guardian Info:</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="father_name"><span class="fa fa-male"></span>Father's Name </label>

                                        {!! Form::text('father_name', null,array('required', 'id'=>'first_name', 'class'=>'form-control')) !!}


                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="mother_name"><span class="fa fa-female"></span>Mother's Name </label>
                                        {!! Form::text('mother_name', null,array('required', 'id'=>'first_name', 'class'=>'form-control')) !!}
                                        <span class=" form-control-feedback"></span>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="facontact"><span class="fa fa-phone"></span>Guardian Phone </label>
                                        {!! Form::number('facontact', null,array('required', 'id'=>'facontact', 'class'=>'form-control')) !!}


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

                        {!! Form::model($academy, array('method'=>'PATCH','route'=>['admin.addstudent.update',$academy->user_id],'class'=>'form1','files' => true))!!}
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                            <p class="lead section-title">Academic Info:</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="session_id">Running Session

                                  </label>
                                  <select name="session" class="form-control" >
    <option value="">--- Select Session ---</option>
    @foreach ($session as $key => $value)

        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
</select>

                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="class_id">Class Name

                                            <span class="text-danger">*</span>
                                        </label>
                                        <!-- {!! Form::select('class_id', $classname, null,
array('id'=>'class_id','class'=>'form-control')) !!} -->

<select name="class" class="form-control" style="">
                                                    <option value="">--- Select Class ---</option>
                                            </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="shift_id">Shift

                                        </label>

                                        <!-- {!! Form::select('shift_id', $shift, null,
array('id'=>'shift_id','class'=>'form-control')) !!} -->
<select name="shift" class="form-control" style="">
        <option value="">--- Select shift ---</option>
</select>


                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="section_id ">Section

                                            <span class="text-danger">*</span>
                                        </label>

                                        <!-- {!! Form::select('section_id', $section, null,
array('id'=>'section_id ','class'=>'form-control')) !!} -->
<select name="section" class="form-control" style="">
        <option value="">--- Select Section ---</option>
</select>

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="roll_no">Roll No</label>
                                        {!!Form::number('roll_no', null, array('id'=>'roll_no','class'=>'form-control','value'=>'{{$student->roll_no}}')) !!}

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        {{-- @foreach($academy as $acadname) --}}

                                        <label for="reg_no">Registration No</label>

                                        {!!Form::number('reg_no', null, array('id'=>'reg_no','class'=>'form-control','value'=>'{{$student->reg_no}}')) !!}


                                     {{-- @endforeach --}}

                                    </div>
                                </div>
                                  <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="active_id">Active</label>
                                        {!! Form::select('active_id', $active, null,
array('id'=>'active_id ','class'=>'form-control')) !!}



                                    </div>
                                </div>

                                </div>



<hr>
</div>
</div>
</div>


                        </div>
                        <div class="box-footer">

                            <button type="submit" class="btn btn-info pull-right">Update Student</button>

                        </div>
                        {!! Form::close()!!}
                        @endsection
                        @section('script')


                        <script>
      $(document).ready(function () {
        var url = "{{URL::to('/')}}";
            $('select[name="session"]').on('change', function() {
                var sessionID = $(this).val();

                // alert(sessionID);return;
                if(sessionID) {
                    $.ajax({
                        url: url + '/admin/selectclass/'+sessionID,
                        //url: '/selectclass/'+sessionID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                           // console.log(data);

                            $('select[name="class"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="class"]').append('<option value="'+ value.id +'">'+ value.class_name +'</option>');
                            });


                        }
                    });
                }else{
                    $('select[name="class_name"]').empty();
                }
            });
            var url = "{{URL::to('/')}}";
            $('select[name="class"]').on('change', function() {
                var classID = $(this).val();

                 //alert(classID);return;
                if(classID) {
                    $.ajax({
                        url: url + '/admin/selectshift/'+classID,
                        //url: '/selectclass/'+sessionID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                           // console.log(data);

                            $('select[name="shift"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="shift"]').append('<option value="'+ value.id +'">'+ value.shift_name +'</option>');
                            });


                        }
                    });
                }else{
                    $('select[name="shift_name"]').empty();
                }
            });
            var url = "{{URL::to('/')}}";
            $('select[name="shift"]').on('change', function() {
                var shiftID = $(this).val();

                 //alert(classID);return;
                if(shiftID) {
                    $.ajax({
                        url: url + '/admin/selectsection/'+shiftID,

                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                           // console.log(data);

                            $('select[name="section"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="section"]').append('<option value="'+ value.id +'">'+ value.section_name +'</option>');
                            });


                        }
                    });
                }else{
                    $('select[name="section_name"]').empty();
                }
            });
      });
      </script>

@endsection

