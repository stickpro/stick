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

Route::group(['middleware'=>'web'], function() {
	Route::match(['get', 'post'], '/', ['uses'=>'IndexController@execute','as'=>'home']);
	   Route::get('/page/{alias}', ['uses' => 'PageController@execute', 'as' => 'page']);
	Route::auth();
});
//admin
Route::group(['prefix'=>'admin', 'middleware'=>'auth'] , function() {
	Route::get('/', function (){
	if(view()->exists('admin.index')) {
		$data=['title'=>'Admin panel'];
		return view('admin.index',$data);
	}
	});
	//admin/pages
	Route::group(['prefix'=>'pages'], function () {
	///admin/pages
	Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']); 
	///admin/pages/add
	Route::match(['get', 'post'],'/add', ['useus'=>'PagesAddController@execute', 'as'=>'pagesAdd']);
	///admin/edit/2
	Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pagesEdit']);
	});

		//admin/portfo;io
	Route::group(['prefix'=>'portfolios'], function () {
	///admin/Portfolio
	Route::get('/', ['uses'=>'PortfolioController@execute', 'as'=>'portfolio']); 
	///admin/Portfolio/add
	Route::match(['get', 'post'],'/add', ['useus'=>'PortfolioAddController@execute', 'as'=>'portfolioAdd']);

	Route::match(['get', 'post', 'delete'], '/edit/{Portfolio}', ['uses'=>'PortfolioEditController@execute', 'as'=>'portfolioEdit']);
	});

		Route::group(['prefix'=>'services'], function () {
	///admin/Portfolio
	Route::get('/', ['uses'=>'servicesController@execute', 'as'=>'services']); 
	///admin/Portfolio/add
	Route::match(['get', 'post'],'/add', ['useus'=>'ServicesAddController@execute', 'as'=>'servicesAdd']);

	Route::match(['get', 'post', 'delete'], '/edit/{services}', ['uses'=>'ServicesEditController@execute', 'as'=>'servicesEdit']);
	});
	});		


	

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
