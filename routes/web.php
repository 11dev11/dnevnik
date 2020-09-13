<?php




Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::middleware(['home'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

});

// Route::get('/admin/home', function () {

//     return view('admin.home');

// })->name('admin.home');


Route::get('/teacher/home', 'HomeController@teacher')->name('teacher.home');

Route::get('/professor/home', 'HomeController@professor')->name('professor.home');

Route::get('/parent/home', 'HomeController@parent')->name('parent.home');

Route::get('/principal/home', 'HomeController@principal')->name('principal.home');

//Route::get('/teacher/section', 'TeacherController@section')->name('teacher.section');


Route::group(['middleware' => 'admin'], function () {

    Route::resource('/admin/users', 'AdminUsersController');

    Route::get('/admin/home', 'AdminUsersController@home')->name('admin.home');

   // Route::get('/admin/create', 'AdminUsersController@create')->name('admin.create');

  //  Route::post('/admin/section/store', 'SectionController@store')->name('section.store');

   // Route::get('/admin/parent/create', 'AdminUsersController@create_parent')->name('parent.create');

   //Route::post('/admin/parent/store', 'AdminUsersController@store_parent')->name('parent.store');

    Route::resource('/admin/classes', 'AdminClassesController');
    Route::resource('/admin/subjects', 'AdminSubjectsController');

Route::delete('users/{id}', function($id) {
        return redirect(route('subjects.destroy', compact('id')));
    });

    Route::resource('/admin/students', 'AdminStudentsController');
//    Route::delete('students/{id}', function($id) {
//        return redirect(route('students.destroy', compact('id')));
//    });
    Route::get('students/{id}', function($id) {
        return redirect(route('students.show', compact('id')));
    });
});



