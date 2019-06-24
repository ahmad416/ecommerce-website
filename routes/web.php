<?php

//Starting of Website Route
Route::get('/',"website\HomeController@index")->name('main');
//Single Product
Route::get("/product/{slug}","website\ProductController@product")->name("single.product");
//Cart Routes
Route::get('/cart','Website\CartController@index')->name("cart");
Route::get('/cart/add/{id}','Website\CartController@addProduct')->name('addCart');
Route::post("/addProducts","website\CartController@addProducts")->name("addProducts");
Route::get('/cart/remove/{id}','Website\CartController@destroy')->name("removeItem");
Route::post("/cart/update/{id}","website\CartController@UpdateCart")->name("updateItem");

//Winter Routes
Route::get('/winter/men','website\ProductController@menWinter')->name('men.winter');
Route::get('/winter/women','website\ProductController@womenWinter')->name('women.winter');
Route::get('/winter/kurta','website\ProductController@kurtaWinter')->name('kurta.winter');
//Summer Routes
Route::get("/summer/men","website\ProductController@menSummer")->name("men.summer");
Route::get('/summer/women','website\ProductController@womenSummer')->name('women.summer');
Route::get('/summer/kurta','website\ProductController@kurtaSummer')->name('kurta.summer');
//Sale Route
Route::get("/sale","website\ProductController@sale")->name("onSale");

// Checkout Route
Route::get("/checkout","website\CheckoutController@index")->name("website.checkout");
Route::post("/checkoutComplete","website\CheckoutController@store")->name("checkout");
//
Route::get("/order_received/{orderNO}","website\CheckoutController@received")->name("received");

//Product Route
Route::get("/summer","website\ProductController@summerSingle")->name("summer.single");
Route::get("/winter","website\ProductController@winterSingle")->name("winter.single");
Route::get("/men","website\ProductController@menSingle")->name("men.single");
Route::get("/women","website\ProductController@womenSingle")->name("women.single");

//Terms & Conditions
Route::get("/return-policy","website\TermsController@returnPolicy")->name("return.policy");
Route::get("/faqs","website\TermsController@freQuestions")->name("frequent.questions");
Route::get("/about-us","website\TermsController@aboutUs")->name("about.us");

//Track Order Route
Route::get("/order-tracking","website\TrackOrderController@index")->name("order-tracking-form");
Route::get("/report","Admin\AnalyticReport@index")->name("report");
// End of Website Route

Auth::routes();
Route::get("/seven-day-data-pageview","Admin\AnalyticReport@topCountries");
/*......Admin Route Group..............*/
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    Route::get("home",'HomeController@index')->name('home');

    //Slider Router
    Route::get("slider","Admin\SliderController@index")->name("slider.view");
    Route::post("slider/add","Admin\SliderController@store")->name("slider.add");
    Route::delete("slider/delete/{id}","Admin\SliderController@destroy")->name("slider.destroy");
    //Routes for Products
    Route::get("product/addProduct","Admin\ProductController@create")->name("addProduct");
    Route::get("product/viewProduct","Admin\ProductController@index")->name("viewProduct");
    Route::post("product/addnewProduct","Admin\ProductController@store")->name("addnewProduct");
    Route::get("product/viewProduct/{id}","Admin\ProductController@show")->name("product.show");
    Route::delete("product/deleteProduct/{id}","Admin\ProductController@destroy")->name("product.destroy");
    Route::get("product/edit/{id}","Admin\ProductController@edit")->name("edit.product");
    Route::post("product/update/{id}","Admin\ProductController@update")->name("update.product");
    Route::get("product/outofstock","Admin\ProductController@outofstock")->name("product.outofstock");
    //End of Products Route

    //Routes for Tags
    Route::get("catagory/view","Admin\TagController@index")->name("view.tag");
    Route::post("catagory/add","Admin\TagController@store")->name("add.tag");
    //End of Tags Routes

    //Routes for setting
    Route::get("setting/logo","Admin\SettingController@logo")->name("setting.logo");

    //Order Routes
    Route::get("order/{id}","Admin\OrderController@order")->name("invoice");

    //Invoice Route
    Route::get("invoice/{id}","Admin\OrderController@invoice")->name("invoicePdf");

    //New Orders
    Route::get("orders/new","Admin\OrderController@new")->name("newOrder");

    //Dsipatched
    Route::get("orders/dsipatch","Admin\OrderController@dispatchOrder")->name("dispatchOrder");

    //Completed Order
    Route::get("orders/completed","Admin\OrderController@completed")->name("completedOrder");

    //All orders
    Route::get("orders/all","Admin\OrderController@all")->name("allOrder");

    //Updated to Dispatched
    Route::post("order/dispatched/{id}","Admin\OrderController@dis")->name("dispatched");

    //Updated to Complete
    Route::post("order/complete/{id}","Admin\OrderController@com")->name("com");

    //Banners
    Route::get("banners","Admin\BannerController@index")->name('getBanner');
    Route::get("banners/{id}","Admin\BannerController@show")->name("editBannerForm");
    Route::post("banners/{id}","Admin\BannerController@update")->name("updatebanner");

});

