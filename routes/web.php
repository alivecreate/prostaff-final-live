<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\PageController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\CertificateController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\IndustryController;
use App\Http\Controllers\admin\settings\WebsiteController;
use App\Http\Controllers\admin\settings\SocialMediaController;
use App\Http\Controllers\admin\settings\CustomCodeController;
use App\Http\Controllers\admin\InquiryController;
use App\Http\Controllers\admin\BlogController;

use App\Http\Controllers\front\BlogFrontController;
use App\Http\Controllers\front\GalleryFrontController;

use App\Http\Controllers\admin\YoutubeLinkController;
// use App\Http\Controllers\Front\YoutubeLinkController;
use App\Http\Controllers\admin\LoginController;

use App\Http\Controllers\EmployerInquiryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$adminName = 'powerup';


Route::get('powerup/login', [LoginController::class, 'index'])->name('login')->middleware('authExist');
Route::post('check-auth', [LoginController::class, 'checkAuth'])->name('checkAuth')->middleware('authExist');
Route::get('powerup/logout', [LoginController::class, 'logout'])->name('logout');



Route::prefix('/' . $adminName)->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index')->middleware('authLogin');

    Route::resource('slider', SliderController::class)->middleware('authLogin');
    Route::resource('testimonial', TestimonialController::class)->middleware('authLogin');
    Route::resource('team', TeamController::class)->middleware('authLogin');
    Route::resource('certificate', CertificateController::class)->middleware('authLogin');

    Route::resource('client', ClientController::class)->middleware('authLogin');
    Route::resource('category', CategoryController::class)->middleware('authLogin');
    Route::resource('product', ProductController::class)->middleware('authLogin');
    Route::resource('service', ServiceController::class)->middleware('authLogin');
    Route::delete('service-image-delete/{id}', [ServiceController::class, 'deleteServiceImage'])->name('deleteServiceImage')->middleware('authLogin');


    Route::resource('project', ProjectController::class)->middleware('authLogin');
    Route::delete('project-image-delete/{id}', [ProjectController::class, 'deleteProjectImage'])->name('deleteProjectImage')->middleware('authLogin');


    
    Route::resource('industry', IndustryController::class)->middleware('authLogin');    
    Route::delete('industry-image-delete/{id}', [IndustryController::class, 'deleteIndustryImage'])->name('deleteIndustryImage')->middleware('authLogin');
    

    Route::resource('gallery', GalleryController::class)->middleware('authLogin');    
    Route::delete('gallery-image-delete/{id}', [GalleryController::class, 'deleteGalleryImage'])->name('deleteGalleryImage')->middleware('authLogin');
    

    

    Route::delete('/image/{id}', [ImageController::class, 'destroy'])->name('image.delete');
  
    Route::resource('inquiry', InquiryController::class)->middleware('authLogin');
    Route::resource('blog', BlogController::class)->middleware('authLogin');
    
    
    
    Route::resource('settings/website', WebsiteController::class)->middleware('authLogin');
    Route::resource('settings/social-media', SocialMediaController::class)->middleware('authLogin');
    Route::resource('settings/custom-code', CustomCodeController::class)->middleware('authLogin');

    Route::get('/contact-inquiry', [InquiryController::class, 'contactInquiry'])->name('contactInquiry')->middleware('authLogin');
    Route::post('/store-contact-form', [InquiryController::class, 'storeContactForm'])->name('storeContactForm');

    Route::post('/store-product-inquiry', [PageController::class, 'storeProductInquiry'])->name('storeProductInquiry');


    
Route::get('/youtube-link', [YoutubeLinkController::class, 'index'])->name('admin.youtube.index');
Route::get('/youtube-link/create', [YoutubeLinkController::class, 'create'])->name('admin.youtube.create');
Route::post('/youtube-link', [YoutubeLinkController::class, 'store'])->name('admin.youtube.store');
Route::get('/youtube-link/{id}/edit', [YoutubeLinkController::class, 'edit'])->name('admin.youtube.edit');
Route::put('/youtube-link/{id}', [YoutubeLinkController::class, 'update'])->name('admin.youtube.update');
Route::delete('/youtube-link/{id}', [YoutubeLinkController::class, 'destroy'])->name('admin.youtube.destroy');
Route::get('/video/{id}', [YoutubeLinkController::class, 'show'])->name('youtubelink.show');
Route::get('/youtube-link/{id}/edit', [YoutubeLinkController::class, 'edit'])->name('admin.youtube.edit');


});



Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('/service', [PageController::class, 'services'])->name('services');
Route::get('/project', [PageController::class, 'projects'])->name('projects');


