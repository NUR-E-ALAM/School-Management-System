<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS17-05-2019\resources\views/layouts/admin.blade.php */ ?>
<?php echo $__env->make('partial.adminlayouts_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('partial.pratial_topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php echo $__env->make('partial.partial_leftbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
          

   <?php echo $__env->yieldContent('script'); ?>
   
   <?php echo $__env->make('partial.adminlayouts_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       
  
   
    

 

