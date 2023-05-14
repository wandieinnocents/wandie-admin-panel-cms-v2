<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Post;
use App\Models\Course;



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


// Homepage
Route::get('/', 'App\Http\Controllers\FrontEnd\HomePageController@index');



// FRONT END ROUTES
// about us
Route::resource('/about', 'App\Http\Controllers\FrontEnd\FrontEndAboutController');

// careers
Route::resource('/careers', 'App\Http\Controllers\FrontEnd\FrontEndCareerController');
// testimonials
Route::resource('/testimonials', 'App\Http\Controllers\FrontEnd\FrontEndTestimonialController');
// services
Route::resource('/works', 'App\Http\Controllers\FrontEnd\FrontEndServiceController');
// gallery
Route::resource('/pictures', 'App\Http\Controllers\FrontEnd\FrontEndGalleryController');

// video gallery
Route::resource('/video_gallery', 'App\Http\Controllers\FrontEnd\FrontEndVideoGalleryController');

//posts
Route::resource('/articles', 'App\Http\Controllers\FrontEnd\FrontEndPostController');
//bookings
Route::resource('/book', 'App\Http\Controllers\FrontEnd\FrontEndBookingController');
//contact
Route::resource('/contact', 'App\Http\Controllers\FrontEnd\FrontEndContactController');
// projects
Route::resource('/our_projects', 'App\Http\Controllers\FrontEnd\FrontEndProjectController');
// faq
Route::resource('/our_faqs', 'App\Http\Controllers\FrontEnd\FrontEndFaqController');
// team
Route::resource('/our_team', 'App\Http\Controllers\FrontEnd\FrontEndTeamController');
//donate
Route::resource('/donate', 'App\Http\Controllers\FrontEnd\FrontEndDonateController');

// Payments integration
//flutterwave Rave Payments

// The page that displays the payment form
Route::get('/flutterwave', 'App\Http\Controllers\FrontEnd\FlutterwavePaymentsController@payments_page');
// dynamic pay
Route::get('/donateflutterwave', 'App\Http\Controllers\FrontEnd\FlutterwavePaymentsController@donateflutterwave');
// The route that the button calls to initialize payment

Route::post('/pay','App\Http\Controllers\FrontEnd\FlutterwavePaymentsController@initialize')->name('pay');
// The callback url after a payment
Route::get('/rave/callback', 'App\Http\Controllers\FrontEnd\FlutterwavePaymentsController@callback')->name('callback');

// mailchimp newsletters
Route::get('newsletter','App\Http\Controllers\FrontEnd\NewsletterController@index');
Route::post('newsletter/store','App\Http\Controllers\FrontEnd\NewsletterController@store');
// volunteers
Route::resource('join_volunteers','App\Http\Controllers\FrontEnd\FrontEndVolunteerController');
// dental
Route::resource('paramedical','App\Http\Controllers\FrontEnd\ParamedicalCourseController');
// nursing
Route::resource('nursing','App\Http\Controllers\FrontEnd\NursingCourseController');
// events
Route::resource('our_events','App\Http\Controllers\FrontEnd\FrontEndEventController');

// ECOMMERCE
// SHOPPING PAGES
// shop page
Route::resource('shop','App\Http\Controllers\FrontEnd\ShopController');
// checkout
Route::resource('checkout','App\Http\Controllers\FrontEnd\CheckoutController');
// myaccount
Route::resource('myaccount','App\Http\Controllers\FrontEnd\MyAccountController');
// cart page
Route::resource('cart','App\Http\Controllers\FrontEnd\CartController');
// wishlist
Route::resource('wishlist','App\Http\Controllers\FrontEnd\WishListController');
// frontend product category
Route::get('/all_product_categories', 'App\Http\Controllers\FrontEnd\FrontEndProductCategoryController@categories');
// category slug - get products in each category
Route::get('/all_product_categories/{category_slug}', 'App\Http\Controllers\FrontEnd\FrontEndProductCategoryController@show_products_by_categories');
// brand slug - get products in each brand
Route::get('/products_by_brand/{brand_slug}', 'App\Http\Controllers\FrontEnd\FrontEndProductBrandController@show_products_by_brands');
// product sorting low to high
Route::get('/price_low_to_high', 'App\Http\Controllers\FrontEnd\ProductSortController@price_low_to_high');
// product sorting high to low
Route::get('/price_high_to_low', 'App\Http\Controllers\FrontEnd\ProductSortController@price_high_to_low');














