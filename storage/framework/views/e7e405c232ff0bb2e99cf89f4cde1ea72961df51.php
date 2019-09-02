<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS12-05-2019\resources\views/admin/academic/syllabus.blade.php */ ?>
<?php $__env->startSection('content'); ?>


<h3 class="text-center text-success">Syllabuss</h3>
<?php echo $__env->make('admin.exam.form.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php echo $__env->make('admin.exam.form.formerror', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 



<div class="text-right"> <button type="button" class=" text-right btn  btn-success rounde" data-toggle="modal" data-target="#exampleModal">
 &nbsp;<i class="fa fa-plus"></i> Add Syllabuss  
</button></div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-target="#exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
      <?php echo Form::open(array('route'=>'admin.syllabus.store','class'=>'form','id'=>'ccccc')); ?>

      <?php echo Form::hidden('examid','', ['id' => 'examid']); ?>

       
      <div class="form-group">
    <?php echo Form::label('syllabus_name','Syllabus Title'); ?>

    <?php echo Form::text('syllabus_name', null,
    array('required','id'=>'syllabus_name', 'class'=>'form-control',
    'placeholder'=>'Type About  Syllabus')); ?>

</div>

   <div class="form-group">
    <?php echo Form::label('class_id','Class Name'); ?>

    <?php echo Form::select('class_id',$classroom ,null,
    array('required','id'=>'active_id', 'class'=>'form-control')); ?>

</div>

   <div class="form-group">
    <?php echo Form::label('section_id','Section Name'); ?>

    <?php echo Form::select('section_id',$section ,null,
    array('required','id'=>'section_id', 'class'=>'form-control')); ?>

</div>
   <div class="form-group">
    <?php echo Form::label('subject_id','Subject Name'); ?>

    <?php echo Form::select('class_id',$subject ,null,
    array('required','id'=>'subject_id', 'class'=>'form-control')); ?>

</div>
   
    <div class="form-group">
    <?php echo Form::label('Active'); ?>

    <?php echo Form::select('active_id',$active ,null,
    array('required','id'=>'active_id', 'class'=>'form-control')); ?>

</div>
       

      <div class="modal-footer">
           <input type="button" id="addBtn" value="Save Subject" class="btn btn-primary">  
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
                           
      <?php echo Form::select('examname', $classroom, null,
 array( 'placeholder'=>'Select Exam','id'=>'examname')); ?> 
                          </div>
                        </div>
                      <div class="col-md-2">
                        <div class="form-inline">
                           
      <?php echo Form::select('classname', $classroom, null,
 array( 'placeholder'=>'Select Class','id'=>'classname')); ?> 
                          </div>
                        </div>
                      <div class="col-md-2">
                        <div class="form-inline">
                           
      <?php echo Form::select('examname', $classroom, null,
 array( 'placeholder'=>'Select Exam','id'=>'examname')); ?> 
                          </div>
                        </div>
                     
                      
                      </div> 
                    

      
 
       
</div>
</div>

<script>
      $(document).ready(function () {
        $("#examname").change(function(){

 $('#states').empty();
 $('#cities').empty();
        var country = $(this).val();
        var url = "<?php echo e(URL::to('/')); ?>";

        //console.log(country);
        $.ajax({
            type: "GET",
            url: url + '/getstate/'+country,
            data:{},
            dataType: "JSON",
            success:function(data) {
                    if(data){
                        $('#states').empty();

                        $.each(data, function(key, value){
                           // alert(key);
                            $('#states').append('<option value="'+value.id+'">' + value.name + '</option>');

                        });
                    }

                },
        });

});
$("#states").change(function(){

var state = $(this).val();
var url = "<?php echo e(URL::to('/')); ?>";

//console.log(country);
$.ajax({
    type: "GET",
    url: url + '/getcity/'+state,
    data:{},
    dataType: "JSON",
    success:function(data) {
            if(data){
                $('#cities').empty();

                $.each(data, function(key, value){
                   // alert(key);
                    $('#cities').append('<option value="'+value.id+'">' + value.name + '</option>');

                });
            }

        },
});

});
      });
      </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>