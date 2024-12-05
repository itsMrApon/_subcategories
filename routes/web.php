<?php


use App\Models\Listing;
use App\Models\switchtoswag;
use GuzzleHttp\Psr7\Request;
use Psy\Command\WhereamiCommand;

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\CategoryController;



// create

Route::any('category/create', [CategoryController::class, 'createCategory'])->name('createCategory');

//show 

Route::get('categories', [CategoryController::class, 'allCategories'])->name('allCategories');

//edit

Route::any('category/edit/{id}', [CategoryController::class, 'editCategory'])->name('editCategory');

//delete

Route::get('category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');