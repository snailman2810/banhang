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
//Frontend
Route::get('/test',function (){
    return view('page/home');
});
Route::get('/','App\Http\Controllers\HomeController@index' );
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::post('/tim-kiem','App\Http\Controllers\HomeController@search');

//Danh muc san pham trang chu
Route::get('/danh-muc/{slug_category_product}','App\Http\Controllers\CategoryProduct@show_category_home');
Route::get('/thuong-hieu/{brand_slug}','App\Http\Controllers\BrandProduct@show_brand_home');
Route::get('/chi-tiet/{product_slug}','App\Http\Controllers\ProductController@details_product');

//Backend
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
Route::post('/filter-by-date','App\Http\Controllers\AdminController@filter_by_date');
//Category Product
Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@delete_category_product');
Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');

Route::post('/export-csv','App\Http\Controllers\CategoryProduct@export_csv');
Route::post('/import-csv','App\Http\Controllers\CategoryProduct@import_csv');


Route::get('/unactive-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@active_category_product');

//Send Mail
Route::get('/send-mail','App\Http\Controllers\HomeController@send_mail');

//Login facebook
Route::get('/login-facebook','App\Http\Controllers\AdminController@login_facebook');
Route::get('/admin/callback','App\Http\Controllers\AdminController@callback_facebook');

//Login google
Route::get('/login-google','App\Http\Controllers\AdminController@login_google');
Route::get('/google/callback','App\Http\Controllers\AdminController@callback_google');

Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@update_category_product');

//Brand Product
Route::get('/add-brand-product','App\Http\Controllers\BrandProduct@add_brand_product');
Route::get('/edit-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@delete_brand_product');
Route::get('/all-brand-product','App\Http\Controllers\BrandProduct@all_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@active_brand_product');

Route::post('/save-brand-product','App\Http\Controllers\BrandProduct@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}','App\Http\Controllers\BrandProduct@update_brand_product');

//Product
Route::get('/add-product','App\Http\Controllers\ProductController@add_product');
Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\ProductController@delete_product');
Route::get('/all-product','App\Http\Controllers\ProductController@all_product');

Route::get('/unactive-product/{product_id}','App\Http\Controllers\ProductController@unactive_product');
Route::get('/active-product/{product_id}','App\Http\Controllers\ProductController@active_product');

Route::post('/save-product','App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{product_id}','App\Http\Controllers\ProductController@update_product');

//Coupon
Route::post('/check-coupon','App\Http\Controllers\CartController@check_coupon');

Route::get('/unset-coupon','App\Http\Controllers\CouponController@unset_coupon');
Route::get('/insert-coupon','App\Http\Controllers\CouponController@insert_coupon');
Route::get('/delete-coupon/{coupon_id}','App\Http\Controllers\CouponController@delete_coupon');
Route::get('/list-coupon','App\Http\Controllers\CouponController@list_coupon');
Route::post('/insert-coupon-code','App\Http\Controllers\CouponController@insert_coupon_code');

//Cart
Route::post('/update-cart-quantity','App\Http\Controllers\CartController@update_cart_quantity');
Route::post('/update-cart','App\Http\Controllers\CartController@update_cart');
Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');
Route::post('/add-cart-ajax','App\Http\Controllers\CartController@add_cart_ajax');
Route::get('/show-cart','App\Http\Controllers\CartController@show_cart');
Route::get('/gio-hang','App\Http\Controllers\CartController@gio_hang');
Route::get('/delete-to-cart/{rowId}','App\Http\Controllers\CartController@delete_to_cart');
Route::get('/del-product/{session_id}','App\Http\Controllers\CartController@delete_product');
Route::get('/del-all-product','App\Http\Controllers\CartController@delete_all_product');

//Checkout
Route::get('/dang-nhap','App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/del-fee','App\Http\Controllers\CheckoutController@del_fee');

Route::get('/logout-checkout','App\Http\Controllers\CheckoutController@logout_checkout');
Route::post('/add-customer','App\Http\Controllers\CheckoutController@add_customer');
Route::post('/order-place','App\Http\Controllers\CheckoutController@order_place');
Route::post('/login-customer','App\Http\Controllers\CheckoutController@login_customer');
Route::get('/checkout','App\Http\Controllers\CheckoutController@checkout');
Route::get('/payment','App\Http\Controllers\CheckoutController@payment');
Route::post('/save-checkout-customer','App\Http\Controllers\CheckoutController@save_checkout_customer');
Route::post('/calculate-fee','App\Http\Controllers\CheckoutController@calculate_fee');
Route::post('/select-delivery-home','App\Http\Controllers\CheckoutController@select_delivery_home');
Route::post('/confirm-order','App\Http\Controllers\CheckoutController@confirm_order');

//Order

Route::get('/print-order/{checkout_code}','App\Http\Controllers\OrderController@print_order');
Route::get('/manage-order','App\Http\Controllers\OrderController@manage_order');
Route::get('/view-order/{order_code}','App\Http\Controllers\OrderController@view_order');
Route::post('/update-order-qty','App\Http\Controllers\OrderController@update_order_qty');
Route::post('/update-qty','App\Http\Controllers\OrderController@update_qty');


//Delivery
Route::get('/delivery','App\Http\Controllers\DeliveryController@delivery');
Route::post('/select-delivery','App\Http\Controllers\DeliveryController@select_delivery');
Route::post('/insert-delivery','App\Http\Controllers\DeliveryController@insert_delivery');
Route::post('/select-feeship','App\Http\Controllers\DeliveryController@select_feeship');
Route::post('/update-delivery','App\Http\Controllers\DeliveryController@update_delivery');

//Banner
Route::get('/manage-slider','App\Http\Controllers\SliderController@manage_slider');
Route::get('/add-slider','App\Http\Controllers\SliderController@add_slider');
Route::post('/insert-slider','App\Http\Controllers\SliderController@insert_slider');
Route::get('/unactive-slide/{slide_id}','App\Http\Controllers\SliderController@unactive_slide');
Route::get('/active-slide/{slide_id}','App\Http\Controllers\SliderController@active_slide');






