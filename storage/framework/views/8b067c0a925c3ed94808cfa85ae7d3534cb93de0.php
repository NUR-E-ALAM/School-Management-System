<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS16-05-2019\resources\views/admin/user/addstudent.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<h4 align="center">Aplication Form</h4>
<?php echo $__env->make('partial/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partial/formerror', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
<?php echo Form::open(array('route'=>'admin.addstudent.store','class'=>'form','files' => true )); ?>

<?php echo $__env->make('admin.user.student_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>