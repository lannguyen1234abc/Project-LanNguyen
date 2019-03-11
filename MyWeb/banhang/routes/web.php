<?php

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
/*Route::get('/dulieu', function(){
    return view("data.giaodien");
});*/

/*Route::get('/giohang', function(){
    return view("customer.page.cart");
});*/


/// Customer
Route::get('/luckycake', 'PageController@home')->name('trangchu');
Route::get('/sanpham', 'PageController@product')->name('sanpham');
Route::get('/loaisanpham/{type}', 'PageController@producttype')->name('loaisanpham');
Route::get('/lienhe', 'PageController@contact')->name('lienhe');
Route::get('/gioithieu', 'PageController@introduce')->name('gioithieu');

Route::get('/search', 'PageController@search')->name('search');
Route::get('/chitietsanpham/{id}', 'PageController@chitiet')->name('chitietsanpham');

//Giỏ hàng
Route::get('/add-to-giohang/{id}', 'CartController@getAddtoCart')->name('getAddtoCart');
Route::get('/giohang', 'CartController@show')->name('showCart');
Route::get('/destroyproduct/{id}', 'CartController@destroy')->name('destroyproduct');

//Đơn hàng
Route::get('/dathang', 'BillController@getBill')->name('getBill');
Route::post('/donhang', 'BillController@postBill')->name('postBill');

///Đăng kí - đăng nhập
Route::get('/dangki', 'UserController@dangki')->name('dangki');
Route::post('/postDangki', 'UserController@postDangki')->name('postDangki');
Route::get('/dangnhap', 'UserController@dangnhap')->name('dangnhap');
Route::post('/postDangnhap', 'UserController@postDangnhap')->name('postDangnhap');
Route::get('/dangxuat', 'UserController@dangxuat')->name('dangxuat');



//////////////////////////////////////////////////////////////////////////

///Admin
Route::get('/login/admin', 'UserController@adminLogin')->name('adminLogin');
Route::post('/postAdminlogin', 'UserController@postAdminlogin')->name('postAdminlogin');
Route::get('/admin', 'PageController@getadmin')->name('admin');

///Loại sản phẩm
Route::get('admin/producttype', 'ProductTypeController@index')->name('producttype.index');
Route::get('admin/producttype/create', 'ProductTypeController@create')->name('producttype.create');
Route::post('admin/producttype', 'ProductTypeController@store')->name('producttype.store');
Route::get('admin/producttype/{id}', 'ProductTypeController@show')->name('producttype.show');
Route::delete('admin/producttype/{id}', 'ProductTypeController@destroy')->name('producttype.destroy');
Route::get('admin/producttype/{id}/edit', 'ProductTypeController@edit')->name('producttype.edit');
Route::put('admin/producttype/{id}', 'ProductTypeController@update')->name('producttype.update');

/// Users
Route::get('admin/users', 'UserController@index')->name('users.index');
Route::post('admin/users', 'UserController@store')->name('users.store');
Route::get('admin/users/{id}', 'UserController@show')->name('users.show');
Route::delete('admin/users/{id}', 'UserController@destroy')->name('users.destroy');
Route::get('admin/users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::put('adminusers/{id}', 'UserController@update')->name('users.update');

///Product
Route::get('admin/products/index', 'ProductController@index')->name('products.index');
Route::get('admin/products/create', 'ProductController@create')->name('products.create');
Route::post('admin/products', 'ProductController@store')->name('products.store');
Route::get('admin/products/{id}/', 'ProductController@show')->name('products.show');
Route::delete('admin/products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::get('admin/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::put('adminproducts/{id}', 'ProductController@update')->name('products.update');

///Bill
Route::get('admin/bills', 'BillController@index')->name('bills.index');
Route::get('admin/bills/{id}', 'BillController@show')->name('bills.show');
Route::delete('admin/bills/{id}', 'BillController@destroy')->name('bills.destroy');
Route::get('admin/bills/{id}/edit', 'BillController@edit')->name('bills.edit');
Route::put('admin/bills/{id}', 'BillController@update')->name('bills.update');

///News
Route::get('admin/news/index', 'NewsController@index')->name('news.index');
Route::get('admin/news/create', 'NewsController@create')->name('news.create');
Route::post('admin/news', 'NewsController@store')->name('news.store');
Route::get('admin/news/{id}/', 'NewsController@show')->name('news.show');
Route::delete('admin/news/{id}', 'NewsController@destroy')->name('news.destroy');
Route::get('admin/news/{id}/edit', 'NewsController@edit')->name('news.edit');
Route::put('admin/new/{id}', 'NewsController@update')->name('news.update');
