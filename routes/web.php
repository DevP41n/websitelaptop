<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\BrandProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//frontend
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::get('/admin',[AdminController::class,'index']);
Route::get('/dashboard',[AdminController::class,'show_dashboard']);
Route::get('/logout',[AdminController::class,'logout']);
Route::post('/admin-dashboard',[AdminController::class,'dashboard']);


//Tìm kiếm
Route::post('/tim-kiem',[HomeController::class,'search']);

//Danh mục sản phẩm trang index
Route::get('/danh-muc-san-pham/{category_id}',[CategoryProduct::class,'show_category_home']);
Route::get('/thuong-hieu-san-pham/{brand_id}',[BrandProduct::class,'show_brand_home']);
Route::get('/chi-tiet-san-pham/{product_id}',[ProductController::class,'details_product']);

//Danh mục sản phẩm
Route::get('/add-category-product',[CategoryProduct::class,'add_category_product']);
Route::get('/all-category-product',[CategoryProduct::class,'all_category_product']);
Route::get('/edit-category-product/{category_product_id}',[CategoryProduct::class,'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}',[CategoryProduct::class,'delete_category_product']);

Route::get('/unactive-category-product/{category_product_id}',[CategoryProduct::class,'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}',[CategoryProduct::class,'active_category_product']);

Route::post('/save-category-product',[CategoryProduct::class,'save_category_product']);
Route::post('/update-category-product/{category_product_id}',[CategoryProduct::class,'update_category_product']);

//Thương hiệu sản phẩm
Route::get('/add-brand-product',[BrandProduct::class,'add_brand_product']);
Route::get('/all-brand-product',[BrandProduct::class,'all_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}',[BrandProduct::class,'edit_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}',[BrandProduct::class,'delete_brand_product']);

Route::get('/unactive-brand-product/{brand_product_id}',[BrandProduct::class,'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}',[BrandProduct::class,'active_brand_product']);

Route::post('/save-brand-product',[BrandProduct::class,'save_brand_product']);
Route::post('/update-brand-product/{brand_product_id}',[BrandProduct::class,'update_brand_product']);

//Sản phẩm
Route::get('/add-product',[ProductController::class,'add_product']);
Route::get('/all-product',[ProductController::class,'all_product']);
Route::get('/edit-product/{product_id}',[ProductController::class,'edit_product']);
Route::get('/delete-product/{product_id}',[ProductController::class,'delete_product']);

Route::get('/unactive-product/{brand_product_id}',[ProductController::class,'unactive_product']);
Route::get('/active-product/{product_id}',[ProductController::class,'active_product']);

Route::post('/save-product',[ProductController::class,'save_product']);
Route::post('/update-product/{product_id}',[ProductController::class,'update_product']);

//Tin tức
Route::get('/add-news',[NewsController::class,'add_news']);
Route::get('/all-news',[NewsController::class,'all_news']);
Route::get('/news',[NewsController::class,'news']);
Route::get('/unactive-news/{news_id}',[NewsController::class,'unactive_news']);
Route::get('/active-news/{news_id}',[NewsController::class,'active_news']);
Route::get('/edit-news/{news_id}',[NewsController::class,'edit_news']);
Route::get('/delete-news/{news_id}',[NewsController::class,'delete_news']);

Route::post('/save-news',[NewsController::class,'save_news']);
Route::post('/update-news/{news_id}',[NewsController::class,'update_news']);

//Liên hệ
Route::get('/contact',[ContactController::class,'contact']);

Route::get('/add-contact',[ContactController::class,'add_contact']);
Route::get('/all-contact',[ContactController::class,'all_contact']);

Route::get('/edit-contact/{contact_id}',[ContactController::class,'edit_contact']);
Route::get('/delete-contact/{contact_id}',[ContactController::class,'delete_contact']);

Route::post('/save-contact',[ContactController::class,'save_contact']);
Route::post('/update-contact/{contact_id}',[ContactController::class,'update_contact']);

