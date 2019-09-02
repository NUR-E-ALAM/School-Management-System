<div class="form-group">
    <label for="class">Class</label>
   {!!Form::select('Class',$class,Null,array('name'=>'class_name','id'=>'class_name','class'=>'form-control')) !!}
                             
   
  </div>
  <div class="form-group">
    <label for="semester">Semester</label>
    {!!Form::select('Class',$class,Null,array('name'=>'semester','id'=>'semester', 'class'=>'form-control')) !!}
   
  </div>
  <div class="form-group">
    <label for="examend">Exam Ending Date</label>
    <input type="date" class="form-control" name="exam_end" id="examend"  >
     </div>