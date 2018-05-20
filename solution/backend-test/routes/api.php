<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getAllKids', 'KidsController@index');
Route::get('getAllNotes', 'NotesController@index');

Route::post('allNotesKid', 'NotesController@allNotesKid');
Route::post('addNoteKid', 'NotesController@addNoteKid');
Route::post('deleteNote', 'NotesController@deleteNote');


