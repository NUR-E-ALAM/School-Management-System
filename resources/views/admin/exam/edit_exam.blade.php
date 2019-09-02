@extends('layouts.admin')
@section('content')


<h3 class="text-center text-success">Exam </h3>
@include('admin.exam.form.message') 
@include('admin.exam.form.formerror') 




{{-- {{dd($examedit)}} --}}


 
         {!! Form::model($examedit,array('method'=>'PATCH','route'=>['admin.myexam.update',$examedit->id],'class'=>'form'))!!}
        
         {{-- @include('admin.exam.form.editform') --}}
         <div class="form-group">
          {!! Form::label('Exam Name') !!}
          {!! Form::text('exam_name', $examedit->classexamname,
          array('required', 'class'=>'form-control',
          'placeholder'=>'Exam Name')) !!}
      </div>
      <div class="form-group">
          {!! Form::label('Exam Starting Date') !!}
          {!! Form::date('exam_start', $examedit->examstart,
          array('required', 'class'=>'form-control')) !!}
      </div>
      <div class="form-group">
          {!! Form::label('Exam Ending Date') !!}
          {!! Form::date('exam_end', $examedit->examend,
          array('required', 'class'=>'form-control')) !!}
      </div>

         <button type="submit" class="btn btn-primary">Update Exam</button>
{!! Form::close()!!}




@endsection


