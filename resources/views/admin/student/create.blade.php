@extends('layouts.admin')
@section('content')
<h1>Create a class</h1>
@include("partial.formerror")
@include("partial.message")
{!! Form::open(array('route' => 'admin.addstudent', 'class' => 'form')) !!}
<div class="form-group">
    @include("admin.student.form")
{!! Form::submit('Add Student', array('class'=>'btn btn-primary','novalidate' => 'novalidate',
'files' => true)) !!}
</div>
{!! Form::close() !!}
@endsection
