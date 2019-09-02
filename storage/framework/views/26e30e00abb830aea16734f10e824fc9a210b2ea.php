<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS17-05-2019\resources\views/admin/exam/form/exam_form.blade.php */ ?>




   <div class="form-group">
    <?php echo Form::label('Exam Name'); ?>

    <?php echo Form::text('exam_name', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'Exam Name')); ?>

</div>
<div class="form-group">
    <?php echo Form::label('Exam Starting Date'); ?>

    <?php echo Form::date('exam_start', null,
    array('required', 'class'=>'form-control')); ?>

</div>
<div class="form-group">
    <?php echo Form::label('Exam Ending Date'); ?>

    <?php echo Form::date('exam_end', null,
    array('required', 'class'=>'form-control')); ?>

</div>
