<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::controller(PagesController::class)->group(function () {
    Route::get("/", "index");
    Route::get("/contact-us", "contact");
    Route::get("/about", "about");
});

Route::controller(ArticleController::class)->group(function () {
    Route::get("/articles", "index");
    Route::get("/articles/create","create");
    Route::post("/articles", "store");
    Route::get("/article/{article}", "show");
});
