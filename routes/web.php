<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\compController;

Route::get('/', [compController::class, 'index']);

Route::get('/createexam', [compController::class, 'createexam']);
Route::post('/createexam', [compController::class, 'store']);

Route::get('/passeexam', [compController::class, 'indexpasseexam']);
Route::post('/passeexam', [compController::class, 'storestudent']);

Route::get('/passeexam/{codestudent}/{codeexam}', [compController::class, 'passeexam']);
Route::get('/passeexamclm/{codestudent}/{codeexam}', [compController::class, 'examclm']);
Route::post('/sendchange', [compController::class, 'storechange']);


Route::get('/statistics/{codeprof}/{codeexam}', [compController::class, 'statistics']);
Route::get('/getreq/{examcode}', [compController::class, 'getstatistics']);