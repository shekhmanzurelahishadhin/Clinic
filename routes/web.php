<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AppointmentInfoController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\BannerAndTitleController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\WebsiteSettingsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[WebsiteController::class,'tech_web_home'])->name('front.page');
Route::get('/services-details/{id}', [WebsiteController::class, 'tech_web_services_details'])->name('services.details');
Route::get('/all-services', [WebsiteController::class, 'tech_web_all_details'])->name('services');
Route::get('/about-page', [WebsiteController::class, 'tech_web_about_page'])->name('about.page');
Route::get('/team-page', [WebsiteController::class, 'tech_web_team_page'])->name('team.page');
Route::get('/management-page', [WebsiteController::class, 'tech_web_management_page'])->name('management.page');
Route::get('/testimonial-page', [WebsiteController::class, 'tech_web_testimonial_page'])->name('testimonial.page');
Route::get('/medicine-page', [WebsiteController::class, 'tech_web_medicine_page'])->name('medicine.page');
Route::get('/medicine-details/{id}', [WebsiteController::class, 'tech_web_medicine_details'])->name('medicine.details');
Route::get('/appointment-page', [WebsiteController::class, 'tech_web_appointment_page'])->name('appointment.page');
Route::get('/package-page', [WebsiteController::class, 'tech_web_package_page'])->name('package.page');
Route::get('/blogs-page', [WebsiteController::class, 'tech_web_blogs_page'])->name('blogs.page');
Route::get('/blogs-details/{id}', [WebsiteController::class, 'tech_web_blogs_details'])->name('blogs.details');
Route::get('/contacts', [WebsiteController::class, 'tech_web_contacts'])->name('contacts');
Route::get('/gallery-page', [WebsiteController::class, 'tech_web_gallery_page'])->name('gallery.page');
Route::get('/video-gallery-page', [WebsiteController::class, 'tech_web_video_gallery_page'])->name('video.gallery.page');

Route::get('/medicine-by-category/{id}', [WebsiteController::class, 'tech_web_medicine_by_category'])->name('medicine.by.category');
Route::get('/medicine-by-brand/{id}', [WebsiteController::class, 'tech_web_medicine_by_brand'])->name('medicine.by.brand');
Route::get('/medicine-by-search', [WebsiteController::class, 'tech_web_medicine_by_search'])->name('medicine.by.search');
Route::get('/medicine-by-price', [WebsiteController::class, 'tech_web_medicine_by_price'])->name('medicine.by.price');



//appointment start
Route::post('/appointment', [WebsiteSettingsController::class, 'tech_web_appointment'])->name('appointment');
//appointment end

//contact start
Route::post('/contact', [WebsiteSettingsController::class, 'tech_web_contact'])->name('contact');
//contact end

Route::get('/user-profile-settings', [GeneralController::class, 'tech_web_user_profile_settings'])->name('user.profile.settings')->middleware('is_user');
Route::post('/user-update-profile', [GeneralController::class, 'tech_web_user_update_profile'])->name('user.update.profile')->middleware('is_user');

Route::get('/package-appointment/{id}', [WebsiteController::class, 'tech_web_package_appointment_page'])->name('package.appointment')->middleware('is_user');
Route::get('/user-appointments', [WebsiteController::class, 'tech_web_user_appointments'])->name('user.appointments')->middleware('is_user');
Route::post('/make-appointment', [WebsiteController::class, 'tech_web_make_appointment'])->name('make.appointment')->middleware('is_user');

Auth::routes();

Route::get('/home', [HomeController::class, 'tech_web_index'])->name('home');
Route::get('admin/home', [HomeController::class, 'tech_web_adminHome'])->name('admin.home')->middleware('is_admin');

//service start
Route::get('/add-services', [ServiceController::class, 'tech_web_add_services'])->name('add.services')->middleware('is_admin');
Route::post('/store-services', [ServiceController::class, 'tech_web_store_services'])->name('store.services')->middleware('is_admin');
Route::get('/edit-services/{id}', [ServiceController::class, 'tech_web_edit_services'])->name('edit.services')->middleware('is_admin');
Route::post('/update-services', [ServiceController::class, 'tech_web_update_services'])->name('update.services')->middleware('is_admin');
//service end

//photo gallery start
Route::get('/add-gallery', [GalleryController::class, 'tech_web_add_gallery'])->name('add.gallery')->middleware('is_admin');
Route::post('/store-gallery', [GalleryController::class, 'tech_web_store_gallery'])->name('store.gallery')->middleware('is_admin');
Route::get('/edit-gallery/{id}', [GalleryController::class, 'tech_web_edit_gallery'])->name('edit.gallery')->middleware('is_admin');
Route::post('/update-gallery', [GalleryController::class, 'tech_web_update_gallery'])->name('update.gallery')->middleware('is_admin');
//photo gallery end

