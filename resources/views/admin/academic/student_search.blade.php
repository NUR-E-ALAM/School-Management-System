@extends('layouts.admin')
@section('content')


<h3 class="text-center text-success">Attendance</h3>
@include('admin.exam.form.message')
@include('admin.exam.form.formerror')

{{-- model area end --}}

<div class="container">
        {!! Form::open(array('route'=>'admin.daily_attendance.create','method'=>'GET','id'=>'f'))!!}
               <div class="row">


                              {{-- <div class="col-md-2">
                               <input type="date" name="date" id="date">



                                </div> --}}

                              <div class="col-md-2">

                                <select name="session" id="session_id" class="form-control" >
                                    <option value="">--- Select Session ---</option>
                                    @foreach ($session as $key => $value)

                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>

                                  </div>
                              <div class="col-md-2">

                                <select name="class" id="class_id"  class="form-control" style="">
                                    <option value="">--- Select Class ---</option>
                            </select>

                                  </div>

                              <div class="col-md-2">

                               <select name="shift" id="section_id" class="form-control" style="">
                                    <option value="">--- Select Section ---</option>
                            </select>


                                </div>
                              <div class="col-md-2">

                                <select name="section" id="section_id" class="form-control" style="">
                                    <option value="">--- Select Section ---</option>
                            </select>


                                  </div>
                                  <div class="col-md-2">

                                    <input type="submit" id="addBtn" value="Take Student" class="btn btn-primary">

                                    {!! Form::close()!!}
                              </div>
                                </div>

                            </div>
<hr>

<div class="container">
    
          {!! Form::open(array('route'=>'admin.daily_attendance.create','method'=>'GET','id'=>'f'))!!}
               <div class="row">


                              <div class="col-md-2">
                               <input type="date" name="date" id="date">



                                </div>

                              <div class="col-md-2">

                                <select name="session" id="session_id" class="form-control" >
                                    <option value="">--- Select Session ---</option>
                                    @foreach ($session as $key => $value)

                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>

                                  </div>
                              <div class="col-md-2">

                                <select name="class" id="class_id"  class="form-control" style="">
                                    <option value="">--- Select Class ---</option>
                            </select>

                                  </div>

                              <div class="col-md-2">

                               <select name="shift" id="section_id" class="form-control" style="">
                                    <option value="">--- Select Section ---</option>
                            </select>


                                </div>
                              <div class="col-md-2">

                                <select name="section" id="section_id" class="form-control" style="">
                                    <option value="">--- Select Section ---</option>
                            </select>


                                  </div>
                                  <div class="col-md-2">

                                    <input type="submit" id="addBtedtn" value="Show Attendance" class="btn btn-primary">

                                    {!! Form::close()!!}
                              </div>
                                </div>

                            </div>





@endsection
  @section('script')


<script>
  $(document).ready(function() {
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
        }            });
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

