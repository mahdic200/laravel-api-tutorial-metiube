<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\App\UserController;

// admin section
Route::prefix("admin")->group(function () {

    // admin user section
    Route::prefix("user")->group(function () {
        Route::get("/", [UserController::class, 'index'])->name("admin.user.index");
        Route::get("/show/{id}", [UserController::class, 'show'])->name("admin.user.show");
        Route::post("/store", [UserController::class, 'store'])->name("admin.user.store");
        Route::post("/update/{id}", [UserController::class, 'update'])->name("admin.user.update");
        Route::post("/destroy/{id}", [UserController::class, 'destroy'])->name("admin.user.destroy");
        Route::get("/restore/{id}", [UserController::class, 'restore'])->name("admin.user.restore");
        Route::get("/trash", [UserController::class, 'trash'])->name("admin.user.trash");
        Route::post("/clear-trash", [UserController::class, 'clearTrash'])->name("admin.user.clear-trash");
        Route::post("/force-delete/{id}", [UserController::class, 'forceDelete'])->name("admin.user.force-delete");
    });

});

// application public routes
Route::middleware([])->group(function () {

});

