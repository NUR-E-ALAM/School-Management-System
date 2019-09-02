<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS17-05-2019\resources\views/admin/exam/exam.blade.php */ ?>
<?php $__env->startSection('content'); ?>


<h3 class="text-center text-success">Exam </h3>
<?php echo $__env->make('admin.exam.form.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php echo $__env->make('admin.exam.form.formerror', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Exam  
</button></div>



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
         
         <?php echo Form::open(array('route'=>'admin.myexam.store','class'=>'form')); ?>

        
         <?php echo $__env->make('admin.exam.form.exam_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <button type="submit" class="btn btn-primary">Save Exam</button>
<?php echo Form::close(); ?>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>






<br>
<div class="card">
            <div class="card-body">

 <table class="table table-condensed table-hover table-responsive">
        <tr>
            <th>No</th>
            <th>Exam Name</th>
            <th>Starting Date</th>
            <th>Ending Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
       <?php $i=1; ?>
    <?php $__empty_1 = true; $__currentLoopData = $examname; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $examnames): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
        <td><?php echo e($i++); ?></td>
        <td><?php echo e($examnames->classexamname); ?></td>
        <td><?php echo e($examnames->examstart); ?></td>
        <td>
            <?php echo e($examnames->examend); ?>

        </td>
          
         <td>
      <a href="<?php echo e(url('admin/myexam/'.$examnames->id.'/edit')); ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        </td> 
        <td>
          <?php echo Form::open(array('route' => array('admin.myexam.destroy', $examnames->id), 'method' => 'delete')); ?>

             
             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></button>

             <?php echo Form::close(); ?>

     </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <tr><td colspan="5" class="bg-danger">No Classroom to show</td></tr>
<?php endif; ?>
    </table>
<?php echo $examname->links(); ?>

</div>
</div>
</div>

<script>
//$(document).Ready()

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>