<?php

use Illuminate\Http\Request;
use App\User;

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

/**
**Basic Routes for a RESTful service:
**Route::get($uri, $callback);
**Route::post($uri, $callback);
**Route::put($uri, $callback);
**Route::delete($uri, $callback);
**
*/
Route::get('users', function () {
    return response(User::all(),200);
});

Route::get('users/{user}', function ($userId) {
    return response(User::find($userId), 200);
});


Route::post('users', function(Request $request) {
   $resp = User::create($request->all());
    return $resp;
});

Route::put('users/{user}', function(Request $request, $userId) {
    $user = User::findOrFail($userId);
    $user->update($request->all());
    return $user;
});

Route::delete('products/{user}',function($userId) {
    User::find($userId)->delete();
    return 204;

});
