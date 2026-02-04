<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/product_detail', function () {
    return view('product_detail');
});

Route::get('/view_product', function () {
    return view('view_product');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/franchisee', function () {
    return view('franchisee');
});
Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::get('/refer_earn', function () {
    return view('refer_earn');
});
Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});
Route::get('/shipping-policy', function () {
    return view('shipping-policy');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/refund_policy', function () {
    return view('refund_policy');
});
Route::get('/why-freshful', function () {
    return view('why-freshful');
});
Route::get('/myaccount', function () {
    return view('myaccount');
});
Route::get('/checkout', function () {
    return view('checkout');
});
