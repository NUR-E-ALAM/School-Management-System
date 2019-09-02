@extends('layouts.admin')
@section('content')

<h4 align="center">Aplication Form</h4>
@include('partial/message')
@include('partial/formerror')
 
{!! Form::open(array('route'=>'admin.addstudent.store','class'=>'form','files' => true ))!!}
@include('admin.user.student_form')
    {!! Form::close()!!}
@endsection