@extends('layouts.admin')
@section('content')
<h1 class="text-center text-success">Add Student Information</h1>
<h4 align="center">Aplication Form</h4>
 @include('admin.form.form_errors') 
 
{!! Form::open(array('route'=>'submit_form','class'=>'form'))!!}
@include('admin.form.accountant_form')
    {!! Form::close()!!}
@endsection