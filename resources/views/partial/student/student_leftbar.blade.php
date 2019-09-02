 <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{asset('admin/images/faces/face1.jpg')}}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{auth::user()->name}}</p>
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
            <a class="nav-link" href="#">
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
                  {{-- Add student link create --}}
                    <a class="nav-link" href="{{url('/addstudent')}}">Student Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/admission')}}">User Password Reset</a>
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
                  <a class="nav-link" href="{{url('admin/daily_attendance')}}">Daily Attendance  </a>
                </li>
				 <li class="nav-item">
                 
                    <a class="nav-link" href="{{url('admin/class_routine')}}">Class Work </a>
                </li>
                <li class="nav-item">
                  {{-- Add student link create --}}
                    <a class="nav-link" href="{{url('admin/class_routine')}}">Class Routine </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/syllabus')}}">Syllabus </a>
                </li>
                              
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/subject')}}">Subject </a>
                  <a class="nav-link" href="{{url('admin/event_calendar')}}">Event Calendar </a>
                 
                </li>
				 <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/syllabus')}}">Notice </a>
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
                  <a class="nav-link" href="{{url('admin/manage_marks')}}">Exam Routine</a>
                </li>
                <li class="nav-item">
                  {{-- Add student link create --}}
                    <a class="nav-link" href="{{url('admin/exam')}}">Result</a>
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
                  <a class="nav-link" href="{{url('admin/student_fee')}}">Student Fee</a>
                </li>
               
              
              </ul>
            </div>
          </li>
          <!-- accounting area end-->


      <!-- Back Office area start -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-office" aria-expanded="false" aria-controls="ui-office">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Library</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-office">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  {{-- Add student link create --}}
                  <a class="nav-link" href="{{url('/books')}}">Books</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/book_issue')}}">Books Issue</a>
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
              {{-- add my content area --}}
 @yield('content')