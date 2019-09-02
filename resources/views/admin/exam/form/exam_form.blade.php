{{-- <div class="form-group">
  <label for="examname">Exam Name</label>
  <input type="text" class="form-control" required name="exam_name" id="examname"  >
 
</div>
<div class="form-group">
  <label for="examnamestart">Exam Starting Date</label>
  <input type="date" class="form-control" required name="exam_start" id="examnamestart"  >
 
</div>
<div class="form-group">
  <label for="examend">Exam Ending Date</label>
  <input type="date" class="form-control" required name="exam_end" id="examend"  >
   </div> --}}



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
