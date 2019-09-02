@extends('layouts.admin')
@section('content')
<a class="btn btn-primary" href="{{url('admin/class_create')}}">Class Room</a>

@if($class->count() > 0)
<table></table>
    @foreach($class as $classes)
    @endforeach
    @else
    <h3>No class found</h3>
@endif
     @endsection