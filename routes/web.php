<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',['as'=>'index','uses'=>'HomeController@Calendar_index']);



Route::get('home','HomeController@showProfile');

//命名
Route::get('home/welcome',['as'=>'home.index',function(){

	return view('welcome');
}]);

Route::get('home/create',['as'=>'home.create','uses'=>'HomeController@create']);

Route::get('home/{id}',['as'=>'home.show','uses'=>'HomeController@show']);

Route::get('home/{id}/edit',['as'=>'home.edit','uses'=>'HomeController@edit']);


Route::get('index',function(){
	return view('calendar_index');
});
/*
Route::get('calendar_index/{calendar_number}',['as'=>'calendar_select','uses'=>'HomeController@Calendar_Select']);
*/
Route::pattern('calendar_number','[0-9]{1,2}');
Route::get('calendar_index/{calendar_number}', [
    'as' => 'calendar_select', 'uses' => 'HomeController@Calendar_Select'
]);

/*
Route::get('/', function () {
    return view('welcome');
});

*/
/*
Route::get('student/{student_no}/score/{subject}',function($student_no,$subject){
    return "學號".$student_no.":".$subject;

});

*/

/* 選擇性 待查
Route::get('student/{student_no}/score/{subject?}',function($student_no,$subject=null){
	return "學號".$student_no.":".((is_null($subject))?"所有成績":$subject)."成績";
});
*/

/*
//群組化 待查
Route::pattern('student_no','a[0-9]{5}');
Route::group(['prefix'=>'student'],function(){

	Route::get('{student_no}',function($student_no){
		return "學號".$student_no;
	});
});
*/
/*
//命名 待查
//Route::pattern('student_no','a[0-9]{5}');
Route::group(['prefix'=>'student'],function(){

	Route::get('student_no',[
		'as'=>'student',
		'user'=>'StudentConroller@getStudentData'
		

		]);
	});
*/
