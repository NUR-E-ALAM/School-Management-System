@extends('layouts.admin')
@section('content')

<h4 align="center">Aplication Form</h4>
@include('partial/message')
@include('partial/formerror')

 
{!! Form::open(array('route'=>'admin.professor.store','class'=>'form','files' => true ))!!}
@include('admin.user.teacher_form')
    {!! Form::close()!!}
@endsection