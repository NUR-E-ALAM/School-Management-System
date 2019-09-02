@extends('layouts.admin')
@section('content')


<h3 class="text-center text-success">Exam </h3>


<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Exam  
</button></div>

{{-- model area start --}}

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Exam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         @include('admin.form.form_errors') 

         {!! Form::open(array('route'=>'submit_form','class'=>'form'))!!}
        
 @include('admin.exam.form.exam_form') 
  
    <button type="submit" class="btn btn-primary">Save Exam</button>
{!! Form::close()!!}
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>


{{-- model area end --}}



<br>
 <div class="shadow p-3 mb-5 bg-white rounded"> </div>

 <div class="row">
                    
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Class</label>
                          <div class="col-sm-9">
                            {{-- {!!Form::select('Class',$class,Null,array('name'=>'class_name','class'=>'form-control')) !!}
                             --}}
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>

                      
                    </div>


@endsection