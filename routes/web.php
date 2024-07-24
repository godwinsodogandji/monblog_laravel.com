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
    Route::get("/articles", "index")->name("articles.index");
    Route::get("/articles/create", "create")->name("articles.create");
    Route::post("/articles", "store")->name("articles.store");
    Route::get("/articles/{article}", "show")->name("articles.show");
    Route::get("/articles/{article}/edit", "edit")->name("articles.edit");
    Route::patch("/articles/{article}", "update")->name("articles.update");
    Route::delete("articles/{article}", "destroy")->name("articles.destroy");

});
