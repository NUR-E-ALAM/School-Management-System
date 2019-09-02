@extends('layouts.admin')
@section('content')
<h3 class="text-center text-success">Edit Exam Grade </h3>
@include('admin.exam.form.message') 
@include('admin.exam.form.formerror') 
{{-- {{dd($examgrade)}} --}}


 
         {!! Form::model($examgrade,array('method'=>'PATCH','route'=>['admin.grade.update',$examgrade->id],'class'=>'form'))!!}
 
          <div class="form-group">
   {{Form::label('graden','Grade Name')}}
     {!! Form::text('graden', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Grade Name')) !!}
     </div>
<div class="form-group">
  {{Form::label('gradep','Grade Point')}}
  {{Form::text('gradep',null,array('required', 'class'=>'form-control'))}}
      </div>
 <div class="form-group">
    {{Form::label('markform','Mark Form')}}
    {{Form::number('markform',null, array('required', 'class'=>'form-control'))}}
     
  </div>

  <div class="form-group">
     {{Form::label('markupto','Grade Upto')}}
    {{Form::number('markupto',null, array('required', 'class'=>'form-control'))}}
     </div>
     <button type="submit" class="btn btn-primary">Update Grade</button>
     <a class="btn btn-warning" href="{{url('admin/grade')}}">Back</a>
     
{!! Form::close()!!}




@endsection

