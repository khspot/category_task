<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ItemController;

Route::resource('categories', CategoryController::class)->except(['create', 'show', 'edit']);
Route::get('/categories/throughitems', [CategoryController::class, 'indexItems']);
Route::resource('categories.subcategories', SubcategoryController::class)->shallow()->except(['create', 'show', 'edit']);
Route::resource('categories.items', ItemController::class)->shallow()->except(['create', 'edit']);
Route::resource('subcategories.items', ItemController::class)->shallow()->except(['create', 'edit','index']);

Route::get('/categories/{category}/items', [ItemController::class, 'indexByCategory']);
Route::get('/subcategories/{subcategory}/items', [ItemController::class, 'indexBySubcategory']);
Route::get('/items/{item}/throughSubCategories', [ItemController::class, 'throughSubCategories']);

