<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS17-05-2019\resources\views/admin/exam/managemarks.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<h3 class="text-center text-success">Manage Exam Mark</h3>
<?php echo $__env->make('admin.exam.form.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php echo $__env->make('admin.exam.form.formerror', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

<div class="card">
<div class="card-body">

       <div class="container">
        <?php echo Form::open(array('route'=>'admin.manage_marks.create','method'=>'GET','id'=>'f')); ?>

               <div class="row">


                              <div class="col-md-2">
                               <?php echo FORM::select('examname',$examname,null,array('required','id'=>'active_id', 'class'=>'form-control','placeholder'=>'select exam')); ?>

                                </div>

                              <div class="col-md-2">

                                <select name="session" id="session_id" class="form-control" >
                                    <option value="">--- Select Session ---</option>
                                    <?php $__currentLoopData = $session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                  </div>
                              <div class="col-md-2">

                                <select name="class" id="class_id"  class="form-control" style="">
                                    <option value=""> Select Class </option>
                            </select>

                                  </div>

                              <div class="col-md-2">

                               <select name="shift" id="section_id" class="form-control" style="">
                                    <option value="">Select Section</option>
                            </select>


                                </div>
                              <div class="col-md-2">

                                <select name="section" id="section_id" class="form-control" style="">
                                    <option value="">Select Section</option>
                            </select>
                        


                                  </div>
                                    <div class="col-md-2"> 
                               <select name="subject" id="subject" class="form-control" style="">
                                    <option value="">Select subject</option>
                            </select></div>
                                  
                                </div>
                    <div class="col-md-2">

                                    <input type="submit" id="addBtn" value="Show Student" class="btn btn-primary">

                                    <?php echo Form::close(); ?>

                              </div>
                            </div>
       
</div>
</div>

<?php $__env->stopSection(); ?>
  <?php $__env->startSection('script'); ?>


<script>
  $(document).ready(function() {
    var url = "<?php echo e(URL::to('/')); ?>";
    $('select[name="session"]').on('change', function() {
        var sessionID = $(this).val();

        // alert(sessionID);return;
        if(sessionID) {
            $.ajax({
                url: url + '/admin/selectclass/'+sessionID,
                //url: '/selectclass/'+sessionID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                   // console.log(data);

                    $('select[name="class"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="class"]').append('<option value="'+ value.id +'">'+ value.class_name +'</option>');
                    });


                }
            });
        }else{
            $('select[name="class_name"]').empty();
        }
    });
    var url = "<?php echo e(URL::to('/')); ?>";
    $('select[name="class"]').on('change', function() {
        var classID = $(this).val();

         //alert(classID);return;
        if(classID) {
            $.ajax({
                url: url + '/admin/selectshift/'+classID,
                //url: '/selectclass/'+sessionID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                   // console.log(data);

                    $('select[name="shift"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="shift"]').append('<option value="'+ value.id +'">'+ value.shift_name +'</option>');
                    });


                }
            });
        }else{
            $('select[name="shift_name"]').empty();
        }            });
            var url = "<?php echo e(URL::to('/')); ?>";
            $('select[name="shift"]').on('change', function() {
                var shiftID = $(this).val();

                 //alert(classID);return;
                if(shiftID) {
                    $.ajax({
                        url: url + '/admin/selectsection/'+shiftID,

                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                           // console.log(data);

                            $('select[name="section"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="section"]').append('<option value="'+ value.id +'">'+ value.section_name +'</option>');
                            });


                        }
                    });
                }else{
                    $('select[name="section_name"]').empty();
                }
            });
            // mycode
            var url = "<?php echo e(URL::to('/')); ?>";
    $('select[name="class"]').on('change', function() {
        var classID = $(this).val();

         //alert(classID);return;
        if(classID) {
            $.ajax({
                url: url + '/admin/selectsubject/'+classID,
                //url: '/selectclass/'+sessionID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                   // console.log(data);

                    $('select[name="subject"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="subject"]').append('<option value="'+ value.id +'">'+ value.subject_name +'</option>');
                    });


                }
            });
        }else{
            $('select[name="subject"]').empty();
        }            });
            // mycode

        });
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>