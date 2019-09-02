@extends('layouts.admin')
@section('content')


<h3 class="text-center text-success">Section</h3>
@include('admin.exam.form.message')
@include('admin.exam.form.formerror')



<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Section
</button></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-target="#exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Section</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      {!! Form::open(array('route'=>'admin.section.store','class'=>'form','id'=>'ccccc'))!!}
      {!! Form::hidden('examid','', ['id' => 'examid']) !!}

      <div class="form-group">
            {!!Form::label('Session Name')!!}
        <select name="session" id="session_id" class="form-control" >
            <option value="">--- Select Session ---</option>
            @foreach ($session as $key => $value)

                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
            {!!Form::label('Class Name')!!}
        <select name="class" id="class_id"  class="form-control" style="">
            <option value="">--- Select Class ---</option>
    </select>

    </div>
    <div class="form-group">
            {!!Form::label('Shift Name')!!}
            <select name="shift" id="shift_id" class="form-control" style="">
                    <option value="">--- Select shift ---</option>
            </select>

    </div>
    <div class="form-group">
        {!!Form::label('Section Name')!!}
        {!! Form::text('section_name', null,
     array('required','id'=>'section_name', 'class'=>'form-control',
     'placeholder'=>'Add Shift Name')) !!}

    </div>


         <div class="form-group">
    {!! Form::label('Active') !!}
    {!! Form::select('active_id',$active ,null,
    array('required','id'=>'active_id', 'class'=>'form-control')) !!}
</div>


      <div class="modal-footer">
           <input type="button" id="addBtn" value="Save Section" class="btn btn-primary">
{!! Form::close()!!}
        <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
</div>


{{-- model area end --}}

<br>
<div class="card">
            <div class="card-body">

 <table class="table table-condensed table-hover table-responsive">
        <tr>

            <th>Session</th>
            <th>Class Name</th>
            <th>Section Name</th>
            <th>Action</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    @forelse ($section  as $sec_name)
    <tr>

         <td>{{ $sec_name->session->session_name}}</td>
         <td>{{ $sec_name->classroom->class_name}}</td>
        <td>{{ $sec_name->section_name}}</td>


        <td>@if($sec_name->active_id == "1")
            <span class="text-success">Active</span>
            @else
            <span class="text-warning">Inactive</span>
            @endif</td>

         <td>
           <button id="editBtn" rid="{{$sec_name->id}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>

        </td>
        <td>
           <button id="deleteBtn" rid="{{$sec_name->id}}" type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>

                 </td>
    </tr>
    @empty
    <tr><td colspan="5" class="bg-danger">No Result to show</td></tr>
@endforelse
    </table>
{!! $section->links() !!}
</div>
</div>
</div>


<script type="text/javascript">
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

@section('script')
   <script type="text/javascript">
$(document).ready(function () {
//alert(5); //header for csrf-token is must in laravel
 $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

  var url = "{{URL::to('/')}}";
//Create Start section

 clearform();

  $("#addBtn").click(function(){
    if($(this).val() == 'Save Section'){
 //alert($("#class_id").val());
//alert($("#session_id").val());
 //alert($("#section_name").val());
 //alert($("#shift_name").val());



$.ajax({
                url:url+'/admin/section',
                method: "POST",
                data:{
                    section_name: $("#section_name").val(),
                    session_id: $("#session_id").val(),
                  class_id: $("#class_id").val(),
                  shift_id: $("#shift_id").val(),
                  active_id: $("#active_id").val()
                },
                success:function(d){
                  if(d.success){
                    //alert(d.message);
                    console.log(d);
                    location.reload();
                    clearform();

                  }
                },error:function(d){
                  console.log(d);
                }

            });
    }
  });
    //Create end section

 //Update section
 $("#exampleModal").on('click','#addBtn', function(){

    if($(this).val() == 'Update'){
 //alert($("#examid").val());
// alert($("#exam_start").val());
// alert($("#exam_end").val());
      // $url = url+'/admin/myexam/'+$("#examid").val();
      // console.log($url);
                $.ajax({
                 url:url+'/admin/section/'+$("#examid").val(),
                method: "PUT",
                type: "PUT",
                data:{
                class_id: $("#class_id").val(),
                session_id: $("#session_id").val(),
                  section_name: $("#section_name").val(),
                  shift_id: $("#shift_id").val(),
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
             //Update section end





  //Edit section
  $(".card").on('click','#editBtn', function(){
            //alert()
            $examid = $(this).attr('rid');
            // console.log($examid);
            // return;
            $info_url = url + '/admin/section/'+$examid+'/edit';
            // console.log($info_url);
            // return;
            $.get($info_url,{},function(d){
                //console.log(d);
                 populateForm(d);
                 location.hash = "ccccc";
                 $("#exampleModal").modal("toggle");
            });
        });
        //Edit section end

        //Delete section
        $(".card").on('click','#deleteBtn', function(){
            //alert()
            if(!confirm('Sure?')) return;
            $examid = $(this).attr('rid');
            //console.log($roomid);
            $info_url = url + '/admin/section/'+$examid;
            $.ajax({
                url:$info_url,
                method: "DELETE",
                type: "DELETE",
                data:{
                },
                success: function(d){
                    if(d.success) {
                       // alert(d.message);
                        location.reload();
                        }
                },
                error:function(d){
                    console.log(d);
                }
            });
        });
        //Delete section end





//form populatede

function populateForm(data){
            $("#class_id").val(data.class_id);
            $("#session_id").val(data.session_id);
            $("#section_name").val(data.section_name);
            $("#shift_id").val(data.shift_id);
            $("#active_id").val(data.active_id);
            $("#examid").val(data.id);
            $("#addBtn").val('Update');




        }
        function clearform(){
            $('#ccccc')[0].reset();
            $("#addBtn").val('Save Section');
        }

$(".close").click(function(){
  clearform();
});

});

</script>


@endsection