// BACKEND ROUTES

// Auth::routes();
Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

// middleware auth
Route::group(['middleware' => ['auth']], function() {



// users
Route::resource('/users', 'App\Http\Controllers\UserController');
// analytics
 Route::get('/analytics', 'App\Http\Controllers\BackEnd\AnalyticsController@analytics');
// Roles
Route::resource('/roles', 'App\Http\Controllers\RoleController');
// permissions
Route::resource('/permissions', 'App\Http\Controllers\PermissionController');
// posts
Route::resource('/posts', 'App\Http\Controllers\BackEnd\PostController');
// Post category
Route::resource('/post_categories', 'App\Http\Controllers\BackEnd\PostCategoryController');

// Admin dashboard
Route::resource('/dashboard', 'App\Http\Controllers\BackEnd\DashboardController');
// Bookings
Route::resource('/bookings', 'App\Http\Controllers\BackEnd\BookingController');
// Feedbacks
Route::resource('/feedbacks', 'App\Http\Controllers\BackEnd\FeedbackController');

// resources
Route::resource('/resources', 'App\Http\Controllers\BackEnd\ResourceController');
// resource categories
Route::resource('/resource_categories', 'App\Http\Controllers\BackEnd\ResourceCategoryController');
// team
Route::resource('/teams', 'App\Http\Controllers\BackEnd\TeamController');
// faq
Route::resource('/faqs', 'App\Http\Controllers\BackEnd\FaqController');
// Orders
Route::resource('/orders', 'App\Http\Controllers\BackEnd\OrderController');
// Gallery  category
Route::resource('/gallery_categories', 'App\Http\Controllers\BackEnd\GalleryCategoryController');
// Gallery
Route::resource('/galleries', 'App\Http\Controllers\BackEnd\GalleryController');

// video gallery
Route::resource('/video_galleries', 'App\Http\Controllers\BackEnd\BackEndVideoGalleryController');


// Services category
Route::resource('/service_categories', 'App\Http\Controllers\BackEnd\ServiceCategoryController');
// Services
Route::resource('/services', 'App\Http\Controllers\BackEnd\ServiceController');
// Project category
Route::resource('/project_categories', 'App\Http\Controllers\BackEnd\ProjectCategoryController');
// Projects
Route::resource('/projects', 'App\Http\Controllers\BackEnd\ProjectController');
// volunteers
Route::resource('/volunteers', 'App\Http\Controllers\BackEnd\BackEndVolunteerController');
// course
Route::resource('/courses', 'App\Http\Controllers\BackEnd\CourseController');

// events
Route::resource('/events', 'App\Http\Controllers\BackEnd\EventController');
// product categories
Route::resource('/product_categories', 'App\Http\Controllers\BackEnd\ProductCategoryController');
// product brands
Route::resource('/product_brands', 'App\Http\Controllers\BackEnd\ProductBrandsController');
// products
Route::resource('/products', 'App\Http\Controllers\BackEnd\ProductController');

// product colors
Route::resource('/product_colors', 'App\Http\Controllers\BackEnd\ProductColorController');

// slider  home
Route::resource('/home_sliders', 'App\Http\Controllers\BackEnd\SliderController');
// advertisement banners
Route::resource('/advertisement_banners', 'App\Http\Controllers\BackEnd\AdvertisementBannerController');







});






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Logout
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });
