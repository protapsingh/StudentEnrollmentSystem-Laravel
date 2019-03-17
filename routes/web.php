<?php


Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin.admin_login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/tutionFee', function () {
    return view('admin.tutionFee');
});
Route::get('/result', function () {
    return view('admin.result');
});

Route::get('/result', function () {
    return view('admin.allTeacher');
});


Route::get('/viewProfile', function () {
    return view('admin.viewProfile');
});
Route::get('/settings', function () {
    return view('admin.settings');
});
Route::get('/addStudent', function () {
    return view('admin.addStudent');
});




Route::post('/adminlogin','AdminController@admin_login');
Route::get('/logout','AdminController@logout');
Route::get('/allStudent','StudentController@show_student');
Route::post('/addStudent','StudentController@addStudent');

Route::get('/course&{id}','CourseController@show_student');

//another route system to delete edit and show a user accoding to its id.
Route::get('/delete_student/{id}','StudentController@delete_student');
Route::get('/view_student/{id}','StudentController@view_student');
Route::get('/edit_student/{id}','StudentController@edit_student');
Route::post('/update_student/{id}','StudentController@update_student');



/*also can be do by this
Route::post('/edit_student/update_student/{id}','StudentController@update_student');

on that time action will be .....action="update_student/{{$student-id}}
*/


