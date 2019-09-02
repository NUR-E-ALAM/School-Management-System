<?php /* D:\xampp\htdocs\newxampp\Laravel\SMS17-05-2019\resources\views/partial/partial_leftbar.blade.php */ ?>
 <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="<?php echo e(asset('adminasset/images/teacherimages/'.auth::user()->image)); ?>">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo e(auth::user()->name); ?></p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('admin/dashboard')); ?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <!-- for user info area start-->
    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-user" aria-expanded="false" aria-controls="ui-user">
              <i class="menu-icon mdi fa fa-users "></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-user">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item">
                  
                    <a class="nav-link" href="<?php echo e(url('admin/addstudent')); ?>">Add Student</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/admission')); ?>">Admission</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/professor')); ?>">Professor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/t_permission')); ?>">Teacher Permission</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/accountant')); ?>">Accountant</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/librarian ')); ?>">Librarian </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/parent ')); ?>">Parent </a>
                </li>
              </ul>
            </div>
          </li>
<!-- user area end-->
<!-- academic area start-->
    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-academic" aria-expanded="false" aria-controls="ui-academic">
              <i class="menu-icon mdi fa fa-users "></i>
              <span class="menu-title">Academic</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-academic">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/daily_attendance')); ?>">Daily Attendance  </a>
                </li>
                <li class="nav-item">
                  
                    <a class="nav-link" href="<?php echo e(url('admin/class_routine')); ?>">Class Routine </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/syllabus')); ?>">Syllabus </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/class')); ?>">Class</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/section')); ?>">Section</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('admin/session')); ?>">Session</a>
                  </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/class_room')); ?>">Class Room</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/department')); ?>">Department </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/shift')); ?>">Shift </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/subject')); ?>">Subject </a>
                  <a class="nav-link" href="<?php echo e(url('admin/event_calendar')); ?>">Event Calendar </a>

                </li>
              </ul>
            </div>
          </li>
          <!-- academic area end-->

<!-- Exam area start-->
    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-exam" aria-expanded="false" aria-controls="ui-exam">
              <i class="menu-icon mdi fa fa-users "></i>
              <span class="menu-title">Exam</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-exam">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/manage_marks')); ?>">Mark</a>
                </li>
                <li class="nav-item">
                  
                    <a class="nav-link" href="<?php echo e(url('admin/exam')); ?>">Exam</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/grade')); ?>">Grade</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/student_promotion')); ?>">Student Promotion </a>
                </li>
              </ul>
            </div>
          </li>
          <!-- Exam area end-->


          <!-- Accounting area start-->
    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-accounting" aria-expanded="false" aria-controls="ui-accounting">
              <i class="menu-icon mdi fa fa-users "></i>
              <span class="menu-title">Accounting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-accounting">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/student_fee')); ?>">Student Fee</a>
                </li>
                <li class="nav-item">
                  
                    <a class="nav-link" href="<?php echo e(url('admin/expense_category ')); ?>">Expense category </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/expense_manager')); ?>">Expense</a>
                </li>

              </ul>
            </div>
          </li>
          <!-- accounting area end-->


      <!-- Back Office area start -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-office" aria-expanded="false" aria-controls="ui-office">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Back Office</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-office">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  
                  <a class="nav-link" href="<?php echo e(url('/books')); ?>">Books</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('/book_issue')); ?>">Books Issue</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-setting" aria-expanded="false" aria-controls="ui-setting">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Setting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-setting">
              <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('admin/year')); ?>">Add Years</a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('admin/month')); ?>">Add Months</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('admin/day')); ?>">Add Days</a>
                                  </li>
                                  <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(url('admin/hour')); ?>">Add Hours</a>
                                      </li>
                                      <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(url('admin/minute')); ?>">Add Minutes</a>
                                          </li>
                <li class="nav-item">
                  
                  <a class="nav-link" href="<?php echo e(url('/systemsetting')); ?>">System Settings</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/schoolsetting')); ?>">School Settings</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">
              
 <?php echo $__env->yieldContent('content'); ?>
