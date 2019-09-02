 <div class="form-group">
   {{Form::label('gradename','Grade Name')}}
     {!! Form::text('gradename', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Grade Name')) !!}
     </div>
<div class="form-group">
  {{Form::label('gradep','Grade Point')}}
  {{Form::number('gradep',null,array('required', 'class'=>'form-control'))}}
      </div>
 <div class="form-group">
    {{Form::label('markf','Mark Form')}}
    {{Form::number('markf',null, array('required', 'class'=>'form-control'))}}
     
  </div>

  <div class="form-group">
     {{Form::label('gradeu','Grade Upto')}}
    {{Form::number('gradeu',null, array('required', 'class'=>'form-control'))}}
     </div>
     