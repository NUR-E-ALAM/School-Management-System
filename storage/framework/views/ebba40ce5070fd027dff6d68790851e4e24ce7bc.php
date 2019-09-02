<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS12-05-2019\resources\views/admin/settings/schoolName.blade.php */ ?>
<?php $__env->startSection('content'); ?>


<?php echo $__env->make("partial.formerror", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("partial.message", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="card p-5">

<!-- <h3 class='mx-auto bg-primary p-2 rounded'>School Name setting</h3> -->







 <?php $__empty_1 = true; $__currentLoopData = $supdate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

   <div class="text-right">
   <button id="editBtn" rid="<?php echo e($account->id); ?>" type="button" class="text-right btn  btn-success rounde mdt"data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i>School Name setting</button>
 </div>

   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
   <tr><td colspan="5" class="bg-danger">No name to show</td></tr>
<?php endif; ?>


 <!-- form area start -->

<div class="modal fade" id="exampleModal" data-target="#exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">School Name setting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<!-- here u change the ('route'=>'prefix_name.schools.store') -->

      <?php echo Form::open(array('route'=>'admin.schools.store','class'=>'form','id'=>'ccccc','files' => true)); ?>


      <?php echo Form::hidden('schoolid','', ['id' => 'schoolid']); ?>


      <div class="form-group">
    <?php echo Form::label('school_name','School Name'); ?>

    <?php echo Form::text('school_name', null,
    array('required','id'=>'school_name1', 'class'=>'form-control prc',
    'placeholder'=>'School Name')); ?>

        </div>

 <div class="form-group">
    <?php echo Form::label('school_address','School Address'); ?>

    <?php echo Form::text('school_address', null,
    array('required','id'=>'school_address1', 'class'=>'form-control prc',
    'placeholder'=>'School Address')); ?>

</div>

<div class="form-group">
    <?php echo Form::label('school_logo','School Logo'); ?>

    <?php echo Form::file('school_logo', null,
    array('required','id'=>'school_logo1', 'class'=>'form-control prc',
    'placeholder'=>'School Address')); ?>

</div>


<input type="button" id="addBtn" value="Update Name" class="btn btn-primary">

</div>

<?php echo Form::close(); ?>


</div>
</div>
</div>
  </div>

 <!-- form area end -->

<?php $__env->stopSection(); ?>

<!-- here is the script section -->

<?php $__env->startSection('script'); ?>
<script>
$(document).ready(function () {
 //header for csrf-token is must in laravel
 $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

  var url = "<?php echo e(URL::to('/')); ?>";


 //Update school end


$(".card").on('click','#addBtn', function(){

   if($(this).val() == 'Update Name'){

               $.ajax({

          // <!-- here u change the (url+'/prefix_name/schools/'+$("#schoolid").val(),) -->

                url:url+'/admin/schools/'+$("#schoolid").val(),
               method: "PUT",
               type: "PUT",
               data:{
                school_name: $("#school_name1").val(),
                address: $("#school_address1").val(),
                logo_image: $("#school_logo1").val(),

               },
               success: function(d){
                     if(d.success) {
                       alert(d.message);
                       location.reload();

                       }
               },
               error:function(d){
                   console.log(d);
               }
           });
           }
         });
            //Update school end




//edit school start
 $(".card").on('click','#editBtn', function(){
    $sid = $(this).attr('rid');

 // <!-- here u change the (url+'/prefix_name/schools/'+$sid+'/edit';) -->

             $info_url = url + '/admin/schools/'+$sid+'/edit';
            $.get($info_url,{},function(d){
                 populateForm(d);
                 location.hash = "ccccc";

            });

});

//edit school end




function populateForm(data){
            $("#school_name1").val(data.school_name);
            $("#school_address1").val(data.address);
            $("#schoolid").val(data.id);



        }

});

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>