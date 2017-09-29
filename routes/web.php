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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('product/{id}',[
    'uses' => 'ProductController@getProduct',
    'as' => 'shop.product'
]);

/* ------------ CATEGORY ROUTES --------------*/

Route::get('books/category/history',[
    'uses' => 'CategoryController@getHistory',
    'as' => 'category.history'
]);
Route::get('books/category/action',[
    'uses' => 'CategoryController@getAction',
    'as' => 'category.action'
]);
Route::get('books/category/fantasy',[
    'uses' => 'CategoryController@getFantasy',
    'as' => 'category.fantasy'
]);
Route::get('books/category/adventure',[
    'uses' => 'CategoryController@getAdventure',
    'as' => 'category.adventure'
]);
Route::get('books/category/romance',[
    'uses' => 'CategoryController@getRomance',
    'as' => 'category.romance'
]);


Route::group(['prefix' => 'user'], function(){
    Route::group(['middleware' => 'guest'], function(){
        Route::get('signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);
    
        Route::post('signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);
        
        Route::get('signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'login'
        ]);
        
        Route::post('signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'login'
        ]);
    });

    Route::group(['middleware' => 'auth'], function(){
        Route::get('add-to-cart/{id}', [
            'uses' => 'ProductController@getAddToCart',
            'as' => 'product.addToCart'
        ]);

        Route::get('add-qty/{id}', [
            'uses' => 'ProductController@getAddQty',
            'as' => 'product.addQty'
        ]);

        Route::get('delete-qty/{id}', [
            'uses' => 'ProductController@getReduceByOne',
            'as' => 'product.ReduceByOne'
        ]);

        Route::get('remove-item/{id}', [
            'uses' => 'ProductController@getRemoveItem',
            'as' => 'product.removeItem'
        ]);


        Route::get('shoppingcart', [
            'uses' => 'ProductController@getCart',
            'as' => 'product.shoppingCart'
        ]);

        // WISH LIST
        Route::get('wishlist', [
            'uses' => 'WishlistController@getWish',
            'as' => 'product.Wishlist'
        ]);

        Route::get('add-to-wishlist/{id}', [
            'uses' => 'WishlistController@getAddToWish',
            'as' => 'product.addToWish'
        ]);

        Route::get('remove-wish/{id}', [
            'uses' => 'WishlistController@getRemoveWish',
            'as' => 'product.removeWish'
        ]);
        // END WISH

        Route::get('checkout',[
            'uses' => 'ProductController@getCheckout',
            'as' => 'checkout'
        ]);

        Route::post('checkout',[
            'uses' => 'ProductController@postCheckout',
            'as' => 'checkout'
        ]);

        Route::get('delete-product/{id}',[
            'uses' => 'ProductController@deleteProduct',
            'as' => 'product.Delete'
        ]);

        Route::get('profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);

        Route::get('profile/modify',[
            'uses' => 'UserController@modify',
            'as' => 'modify-profile'
        ]);

        Route::post('profile/modify',[
            'uses' => 'UserController@update',
            'as' => 'user.update'
        ]);

        
        Route::get('logout',[
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);

        Route::post('books/review',[
            'uses' => 'ReviewController@postCreateReview',
            'as' => 'review.create'
        ]);
        
     
    });
    
    
});
