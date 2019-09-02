<?php /* G:\xampp730\htdocs\newxampp\Laravel\SMS17-05-2019\resources\views/admin/user/student_form.blade.php */ ?>
<h1 class="text-center text-success">Add Student Information</h1>

<div class="text-right"> <a class="btn btn-warning" href="<?php echo e(url('admin/addstudent')); ?>">View Student</a></div>



<p class="lead section-title">Student Info:</p>


    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="name"><span class="fa fa-graduation-cap"></span>Frist Name<span class="text-danger">*</span>

                                        </label>
                                        <?php echo Form::text('first_name', null,array('required', 'id'=>'first_name', 'class'=>'form-control')); ?>



                                    </div>

                                </div>
                                <div class="col-md-4">
                                <div class="form-group has-feedback">
                                        <label for="last_name"> <span class="fa fa-graduation-cap"></span>Last Name<span class="text-danger">*</span>

                                        </label>

                                        <?php echo Form::text('last_name', null,array('required', 'id'=>'last_name', 'class'=>'form-control')); ?>



                                    </div>
                                    </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="dob"><span class="fa fa-calendar"></span>Date of birth<span class=" text-danger">*</span>

                                        </label>

                                        <?php echo Form::date('date_of_birth', null,array('required', 'id'=>'date_of_birth', 'class'=>'form-control')); ?>


                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="photo"> <span class="fa fa-camera"></span>Photo<span class="text-danger">[min 150 X 150 size and max 200kb]</span>

                                        </label>
                                        <?php echo Form::file('image', null, array('required', 'id'=>'picture', 'class'=>'form-control','value'=>'image',)); ?>



                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="contact_no"> <span class="fa fa-phone"></span>Phone/Mobile No.


                                        </label>

                                        <?php echo Form::text('contact_no', null,array('required', 'id'=>'contact_no', 'class'=>'form-control')); ?>



                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="language_id"> <span class="fa fa-phone"></span>Language


                                        </label>

                                        <?php echo Form::select('language_id',$language, null,array('required', 'id'=>'language_id', 'class'=>'form-control')); ?>




                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="religion_id">Religion<span class="text-danger">*</span>



                           </label>

                           <?php echo Form::select('religion_id', $religion, null,
array('id'=>'religion_id','class'=>'form-control')); ?>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="blood_group">Blood Group<span class="text-danger">*</span>

                                        </label>

                                        <?php echo Form::select('blood_id', $blood_groups, null,
array('name'=>'blood_id','class'=>'form-control')); ?>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="gender_id">Gender<span class="text-danger">*</span>

                                        </label>
                                        <?php echo Form::select('gender_id', $gender, null,
array('id'=>'gender_id','class'=>'form-control')); ?>

                                        <!-- <span class="form-control-feedback"></span> -->

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="nationality_id">Nationality<span class="text-danger">*</span>
                                            <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="select nationality"></i>
                                        </label>

                                        <?php echo Form::select('nationality_id', $nationality, 1,
array('id'=>'nationality_id','class'=>'form-control')); ?>

                                    </div>
                                </div>
                                    </div></div>
                                </div>
                            <p class="lead  section-title">Guardian Info:</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="father_name"><span class="fa fa-male"></span>Father's Name </label>

                                        <?php echo Form::text('father_name', null,array('required', 'id'=>'father_name', 'class'=>'form-control')); ?>



                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="mother_name"><span class="fa fa-female"></span>Mother's Name </label>
                                        <?php echo Form::text('mother_name', null,array('required', 'id'=>'mother_name', 'class'=>'form-control')); ?>

                                        <span class=" form-control-feedback"></span>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label for="facontact"><span class="fa fa-phone"></span>Guardian Phone </label>
                                        <?php echo Form::number('facontact', null,array('required', 'id'=>'facontact', 'class'=>'form-control')); ?>



                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="present_address"> <span class="fa fa-address-book"></span>Present Address </label>
                                        <?php echo Form::textarea('present_address', null,array('required', 'id'=>'present_address','rows'=>3, 'class'=>'form-control')); ?>



                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="permanent_address"><span class="fa fa-map-marker"></span>Permanent Address<span class="text-danger">*</span>

                                        </label>
                                        <?php echo Form::textarea('permanent_address', null,array('required', 'id'=>'permanent_address','rows'=>3, 'class'=>'form-control')); ?>



                                    </div>
                                </div>
                            </div>
                        <hr>
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                            <p class="lead section-title">Academic Info:</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="session_id">Running Session

                                  </label>
                                        
<select name="session" class="form-control" >
    <option value="">--- Select Session ---</option>
    <?php $__currentLoopData = $session; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                        <div class="form-group has-feedback">
                                            <label for="class_id">Class Name

                                                <span class="text-danger">*</span>
                                            </label>

                                            <select name="class" class="form-control" style="">
                                                    <option value="">--- Select Class ---</option>
                                            </select>


                                        </div>
                                    </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="shift_id">Shift

                                        </label>

                                        
<select name="shift" class="form-control" style="">
        <option value="">--- Select shift ---</option>
</select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="section_id ">Section

                                            <span class="text-danger">*</span>
                                        </label>


<select name="section" class="form-control" style="">
        <option value="">--- Select Section ---</option>
</select>

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="roll_no">Roll No</label>
                                        <?php echo Form::number('roll_no',null, array('id'=>'roll_no','class'=>'form-control')); ?>


                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="reg_no">Registration No</label>
                                        <?php echo Form::number('reg_no', null, array('id'=>'reg_no','class'=>'form-control')); ?>


                                    </div>
                                </div>
                                  <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="active_id">Active</label>
                                        <?php echo Form::select('active_id', $active, null,
array('id'=>'active_id ','class'=>'form-control')); ?>




                                    </div>
                                </div>

                                </div>



<hr>
</div>
</div>
</div>

<p class="lead section-title">Access Info:</p>
                                <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="email"><span class="fa fa-envelope"></span>Email</label>
                                        <?php echo Form::email('email', null,array('required', 'id'=>'email', 'class'=>'form-control')); ?>



                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="password">Passwrod</label>
                                        <?php echo Form::password('password',array('required', 'id'=>'password', 'class'=>'form-control')); ?> <br>

                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="box-footer">

                            <button type="submit" class="btn btn-info pull-right">Submit Student</button>

                        </div>

                        <?php $__env->startSection('script'); ?>



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

        });
    </script>

<?php $__env->stopSection(); ?>
