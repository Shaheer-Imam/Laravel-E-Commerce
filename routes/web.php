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
// Authentication page Routes
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');
    // Registration Routes...
Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('admin/register', 'Auth\RegisterController@register');
    // Password Reset Routes...
Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset');
// Notification
Route::get('/notification/MarkAllAsRead', function () {
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('MarkAllAsRead');
// Route::match(['get', 'post'], '/admin/upload', 'ProductAdminController@image_upload')->name('image_upload');
// Ecommerce Pages
Route::get('/', 'ProductController@showhome')->name('ecommerce_home');
// Route::get('/products/{productname}', 'ProductController@showproducts')->name('showproducts');
Route::get('image/upload', 'ProductController@fileCreate');
Route::post('image/upload/store', 'ProductController@fileStore');
Route::post('image/delete', 'ProductController@fileDestroy');
Route::post('image/getproductimages', 'ProductController@GetProductsImages');
// Route::get('/admin/ListProducts/GetListProducts', [
//     'as' => 'GetListProducts',
//     'uses' => function () {
//         $users = App\Products::select('product_name', 'product_price', 'product_status', 'product_quantity', 'product_id')->get();
//         return Datatables::of($users)->make();
//     }
// ]);
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/CreateProducts', 'ProductAdminController@CreateProducts')->name('admin.CreateProducts');
    Route::post('/AddProducts', 'ProductAdminController@AddProducts')->name('admin.AddProducts');
    Route::get('/EditProduct/{ProductId}', 'ProductAdminController@EditProduct')->name('admin.EditProduct');
    Route::get('/ListProducts', 'ProductAdminController@ListProducts')->name('admin.ListProducts');
    Route::get('/ListProducts/GetListProducts', 'ProductAdminController@GetListProductsDuplicate')->name('GetListProducts');
    Route::get('/changeActive/{product_id}', 'ProductAdminController@changeActive')->name('changeActive');
    Route::get('/delete/{product_id}', 'ProductAdminController@deleteProduct')->name('deleteProduct');
    Route::get('/home', 'AdminController@index');
    Route::get('/', 'AdminController@index')->name('home');
    Route::get('/settings', 'AdminController@settings')->name('settings');
    Route::get('/checkpassword', 'AdminController@checkpassword')->name('checkpassword');
    Route::match(['get', 'post'], '/updateusername', 'AdminController@updateusername')->name('updateusername');
    Route::match(['get', 'post'], '/updatepassword', 'AdminController@updatepassword')->name('updatepassword');
    /**
     * Route Attribute
     */
    Route::group(['prefix' => 'attributes'], function () {
        Route::get('/', 'AttributeController@index')->name('attribute.index');
        Route::get('/create', 'AttributeController@create')->name('attribute.create');
        Route::get('/edit/{attribute_id}', 'AttributeController@edit')->name('attribute.edit');
        Route::match(['get', 'post'], '/update/{attribute_id}', 'AttributeController@update')->name('attribute.update');
        Route::match(['get', 'post'], '/save', 'AttributeController@save')->name('attribute.save');
        Route::get('/delete/{attribute_id}', 'AttributeController@delete')->name('attribute.delete');
        Route::match(['get', 'post'], '/updateproduct/{attribute_id}', 'AttributeController@updateproduct')->name('attribute.updateproduct');
    });
    /**
     * Route Attribute
     *  */
    /**
     * Attribute Options
     */
    Route::group(['prefix' => 'options'], function () {
        Route::get('/', 'OptionsController@index')->name('options.index');
        Route::get('/create', 'OptionsController@create')->name('options.create');
        Route::get('/edit/{attribute_id}', 'OptionsController@edit')->name('options.edit');
        Route::match(['get', 'post'], '/update/{attribute_id}', 'OptionsController@update')->name('options.update');
        Route::match(['get', 'post'], '/save', 'OptionsController@save')->name('options.save');
        Route::get('/delete/{attribute_id}', 'OptionsController@delete')->name('options.delete');
    });
    /**
     * Attribute Options
     */
    /**
     * Route Attribute
     */
    Route::group(['prefix' => 'attributegroup'], function () {
        Route::get('/', 'AttributeGroupController@index')->name('attributegroup.index');
        Route::get('/create', 'AttributeGroupController@create')->name('attributegroup.create');
        Route::get('/edit/{attribute_id}', 'AttributeGroupController@edit')->name('attributegroup.edit');
        Route::match(['get', 'post'], '/update/{attribute_id}', 'AttributeGroupController@update')->name('attributegroup.update');
        Route::match(['get', 'post'], '/save', 'AttributeGroupController@store')->name('attributegroup.save');
        Route::get('/delete/{attribute_id}', 'AttributeGroupController@delete')->name('attributegroup.delete');
    });


    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::get('/create', 'CategoryController@create')->name('category.create');
        Route::get('/edit/{attribute_id}', 'CategoryController@edit')->name('category.edit');
        Route::match(['get', 'post'], '/update/{attribute_id}', 'CategoryController@update')->name('category.update');
        Route::match(['get', 'post'], '/save', 'CategoryController@save')->name('category.save');
        Route::get('/delete/{attribute_id}', 'CategoryController@delete')->name('category.delete');
    });


    Route::group(['prefix' => 'api'], function () {
         
        Route::get('getAttributes', 'AdminDatatables@getAttributes')->name('getAttributes');
        Route::get('getGroupAttributes', 'AdminDatatables@getGroupAttributes')->name('getGroupAttributes');
        Route::get('getOptions', 'AdminDatatables@Options')->name('getOptions');
        Route::get('getCategory', 'AdminDatatables@Category')->name('getCategory');
        Route::get('saveAttributeOptions', 'ProductAdminController@saveAttributeOptions')->name('saveAttributeOptions');
        Route::get('ProductAttributes/{attributeid}', 'AdminDatatables@ProductAttributes');
        Route::get('getOptionsbyAttribute/{attributeid}', 'ProductAdminController@getOptionsbyAttribute')->name('getOptionsbyAttribute');
        
         
    });
    
    /**
     * Route Attribute
     *  */ 
});
Route::get('/', function () {
    return view('index');
})->name("ecommerce");

// Route::get('/HomePage1', 'PagesController@HomePage1')->name("home");
Route::group(['prefix' => 'category'], function () {
    Route::get('/', 'PagesController@category')->name('category');
});
Route::group(['prefix' => 'product'], function () {
    Route::get('/', 'Ecommerce\ProductController@show')->name("product");
    Route::get('/{product_id}', 'Ecommerce\ProductController@show')->name("showproducts");
});
Route::group(['prefix' => 'compare'], function () {
    Route::get('/', 'PagesController@compare')->name("compare");
});
Route::group(['prefix' => 'wishlist'], function () {
    Route::get('/', 'PagesController@wishlist')->name('wishlist');
});
Route::group(['prefix' => 'shop'], function () {
    Route::get('/', 'PagesController@shop')->name("shop");
});
Route::group(['prefix' => 'cart'], function () {
    Route::get('/', 'PagesController@Cart')->name("cart");
    Route::get('/submit', 'CartController@store')->name("cart.submit");    
});
Route::group(['prefix' => 'checkout'], function () {
    Route::get('/', 'PagesController@CheckOut')->name("checkout");
});