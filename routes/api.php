<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Books\BooksController;
use App\Models\Book;
use App\Models\User;
use App\Http\Controllers\BookController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth.basic')->group(function () {
    Route::apiResource('books', BooksController::class);
});

Route::get('/', function () {
    return response()->json([
        'message' => 'This is a simple example of item returned by your APIs. Everyone can see it.'
    ]);
});

Route::get('/books', function () {

    $books =  Book::get();
    return response()->json([
        'message' => 'Success.',
        'data' => $books
    ]);
});

Route::get('/users', function () {

    $users =  User::get();

    return response()->json([
        'message' => 'Success.',
        'data' => $users
    ]);
});

Route::post('/book-create', [BookController::class, 'index']);

Route::delete('/book-delete/{id}', [BookController::class, 'delete']);