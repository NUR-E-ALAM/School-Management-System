<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS17-05-2019\resources\views/admin/user/show_teacher.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<h3 class="text-center text-success">Teacher Informations </h3>
<div class="text-right"> <a class="btn btn-warning" href="<?php echo e(url('admin/professor/create')); ?>">Add Teacher</a>
<?php echo $__env->make('partial/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partial/formerror', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card">
            <div class="card-body">

 <table class="table table-condensed table-hover table-responsive">
        <tr>
            <th>No</th>
            <th>name</th>
            <th>picture</th>
            <th>email</th>
            <th>Active</th>
            <th>Details</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
     <?php  $i=1 ?>
    <?php $__currentLoopData = $show_teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacherinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
    <tr>
        <td><?php echo e($i++); ?></td>
        <td><?php echo e($teacherinfo->name); ?></td>
               <td><img src="<?php echo e(asset('adminasset/images/teacherimages/'.$teacherinfo->image)); ?>" class='rounded' width="300px;" height="500px;" alt="image not found"></td>
               


            <td><?php echo e($teacherinfo->email); ?></td>

            <td><?php echo e($teacherinfo->active_id); ?></td>
      

            <td>
      <a href="<?php echo e(url('admin/professor/'.$teacherinfo->id)); ?>" class="btn btn-primary"><i class="fa fa-user-md"></i></a>
      
        </td> 
         <td>
                  <a href="<?php echo e(url('admin/professor/'.$teacherinfo->id.'/edit')); ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        </td> 
        
        <td>
          <?php echo Form::open(array('route' => array('admin.professor.destroy', $teacherinfo->id), 'method' => 'delete')); ?>

             
             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></button>

             <?php echo Form::close(); ?>

     </td>
    </tr>
   
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php echo $show_teacher->links(); ?>

</div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>