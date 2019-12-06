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
// Frontend
Route::get('/', 'Frontend\IndexController@GetIndex');
<<<<<<< HEAD
Route::post('', 'Frontend\IndexController@PostLogin');

=======
>>>>>>> parent of 0123c6e... Merge branch 'development' into Thang
Route::get('contact', 'Frontend\IndexController@GetContact');
Route::get('404', 'Frontend\IndexController@Get404');

Route::group(['prefix'=>'product'],function(){
    Route::get('/', 'Frontend\ProductController@GetProduct');
    Route::get('detail', 'Frontend\ProductController@GetProductDetail');
});
Route::group(['prefix'=>'cart'],function(){
    Route::get('', 'Frontend\CheckoutController@GetCart');
    Route::get('checkout', 'Frontend\CheckoutController@GetCheckout');
    Route::get('wishlist', 'Frontend\CheckoutController@GetWishlist');
});
Route::group(['prefix'=>'user'],function(){
    Route::get('account', 'Frontend\UserController@GetAccount');
});


// Backend
Route::get('admin/login', 'Admin\AuthController@getLoginAdmin');
Route::get('admin/logout', 'Admin\AuthController@getLogoutAdmin')->name('logout');
Route::post('admin/login', 'Admin\AuthController@postLoginAdmin');
Route::group(['namespace' => 'Admin',
    'prefix' => 'admin',
    'as'=>'Admin::',
    'middleware' => 'adminLogin'], function () {
    Route::group(['prefix' => 'dashboard','as'=>'dashboard@'], function () {
        Route::get('/',['as'=>'index','uses'=>'DashboardController@index']);
    });
    Route::group(['prefix' => 'user','as'=>'user@'], function () {
        Route::get('/',['as'=>'index','uses'=>'UserController@index'] );
        Route::get('add',['as'=>'add','uses'=> 'UserController@getAdd']);
        Route::post('store',['as'=>'store','uses'=> 'UserController@store'] );
        Route::get('edit/{id}',['as'=>'edit','uses'=>'UserController@getEdit'] );
        Route::get('delete/{id}', ['as'=>'delete','uses'=>'UserController@getDelete']);
        Route::post('edit/{id}', ['as'=>'update','uses'=>'UserController@update']);

    });
    Route::group(['prefix' => 'category','as'=>'category@'], function () {
        Route::get('/',['as'=>'index','uses'=>'CategoryController@index'] );
        Route::get('add',['as'=>'add','uses'=> 'CategoryController@getAdd']);
        Route::post('store',['as'=>'store','uses'=> 'CategoryController@store'] );
        Route::get('edit/{id}',['as'=>'edit','uses'=>'CategoryController@getEdit'] );
        Route::get('delete/{id}', ['as'=>'delete','uses'=>'CategoryController@getDelete']);
        Route::post('edit/{id}', ['as'=>'update','uses'=>'CategoryController@update']);

    });
    Route::group(['prefix' => 'product','as'=>'product@'], function () {
        Route::get('/',['as'=>'index','uses'=>'ProductController@index'] );
        Route::get('add',['as'=>'add','uses'=> 'ProductController@getAdd']);
        Route::post('store',['as'=>'store','uses'=> 'ProductController@store'] );
        Route::get('edit/{id}',['as'=>'edit','uses'=>'ProductController@getEdit'] );
        Route::get('delete/{id}', ['as'=>'delete','uses'=>'ProductController@getDelete']);
        Route::post('edit/{id}', ['as'=>'update','uses'=>'ProductController@update']);
    });
});
