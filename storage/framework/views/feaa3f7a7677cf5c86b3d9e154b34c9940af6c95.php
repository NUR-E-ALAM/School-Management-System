<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS12-05-2019\resources\views/admin/settings/year.blade.php */ ?>
<?php $__env->startSection('content'); ?>


<h3 class="text-center text-success"> Year</h3>
<?php echo $__env->make('admin.exam.form.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.exam.form.formerror', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Year
</button></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-target="#exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Random Year</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php echo Form::open(array('route'=>'admin.year.store','class'=>'form','id'=>'ccccc')); ?>

      <?php echo Form::hidden('examid','', ['id' => 'examid']); ?>

       <?php echo Form::label('Year Name'); ?>

       <?php echo Form::number('year_name', null,
    array('required','id'=>'year_name', 'class'=>'form-control',
    'placeholder'=>'Add Year')); ?> <br>

           <div class="modal-footer">
        <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
        <input type="button" id="addBtn" value="Save Year" class="btn btn-primary">
<?php echo Form::close(); ?>

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


            <th>Month Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    <?php $__empty_1 = true; $__currentLoopData = $year; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yearnam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
        
        <td><?php echo e($yearnam->year_name); ?></td>



         <td>
         <button id="editBtn" rid="<?php echo e($yearnam->id); ?>" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
        </td>



        <td>
        <button id="deleteBtn" rid="<?php echo e($yearnam->id); ?>" type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>

     </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <tr><td colspan="5" class="bg-danger">No No to show</td></tr>
<?php endif; ?>
    </table>
<?php echo $year->links(); ?>

</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
   <script>
$(document).ready(function () {

 //header for csrf-token is must in laravel
 $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

  var url = "<?php echo e(URL::to('/')); ?>";
//Create Start shift

 clearform();

  $("#addBtn").click(function(){
    if($(this).val() == 'Save Year'){
      // alert($("#session_name").val());
// alert($("#session_id").val());
// alert($("#class_id").val());
// alert($("#active_id").val());

$.ajax({
                url:url+'/admin/year',
                method: "POST",
                data:{
                  year_name: $("#year_name").val()


                },
                success:function(d){
                  if(d.success){
                    //alert(d.message);
                    //console.log(d);
                    location.reload();
                    clearform();

                  }
                },error:function(d){
                  console.log(d);
                }

            });
    }
  });
    //Create end shift

 //Update shift
 $("#exampleModal").on('click','#addBtn', function(){

    if($(this).val() == 'Update'){
 //alert($("#examid").val());
// alert($("#exam_start").val());
// alert($("#exam_end").val());
      // $url = url+'/admin/myexam/'+$("#examid").val();
      // console.log($url);
                $.ajax({
                 url:url+'/admin/year/'+$("#examid").val(),
                method: "PUT",
                type: "PUT",
                data:{
                    year_name: $("#year_name").val()



                },
                success: function(d){
                      if(d.success) {
                        //alert(d.message);
                       location.reload();



                        }
                },
                error:function(d){
                    console.log(d);
                }
            });
            }
          });
             //Update shift end





  //Edit shift
  $(".card").on('click','#editBtn', function(){
            //alert()
            $examid = $(this).attr('rid');
            // console.log($examid);
            // return;
            $info_url = url + '/admin/year/'+$examid+'/edit';
            // console.log($info_url);
            // return;
            $.get($info_url,{},function(d){
                //console.log(d);
                 populateForm(d);
                 location.hash = "ccccc";
                 $("#exampleModal").modal("toggle");
            });
        });
        //Edit shift end

        //Delete exam
        $(".card").on('click','#deleteBtn', function(){
            //alert()
            if(!confirm('Sure?')) return;
            $examid = $(this).attr('rid');
            //console.log($roomid);
            $info_url = url + '/admin/year/'+$examid;
            $.ajax({
                url:$info_url,
                method: "DELETE",
                type: "DELETE",
                data:{
                },
                success: function(d){
                    if(d.success) {
                        //alert(d.message);
                        location.reload();
                        }
                },
                error:function(d){
                    console.log(d);
                }
            });
        });
        //Delete shift end





//form populatede

function populateForm(data){
            $("#year_name").val(data.year_name);
            $("#examid").val(data.id);
            $("#addBtn").val('Update');


        }
        function clearform(){
            $('#ccccc')[0].reset();
            $("#addBtn").val('Save Year');
        }

$(".close").click(function(){
  clearform();
});




});

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>