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
    return view('welcome');
});
Route::get('/admin','Admin\AdminController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Roles Route
Route::get('admin/role','Admin\RoleController@index');
Route::get('/admin/role/addrole', 'Admin\RoleController@create');
Route::post('/admin/role/addrole/submit', 'Admin\RoleController@store');
Route::get('/admin/role/editrole/{id}', 'Admin\RoleController@edit');
Route::post('admin/role/editrole/{id}/submit','Admin\RoleController@update');
Route::get('/admin/role/viewpermission/{id}', 'Admin\RoleController@viewPermissions');
Route::get('admin/role/delete/{id}','Admin\RoleController@destroy');

//Permission Route
Route::get('/admin/permission','Admin\PermissionController@index');
Route::get('/admin/permission/addpermission','Admin\PermissionController@create');
Route::post('/admin/permission/addpermission/submit','Admin\PermissionController@store');
Route::get('/admin/permission/edit/{id}','Admin\PermissionController@edit');
Route::post('admin/permission/edit/{id}/submit','Admin\PermissionController@update');
Route::get('admin/permission/delete/{id}','Admin\PermissionController@destroy');

//user route
Route::get('/admin/user','Admin\UserController@index');

//Real Estate Routes
Route::resource('/admin/realestate','Admin\RealEstateController');