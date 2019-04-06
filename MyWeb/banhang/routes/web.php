 <?php
/*Route::get('/dulieu', function(){
    return view("data.giaodien");
});*/

/*Route::get('/giohang', function(){
    return view("customer.page.cart");
});*/

Route::group(['prefix'=>'luckycake'], function(){
		Route::get('trangchu', 'PageController@home');
		Route::get('sanpham', 'PageController@product');
		Route::get('loaisanpham/{type}', 'PageController@producttype');
		Route::get('lienhe', 'PageController@contact');
		Route::get('gioithieu', 'PageController@introduce');
		Route::get('tintuc', 'PageController@news');
		Route::get('chitiettintuc/{id}', 'PageController@cttintuc');
		Route::get('search', 'PageController@search');
		Route::get('chitietsanpham/{id}', 'PageController@chitiet');
		Route::post('comment/{id}', 'CommentController@postComment');
		Route::post('contact', 'ContactController@store');

	});
//Customer
Route::group(['prefix'=>'customer'], function(){
	Route::group(['prefix'=>'giohang'], function(){
		Route::get('add-to-giohang/{id}', 'CartController@getAddtoCart');
		Route::get('show', 'CartController@show');
		Route::get('del-product/{id}', 'CartController@delete');
		Route::get('destroyproduct/{id}', 'CartController@destroy');
	});
	Route::group(['prefix'=>'donhang'], function(){
		Route::get('dathang', 'BillController@getBill');
		Route::post('ctdonhang', 'BillController@postBill');
	});
});



Route::get('dangki', 'UserController@dangki');
Route::post('postDangki', 'UserController@postDangki');
Route::get('dangnhap', 'UserController@dangnhap');
Route::post('postDangnhap', 'UserController@postDangnhap');
Route::get('dangxuat', 'UserController@dangxuat');

//Route::get('login', 'PageController@admin_Login');
//Route::post('postLogin', 'UserController@postDangnhap');


Route::group(['prefix'=>'admin', 'middleware'=>'CheckAdmin'], function(){
	
	Route::get('home', 'PageController@home_admin');

	Route::group(['prefix'=>'users'], function(){
		Route::get('index', 'UserController@index');
		Route::get('create', 'UserController@create');
		Route::post('store', 'UserController@store');
		Route::get('show/{id}', 'UserController@show');
		//Route::delete('destroy/{id}', 'UserController@destroy');
		Route::get('edit/{id}', 'UserController@edit');
		Route::put('update/{id}', 'UserController@update');
		Route::get('search-user', 'UserController@search');
	});

	Route::group(['prefix'=>'producttype'], function(){
		Route::get('index', 'ProductTypeController@index');
		Route::get('create', 'ProductTypeController@create');
		Route::post('store', 'ProductTypeController@store');
		Route::get('show/{id}', 'ProductTypeController@show');
		Route::delete('destroy/{id}', 'ProductTypeController@destroy');
		Route::get('edit/{id}', 'ProductTypeController@edit');
		Route::put('update/{id}', 'ProductTypeController@update');
	});

	Route::group(['prefix'=>'products'], function(){
		Route::get('index', 'ProductController@index');
		Route::get('create', 'ProductController@create');
		Route::post('store', 'ProductController@store');
		Route::get('show/{id}', 'ProductController@show');
		//Route::delete('destroy/{id}', 'ProductController@destroy');
		Route::get('edit/{id}', 'ProductController@edit');
		Route::put('update/{id}', 'ProductController@update');
		Route::get('search-product', 'ProductController@search');
	});

	Route::group(['prefix'=>'bills'], function(){
		Route::get('index', 'BillController@index');
		Route::get('show/{id}', 'BillController@show');
		//Route::delete('destroy/{id}', 'BillController@destroy');
		//Route::get('edit/{id}', 'BillController@edit');
		Route::put('update/{id}', 'BillController@update');
		Route::get('search-bill', 'BillController@search');
	});

	Route::group(['prefix'=>'news'], function(){
		Route::get('index', 'NewsController@index');
		Route::get('create', 'NewsController@create');
		Route::post('store', 'NewsController@store');
		Route::get('show/{id}/', 'NewsController@show');
		Route::delete('destroy/{id}', 'NewsController@destroy');
		Route::get('edit/{id}', 'NewsController@edit');
		Route::put('update/{id}', 'NewsController@update');
	});

	Route::group(['prefix'=>'contacts'], function(){
		Route::get('index', 'ContactController@index');
		Route::get('create', 'ContactController@create');
		Route::post('store', 'ContactController@store');
		//Route::get('show/{id}/', 'ContactController@show');
		Route::delete('destroy/{id}', 'ContactController@destroy');
		//Route::get('edit/{id}', 'ContactController@edit');
		//Route::put('update/{id}', 'ContactController@update');
	});

	Route::group(['prefix'=>'slides'], function(){
		Route::get('index', 'SlideController@index');
		Route::get('create', 'SlideController@create');
		Route::post('store', 'SlideController@store');
		Route::get('show/{id}/', 'SlideController@show');
		Route::delete('destroy/{id}', 'SlidesController@destroy');
		Route::get('edit/{id}', 'SlideController@edit');
		Route::put('update/{id}', 'SlideController@update');
	});
});
