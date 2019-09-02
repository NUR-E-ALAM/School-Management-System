<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS12-05-2019\resources\views/admin/user/single_student_info.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<h3 class="text-center text-success">Student Informations </h3>

<link type="text/css" rel="stylesheet" href="<?php echo e(asset('blue/css/blue.css')); ?>" />
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('blue/css/print.css')); ?>" media="print"/>
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="<?php echo e(asset('blue/js/jquery-1.4.2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('blue/js/jquery.tipsy.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('blue/js/cufon.yui.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('blue/js/scrollTo.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('blue/js/myriad.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('blue/js/jquery.colorbox.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('blue/js/custom.js')); ?>"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>

<?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<!-- Begin Wrapper -->
<div id="wrapper">

  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">

        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait"  src="<?php echo e(asset('adminasset/images/teacherimages/'.$teacher_row->picture)); ?>">
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name"><?php echo e($teacher_row->first_name); ?> &nbsp;<?php echo e($teacher_row->last_name); ?> </h1>

            <ul>

              <li class="ad"><?php echo e($teacher_row->present_address); ?></li>

           <br/>

           
              <li class="mail"><?php echo e($teacher_row->user->email); ?></li>
              <li class="tel"><?php echo e($teacher_row->contact_no); ?></li>

            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
               <li> <a class="north" title="Back Home" href="<?php echo e(url('admin/addstudent')); ?>"> <i class="fa fa-mail-reply"></i></a></li>
              <li><a class='north' href="#" title="Download .pdf"><img src="<?php echo e(asset('blue/images/icn-save.jpg')); ?>" alt="Download the pdf version" /></a></li>
              <li><a class='north' href="#" onClick="window.print();" title="Print"><img src="<?php echo e(asset('blue/images/icn-print.jpg')); ?>" alt="" /></a></li>

            </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->

        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <div class="entry">
          <h2>IDB-Teacher </h2>
          <div class="content">
              <table class="table table-hover">
       <thead>

    <tr>
      <th scope="col">Personal:</th>
      <th scope="col">Information</th>

    </tr>
  </thead>
 <tbody>

    <tr>
      <th scope="col">First Name:</th>
      <td><?php echo e($teacher_row->first_name); ?></td>

    </tr>

    <tr>
      <th scope="row">Last Name:</th>
      <td><?php echo e($teacher_row->last_name); ?></td>

    </tr>

    <tr>
      <th scope="row">Date OF Birth:</th>
      <td><?php echo e($teacher_row->date_of_birth); ?></td>

    </tr>
    <tr>
      <th scope="row">Place of Birth :</th>
      <td colspan="2"><?php echo e($teacher_row->permanent_address); ?></td>
     </tr>
     <tr>
      <th scope="row">Sex :</th>
      <td colspan="2"> <?php echo e($teacher_row->gender->gender_name); ?></td>
     </tr>
      <tr>
      <th scope="row">Blood Group :</th>
     <td colspan="2"> <?php echo e($teacher_row->bloodgroup->blood_name); ?></td>
     </tr>
     <tr>
      <th scope="row">Religion :</th>
      <td colspan="2"><?php echo e($teacher_row->religion->religion_name); ?></td>
     </tr>
     <tr>
      <th scope="row">Nationality:</th>
     <td colspan="2"><?php echo e($teacher_row->nation->nation_name); ?></td>
     </tr>
     <th scope="row">Language:</th>
      <td colspan="2"><?php echo e($teacher_row->language->languagename); ?></td>
     </tr>
     <tr>
      <th scope="row">Status :</th>
      <!-- <td colspan="2"><?php echo e($teacher_row->active->active_name); ?></td> -->
      <td><?php if($teacher_row->active_id == "1"): ?>
            <span class="text-success">Active</span>
            <?php else: ?>
            <span class="text-warning">Inactive</span>
            <?php endif; ?></td>
     </tr>
     <tr>


  </tbody>
</table>



          </div>

        </div>


      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>