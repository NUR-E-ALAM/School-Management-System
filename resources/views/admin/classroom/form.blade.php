<div class="form-group">
    {!! Form::label('Class Name') !!}
    {!! Form::text('name', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Class name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Shift') !!}
    {!! Form::select('shift', $shifts, null,
array('name'=>'shifts','class'=>'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('Session') !!}
    {!! Form::select('session', $sessions, null,
array('name'=>'sessions','class'=>'form-control')) !!}
</div>

<h6>section</h>
<div class="form-group">
{!! Form::select('section', $sections, null,
array('multiple'=>'multiple','name'=>'sections[]','class'=>'form-control')) !!}
</div>