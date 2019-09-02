<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS12-05-2019\resources\views/admin/academic/classroutine.blade.php */ ?>
<?php $__env->startSection('content'); ?>


<h3 class="text-center text-success">Class Rutine</h3>
<?php echo $__env->make('admin.exam.form.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.exam.form.formerror', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Rutine
</button></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-target="#exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Routine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php echo Form::open(array('route'=>'admin.class_routine.store','class'=>'form','id'=>'ccccc')); ?>

      <?php echo Form::hidden('examid','', ['id' => 'examid']); ?>


      <div class="form-group">
            <select name="session" id="session_id" class="form-control" >
                    <option value="">--- Select Session ---</option>
                    <?php $__currentLoopData = $session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
</div>

   <div class="form-group">
        <select name="class" id="class_id" class="form-control" style="">
                <option value="">--- Select Class ---</option>
        </select>
</div>

   <div class="form-group">
        <select name="shift" id="shift_id" class="form-control" style="">
                <option value="">--- Select shift ---</option>
        </select>
</div>
   

    <div class="form-group">
            <select name="professor" id="professor_id" class="form-control" >
                    <option value="">--- Select Professor  ---</option>
                    <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
</div>
    <div class="form-group">
            <select name="subject" id="subject_id" class="form-control" >
                    <option value="">--- Select Subject  ---</option>
                    <?php $__currentLoopData = $sub_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
</div>



<div class="form-group">
        <?php echo Form::select('day_id', $day, null,
        array('id'=>'day_id','class'=>'form-control','placeholder'=>'Select Day')); ?>

</div>
<div class="form-group">
        <?php echo Form::select('s_hour_id', $hour, null,
        array('id'=>'s_hour_id','class'=>'form-control','placeholder'=>'Select Starting Hour')); ?>

</div>
<div class="form-group">
        <?php echo Form::select('s_minute_id', $minute, null,
        array('id'=>'s_minute_id','class'=>'form-control','placeholder'=>'Select Starting Minute')); ?>

</div>
<div class="form-group">
        <?php echo Form::select('e_hour_id', $hour, null,
        array('id'=>'e_hour_id','class'=>'form-control','placeholder'=>'Select Ending Hour')); ?>

</div>
<div class="form-group">
        <?php echo Form::select('e_minute_id', $minute, null,
        array('id'=>'e_minute_id','class'=>'form-control','placeholder'=>'Select Ending Minute')); ?>

</div>




      <div class="modal-footer">
           <input type="button" id="addBtn" value="Save Routine" class="btn btn-primary">
<?php echo Form::close(); ?>

        <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
</div>



<div class="card">
<div class="card-body">

       <div class="row">
                      <div class="col-md-2">
                        <div class="form-inline">

      
                        </div>
                      <div class="col-md-2">
                        <div class="form-inline">

      
                        </div>
                      <div class="col-md-2">
                        <div class="form-inline">

      
                        </div>


                      </div>





</div>
</div>

<script type="text/javascript">
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
            }
        });


    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
   <script type="text/javascript">
$(document).ready(function () {
//alert(5); //header for csrf-token is must in laravel
 $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

  var url = "<?php echo e(URL::to('/')); ?>";
//Create Start section

 clearform();

  $("#addBtn").click(function(){
    if($(this).val() == 'Save Routine'){
 //alert($("#session_id").val());
//alert($("#section_name").val());
// alert($("#section_name").val());
// alert($("#shift_name").val());



$.ajax({
                url:url+'/admin/class_routine',
                method: "POST",
                data:{
                    session_id: $("#session_id").val(),
                    class_id: $("#class_id").val(),
                    shift_id: $("#shift_id").val(),
                    subject_id: $("#subject_id").val(),
                    professor_id: $("#professor_id").val(),
                    day_id: $("#day_id").val(),
                    s_hour_id: $("#s_hour_id").val(),
                    s_minute_id: $("#s_minute_id").val(),
                    e_hour_id: $("#e_hour_id").val(),
                    e_minute_id: $("#e_minute_id").val()

                },
                success:function(d){
                  if(d.success){
                    alert(d.message);
                    console.log(d);
                    location.reload();
                    clearform();

                  }
                },error:function(d){
                  console.log(d);
                }

            });
    }
  });
    //Create end section

 //Update section
 $("#exampleModal").on('click','#addBtn', function(){

    if($(this).val() == 'Update'){
 //alert($("#examid").val());
// alert($("#exam_start").val());
// alert($("#exam_end").val());
      // $url = url+'/admin/myexam/'+$("#examid").val();
      // console.log($url);
                $.ajax({
                 url:url+'/admin/section/'+$("#examid").val(),
                method: "PUT",
                type: "PUT",
                data:{
                class_id: $("#class_id").val(),
                  section_name: $("#section_name").val(),
                  active_id: $("#active_id").val()
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
             //Update section end





  //Edit section
  $(".card").on('click','#editBtn', function(){
            //alert()
            $examid = $(this).attr('rid');
            // console.log($examid);
            // return;
            $info_url = url + '/admin/section/'+$examid+'/edit';
            // console.log($info_url);
            // return;
            $.get($info_url,{},function(d){
                //console.log(d);
                 populateForm(d);
                 location.hash = "ccccc";
                 $("#exampleModal").modal("toggle");
            });
        });
        //Edit section end

        //Delete section
        $(".card").on('click','#deleteBtn', function(){
            //alert()
            if(!confirm('Sure?')) return;
            $examid = $(this).attr('rid');
            //console.log($roomid);
            $info_url = url + '/admin/section/'+$examid;
            $.ajax({
                url:$info_url,
                method: "DELETE",
                type: "DELETE",
                data:{
                },
                success: function(d){
                    if(d.success) {
                       // alert(d.message);
                        location.reload();
                        }
                },
                error:function(d){
                    console.log(d);
                }
            });
        });
        //Delete section end





//form populatede

function populateForm(data){
            $("#session_id").val(data.session_id);
            $("#class_id").val(data.class_id);
            $("#subject_id").val(data.subject_id);
            $("#professor_id").val(data.professor_id);
            $("#day_id").val(data.day_id);
            $("#s_hour_id").val(data.s_hour_id);
            $("#s_minute_id").val(data.s_minute_id);
            $("#examid").val(data.id);
            $("#addBtn").val('Update');


        }
        function clearform(){
            $('#ccccc')[0].reset();
            $("#addBtn").val('Save Routine');
        }

$(".close").click(function(){
  clearform();
});

});

</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>