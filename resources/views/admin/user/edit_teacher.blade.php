@extends('layouts.admin')
@section('content')

<h4 align="center">Aplication Form</h4>
 @include('partial.message') 
 @include('partial.form_errors') 
{{-- {{dd($teacher_edit)}} --}}


   {!! Form::model($teacher_edit, array('method'=>'PATCH','route'=>['admin.professor.update',$teacher_edit->user_id],'class'=>'form','files' => true))!!}
<input type="hidden" value="{{$teacher_edit->user_id}}" />

@include('admin.user.edit_teacher_form')
    {!! Form::close()!!}
@endsection