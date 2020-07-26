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

// Route::get('/', function () {
// 	return view('welcome');
// });

Auth::routes();

/**
 * Redirect after auth of user
 */
Route::get('/home', 'Frontend\HomeController@home')->name('home');

Route::get('/', 'Frontend\HomeController@index')->name('index');
Route::get('/promo_offer', 'Frontend\HomeController@promo_offer')->name('promo_offer');
Route::get('/about_us', 'Frontend\HomeController@about_us')->name('about_us');
Route::get('/employee', 'Frontend\HomeController@employee')->name('employee');
Route::get('/our_services', 'Frontend\HomeController@our_services')->name('our_services');
Route::get('/printing_service', 'Frontend\HomeController@printing_service')->name('printing_service');
Route::get('/terms_and_condition', 'Frontend\HomeController@terms_and_condition')->name('terms_and_condition');
Route::get('/comming_soon', 'Frontend\HomeController@comming_soon')->name('comming_soon');
Route::get('/contact_us', 'Frontend\HomeController@contact_us')->name('contact_us');




/**
 * Errors
 */
Route::group(['prefix' => 'errors'], function(){
	Route::get('/401', function() { return view('errors.401'); })->name('errors.401');
	Route::get('/404', function() { return view('errors.404'); })->name('errors.404');
	Route::get('/500', function() { return view('errors.500'); })->name('errors.500');
});



/**
 * Admin Section Routes
 */
