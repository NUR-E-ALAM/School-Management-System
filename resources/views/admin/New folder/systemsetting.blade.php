@extends('layouts.admin')
@section('content')
<h1 class="text-center text-success">System-Setting</h1>
<h4 align="center">Setting Form</h4>
 @include('admin.form.form_errors') 
 
{!! Form::open(array('route'=>'submit_form','class'=>'form'))!!}
@include('admin.form.systemsetting_form')
    {!! Form::close()!!}
@endsection