<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/products.create', [ProductController::class,'store'])->name('products.create');