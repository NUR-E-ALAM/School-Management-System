@extends('layouts.admin')

@section('content')


@include("partial.formerror")
@include("partial.message")
<div class="card p-5">

<h3 class='mx-auto bg-primary p-2 rounded'>Create For Notice</h3>

<div class="text-right"> <button id="add_manue" type="button" class=" text-right btn  btn-success rounde mdt" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Notice  
</button>

</div>


{{-- model area start --}}

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" data-target="#exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Exam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
      {!! Form::open(array('route'=>'admin.notice.store','class'=>'form','id'=>'ccccc'))!!}
      {!! Form::hidden('noticeid','', ['id' => 'noticeid']) !!}
      <div class="form-group">
    {!! Form::label('notice_title','Notice Title') !!}
    {!! Form::text('notice_title', null,
    array('required','id'=>'notice_title1', 'class'=>'form-control prc',
    'placeholder'=>'Notice Title')) !!}
</div>

<div class="form-group">
    {!! Form::label('notice_description','Notice Description') !!}
    {!! Form::textarea('notice_description', null,
    array('required','id'=>'notice_description', 'class'=>'form-control prc',
    'placeholder'=>'Notice Description')) !!}
</div>

<input type="button" id="addBtn" value="Save Notice" class="btn btn-primary">
<!-- {!! Form::button('Save Account', array('class'=>'btn btn-primary float-right mt-3','id'=>'addBtn')) !!} -->
</div>





</div>
{!! Form::close() !!}

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close1" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary close1">Save changes</button>
      </div>
    </div>
  </div>

</div>


{{-- model area end --}} 






<div class="card">
            <div class="card-body">

 <table class="table table-condensed table-hover table-responsive table-bordered">
        <tr>
            <th>No</th>
            <th>Notice Title</th>
            <th>Notice Description</th>
            <th>Action</th>
        </tr>
       <?php $i = 1; ?>
    @forelse ($newnotice  as $account)
   
    <tr>
        <td>{{$i++ }}</td>

      
        <td>{{ $account->title}}</td>
        <td>{{ $account->description}}</td>
       
        
    
    
    <td>
     
     <button id="editBtn" rid="{{$account->id}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
       <button id="deleteBtn" rid="{{$account->id}}" type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
 
         </td>  
       
    
        
   
          
      
       
    </tr>
    @empty
    <tr><td colspan="5" class="bg-danger">No manue to show</td></tr>
@endforelse
    </table>
{!! $newnotice->links() !!}
</div>
</div>


@endsection

<!-- here is the script section -->

@section('script')
<script>
$(document).ready(function () {
 //header for csrf-token is must in laravel 
 $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
        
  var url = "{{URL::to('/')}}";





//Create Start notice

 $("#add_manue").click(function(){
	  clearform();
	  });

  $("#addBtn").click(function(){
    if($(this).val() == 'Save Notice'){
//alert($("#manue_name1").val());


$.ajax({
                url:url+'/admin/notice',
                method: "POST",
                data:{
                    title: $("#notice_title1").val(),
                    description: $("#notice_description").val(),
                    
                },
                success:function(d){
                  if(d.success){
                    alert(d.message);
                    location.reload();
                    clearform();
                    
                  }
                },error:function(d){
                  console.log(d);
                }
                
            });
    }
  });

    //Create end notice



//Update notice


$("#exampleModal").on('click','#addBtn', function(){
   
   if($(this).val() == 'Update'){
//alert($("#noticeid").val());
//alert($("#notice_title1").val());
 //alert($("#notice_description").val());
      $url = url+'/notice/'+$("#noticeid").val(),
      alert($url);
               $.ajax({
                url:url+'/admin/notice/'+$("#noticeid").val(),
               // url:url+'/smsmanue/'+$("#manueid").val(),
               method: "PUT",
               type: "PUT",
               data:{
                title: $("#notice_title1").val(),
                description: $("#notice_description").val(),
                
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
            //Update notice end




//edit notice start
 $(".card").on('click','#editBtn', function(){
    //alert('for edit button');
    $noticeid = $(this).attr('rid');
            //console.log($manueid);
            //return;
            //alert($manueid);
            $info_url = url + '/admin/notice/'+$noticeid+'/edit';
            // console.log($info_url);
            //alert($info_url);
            //return;
            $.get($info_url,{},function(d){
                //console.log(d);
               
                 populateForm(d);
                 location.hash = "ccccc";
                 $("#exampleModal").modal("toggle");
            });

});

//edit notice end


//Delete notice 
$(".card").on('click','#deleteBtn', function(){
            if(!confirm('Sure?')) return;
            $noticeid = $(this).attr('rid');          
            $info_url = url + '/admin/notice/'+$noticeid;			
            $.ajax({
                url:$info_url,
                method: "DELETE",
                type: "DELETE",
                data:{                    
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
        }); 
        
        //Delete notice end

function populateForm(data){
            $("#notice_title1").val(data.title);
            $("#notice_description").val(data.description);
            $("#noticeid").val(data.id);
            $("#addBtn").val('Update');
           
           
        }

  function clearform(){
            $('#ccccc')[0].reset();
            $("#addBtn").val('Save Notice');
        } 
$(".close1").click(function(){
  clearform();
});		
 

});

</script>

@endsection