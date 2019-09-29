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


Route::get('/todolist', function () {
   		$lists = DB::table('lists')->get();
    	$todo_functions = [
    		'add list',
    		'remove list',
    		'add todo',
    		'remove todo',
    		'add description',
    		'cross out task'

    	];
    return view('todos.todolist',compact('todo_functions','lists'));
});
Route::get('todolist/{list}',function($id){
	$list = DB::table('lists')->find($id);
    return view('todos.show',compact('list'));
});
