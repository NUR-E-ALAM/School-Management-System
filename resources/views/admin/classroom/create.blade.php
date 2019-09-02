@extends('layouts.admin')
@section('content')


<h3 class="text-center text-success"> Class Room</h3>
@include('admin.exam.form.message')
@include('admin.exam.form.formerror')



<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Class
</button></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-target="#exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      {!! Form::open(array('route'=>'admin.class.store','class'=>'form','id'=>'ccccc'))!!}
      {!! Form::hidden('examid','', ['id' => 'examid']) !!}
        {{-- @include('admin.classroom.classroom_form')
                --}}
<div class="form-group">
    {!! Form::label('Session Name') !!}
    {!! Form::select('session_id',$session, null,
    array('required','id'=>'session_id', 'class'=>'form-control',
    'placeholder'=>'Select Session')) !!}
</div>
  <div class="form-group">
    {!! Form::label('Class Name') !!}
    {!! Form::text('class_name', null,
    array('required','id'=>'class_name', 'class'=>'form-control',
    'placeholder'=>'Add Class')) !!}
</div>


<div class="form-group">
    {!! Form::label('Active') !!}
    {!! Form::select('active_id',$active ,null,
    array('required','id'=>'active_id', 'class'=>'form-control')) !!}
</div>

<div class="modal-footer">
      <input type="button" id="addBtn" value="Save Class" class="btn btn-primary">
      <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>

      </div>
{!! Form::close()!!}


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

            <th>Class Name</th>
            <th>Session</th>

            <th>Action</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    @forelse ($classname  as $classroom)
    <tr>

        <td>{{ $classroom->class_name}}</td>
        <td>{{ $classroom->session->session_name}}</td>
        <td>@if($classroom->active_id == "1")
            <span class="text-success">Active</span>
            @else
            <span class="text-warning">Inactive</span>
            @endif</td>



         <td>
           <button id="editBtn" rid="{{$classroom->id}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>

        </td>
        <td>
           <button id="deleteBtn" rid="{{$classroom->id}}" type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>

                 </td>
    </tr>
    @empty
    <tr><td colspan="5" class="bg-danger">No Result to show</td></tr>
@endforelse
    </table>
{!! $classname->links() !!}
</div>
</div>
</div>


@endsection
@section('script')
   <script>
$(document).ready(function () {
//alert(5); //header for csrf-token is must in laravel
 $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

  var url = "{{URL::to('/')}}";
//Create Start exam

 clearform();

  $("#addBtn").click(function(){
    if($(this).val() == 'Save Class'){
// alert($("#class_name").val());
// alert($("#sessionname").val());
// alert($("#section_name").val());
// alert($("#shift_name").val());



$.ajax({
                url:url+'/admin/class',
                method: "POST",
                data:{
                  class_name: $("#class_name").val(),
                  session_id: $("#session_id").val(),
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
    //Create end exam

 //Update Room
 $("#exampleModal").on('click','#addBtn', function(){

    if($(this).val() == 'Update'){
 //alert($("#examid").val());
// alert($("#exam_start").val());
// alert($("#exam_end").val());
      // $url = url+'/admin/myexam/'+$("#examid").val();
      // console.log($url);
                $.ajax({
                 url:url+'/admin/class/'+$("#examid").val(),
                method: "PUT",
                type: "PUT",
                data:{
                  class_name: $("#class_name").val(),
                  session_id: $("#session_id").val(),
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
             //Update Room end





  //Edit exam
  $(".card").on('click','#editBtn', function(){
            //alert()
            $examid = $(this).attr('rid');
            // console.log($examid);
            // return;
            $info_url = url + '/admin/class/'+$examid+'/edit';
            // console.log($info_url);
            // return;
            $.get($info_url,{},function(d){
                //console.log(d);
                 populateForm(d);
                 location.hash = "ccccc";
                 $("#exampleModal").modal("toggle");
            });
        });
        //Edit exam end

        //Delete exam
        $(".card").on('click','#deleteBtn', function(){
            //alert()
            if(!confirm('Sure?')) return;
            $examid = $(this).attr('rid');
            //console.log($roomid);
            $info_url = url + '/admin/class/'+$examid;
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
        //Delete exam end





//form populatede

function populateForm(data){
            $("#class_name").val(data.class_name);
            $("#session_id").val(data.session_id);
            $("#active_id").val(data.active_id);
            $("#examid").val(data.id);
            $("#addBtn").val('Update');



        }
        function clearform(){
            $('#ccccc')[0].reset();
            $("#addBtn").val('Save Class');
        }

$(".close").click(function(){
  clearform();
});

});

</script>


@endsection
