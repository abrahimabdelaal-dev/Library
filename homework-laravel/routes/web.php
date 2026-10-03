<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
Route::get('/hh', function () {
    return view('welcome');
});

Route::get('/add_pro', function () {

    $product = Product::create([
        'name'=>'lenovo',
        'price' => 150,
        'discount' =>30,
        'stock'  => 2,
        'is_available'=>true
        
        

    ]);

   
  return $product;
});


Route::get('/add_cat', function () {

    $category = Category::create([
        
        'name'=>"cars"
    
    ]);

   
  return $category;
});