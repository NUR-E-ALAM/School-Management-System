@extends('layouts.admin')
@section('content')


<h3 class="text-center text-success"> Minute</h3>
@include('admin.exam.form.message')
@include('admin.exam.form.formerror')



<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Minute
</button></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-target="#exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Minute</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      {!! Form::open(array('route'=>'admin.minute.store','class'=>'form','id'=>'ccccc'))!!}
      {!! Form::hidden('examid','', ['id' => 'examid']) !!}
       {!!Form::label('Minute Name')!!}
       {!! Form::text('minute_name', null,
    array('required','id'=>'minute_name', 'class'=>'form-control',
    'placeholder'=>'Add New Hour')) !!} <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
        <input type="button" id="addBtn" value="Save Minute" class="btn btn-primary">
{!! Form::close()!!}
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


            <th>Minute Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    @forelse ($minute  as $minutee)
    <tr>
        {{-- <td>{{$i++ }}</td> --}}
        <td>{{ $minutee->minute_name}}</td>



         <td>
         <button id="editBtn" rid="{{$minutee->id}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
        </td>



        <td>
        <button id="deleteBtn" rid="{{$minutee->id}}" type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>

     </td>
    </tr>
    @empty
    <tr><td colspan="5" class="bg-danger">No Hours to show</td></tr>
@endforelse
    </table>
{!! $minute->links() !!}
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
    if($(this).val() == 'Save Minute'){
      // alert($("#session_name").val());
// alert($("#session_id").val());
// alert($("#class_id").val());
// alert($("#active_id").val());

$.ajax({
                url:url+'/admin/minute',
                method: "POST",
                data:{
                    minute_name:$("#minute_name").val()


                },
                success:function(d){
                  if(d.success){
                    //alert(d.message);
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
                 url:url+'/admin/minute/'+$("#examid").val(),
                method: "PUT",
                type: "PUT",
                data:{
                    minute_name: $("#minute_name").val()



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
            }
          });
             //Update shift end





  //Edit shift
  $(".card").on('click','#editBtn', function(){
            //alert()
            $examid = $(this).attr('rid');
            // console.log($examid);
            // return;
            $info_url = url + '/admin/minute/'+$examid+'/edit';
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
            $info_url = url + '/admin/minute/'+$examid;
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
            $("#minute_name").val(data.minute_name);
            $("#examid").val(data.id);
            $("#addBtn").val('Update');


        }
        function clearform(){
            $('#ccccc')[0].reset();
            $("#addBtn").val('Save Minute');
        }

$(".close").click(function(){
  clearform();
});




});

</script>


@endsection
