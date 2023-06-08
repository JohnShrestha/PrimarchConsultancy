<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
/**
 * / Password Reset Routes...
 */
Route::get('password/resetform', [Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.resetform');
Route::post('password/email', [Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/request/{token}', [Auth\ResetPasswordController::class, 'showResetForm'])->name('password.request.token');
Route::post('password/update', [Auth\ResetPasswordController::class, 'reset'])->name('password.update');


Route::get('/', function () {
    return redirect()->route("login");
});
Auth::routes();

/**
 * Ajax Routes
 */
Route::post('/getDistrict', [App\Http\Controllers\DropdownController::class, 'getDistrict'])->name('getDistrict'); // for get district list
Route::post('/getPalika', [App\Http\Controllers\DropdownController::class, 'getPalika'])->name('getPalika'); // for get palika list
Route::post('/getAccount', [App\Http\Controllers\DropdownController::class, 'getAccount'])->name('getAccount'); // for get account list




Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('index');

    /**
     * Users Routes
     */
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/',                             [App\Http\Controllers\Admin\UserController::class, 'index'])->name('index');
        Route::get('create',                        [App\Http\Controllers\Admin\UserController::class, 'create'])->name('create');
        Route::post('',                             [App\Http\Controllers\Admin\UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                    [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                 [App\Http\Controllers\Admin\UserController::class, 'update'])->name('update');
        Route::get('/delete/{id}',                  [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('delete');
    });

    /**
     * Slider Routes
     */
    Route::group(['prefix' => 'slider', 'as' => 'slider.'], function () {
        Route::get('/',                             [App\Http\Controllers\Admin\SliderController::class, 'index'])->name('index');
        Route::get('create',                        [App\Http\Controllers\Admin\SliderController::class, 'create'])->name('create');
        Route::post('',                             [App\Http\Controllers\Admin\SliderController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                    [App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                 [App\Http\Controllers\Admin\SliderController::class, 'update'])->name('update');
        Route::get('/delete/{id}',                  [App\Http\Controllers\Admin\SliderController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'subscriber', 'as' => 'subscriber.'], function () {
        Route::get('/',                             [App\Http\Controllers\Admin\SubscriberController::class, 'index'])->name('index');


    });
    /**
     * Roles Routes
     */
    Route::group(['prefix' => 'roles', 'as' => 'roles.'], function () {
        Route::get('/',                             [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('index');
        Route::get('create',                        [App\Http\Controllers\Admin\RoleController::class, 'create'])->name('create');
        Route::post('',                             [App\Http\Controllers\Admin\RoleController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                    [App\Http\Controllers\Admin\RoleController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                 [App\Http\Controllers\Admin\RoleController::class, 'update'])->name('update');
        Route::get('/delete/{id}',                  [App\Http\Controllers\Admin\RoleController::class, 'delete'])->name('delete');
    });

    /**
     * Messages Routes
     */
    Route::group(['prefix' => 'message', 'as' => 'message.'], function () {
        Route::get('/',                             [App\Http\Controllers\Admin\MessageController::class, 'index'])->name('index');
        Route::get('create',                        [App\Http\Controllers\Admin\MessageController::class, 'create'])->name('create');
        Route::post('',                             [App\Http\Controllers\Admin\MessageController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                    [App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                 [App\Http\Controllers\Admin\MessageController::class, 'update'])->name('update');
        Route::get('/delete/{id}',                  [App\Http\Controllers\Admin\MessageController::class, 'delete'])->name('delete');
    });
    /**
     * Settings Routes
     */
    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::get('/',                             [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('index');
        Route::post('/update/{id}',                 [App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('update');

        Route::group(['prefix' => 'social', 'as' => 'social.'], function () {
            Route::get('',                       [App\Http\Controllers\Admin\SettingsController::class, 'getSocialProfiles'])->name('index');
            Route::post('{social}',              [App\Http\Controllers\Admin\SettingsController::class, 'updateSocialProfiles'])->name('store');
        });

        Route::group(['prefix' => 'footer', 'as' => 'footer.'], function () {
            Route::get('',                            [App\Http\Controllers\Admin\CommonController::class, 'getFooterSetting'])->name('index');
            Route::post('/update/{id}',               [App\Http\Controllers\Admin\CommonController::class, 'updateFooterSetting'])->name('update');
        });
    });
    /**
     * User Profile Routes
     */
    Route::group(['prefix' => 'user_profile', 'as' => 'user_profile.'], function () {
        Route::get('/',                          [App\Http\Controllers\Admin\UsersProfileController::class, 'index'])->name('index');
        Route::get('/create',                    [App\Http\Controllers\Admin\UsersProfileController::class, 'create'])->name('create');
        Route::post('',                          [App\Http\Controllers\Admin\UsersProfileController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                 [App\Http\Controllers\Admin\UsersProfileController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',              [App\Http\Controllers\Admin\UsersProfileController::class, 'update'])->name('update');
        Route::delete('/{id}',                   [App\Http\Controllers\Admin\ApplicationController::class, 'destroy'])->name('destroy');
        Route::get('/show}',                     [App\Http\Controllers\Admin\UsersProfileController::class, 'show'])->name('show');
        Route::post('/}',                        [App\Http\Controllers\Admin\UsersProfileController::class, 'passwordChange'])->name('passwordChange');
    });
    /**
     * Banner Routes ////
     */
    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function () {
        Route::get('/',                                    [App\Http\Controllers\Admin\BannerController::class, 'index'])->name('index');
        Route::get('/create',                              [App\Http\Controllers\Admin\BannerController::class, 'create'])->name('create');
        Route::post('',                                    [App\Http\Controllers\Admin\BannerController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                           [App\Http\Controllers\Admin\BannerController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                        [App\Http\Controllers\Admin\BannerController::class, 'update'])->name('update');
        Route::delete('/{id}',                             [App\Http\Controllers\Admin\BannerController::class, 'destroy'])->name('destroy');
        Route::get('delete_item',                          [App\Http\Controllers\Admin\BannerController::class, 'deletedPost'])->name('deleted_item');
        Route::put('restore/{id}',                         [App\Http\Controllers\Admin\BannerController::class, 'restore'])->name('restore');
        Route::delete('permanent_delete/{id}',             [App\Http\Controllers\Admin\BannerController::class, 'permanentDelete'])->name('delete');
    });

    /**
     * PopUp Routes ////
     */
    Route::group(['prefix' => 'popup', 'as' => 'popup.'], function () {
        Route::get('/',                                    [App\Http\Controllers\Admin\PopupController::class, 'index'])->name('index');
        Route::get('/create',                              [App\Http\Controllers\Admin\PopupController::class, 'create'])->name('create');
        Route::post('',                                    [App\Http\Controllers\Admin\PopupController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                           [App\Http\Controllers\Admin\PopupController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                        [App\Http\Controllers\Admin\PopupController::class, 'update'])->name('update');
        Route::delete('/{id}',                             [App\Http\Controllers\Admin\PopupController::class, 'destroy'])->name('destroy');
    });

    /**
     * Clients Routes ////
     */
    Route::group(['prefix' => 'clients', 'as' => 'clients.'], function () {
        Route::get('/',                                    [App\Http\Controllers\Admin\ClientsController::class, 'index'])->name('index');
        Route::get('/create',                              [App\Http\Controllers\Admin\ClientsController::class, 'create'])->name('create');
        Route::post('',                                    [App\Http\Controllers\Admin\ClientsController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                           [App\Http\Controllers\Admin\ClientsController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                        [App\Http\Controllers\Admin\ClientsController::class, 'update'])->name('update');
        Route::delete('/{id}',                             [App\Http\Controllers\Admin\ClientsController::class, 'destroy'])->name('destroy');
        Route::get('delete_item',                          [App\Http\Controllers\Admin\ClientsController::class, 'deletedPost'])->name('deleted_item');
        Route::put('restore/{id}',                         [App\Http\Controllers\Admin\ClientsController::class, 'restore'])->name('restore');
        Route::delete('permanent_delete/{id}',             [App\Http\Controllers\Admin\ClientsController::class, 'permanentDelete'])->name('delete');
    });
    /**
     * Location Routes ////
     */
    Route::group(['prefix' => 'location', 'as' => 'location.'], function () {
        Route::get('/',                                    [App\Http\Controllers\Admin\LocationController::class, 'index'])->name('index');
        Route::get('/create',                              [App\Http\Controllers\Admin\LocationController::class, 'create'])->name('create');
        Route::post('',                                    [App\Http\Controllers\Admin\LocationController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                           [App\Http\Controllers\Admin\LocationController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                        [App\Http\Controllers\Admin\LocationController::class, 'update'])->name('update');
        Route::delete('/{id}',                             [App\Http\Controllers\Admin\LocationController::class, 'destroy'])->name('destroy');
        Route::get('delete_item',                          [App\Http\Controllers\Admin\LocationController::class, 'deletedPost'])->name('deleted_item');
        Route::put('restore/{id}',                         [App\Http\Controllers\Admin\LocationController::class, 'restore'])->name('restore');
        Route::delete('permanent_delete/{id}',             [App\Http\Controllers\Admin\LocationController::class, 'permanentDelete'])->name('delete');
    });


    /**
     * Blog Category Routes ////
     */
    Route::group(['prefix' => 'blogcategory', 'as' => 'blogcategory.'], function () {
        Route::get('/',                                          [App\Http\Controllers\Admin\BlogCategoryController::class, 'index'])->name('index');
        Route::get('/create',                                    [App\Http\Controllers\Admin\BlogCategoryController::class, 'create'])->name('create');
        Route::post('',                                          [App\Http\Controllers\Admin\BlogCategoryController::class, 'store'])->name('store');
        Route::get('{blogcategory}/edit/',                       [App\Http\Controllers\Admin\BlogCategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                              [App\Http\Controllers\Admin\BlogCategoryController::class, 'update'])->name('update');
        Route::delete('/{category}',                             [App\Http\Controllers\Admin\BlogCategoryController::class, 'destroy'])->name('destroy');
        /** Category Nestable Order */
        Route::post('order',                                     [App\Http\Controllers\Admin\BlogCategoryController::class, 'storeOrder'])->name('order');
    });

    /**
     * Blog POST Routes ////
     */
    Route::group(['prefix' => 'post', 'as' => 'blog.'], function () {
        Route::get('/',                                         [App\Http\Controllers\Admin\BlogController::class, 'indexPost'])->name('index');
        Route::get('/create',                                   [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('create');
        Route::post('',                                         [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('store');
        Route::get('/edit/{post_unique_id}',                    [App\Http\Controllers\Admin\BlogController::class, 'editPost'])->name('edit');
        Route::post('/update/{post_unique_id}',                 [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('update');
        Route::delete('/{id}',                                  [App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('destroy');

        Route::get('delete_item',                               [App\Http\Controllers\Admin\BlogController::class, 'deletedPost'])->name('deleted_item');
        Route::put('restore/{id}',                              [App\Http\Controllers\Admin\BlogController::class, 'restore'])->name('restore');
        Route::delete('permanent_delete/{id}',                  [App\Http\Controllers\Admin\BlogController::class, 'permanentDelete'])->name('delete');
        Route::delete('file/{id}',                              [App\Http\Controllers\Admin\BlogController::class, 'destroyFile'])->name('destroyFile');
    });

    /**
     * Blog Pages Routes ////
     */
    Route::group(['prefix' => 'page', 'as' => 'page.'], function () {
        Route::get('/',                                         [App\Http\Controllers\Admin\BlogController::class, 'indexPage'])->name('index');
        Route::get('/create',                                   [App\Http\Controllers\Admin\BlogController::class, 'createPage'])->name('create');
        Route::post('',                                         [App\Http\Controllers\Admin\BlogController::class, 'storePage'])->name('store');
        Route::get('/edit/{post_unique_id}',                    [App\Http\Controllers\Admin\BlogController::class, 'editPage'])->name('edit');
        Route::post('/update/{post_unique_id}',                 [App\Http\Controllers\Admin\BlogController::class, 'updatePage'])->name('update');
        Route::delete('/{id}',                                  [App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('destroy');

        Route::get('delete_item',                               [App\Http\Controllers\Admin\BlogController::class, 'deletedPost'])->name('deleted_item');
        Route::put('restore/{id}',                              [App\Http\Controllers\Admin\BlogController::class, 'restore'])->name('restore');
        Route::delete('permanent_delete/{id}',                  [App\Http\Controllers\Admin\BlogController::class, 'permanentDelete'])->name('delete');
        Route::delete('file/{post}',                            [App\Http\Controllers\Admin\BlogController::class, 'destroyFile'])->name('destroyFile');

        Route::post('/sortabledatatable',                       [App\Http\Controllers\Admin\BlogController::class, 'updateOrder'])->name('ShortData');
    });

    /**
     * Language Routes ////
     */
    Route::group(['prefix' => 'language', 'as' => 'language.'], function () {
        Route::get('/',                                    [App\Http\Controllers\Admin\LanguageController::class, 'index'])->name('index');
        Route::get('/create',                              [App\Http\Controllers\Admin\LanguageController::class, 'create'])->name('create');
        Route::post('',                                    [App\Http\Controllers\Admin\LanguageController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                           [App\Http\Controllers\Admin\LanguageController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                        [App\Http\Controllers\Admin\LanguageController::class, 'update'])->name('update');
        Route::delete('/{id}',                             [App\Http\Controllers\Admin\LanguageController::class, 'destroy'])->name('destroy');
        /**Soft Delete Url */
        Route::get('delete_item',                          [App\Http\Controllers\Admin\LanguageController::class, 'deletedPost'])->name('deleted_item');
        Route::put('restore/{id}',                         [App\Http\Controllers\Admin\LanguageController::class, 'restore'])->name('restore');
        Route::delete('permanent_delete/{id}',             [App\Http\Controllers\Admin\LanguageController::class, 'permanentDelete'])->name('delete');
    });

    /**
     * Section Routes ////
     */
    Route::group(['prefix' => 'section', 'as' => 'section.'], function () {
        Route::get('/',                                        [App\Http\Controllers\Admin\SectionController::class, 'index'])->name('index');
        Route::get('/create',                                  [App\Http\Controllers\Admin\SectionController::class, 'create'])->name('create');
        Route::post('',                                         [App\Http\Controllers\Admin\SectionController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                                [App\Http\Controllers\Admin\SectionController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                              [App\Http\Controllers\Admin\SectionController::class, 'update'])->name('update');
        Route::delete('/{id}',                                   [App\Http\Controllers\Admin\SectionController::class, 'permanentDelete'])->name('destroy');

        Route::delete('permanent_delete/{id}',                   [App\Http\Controllers\Admin\SectionController::class, 'permanentDelete'])->name('delete');
        Route::delete('file/{post}',                             [App\Http\Controllers\Admin\SectionController::class, 'destroyFile'])->name('destroyFile');

        Route::post('/sortabledatatable',                             [App\Http\Controllers\Admin\SectionController::class, 'updateOrder'])->name('ShortData');
    });

    /**
     * Offer Routes ////
     */
    Route::group(['prefix' => 'offer', 'as' => 'offer.'], function () {
        Route::get('/',                                            [App\Http\Controllers\Admin\OfferController::class, 'index'])->name('index');
        Route::get('/create',                                      [App\Http\Controllers\Admin\OfferController::class, 'create'])->name('create');
        Route::post('',                                            [App\Http\Controllers\Admin\OfferController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                                   [App\Http\Controllers\Admin\OfferController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                                [App\Http\Controllers\Admin\OfferController::class, 'update'])->name('update');
        Route::delete('/{id}',                                     [App\Http\Controllers\Admin\OfferController::class, 'permanentDelete'])->name('destroy');
        Route::post('/sortabledatatable',                          [App\Http\Controllers\Admin\OfferController::class, 'updateOrder'])->name('ShortData');
    });

    /**
     * Program Packages  Routes ////
     */
    Route::group(['prefix' => 'program', 'as' => 'program.'], function () {
        Route::get('/',                                            [App\Http\Controllers\Admin\ProgramController::class, 'index'])->name('index');
        Route::get('/create',                                      [App\Http\Controllers\Admin\ProgramController::class, 'create'])->name('create');
        Route::post('',                                            [App\Http\Controllers\Admin\ProgramController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                                   [App\Http\Controllers\Admin\ProgramController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                                [App\Http\Controllers\Admin\ProgramController::class, 'update'])->name('update');
        Route::delete('/{id}',                                     [App\Http\Controllers\Admin\ProgramController::class, 'permanentDelete'])->name('destroy');
        Route::post('/sortabledatatable',                          [App\Http\Controllers\Admin\ProgramController::class, 'updateOrder'])->name('ShortData');
    });

    /**
     * Program Packages  Routes ////
     */
    Route::group(['prefix' => 'menu', 'as' => 'menu.'], function () {
        Route::get('/',                                            [App\Http\Controllers\Admin\MenusController::class, 'index'])->name('index');
        Route::get('/create',                                      [App\Http\Controllers\Admin\MenusController::class, 'create'])->name('create');
        Route::post('',                                            [App\Http\Controllers\Admin\MenusController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                                   [App\Http\Controllers\Admin\MenusController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                                [App\Http\Controllers\Admin\MenusController::class, 'update'])->name('update');
        Route::delete('/{id}',                                     [App\Http\Controllers\Admin\MenusController::class, 'permanentDelete'])->name('destroy');
        /** Menu Nestable Order */
        Route::post('order',                                      [App\Http\Controllers\Admin\MenusController::class, 'storeOrder'])->name('order');
    });


    /**
     * Testimonials Routes ////
     */
    Route::group(['prefix' => 'testimonial', 'as' => 'testimonial.'], function () {
        Route::get('/',                                            [App\Http\Controllers\Admin\TestimonialController::class, 'index'])->name('index');
        Route::get('/create',                                      [App\Http\Controllers\Admin\TestimonialController::class, 'create'])->name('create');
        Route::post('',                                            [App\Http\Controllers\Admin\TestimonialController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                                   [App\Http\Controllers\Admin\TestimonialController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                                [App\Http\Controllers\Admin\TestimonialController::class, 'update'])->name('update');
        Route::delete('/{id}',                                     [App\Http\Controllers\Admin\TestimonialController::class, 'permanentDelete'])->name('destroy');

        Route::delete('permanent_delete/{id}',                     [App\Http\Controllers\Admin\TestimonialController::class, 'permanentDelete'])->name('delete');
        Route::delete('file/{post}',                               [App\Http\Controllers\Admin\TestimonialController::class, 'destroyFile'])->name('destroyFile');
    });

    /**
     * Staff Routes ////
     */
    Route::group(['prefix' => 'staff', 'as' => 'staff.'], function () {
        Route::get('/',                                            [App\Http\Controllers\Admin\StaffController::class, 'index'])->name('index');
        Route::get('/create',                                      [App\Http\Controllers\Admin\StaffController::class, 'create'])->name('create');
        Route::post('',                                            [App\Http\Controllers\Admin\StaffController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                                   [App\Http\Controllers\Admin\StaffController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                                [App\Http\Controllers\Admin\StaffController::class, 'update'])->name('update');
        Route::delete('/{id}',                                     [App\Http\Controllers\Admin\StaffController::class, 'permanentDelete'])->name('destroy');

        Route::delete('permanent_delete/{id}',                     [App\Http\Controllers\Admin\StaffController::class, 'permanentDelete'])->name('delete');
        Route::delete('file/{post}',                               [App\Http\Controllers\Admin\StaffController::class, 'destroyFile'])->name('destroyFile');
    });

    /**
     * Gallery Routes ////
     */
    Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
        Route::get('/',                                            [App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('index');
        Route::get('/create',                                      [App\Http\Controllers\Admin\GalleryController::class, 'create'])->name('create');
        Route::post('',                                            [App\Http\Controllers\Admin\GalleryController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                                   [App\Http\Controllers\Admin\GalleryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                                [App\Http\Controllers\Admin\GalleryController::class, 'update'])->name('update');
        Route::delete('/{id}',                                     [App\Http\Controllers\Admin\GalleryController::class, 'permanentDelete'])->name('destroy');

        Route::delete('permanent_delete/{id}',                     [App\Http\Controllers\Admin\GalleryController::class, 'permanentDelete'])->name('delete');
        Route::delete('file/{post}',                               [App\Http\Controllers\Admin\GalleryController::class, 'destroyFile'])->name('destroyFile');
    });

    /**
     * Types Routes ////
     */
    Route::group(['prefix' => 'types', 'as' => 'types.'], function () {
        Route::get('/',                                            [App\Http\Controllers\Admin\TypesController::class, 'index'])->name('index');
        Route::get('/create',                                      [App\Http\Controllers\Admin\TypesController::class, 'create'])->name('create');
        Route::post('',                                            [App\Http\Controllers\Admin\TypesController::class, 'store'])->name('store');
        Route::get('/edit/{id}',                                   [App\Http\Controllers\Admin\TypesController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                                [App\Http\Controllers\Admin\TypesController::class, 'update'])->name('update');
        Route::delete('/{id}',                                     [App\Http\Controllers\Admin\TypesController::class, 'permanentDelete'])->name('destroy');

        Route::delete('permanent_delete/{id}',                     [App\Http\Controllers\Admin\TypesController::class, 'permanentDelete'])->name('delete');
        Route::delete('file/{post}',                               [App\Http\Controllers\Admin\TypesController::class, 'destroyFile'])->name('destroyFile');
    });


    /**
     * User Messages
     *
     */
    Route::group(['prefix' => 'message', 'as' => 'message.'], function () {
        Route::get('/',                                            [App\Http\Controllers\Admin\ContactsController::class, 'index'])->name('index');
        Route::get('/create',                                      [App\Http\Controllers\Admin\ContactsController::class, 'create'])->name('create');
        Route::post('',                                            [App\Http\Controllers\Admin\ContactsController::class, 'store'])->name('store');
        Route::get('/show/{id}',                                   [App\Http\Controllers\Admin\ContactsController::class, 'show'])->name('show');
        Route::get('/edit/{id}',                                   [App\Http\Controllers\Admin\ContactsController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',                                [App\Http\Controllers\Admin\ContactsController::class, 'update'])->name('update');
        Route::delete('/{id}',                                     [App\Http\Controllers\Admin\ContactsController::class, 'permanentDelete'])->name('destroy');

        Route::delete('permanent_delete/{id}',                     [App\Http\Controllers\Admin\ContactsController::class, 'permanentDelete'])->name('delete');
        Route::delete('file/{post}',                               [App\Http\Controllers\Admin\ContactsController::class, 'destroyFile'])->name('destroyFile');
    });
});


/**
 * Front End route
 */

Route::group(['as' => 'site.', 'namespace' => 'Site'], function () {
    /**
     * Route for home page
     */
    Route::get('/',                                           [App\Http\Controllers\Site\SiteController::class, 'index'])->name('index');
    Route::get('/gallery',                                      [App\Http\Controllers\Site\SiteController::class, 'gallery'])->name('gallery');
    Route::get('/product-list',                               [App\Http\Controllers\Site\SiteController::class, 'product'])->name('product');
    Route::get('/blog',                                       [App\Http\Controllers\Site\SiteController::class, 'blog'])->name('blog');
    Route::get('/contact',                                    [App\Http\Controllers\Site\SiteController::class, 'contact'])->name('contact');
    Route::get('/services',                                    [App\Http\Controllers\Site\SiteController::class, 'services'])->name('services');
    Route::get('/testimonials',                                    [App\Http\Controllers\Site\SiteController::class, 'testimonials'])->name('testimonials');

    Route::get('/about',                                      [App\Http\Controllers\Site\SiteController::class, 'aboutUs'])->name('about');
    Route::get('/staff',                                        [App\Http\Controllers\Site\SiteController::class, 'staff'])->name('staff');
    Route::get('/ourvalues',                                      [App\Http\Controllers\Site\SiteController::class, 'ourvalues'])->name('ourvalues');
    Route::get('/principles',                                    [App\Http\Controllers\Site\SiteController::class, 'principles'])->name('principles');
    Route::get('/study-abroad',                                  [App\Http\Controllers\Site\SiteController::class, 'abroad'])->name('abroad');

    Route::get('/category/{id}',                                  [App\Http\Controllers\Site\SiteController::class, 'showCategoryPost'])->name('category.show');

    /**
     * Route To show Post
     */
    Route::get('/post/{id}',                                          [App\Http\Controllers\Site\SiteController::class, 'showPost'])->name('post.show');
    /**
     * Route To show Member detail
     */
    Route::get('/staff/{id}',                                          [App\Http\Controllers\Site\SiteController::class, 'showStaff'])->name('staff.show');
    /**
     * Route To show Page
     */
    Route::get('/page/{id}',                                          [App\Http\Controllers\Site\SiteController::class, 'showPage'])->name('page.show');

    /**
     * Route for contact Page
     */
    Route::post('/message',                                    [App\Http\Controllers\Site\SiteController::class, 'storeMessage'])->name('message');

    /**
     * Route for Subscriber Page
     */
    Route::post('/subscriber',                                    [App\Http\Controllers\Site\SiteController::class, 'storeSubscriber'])->name('subscriber');

    /**Search */

    Route::get('/search',                                     [ App\Http\Controllers\Site\SiteController::class, 'search'])->name('search');

    /**
     * Route for Donate Page
     */
    Route::post('/donate',                                    [App\Http\Controllers\Site\SiteController::class, 'Donate'])->name('donate');
});