Route::group(['prefix' => 'admin'], function(){

	
	/**
	 * Admin authentication routes
	*/
	Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
	Route::post('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');
	Route::post('password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('password/reset','Auth\Admin\ResetPasswordController@reset');
	Route::get('password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
	Route::get('/change-password', 'Backend\HomeController@chnagePasswordForm')->name('admin.password.form');
	Route::post('/change-password', 'Backend\HomeController@chnagePassword')->name('admin.password.change');


	/**
	 * Admin Dashboard
	*/
	Route::get('/', 'Backend\HomeController@index')->name('admin.home');
	// Route::get('/dashboard', 'Backend\HomeController@index')->name('admin.home');
	// Route::get('/chart', 'Backend\HomeController@chart')->name('admin.chart');
	// Route::get('/form', 'Backend\HomeController@form')->name('admin.form');
	// Route::get('/table', 'Backend\HomeController@table')->name('admin.table');
	
	
	/**
	 * Admin routes
	*/
	Route::group(['prefix' => 'all-admin'], function(){
		Route::get('/', 'Backend\AdminController@index')->name('admin.all_admin.index');
		Route::get('/add', 'Backend\AdminController@create')->name('admin.all_admin.add');
		Route::post('/add', 'Backend\AdminController@store')->name('admin.all_admin.store');
		Route::get('/edit/{id}', 'Backend\AdminController@edit')->name('admin.all_admin.edit');
		Route::post('/edit/{slug}', 'Backend\AdminController@update')->name('admin.all_admin.update');
		Route::get('/delete/{slug}', 'Backend\AdminController@delete')->name('admin.all_admin.delete');
	});


	/**
	 * Setting routes
	*/
	Route::group(['prefix' => 'setting'], function(){
		Route::get('/', 'Backend\SettingController@index')->name('admin.setting.index');
		Route::post('/', 'Backend\SettingController@store')->name('admin.setting.store');
	});


	/**
	 * Menu routes
	*/
	Route::group(['prefix' => 'menu'], function(){
		Route::get('/', 'Backend\MenuController@index')->name('admin.menu.index');
		Route::get('/add', 'Backend\MenuController@create')->name('admin.menu.create');
		Route::post('/add', 'Backend\MenuController@store')->name('admin.menu.store');
		Route::get('/edit/{id}', 'Backend\MenuController@edit')->name('admin.menu.edit');
		Route::post('/edit/{id}', 'Backend\MenuController@update')->name('admin.menu.update');
		Route::get('/delete/{id}', 'Backend\MenuController@delete')->name('admin.menu.delete');
	});


	/**
	 * Role routes
	*/
	Route::group(['prefix' => 'role'], function(){
		Route::get('/', 'Backend\RoleController@index')->name('admin.role.index');
		Route::get('/assign/{role}', 'Backend\RoleController@create')->name('admin.role.assign');
		Route::get('/assign/{role}/{admin_id}', 'Backend\RoleController@userCreate')->name('admin.role.user_assign');
		Route::post('/assign', 'Backend\RoleController@store')->name('admin.role.store');
	});


	// Admin Access Information
	Route::get('/log', 'Backend\AdminAccessInfoController@index')->name('admin.log.index');
	
	
	/**
	 * Unit routes
	*/
	Route::group(['prefix' => 'unit'], function(){
		Route::get('/', 'Backend\UnitController@index')->name('admin.unit.index');
		Route::get('/view/{id}', 'Backend\UnitController@show')->name('admin.unit.show');
		Route::post('/add', 'Backend\UnitController@store')->name('admin.unit.store');
		Route::post('/edit/{id}', 'Backend\UnitController@update')->name('admin.unit.update');
		Route::get('/delete/{id}', 'Backend\UnitController@delete')->name('admin.unit.delete');
	});
	
	
	/**
	 * Category routes
	*/
	Route::group(['prefix' => 'category'], function(){
		Route::get('/', 'Backend\CategoryController@index')->name('admin.category.index');
		Route::get('/add', 'Backend\CategoryController@create')->name('admin.category.create');
		Route::post('/add', 'Backend\CategoryController@store')->name('admin.category.store');
		Route::get('/edit/{slug}', 'Backend\CategoryController@edit')->name('admin.category.edit');
		Route::post('/edit/{slug}', 'Backend\CategoryController@update')->name('admin.category.update');
		Route::get('/delete/{slug}', 'Backend\CategoryController@delete')->name('admin.category.delete');
	});


    /**
     * SubCategory Routes
     */
    Route::group(['prefix'=>'subcategory'], function () {
    	Route::get('/', 'Backend\SubcategoryController@index')->name('admin.subcategory.index');
    	Route::get('/add', 'Backend\SubcategoryController@create')->name('admin.subcategory.create');
    	Route::post('/add', 'Backend\SubcategoryController@store')->name('admin.subcategory.store');
    	Route::get('/edit/{slug}', 'Backend\SubcategoryController@edit')->name('admin.subcategory.edit');
    	Route::post('/edit/{slug}', 'Backend\SubcategoryController@update')->name('admin.subcategory.update');
    	Route::get('/delete/{slug}', 'Backend\SubcategoryController@delete')->name('admin.subcategory.delete');
    });


    /**
     * Brand routes
     */
    Route::group(['prefix' => 'brand'], function(){
    	Route::get('/', 'Backend\BrandController@index')->name('admin.brand.index');
    	Route::get('/add', 'Backend\BrandController@create')->name('admin.brand.create');
    	Route::post('/add', 'Backend\BrandController@store')->name('admin.brand.store');
    	Route::get('/edit/{slug}', 'Backend\BrandController@edit')->name('admin.brand.edit');
    	Route::post('/edit/{slug}', 'Backend\BrandController@update')->name('admin.brand.update');
    	Route::get('/delete/{slug}', 'Backend\BrandController@delete')->name('admin.brand.delete');
    });


	/**
     * Database Backup routes
    */
	Route::group(['prefix' => 'backup'], function(){
		Route::get('/', 'Backend\BackupController@index')->name('admin.backup.index');
		Route::get('/new', 'Backend\BackupController@newBackup')->name('admin.backup.new');
		Route::get('/delete/{file}', 'Backend\BackupController@deleteBakup')->name('admin.backup.delete');
	});


	/**
    * SMS Routes
    **/
    Route::group(['prefix' => 'sms'], function(){
        Route::get('/send', 'Backend\SMSController@sendSMS')->name('admin.sms.send');
        Route::post('/send', 'Backend\SMSController@sendSMS')->name('admin.sms.get_user');
        Route::post('/submit-send-sms', 'Backend\SMSController@submitSendSMS')->name('admin.sms.submit_send_sms');
        Route::get('/custom', 'Backend\SMSController@customSMS')->name('admin.sms.custom');
        Route::post('/custom', 'Backend\SMSController@customSMS')->name('admin.sms.submit_custom_sms');
        Route::get('/report', 'Backend\SMSController@smsReport')->name('admin.sms.report');
    });


	/**
	* Product
	**/
	Route::group(['prefix' => 'product'], function(){
		Route::get('/', 'Backend\ProductController@index')->name('admin.product.index');
		Route::get('/add', 'Backend\ProductController@add')->name('admin.product.add');
		Route::post('/add', 'Backend\ProductController@store')->name('admin.product.store');
		Route::get('/view/{id}', 'Backend\ProductController@view')->name('admin.product.view');
		Route::get('/edit/{id}', 'Backend\ProductController@edit')->name('admin.product.edit');
		Route::post('/edit/{id}', 'Backend\ProductController@update')->name('admin.product.update');
		Route::get('/delete/{id}', 'Backend\ProductController@delete')->name('admin.product.delete');
	});



    /**
     * Language
    **/
    Route::get('/language', 'Backend\LanguageController@language')->name('admin.language.index');
    Route::post('/language/insert', 'Backend\LanguageController@insert')->name('admin.language.insert');
    Route::post('/language/create', 'Backend\LanguageController@create')->name('admin.language.create');


    /**
     * Root
    **/
    Route::get('/root', 'Backend\RootController@index')->name('admin.root.index');
    Route::post('/root/create', 'Backend\RootController@create')->name('admin.root.create');

 
    /**
    * Checking
    **/
    Route::group(['prefix' => 'checking'], function(){
        Route::get('/', 'Backend\CheckingController@index')->name('admin.checking.index');
        Route::post('/add', 'Backend\CheckingController@store')->name('admin.checking.store');
        Route::post('/edit/{id}', 'Backend\CheckingController@update')->name('admin.checking.update');
        Route::get('/delete/{id}', 'Backend\CheckingController@delete')->name('admin.checking.delete');
    });

    /**
	* Employee
	**/
	Route::group(['prefix' => 'employee'], function(){
	Route::get('/', 'Backend\EmployeeController@index')->name('admin.employee.index');
	Route::get('/add', 'Backend\EmployeeController@add')->name('admin.employee.add');
	Route::post('/add', 'Backend\EmployeeController@store')->name('admin.employee.store');
	Route::get('/edit/{id}', 'Backend\EmployeeController@edit')->name('admin.employee.edit');
	Route::post('/edit/{id}', 'Backend\EmployeeController@update')->name('admin.employee.update');
	Route::get('/delete/{id}', 'Backend\EmployeeController@delete')->name('admin.employee.delete');
	Route::get('/view/{id}', 'Backend\EmployeeController@view')->name('admin.employee.view');
	});



    
});


Route::get('language/{locale}', function ($lang) {
	Session::put('locale', $lang);
	return redirect()->back();
})->name('language');