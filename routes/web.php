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

use App\Teacher;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('AdminPanel\adminPanel');
// })->name('test');

Route::get('/', function () {
    return view('LoginPage.index');
})->name('login');


// ---------------------Admin Controller Routes -----------------------
Route::get('Admin/signup/','AdminController@adminSignup')->name('adminSignup');
Route::post('Admin/Register/','AdminController@store')->name('adminRegister');
Route::get('Admin/home/','AdminController@index')->name('adminHome');


// ------Controll Different Login Scenarios------------
Route::get('user/Login/','LoginController@login')->name('loginHome');
Route::post('user/Login/check','LoginController@checkLogin')->name('checkLogin');


// --------------------Student Routes------------------------------
Route::get('Student/Signup/','StudentController@stdSignup')->name('stdsignup');
Route::post('Student/Register/','StudentController@stdRegister')->name('stdReg');
Route::get('Student/Show/','StudentController@showAll')->name('allStudents');
Route::get('Student/Deleted/{cnic}','StudentController@destroy')->name('delStudent');
Route::get('Student/Delete/','StudentController@showDelete')->name('delStudentshow');

Route::get('Student/update/','StudentController@showUpdate')->name('updateStudentshow');
Route::get('Student/Edit/{cnic}','StudentController@edit')->name('Studentedit');
Route::post('Student/updated/{cnic}','StudentController@update')->name('updatedStudent');

// --------------------Teacher Routes------------------------------
Route::get('Teacher/Signup/','TeacherController@tchSignup')->name('tchsignup');
Route::post('Teacher/Register/','TeacherController@tchRegister')->name('tchReg');
Route::get('Teacher/Show/','TeacherController@showAll')->name('allTeachers');
Route::get('Teacher/Deleted/{cnic}','TeacherController@destroy')->name('delTeacher');
Route::get('Teacher/Delete/','TeacherController@showDelete')->name('delTeachershow');

Route::get('Teacher/update/','TeacherController@showUpdate')->name('updateTeachershow');
Route::get('Teacher/Edit/{cnic}','TeacherController@edit')->name('Teacheredit');
Route::post('Teacher/updated/{cnic}','TeacherController@update')->name('updatedTeacher');


// -----------------------Parent Routes----------------------------
Route::post('Parent/Register/','ParentController@parRegister')->name('parReg');




// --------------------------Teacher Signup-------------------------------
Route::get('Teacher/signup/','TeacherController@tchSignup')->name('tchsignup');



// -----------------------------Subject Routes----------------------------------
Route::get('Subject/Insert/','SubjectController@subInsert')->name('subInsert');
Route::post('Subject/Added/','SubjectController@tchRegister')->name('subAdd');

Route::get('Subject/Show/','SubjectController@showAll')->name('allSubjects');

Route::get('Subject/Deleted/{cnic}','SubjectController@destroy')->name('delSubject');
Route::get('Subject/Delete/','SubjectController@showDelete')->name('delSubjectshow');

Route::get('Subject/update/','SubjectController@showUpdate')->name('updateSubjectshow');
Route::get('Subject/Edit/{cnic}','SubjectController@edit')->name('Subjectedit');
Route::post('Subject/updated/{cnic}','SubjectController@update')->name('updatedSubject');



// -----------------------Notification------------------
Route::get('Notification/Post/','NotificationController@create')->name('postNotification');
Route::post('Notification/Posted/','NotificationController@store')->name('notiAdd');

Route::get('Notification/Delete/','NotificationController@delShow')->name('delNotshow');
Route::get('Notification/Deleted/{id}','NotificationController@destroy')->name('delNot');

Route::get('Notification/Update/','NotificationController@showUpdate')->name('updateNotshow');
Route::get('Notification/Edit/{id}','NotificationController@edit')->name('Notificationedit');
Route::post('Notification/Updated/{id}','NotificationController@update')->name('updateNot');

Route::get('Notification/Show/','NotificationController@allShow')->name('Notshow');



// -----------------------Class Routes--------------------------
Route::get('Class/Insert/','ClassController@create')->name('classInsert');
Route::post('Class/Added/{id}','ClassController@store')->name('classAdd');
//||||||||||||||||||||||||||
Route::get('Class/Teacher/Select/','ClassController@selectTeacher')->name('selectTeacher');
Route::get('Class/Teacher/Selected/{id}/','ClassController@selectedTeacher')->name('selectedTeacher');

Route::get('Class/Delete/','ClassController@delShow')->name('delClassshow');
Route::get('Class/Deleted/{id}','ClassController@destroy')->name('delClass');

Route::get('Class/Update/','ClassController@showUpdate')->name('updateClassshow');
Route::get('Class/Edit/{id}','ClassController@edit')->name('classEdit');
Route::post('Class/Updated/{id}','ClassController@update')->name('updateClass');

Route::get('Class/Show/','ClassController@allShow')->name('classShow');


// ========================================================
// Teacher Panel


// Show Teacher Home
Route::get('TeachersHome/', 'TeacherController@Home')->name('TeacherHomeView');


// // Teacher Attendence Routes
// Route::get('abc/ ', function () {
    
//     return view('TeacherPanel\Teacherhome');
// })->name('');

Route::get('Students/select','TeacherController@selectStudent')->name('selStudent');
Route::get('Students/Add/{std}','TeacherController@addStudent')->name('addStudent');

Route::get('Students/Delete','TeacherController@selectdelStudent')->name('delStudent');
Route::get('Students/Deleted/{std}','TeacherController@delSelectStudent')->name('delClassStudent');

Route::get('Attendence/Show/','AttendenceController@getAttendence')->name('getAttendence');
Route::get('Attendence/Absent/{id}','AttendenceController@Absent')->name('Absent');
Route::get('Attendence/Present/{id}','AttendenceController@Present')->name('Present');


Route::get('Attendence/List','AttendenceController@showAttendence')->name('ListAttendence');


Route::get('Marks/Select/','MarksController@showEnterMarks')->name('showEnterMarks');
Route::get('Marks/Entered/{cnic}','MarksController@enterMarks')->name('enterMarks');
Route::post('Marks/Saved/{cnic}','MarksController@marksSave')->name('marksSave');

Route::get('Marks/Report','MarksController@Report')->name('marksReport');


Route::get('Participants/','MessagesController@Participants')->name('Participants');
Route::get('EnterMsg/{id}','MessagesController@showEnterMsg')->name('showEM');
Route::post('Send/Message/{id}','MessagesController@sendMessage')->name('send');

Route::get('Delete/Show/Message/','MessagesController@delShowMsg')->name('delMsg');
Route::get('Deleted/Message/{id}','MessagesController@DeletedMsg')->name('deletedMsg');

Route::get('List/Message/','MessagesController@allMsg')->name('allMsg');







// ======================Student Panel
Route::get('Student/Home/','StudentController@StudentHome')->name('StudentHome');
Route::get('Student/Notification/','StudentController@StudentNotification')->name('StudentNotification');
Route::get('Student/List/Message/','StudentController@allMsg')->name('allstdMsg');
Route::get('Student/Attendence/List','StudentController@showAttendence')->name('stdListAttendence');

Route::get('Contact/', function () {

    return  view('studentpanel\contact');
    
})->name('Contact');