//video gallery start
Route::get('/add-video-gallery', [GalleryController::class, 'tech_web_add_video_gallery'])->name('add.video.gallery')->middleware('is_admin');
Route::post('/store-video-gallery', [GalleryController::class, 'tech_web_store_video_gallery'])->name('store.video.gallery')->middleware('is_admin');
Route::get('/edit-video-gallery/{id}', [GalleryController::class, 'tech_web_edit_video_gallery'])->name('edit.video.gallery')->middleware('is_admin');
Route::post('/update-video-gallery', [GalleryController::class, 'tech_web_update_video_gallery'])->name('update.video.gallery')->middleware('is_admin');
//video gallery end

//about start
Route::get('/add-about', [AboutController::class, 'tech_web_add_about'])->name('add.about')->middleware('is_admin');
Route::post('/store-about', [AboutController::class, 'tech_web_store_about'])->name('store.about')->middleware('is_admin');
Route::get('/edit-about/{id}', [AboutController::class, 'tech_web_edit_about'])->name('edit.about')->middleware('is_admin');
Route::post('/update-about', [AboutController::class, 'tech_web_update_about'])->name('update.about')->middleware('is_admin');
//about end

//team start
Route::get('/add-team', [TeamController::class, 'tech_web_add_team'])->name('add.team')->middleware('is_admin');
Route::post('/store-team', [TeamController::class, 'tech_web_store_team'])->name('store.team')->middleware('is_admin');
Route::get('/edit-team/{id}', [TeamController::class, 'tech_web_edit_team'])->name('edit.team')->middleware('is_admin');
Route::post('/update-team', [TeamController::class, 'tech_web_update_team'])->name('update.team')->middleware('is_admin');
//team end

//testimonial start
Route::get('/add-testimonial', [TestimonialController::class, 'tech_web_add_testimonial'])->name('add.testimonial')->middleware('is_admin');
Route::post('/store-testimonial', [TestimonialController::class, 'tech_web_store_testimonial'])->name('store.testimonial')->middleware('is_admin');
Route::get('/edit-testimonial/{id}', [TestimonialController::class, 'tech_web_edit_testimonial'])->name('edit.testimonial')->middleware('is_admin');
Route::post('/update-testimonial', [TestimonialController::class, 'tech_web_update_testimonial'])->name('update.testimonial')->middleware('is_admin');
//testimonial end

//Appointment info start
Route::get('/add-appointment-info', [AppointmentInfoController::class, 'tech_web_add_appointment_info'])->name('add.appointment.info')->middleware('is_admin');
Route::post('/store-appointment-info', [AppointmentInfoController::class, 'tech_web_store_appointment_info'])->name('store.appointment.info')->middleware('is_admin');
Route::get('/edit-appointment-info/{id}', [AppointmentInfoController::class, 'tech_web_edit_appointment_info'])->name('edit.appointment.info')->middleware('is_admin');
Route::post('/update-appointment-info', [AppointmentInfoController::class, 'tech_web_update_appointment_info'])->name('update.appointment.info')->middleware('is_admin');
//Appointment info end


//package start
Route::get('/add-package', [PackageController::class, 'tech_web_add_package'])->name('add.package')->middleware('is_admin');
Route::post('/store-package', [PackageController::class, 'tech_web_store_package'])->name('store.package')->middleware('is_admin');
Route::get('/edit-package/{id}', [PackageController::class, 'tech_web_edit_package'])->name('edit.package')->middleware('is_admin');
Route::post('/update-package', [PackageController::class, 'tech_web_update_package'])->name('update.package')->middleware('is_admin');
//package end

//Blogs start
Route::get('/add-blogs', [BlogController::class, 'tech_web_add_blogs'])->name('add.blogs')->middleware('is_admin');
Route::post('/store-blogs', [BlogController::class, 'tech_web_store_blogs'])->name('store.blogs')->middleware('is_admin');
Route::get('/edit-blogs/{id}', [BlogController::class, 'tech_web_edit_blogs'])->name('edit.blogs')->middleware('is_admin');
Route::post('/update-blogs', [BlogController::class, 'tech_web_update_blogs'])->name('update.blogs')->middleware('is_admin');
//Blogs end

