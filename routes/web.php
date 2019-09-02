<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home.index');
});
Route::get('/result', 'ResultController@index')->name('result');
Route::get('/showresult', 'ResultController@show')->name('showresult');
Route::get('selectclass/{sessionid}', 'OnchangeController@selectclass');
Route::get('selectshift/{classid}', 'OnchangeController@selectshift');
Route::get('selectsection/{shiftid}', 'OnchangeController@selectsection');
Route::resource('smsmanu', 'SmsmanueController');

// fake new


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//=========Admin Route Start Here ====================

Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'middleware' => ['auth', 'admin'],
    ],
    function () {
        Route::get('dashboard', 'DashboardController@index');
        Route::get('login', 'DashboardController@index');

        // Start for admin user control route
        Route::resource('professor', 'ProfessorController');
        Route::resource('addstudent', 'StudentController');
        Route::resource('notice', 'NoticeController');
        Route::get('selectclass/{sessionid}', 'StudentController@selectclass');
        Route::get('selectshift/{classid}', 'StudentController@selectshift');
        Route::get('selectsubject/{classid}', 'StudentController@selectsubject');
        Route::get('selectsection/{shiftid}', 'StudentController@selectsection');


        // End for admin user control route
    }
);

// =======Start for admin Academic control route===============

Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Academic',
        'middleware' => ['auth', 'admin'],
    ],
    function () {
        Route::resource('subject', 'SubjectController');
        Route::resource('class', 'ClassController');
        Route::resource('section', 'SectionController');
        Route::resource('session', 'SessionController');
        Route::resource('department', 'DepartmentController');
        Route::resource('shift', 'ShiftController');
        Route::resource('syllabus', 'SyllabusController');
        Route::get('view_attendance', '\Academic/DailyAttendanceController@showattendance');
        Route::resource('daily_attendance', 'DailyAttendanceController');
        Route::resource('class_routine', 'ClassRoutinController');
        // Route::get('/{session_id}', 'ClassRoutinController@index');
    }
);
//======= End for admin Academic control route==========

//======== Start for admin Exam control route==========

Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Exam',
        'middleware' => ['auth', 'admin'],
    ],
    function () {
        Route::resource('manage_marks', 'MarkController');

        Route::resource('myexam', 'ExamController');

        Route::resource('grade', 'GradeController');
        Route::get('student_promotion', 'StudentPromotionController@index');
    }
);
//=========== End for admin Exam control route=========

//===========start for admin Accounting control route=====

Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Accounting',
        'middleware' => ['auth', 'admin'],
    ],
    function () {
        Route::get('student_fee', 'StudentFeeController@index');
        Route::get('expense_category', 'ExpenseCategoryController@index');
        Route::get('expense_manager', 'ExpenseController@index');
    }
);

//===========end for admin Accounting control route=====

//=========Admin Route End Here ====================

Route::group(
    [
        'as' => 'gadmin.',
        'prefix' => 'gadmin',
        'namespace' => 'GeneralAdmin',
        'middleware' => ['auth', 'gadmin'],
    ],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('login', '@index')->name('dashboard');
    }
);
Route::group(
    [
        'as' => 'teacher.',
        'prefix' => 'teacher',
        'namespace' => 'Teacher',
        'middleware' => ['auth', 'teacher'],
    ],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('login', 'DashboardController@index')->name('dashboard');
    }
);

Route::group(
    [
        'as' => 'parent.',
        'prefix' => 'parent',
        'namespace' => 'Parent',
        'middleware' => ['auth', 'parent'],
    ],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('login', 'DashboardController@index')->name('dashboard');
    }
);
Route::group(
    [
        'as' => 'student.',
        'prefix' => 'student',
        'namespace' => 'Student',
        'middleware' => ['auth', 'student'],
    ],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('login', 'DashboardController@index')->name('dashboard');
    }
);
Route::group(
    [
        'as' => 'accountant.',
        'prefix' => 'accountant',
        'namespace' => 'Accountant',
        'middleware' => ['auth', 'accountant'],
    ],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('login', 'DashboardController@index')->name('dashboard');
    }
);
Route::group(
    [
        'as' => 'libarian.',
        'prefix' => 'libarian',
        'namespace' => 'Libarian',
        'middleware' => ['auth', 'libarian'],
    ],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('login', 'DashboardController@index')->name('dashboard');
    }
);

Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Exam',
        'middleware' => ['auth', 'admin'],
    ],
    function () {
        Route::get('exam', 'ExamController@index')->name('examcreate');
    }
);


Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Settings',
        'middleware' => ['auth', 'admin'],
    ],
    function () {
        Route::resource('year', 'YearController');
        Route::resource('month', 'MonthController');
        Route::resource('day', 'DayController');
        Route::resource('hour', 'HourController');
        Route::resource('minute', 'MinuteController');
        Route::resource('schools', 'SchoolNameController');
    }
);
