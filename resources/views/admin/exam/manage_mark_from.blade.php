@extends('layouts.admin')
@section('content')



<div class="card">
            <div class="card-body">

 <table class="table table-condensed table-hover table-responsive">
        <tr>

            <th>Student Name</th>
            <th>Roll Name</th>
            <th>Picture</th>
            <th>Mark</th>


        </tr>
    
  {!! Form::open(array('route'=>'admin.manage_marks.store',))!!}
   
   
    @forelse ($attendace  as $present)
<input type="hidden" name="subject_id" value="{{$subjectname}}">
<input type="hidden" name="examname_id" value="{{$examname}}">
    <tr>
            {{-- {{ dd($attendace)}} --}}
                 
               <td>{{$present->first_name}}</td>  
                 <td> <input type="hidden" name="roll[]" value="<?php echo $present->roll_no ?>">{{$present->roll_no}}</td>
               
               <td><img class="portrait"  src="{{asset('adminasset/images/teacherimages/'.$present->picture)}}"></td>
               {{-- <td>{{$present->subject_name}}</td>  --}}
            
<td><input type="number" name="mark[]" width='20' id="">
<td> <input type="hidden" name="class_id[]" value="<?php echo $present->class_id ?>" /></td>
                <td> <input type="hidden" name="student_id[]" value="<?php echo $present->student_id ?>" /></td>
                <td> <input type="hidden" name="session_id[]" value="<?php echo $present->session_id ?>" /></td>
                <td> <input type="hidden" name="section_id[]" value="<?php echo $present->section_id ?>" /></td>
                <td> <input type="hidden" name="shift_id[]" value="<?php echo $present->shift_id ?>" /></td>
                <td> <input type="hidden" name="id" value="<?php echo $present->id ?>" /></td>

    </tr>
    @empty
    <tr><td colspan="5" class="bg-danger">No Student to Found</td></tr>
@endforelse
    </table>
    <input type="submit" id="" value="Submit" class="btn btn-primary">

    {!! Form::close()!!}
</div>
</div>
</div>


@endsection
@section('script')
   <script>
$(document).ready(function () {

 //header for csrf-token is must in laravel
 $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

  var url = "{{URL::to('/')}}";
//Create Start shift

 clearform();

  $("#addBtn").click(function(){
    if($(this).val() == 'Save Exam'){
//         alert($("#shift_name").val());
// alert($("#session_id").val());
// alert($("#class_id").val());
// alert($("#active_id").val());

$.ajax({
                url:url+'/admin/shift',
                method: "POST",
                data:{
                  shift_name: $("#shift_name").val(),
                  session_id: $("#session_id").val(),
                  class_id: $("#class_id").val(),
                  active_id: $("#active_id").val()

                },
                success:function(d){
                  if(d.success){
                    alert(d.message);
                    //console.log(d);
                    location.reload();
                    clearform();

                  }
                },error:function(d){
                  console.log(d);
                }

            });
    }
  });
    //Create end shift

 //Update shift
 $("#exampleModal").on('click','#addBtn', function(){

    if($(this).val() == 'Update'){
 //alert($("#examid").val());
// alert($("#exam_start").val());
// alert($("#exam_end").val());
      // $url = url+'/admin/myexam/'+$("#examid").val();
      // console.log($url);
                $.ajax({
                 url:url+'/admin/shift/'+$("#examid").val(),
                method: "PUT",
                type: "PUT",
                data:{
                    shift_name: $("#shift_name").val(),
                    session_id: $("#session_id").val(),
                  class_id: $("#class_id").val(),
                  active_id: $("#active_id").val()

                },
                success: function(d){
                      if(d.success) {
                        alert(d.message);
                        location.reload();



                        }
                },
                error:function(d){
                    console.log(d);
                }
            });
            }
          });
             //Update shift end





  //Edit shift
  $(".card").on('click','#editBtn', function(){
            //alert()
            $examid = $(this).attr('rid');
            // console.log($examid);
            // return;
            $info_url = url + '/admin/shift/'+$examid+'/edit';
            // console.log($info_url);
            // return;
            $.get($info_url,{},function(d){
                //console.log(d);
                 populateForm(d);
                 location.hash = "ccccc";
                 $("#exampleModal").modal("toggle");
            });
        });
        //Edit shift end

        //Delete exam
        $(".card").on('click','#deleteBtn', function(){
            //alert()
            if(!confirm('Sure?')) return;
            $examid = $(this).attr('rid');
            //console.log($roomid);
            $info_url = url + '/admin/shift/'+$examid;
            $.ajax({
                url:$info_url,
                method: "DELETE",
                type: "DELETE",
                data:{
                },
                success: function(d){
                    if(d.success) {
                        //alert(d.message);
                        location.reload();
                        }
                },
                error:function(d){
                    console.log(d);
                }
            });
        });
        //Delete shift end





//form populatede

function populateForm(data){
            $("#shift_name").val(data.shift_name);
            $("#session_id").val(data.session_id);
            $("#class_id").val(data.class_id);
            $("#active_id").val(data.active_id);

            $("#examid").val(data.id);
            $("#addBtn").val('Update');


        }
        function clearform(){
            $('#ccccc')[0].reset();
            $("#addBtn").val('Save Exam');
        }

$(".close").click(function(){
  clearform();
});

// academy onchange
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


});

</script>


@endsection