//Category start
Route::get('/add-category', [CategoryController::class, 'tech_web_add_category'])->name('add.category')->middleware('is_admin');
Route::post('/store-category', [CategoryController::class, 'tech_web_store_category'])->name('store.category')->middleware('is_admin');
Route::get('/edit-category/{id}', [CategoryController::class, 'tech_web_edit_category'])->name('edit.category')->middleware('is_admin');
Route::post('/update-category', [CategoryController::class, 'tech_web_update_category'])->name('update.category')->middleware('is_admin');
//Category end

//Brand start
Route::get('/add-brand', [BrandController::class, 'tech_web_add_brand'])->name('add.brand')->middleware('is_admin');
Route::post('/store-brand', [BrandController::class, 'tech_web_store_brand'])->name('store.brand')->middleware('is_admin');
Route::get('/edit-brand/{id}', [BrandController::class, 'tech_web_edit_brand'])->name('edit.brand')->middleware('is_admin');
Route::post('/update-brand', [BrandController::class, 'tech_web_update_brand'])->name('update.brand')->middleware('is_admin');
//Brand end

//Brand start
Route::get('/add-product', [ProductController::class, 'tech_web_add_product'])->name('add.product')->middleware('is_admin');
Route::post('/store-product', [ProductController::class, 'tech_web_store_product'])->name('store.product')->middleware('is_admin');
Route::get('/edit-product/{id}', [ProductController::class, 'tech_web_edit_product'])->name('edit.product')->middleware('is_admin');
Route::post('/update-product', [ProductController::class, 'tech_web_update_product'])->name('update.product')->middleware('is_admin');
//Brand end


//Management start
Route::get('/add-management', [ManagementController::class, 'tech_web_add_management'])->name('add.management')->middleware('is_admin');
Route::post('/store-management', [ManagementController::class, 'tech_web_store_management'])->name('store.management')->middleware('is_admin');
Route::get('/edit-management/{id}', [ManagementController::class, 'tech_web_edit_management'])->name('edit.management')->middleware('is_admin');
Route::post('/update-management', [ManagementController::class, 'tech_web_update_management'])->name('update.management')->middleware('is_admin');
//Management end

//manage enrollment start
Route::get('/manage-appointments', [WebsiteController::class, 'tech_web_manage_appointments'])->name('mange.appointments')->middleware('is_admin');
Route::get('/update-appointments/{id}', [WebsiteController::class, 'tech_web_update_appointments'])->name('update.appointments')->middleware('is_admin');
//manage enrollment end

//Banner and Tile
Route::post('/store-banner-title', [BannerAndTitleController::class, 'tech_web_store_banner_tile'])->name('store.banner.title')->middleware('is_admin');
Route::get('/edit-banner-title/{id}', [BannerAndTitleController::class, 'tech_web_edit_banner_tile'])->name('edit.banner.title')->middleware('is_admin');
Route::post('/update-banner-title/{id}', [BannerAndTitleController::class, 'tech_web_update_banner_tile'])->name('update.banner.title')->middleware('is_admin');
//Banner and title

//Logo start
Route::post('/store-logo', [WebsiteSettingsController::class, 'tech_web_store_logo'])->name('store.logo')->middleware('is_admin');
//Logo end

//links start
Route::post('/store-links', [WebsiteSettingsController::class, 'tech_web_store_links'])->name('store.links')->middleware('is_admin');
//Links end

//payment numbers start
Route::post('/store-number', [WebsiteSettingsController::class, 'tech_web_store_numbers'])->name('store.numbers')->middleware('is_admin');
//payment numbers end

//footer start
Route::post('/store-footer', [WebsiteSettingsController::class, 'tech_web_store_footer'])->name('store.footer')->middleware('is_admin');

//footer end

//banner start
Route::post('/store-main-banner', [WebsiteSettingsController::class, 'tech_web_store_main_banner'])->name('store.main.banner')->middleware('is_admin');
Route::get('/edit-main-banner/{id}', [WebsiteSettingsController::class, 'tech_web_edit_main_banner'])->name('edit.main.banner')->middleware('is_admin');
Route::post('/update-main-banner/{id}', [WebsiteSettingsController::class, 'tech_web_update_main_banner'])->name('update.main.banner')->middleware('is_admin');
//banner end




//general settings start
Route::get('/general-settings', [GeneralController::class, 'tech_web_general_settings'])->name('general.settings')->middleware('is_admin');
//general settings end

//profile settings start
Route::get('/profile-settings', [GeneralController::class, 'tech_web_profile_settings'])->name('profile.settings')->middleware('is_admin');
Route::post('/update-profile', [GeneralController::class, 'tech_web_update_profile'])->name('update.profile')->middleware('is_admin');
//profile settings end



