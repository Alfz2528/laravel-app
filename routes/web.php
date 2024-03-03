<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; //add the ControllerNameSpace
use App\Http\Controllers\QrCodeController;
// Define a route for the GET method
Route::get('/', function () {
   //return 'Hello, world!';
});

//Define a route for the POST method
Route::get('/submit', function () {
   return 'Form submitted successfully!';
});
// Define a route for the PUT method
//Route::put('/update/{id}', function ($id) {
  //  return "Updated record with ID: $id";
//});
// Define a route for the DELETE method
//Route::delete('/delete/{id}', function ($id) {
   // return "Deleted record with ID: $id";
//});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource("/student", StudentController::class);

//Route::get("/", [StudentController::class,"index"]); // direct
Route::get('/qrcode', [QrCodeController::class, 'index']);

Route::get('/students/{student}', 'StudentController@show')->name('students.show');