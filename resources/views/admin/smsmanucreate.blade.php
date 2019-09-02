@extends('layouts.admin')

@section('content')


@include("partial.formerror")
@include("partial.message")
<div class="card p-5">

<h3 class='mx-auto bg-primary p-2 rounded'>Create For Sms Manue</h3>

<div class="text-right"> <button id="add_manue" type="button" class=" text-right btn  btn-success rounde mdt" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Manue
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

      {!! Form::open(array('route'=>'smsmanue.store','class'=>'form','id'=>'ccccc'))!!}
      {!! Form::hidden('manueid','', ['id' => 'manueid']) !!}
      <div class="form-group">
    {!! Form::label('manue_name','Manue Name') !!}
    {!! Form::text('manue_name', null,
    array('required','id'=>'manue_name1', 'class'=>'form-control prc',
    'placeholder'=>'Manue Name')) !!}
</div>


<input type="button" id="addBtn" value="Save Manue" class="btn btn-primary">
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
            <th>Manu Name</th>
            <th>Action</th>
        </tr>
       <?php $i = 1; ?>
    @forelse ($smsmanues  as $account)

    <tr>
        <td>{{$i++ }}</td>


        <td>{{ $account->manue_name	}}</td>




    <td>

     <button id="editBtn" rid="{{$account->id}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
       <button id="deleteBtn" rid="{{$account->id}}" type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>

         </td>







    </tr>
    @empty
    <tr><td colspan="5" class="bg-danger">No manue to show</td></tr>
@endforelse
    </table>
{!! $smsmanues->links() !!}
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





//Create Start manue

 $("#add_manue").click(function(){
	  clearform();
	  });

  $("#addBtn").click(function(){
    if($(this).val() == 'Save Manue'){
//alert($("#manue_name1").val());


$.ajax({
                url:url+'/smsmanue',
                method: "POST",
                data:{
                    manue_name: $("#manue_name1").val(),

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

    //Create end manue



//Update manue


$("#exampleModal").on('click','#addBtn', function(){

   if($(this).val() == 'Update'){
//alert($("#manueid").val());
//alert($("#manue_name1").val());
// alert($("#exam_end").val());
      //$url = url+''/smsmanue/'+$("#manueid").val();
      //console.log($url);
               $.ajax({
                url:url+'/smsmanue/'+$("#manueid").val(),
               method: "PUT",
               type: "PUT",
               data:{
                manue_name: $("#manue_name1").val(),

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
            //Update manue end




//edit manue start
 $(".card").on('click','#editBtn', function(){
    //alert('for edit button');
    $manueid = $(this).attr('rid');
            //console.log($manueid);
            //return;
            //alert($manueid);
            $info_url = url + '/smsmanue/'+$manueid+'/edit';
            // console.log($info_url);
            //alert($info_url);
            // return;
            $.get($info_url,{},function(d){
                //console.log(d);

                 populateForm(d);
                 location.hash = "ccccc";
                 $("#exampleModal").modal("toggle");
            });

});

//edit manue end


//Delete exam
$(".card").on('click','#deleteBtn', function(){
            //alert()
            if(!confirm('Sure?')) return;
            $manueid = $(this).attr('rid');
            //alert($manueid);
            //console.log($manueid);
            $info_url = url + '/smsmanue/'+$manueid;
			 //$url = url+'/smsmanue/'+$("#manueid").val();
      alert($info_url);
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
        //Delete exam end

function populateForm(data){
            $("#manue_name1").val(data.manue_name);
            $("#manueid").val(data.id);
            $("#addBtn").val('Update');


        }

  function clearform(){
            $('#ccccc')[0].reset();
            $("#addBtn").val('Save Manue');
        }
$(".close1").click(function(){
  clearform();
});


});

</script>

@endsection
