@extends('layouts.admin')
@section('content')
<h3 class="text-center text-success">Teacher Informations </h3>
<div class="text-right"> <a class="btn btn-warning" href="{{url('admin/professor/create')}}">Add Teacher</a>
@include('partial/message')
@include('partial/formerror')

<div class="card">
            <div class="card-body">

 <table class="table table-condensed table-hover table-responsive">
        <tr>
            <th>No</th>
            <th>name</th>
            <th>picture</th>
            <th>email</th>
            <th>Active</th>
            <th>Details</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
     <?php  $i=1 ?>
    @foreach ($show_teacher  as $teacherinfo)
     
    <tr>
        <td>{{$i++ }}</td>
        <td>{{ $teacherinfo->name}}</td>
               <td><img src="{{asset('adminasset/images/teacherimages/'.$teacherinfo->image)}}" class='rounded' width="300px;" height="500px;" alt="image not found"></td>
               {{-- @forelse ($teacherinfo->User as $users)
               {{dd($users)}}
                   <td>{{ $users->email}}</td>
               @empty
                  <td>No data</td>
                       
             @endforelse --}}


            <td>{{ $teacherinfo->email}}</td>

            <td>{{ $teacherinfo->active_id}}</td>
      

            <td>
      <a href="{{url('admin/professor/'.$teacherinfo->id) }}" class="btn btn-primary"><i class="fa fa-user-md"></i></a>
      
        </td> 
         <td>
                  <a href="{{url('admin/professor/'.$teacherinfo->id.'/edit') }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        </td> 
        
        <td>
          {!! Form::open(array('route' => array('admin.professor.destroy', $teacherinfo->id), 'method' => 'delete')) !!}
             
             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></button>

             {!! Form::close() !!}
     </td>
    </tr>
   
    {{-- <tr><td colspan="5" class="bg-danger">No Classroom to show</td></tr> --}}
@endforeach
    </table>
{!! $show_teacher->links() !!}
</div>
</div>
@endsection


