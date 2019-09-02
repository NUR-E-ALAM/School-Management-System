<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS16-05-2019\resources\views/partial/message.blade.php */ ?>
<?php if(Session::has('message')): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><?php echo e(Session::get('message')); ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
