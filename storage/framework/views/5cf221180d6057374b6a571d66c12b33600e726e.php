<?php /* D:\xampp\htdocs\newxampp\Laravel\SMS17-05-2019\resources\views/layouts/fontend.blade.php */ ?>
<?php echo $__env->make('layouts.fontendheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.fontendfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>