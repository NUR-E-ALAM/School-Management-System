@extends('layouts.admin')
@section('content')


<h3 class="text-center text-success">Exam </h3>
@include('admin.exam.form.message') 
@include('admin.exam.form.formerror') 

<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Exam  
</button></div>

{{-- model area start --}}

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Exam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
         {!! Form::open(array('route'=>'admin.myexam.store','class'=>'form'))!!}
        
         @include('admin.exam.form.exam_form')
         <button type="submit" class="btn btn-primary">Save Exam</button>
{!! Form::close()!!}

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
            <th>Exam Name</th>
            <th>Starting Date</th>
            <th>Ending Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
       <?php $i=1; ?>
    @forelse ($examname  as $examnames)
    <tr>
        <td>{{$i++ }}</td>
        <td>{{ $examnames->classexamname}}</td>
        <td>{{ $examnames->examstart}}</td>
        <td>
            {{ $examnames->examend}}
        </td>
          
         <td>
      <a href="{{url('admin/myexam/'.$examnames->id.'/edit') }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        </td> 
        <td>
          {!! Form::open(array('route' => array('admin.myexam.destroy', $examnames->id), 'method' => 'delete')) !!}
             
             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></button>

             {!! Form::close() !!}
     </td>
    </tr>
    @empty
    <tr><td colspan="5" class="bg-danger">No Classroom to show</td></tr>
@endforelse
    </table>
{!! $examname->links() !!}
</div>
</div>
</div>

<script>
//$(document).Ready()

</script>

@endsection