Route::get('/video', [PageController::class, 'video'])->name('video');

Route::get('/products', [PageController::class, 'products'])->name('products');

// Route::get('/products/{slug}', [PageController::class, 'productDetails'])->name('productDetails');
Route::get('/products/{slug}', [PageController::class, 'category'])->name('category');

// Route::get('/category/{slug}', [\App\Http\Controllers\Front\CategoryController::class, 'show'])->name('category.services');
// Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.services');

Route::get('/service/{slug}', [PageController::class, 'categoryServices'])->name('services');

Route::get('/services-category/{slug}', [PageController::class, 'categoryServices'])->name('category.services');

// Route::get('/category/{slug}', [PageController::class, 'categoryServices'])->name('category.services');

// Route::get('/category/{slug}', [PageController::class, 'categoryServices'])->name('category.services');
Route::get('/services-category', [PageController::class, 'allServicesCategory'])->name('services-category');



Route::get('/service-detail/{slug}', [PageController::class, 'serviceDetail'])->name('serviceDetail');


Route::post('/inquiry-submit', [InquiryController::class, 'storeContactForm'])->name('inquiry.store');



Route::get('/farming-services', [PageController::class, 'farmingService'])->name('farmingService');
Route::get('/waste-management', [PageController::class, 'wasteManagement'])->name('wasteManagement');
Route::get('/drip-irrigation', [PageController::class, 'dripIrrigation'])->name('dripIrrigation');
Route::get('/solar-system', [PageController::class, 'solarSystem'])->name('solarSystem');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');


Route::get('/process', function () {
    return view('front.pages.process');
})->name('process');


Route::get('/work-permit-application', function () {
    return view('front.pages.permit');
})->name('permit');




Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');

Route::get('/blog/{slug}', [PageController::class, 'blogDetail'])->name('blogDetail');
Route::get('/qr-code', [PageController::class, 'qrCode'])->name('qrCode');

Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/term-and-conditions', [PageController::class, 'termAndCondition'])->name('termAndCondition');

Route::post('/store-cart-data', [PageController::class, 'storeCartData'])->name('storeCartData');
Route::get('/product/inquiry', [PageController::class, 'productInquiry'])->name('productInquiry');

Route::get('/thank-you', [PageController::class, 'thankYou'])->name('thankYou');
Route::get('/test-mail', [PageController::class, 'testMail'])->name('testMail');
Route::get('/test-rss', [PageController::class, 'testRss'])->name('testRss');

Route::get('/blogs', [BlogFrontController::class, 'index'])->name('front.blog.index');
Route::get('/blog/{slug}', [BlogFrontController::class, 'show'])->name('front.blog.show');

Route::get('/gallery', [GalleryFrontController::class, 'index'])->name('gallery');


Route::get('/services', [ServiceController::class, 'index']);

use App\Models\admin\Testimonial;

Route::get('/testimonials', function () {
    $testimonials = Testimonial::where('status', 1)->orderBy('item_no')->get();
    return view('frontend.testimonials', compact('testimonials'));
});



Route::fallback(function () {
    return (redirect(route('index')));
    abort(404);
});



Route::post(
    '/employer-inquiry',
    [App\Http\Controllers\Admin\EmployerInquiryController::class, 'store']
)->name('employer.inquiry.store');


// Employer Inquiry Routes
Route::prefix('admin')->group(function () {
    Route::get('/employer-inquiries', [App\Http\Controllers\Admin\EmployerInquiryController::class, 'index'])
        ->name('employer-inq.index');

    Route::delete('/employer-inquiries/{id}', [App\Http\Controllers\Admin\EmployerInquiryController::class, 'destroy'])
        ->name('employer-inq.delete');
});


Route::post('/job-seeker/store', [App\Http\Controllers\admin\InquiryController::class, 'storeJobSeeker'])->name('jobSeeker.store');

