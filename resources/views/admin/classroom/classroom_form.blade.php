  <div class="form-group">
    {!! Form::label('Class Name') !!}
    {!! Form::text('class_name', null,
    array('required','id'=>'class_name', 'class'=>'form-control',
    'placeholder'=>'Add Class Name')) !!}
</div>
         <div class="form-group">
    {!! Form::label('Session Name') !!}
    {!! Form::select('session_name',$session, null,
    array('required','id'=>'session_name', 'class'=>'form-control',
    'placeholder'=>'Select Session')) !!}
</div>
       
         <div class="form-group">
    {!! Form::label('Shift Name') !!}
    {!! Form::select('shift_name',$shift ,null,
    array('required','id'=>'shift_name', 'class'=>'form-control',
    'placeholder'=>'Exam Name')) !!}
</div>
        