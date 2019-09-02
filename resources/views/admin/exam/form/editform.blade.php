
<div class="form-group">
    {!! Form::label('Exam Name') !!}
    {!! Form::text('exam_name', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Exam Name')) !!}
</div>
<div class="form-group">
    {!! Form::label('Exam Starting Date') !!}
    {!! Form::date('exam_start', null,
    array('required', 'class'=>'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('Exam Ending Date') !!}
    {!! Form::date('exam_end', null,
    array('required', 'class'=>'form-control')) !!}
</div>