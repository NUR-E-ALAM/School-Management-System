@extends('layouts.admin')
@section('content')
<h3 class="text-center text-success">Students Informations </h3>
<div class="text-right"> <a class="btn btn-warning" href="{{url('admin/addstudent/create')}}">Add Student</a>
@include('partial/message')
@include('partial/formerror')

<div class="card">
            <div class="card-body">

 <table class="table table-condensed table-hover table-responsive">
        <tr>
           
            <th>name</th>
            <th>picture</th>
            <th>email</th>
            <th>Active</th>
            <th>Details</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    
    @foreach ($studentall  as $studentinfo)
     {{-- {{dd($show_teacher)}} --}}
    <tr>
      
        <td>{{ $studentinfo->name}}</td>
               <td><img src="{{asset('adminasset/images/teacherimages/'.$studentinfo->image)}}" class='rounded' width="300px;" height="500px;" alt="image not found"></td>
               {{-- @forelse ($studentinfo->User as $users)
               {{dd($users)}}
                   <td>{{ $users->email}}</td>
               @empty
                  <td>No data</td>
                       
             @endforelse --}}


            <td>{{ $studentinfo->email}}</td>

            <td>{{ $studentinfo->role_id}}</td>
      

            <td>
      <a href="{{url('admin/addstudent/'.$studentinfo->id) }}" class="btn btn-primary"><i class="fa fa-user-md"></i></a>
      
        </td> 
         <td>
                  <a href="{{url('admin/addstudent/'.$studentinfo->id.'/edit') }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        </td> 
        
        <td>
          {!! Form::open(array('route' => array('admin.addstudent.destroy', $studentinfo->id), 'method' => 'delete')) !!}
             
             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></button>

             {!! Form::close() !!}
     </td>
    </tr>
   
    {{-- <tr><td colspan="5" class="bg-danger">No Classroom to show</td></tr> --}}
@endforeach
    </table>
{!! $studentall->links() !!}
</div>
</div>
@endsection


