<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::get('/', [UserController::class, 'show']);
Route::get('/user/{id}', [UserController::class, 'edit'])->name('user.edit');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/check', function () {
    return view('new.check');
});
Route::get('/check2', function () {
    return view('new.check2');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/submit-form', function (Request $request) {
    echo var_dump($request->all());
    // dd($request->all());
    Log::info('Form Data:', $request->all());
    Log::info('Form Data:', ['name' => $request->input('name')]);
    return redirect()->to('/contact');
})->name('submit-form');

Route::get('/article/{id}', function (float $id) {
    return view('article', ['id' => $id, "name" => 'article title']);
});

Route::get('/hello', function (Request $request) {
    return view('hello', ['greeting' => $request->input('greeting', 'Hello, World!')]);
});
