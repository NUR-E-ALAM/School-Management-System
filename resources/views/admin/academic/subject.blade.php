@extends('layouts.admin')
@section('content')


<h3 class="text-center text-success">Subject</h3>
@include('admin.exam.form.message') 
@include('admin.exam.form.formerror') 



<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Subject  
</button></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-target="#exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
      {!! Form::open(array('route'=>'admin.subject.store','class'=>'form','id'=>'ccccc'))!!}
      {!! Form::hidden('examid','', ['id' => 'examid']) !!}
       
                 <div class="form-group">
    {!! Form::label('Class Name') !!}
    {!! Form::select('class_id',$classroom, null,
    array('required','id'=>'class_id', 'class'=>'form-control',
    'placeholder'=>'Select Class')) !!}
</div>
  <div class="form-group">
    {!! Form::label('Subject Name') !!}
    {!! Form::text('subject_name', null,
    array('required','id'=>'subject_name', 'class'=>'form-control',
    'placeholder'=>'Add Subject')) !!}
</div>
        
       
         <div class="form-group">
    {!! Form::label('Active') !!}
    {!! Form::select('active_id',$active ,null,
    array('required','id'=>'active_id', 'class'=>'form-control')) !!}
</div>
       

      <div class="modal-footer">
           <input type="button" id="addBtn" value="Save Subject" class="btn btn-primary">  
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
            <th>No</th>
            <th>Class Name</th>
            <th>Subject Name</th>
            <th>Action</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
       <?php $i=1; ?>
    @forelse ($subjects  as $sub_name)
    <tr>
        <td>{{$i++ }}</td>
         
         <td>{{ $sub_name->classroom->class_name}}</td>
        <td>{{ $sub_name->subject_name}}</td>
       
        
        <!-- <td>
            {{ $sub_name->active_id}}
        </td> -->
        <td>@if($sub_name->active_id == "1")
            <span class="text-success">Active</span>
            @else
            <span class="text-warning">Inactive</span>
            @endif</td>
     
          
         <td>
           <button id="editBtn" rid="{{$sub_name->id}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
      
        </td> 
        <td>
           <button id="deleteBtn" rid="{{$sub_name->id}}" type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>
                       
                 </td>
    </tr>
    @empty
    <tr><td colspan="5" class="bg-danger">No Result to show</td></tr>
@endforelse
    </table>
{!! $subjects->links() !!}
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
//Create Start subject

 clearform();

  $("#addBtn").click(function(){
    if($(this).val() == 'Save Subject'){
// alert($("#class_name").val());
// alert($("#sessionname").val());
// alert($("#section_name").val());
// alert($("#shift_name").val());



$.ajax({
                url:url+'/admin/subject',
                method: "POST",
                data:{
                  class_id: $("#class_id").val(),
                  subject_name: $("#subject_name").val(),
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
    //Create end subject
    
 //Update Room
 $("#exampleModal").on('click','#addBtn', function(){
   
    if($(this).val() == 'Update'){
 //alert($("#examid").val());
// alert($("#exam_start").val());
// alert($("#exam_end").val());
      // $url = url+'/admin/myexam/'+$("#examid").val();
      // console.log($url);
                $.ajax({
                 url:url+'/admin/subject/'+$("#examid").val(),
                method: "PUT",
                type: "PUT",
                data:{
                class_id: $("#class_id").val(),
                  subject_name: $("#subject_name").val(),
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
             //Update subject end

  
 


  //Edit subject
  $(".card").on('click','#editBtn', function(){
            //alert()
            $examid = $(this).attr('rid');
            // console.log($examid);
            // return;
            $info_url = url + '/admin/subject/'+$examid+'/edit';
            // console.log($info_url);
            // return;
            $.get($info_url,{},function(d){
                //console.log(d);
                 populateForm(d);
                 location.hash = "ccccc";
                 $("#exampleModal").modal("toggle");
            });
        });        
        //Edit subject end

        //Delete subject 
        $(".card").on('click','#deleteBtn', function(){
            //alert()
            if(!confirm('Sure?')) return;
            $examid = $(this).attr('rid');
            //console.log($roomid);
            $info_url = url + '/admin/subject/'+$examid;
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
        //Delete subject end



            

//form populatede

function populateForm(data){
            $("#class_id").val(data.class_id);
            $("#subject_name").val(data.subject_name);
            $("#active_id").val(data.active_id);
            $("#examid").val(data.id);
            $("#addBtn").val('Update');
           
           
           
           
        }
        function clearform(){
            $('#ccccc')[0].reset();
            $("#addBtn").val('Save Subject');
        } 

$(".close").click(function(){
  clearform();
});

});

</script>


@endsection