<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| https://madewithlaravel.com/telegram-bot-sdk
*/



Route::post('/PostRequest','ClinetController@PostRequest')->name('PostRequest');
Route::get('/','ClinetController@CreateView');



Route::get('/', function () {
    return view('login');
});


// PostRequest

Route::get('/slogin', function () {
    return view('login');
});


// https://dotnet.microsoft.com/apps/aspnet/mvc

Route::get('/arabic','Helper\HelperController@arabic');
Route::get('/english','Helper\HelperController@english');
Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');





/*
|--------------------------------------------------------------------------
| Web Routes SystemAdministrator rTasks
|--------------------------------------------------------------------------
| this is for SystemAdministrator of the system
|
|
|   
|
*/


Route::group(['prefix'=>'SystemAdministrator','middleware' => ['role:SystemAdministrator']], function () {



        Route::get('/','Admin\AdminController@index');
        Route::get('/CreateUser','Admin\AdminController@create');
        Route::post('/StoreUser','Admin\AdminController@StoreUser');
        Route::get('/changeUserRole','Admin\AdminController@changeUserRole');
        Route::post('/StoreUserRole','Admin\AdminController@StoreUserRole');
        Route::post('/StoreUserPassword','Admin\AdminController@StoreUserPassword');
        Route::post('/StoreUserDepartment','Admin\AdminController@StoreUserDepartment');
        Route::get('/AssignDepartmentAdmin','Admin\AdminController@AssignDepartmentAdmin');
        Route::get('/rTasks','Admin\AdminController@rTasks');
        Route::get('/rTasksReport','Admin\AdminController@rTasksReport');

});





/*
|--------------------------------------------------------------------------
| Web Routes ClientAgent
|--------------------------------------------------------------------------
| this is for ClientAgent of the system
|
|
|   ClientAgent
|
*/





Route::group(['prefix'=>'ClientAgent','middleware' => ['role:ClientAgent']], function () {
  


    Route::get('/','ClientAgent\ClientAgentController@index');
    Route::get('/CreateTicket','ClientAgent\ClientAgentController@CreateTicket');
    Route::post('/StoreTicket','ClientAgent\ClientAgentController@StoreTicket');
    Route::get('/ShowTicket','ClientAgent\ClientAgentController@ShowTicket');
    Route::get('/GetDetails','ClientAgent\ClientAgentController@GetDetails');
    Route::post('/StoreReply','ClientAgent\ClientAgentController@StoreReply');

});




/*
|--------------------------------------------------------------------------
| Web Routes TaskManager
|--------------------------------------------------------------------------
| this is for TaskManager of the system
|
|
|   TaskManager
|
*/


Route::group(['prefix'=>'TaskManager','middleware' => ['role:TaskManager']], function () {
  


    Route::get('/','TaskManager\TaskManagerController@index');
    Route::post('/AssingDepartment','TaskManager\TaskManagerController@AssingDepartment');

});



/*
|--------------------------------------------------------------------------
| Web Routes IwDepartmentAdmin
|--------------------------------------------------------------------------
| this is for IwDepartmentAdmin of the system
|
|
|   IwDepartmentAdmin
|
*/






Route::group(['prefix'=>'IwDepartmentAdmin','middleware' => ['role:IwDepartmentAdmin']], function () {
   // UpdateTaskToUser

    Route::get('/','IwDepartmentAdmin\IwDepartmentAdminController@index');
    Route::get('/GetDetails','IwDepartmentAdmin\IwDepartmentAdminController@GetDetails');
    Route::post('/StoreReply','IwDepartmentAdmin\IwDepartmentAdminController@StoreReply');
    Route::post('/AssingTaskToUser','IwDepartmentAdmin\IwDepartmentAdminController@AssingTaskToUser');
    Route::get('/News','IwDepartmentAdmin\IwDepartmentAdminController@News');
    Route::post('/StoreNews','IwDepartmentAdmin\IwDepartmentAdminController@StoreNews');
    Route::get('/profile','IwDepartmentAdmin\IwDepartmentAdminController@profile');
    Route::post('/UpdateTaskToUser','IwDepartmentAdmin\IwDepartmentAdminController@UpdateTaskToUser');

});

/*
|--------------------------------------------------------------------------
| Web Routes IwAgent
|--------------------------------------------------------------------------
| this is for IwAgent of the system
|      
|
|   
|
*/


Route::group(['prefix'=>'IwAgent','middleware' => ['role:IwAgent']], function () {
    

    // News  StoreNews  Rejcted
     Route::get('/','IwAgent\IwAgentController@index');
     Route::get('/GetDetails','IwAgent\IwAgentController@GetDetails');
     Route::post('/StoreReply','IwAgent\IwAgentController@StoreReply');
     Route::get('/profile','IwAgent\IwAgentController@profile');
     Route::get('/News','IwAgent\IwAgentController@News');
     Route::post('/StoreNews','IwAgent\IwAgentController@StoreNews');

     Route::get('/Rejcted','IwAgent\IwAgentController@Rejcted');
});




