<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group([],function() {	
	Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
	Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);	
	Route::auth();	
});


//admin custom
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function() {
	Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
	
	//admin/potential_names
	Route::group(['prefix'=>'potential_names'],function() {
		///admin/potential_names
		Route::get('/',['uses'=>'Potential_namesController@execute','as'=>'potentials']);
		//admin/potential_names/add
		Route::match(['get','post'],'/add',['uses'=>'Potential_namesAddController@execute','as'=>'potentialsAdd']);
		//potential_names/edit/2
		Route::match(['get','post','delete'],'/edit/{potential}',['uses'=>'Potential_namesEditController@execute','as'=>'potentialsEdit']);

	});
	//admin/loan_conditions
	Route::group(['prefix'=>'loan_conditions'],function() {
		//admin/loan_conditions
		Route::get('/',['uses'=>'Loan_conditionsController@execute','as'=>'loan_conditions']);
		//admin/loan_conditions/add
		Route::match(['get','post'],'/add',['uses'=>'Loan_conditionsAddController@execute','as'=>'loan_conditionsAdd']);
		//loan_conditions/edit/2
		Route::match(['get','post','delete'],'/edit/{loan_condition}',['uses'=>'Loan_conditionsEditController@execute','as'=>'loan_conditionsEdit']);

	});
	//admin/pages
	Route::group(['prefix'=>'pages'],function() {
		///admin/pages
		Route::get('/',['uses'=>'PagesController@execute','as'=>'pages']);
		//admin/pages/add
		Route::match(['get','post'],'/add',['uses'=>'PagesAddController@execute','as'=>'pagesAdd']);
		//admin/edit/2
		Route::match(['get','post','delete'],'/edit/{page}',['uses'=>'PagesEditController@execute','as'=>'pagesEdit']);

	});
	//admin/portfolios
	Route::group(['prefix'=>'portfolios'],function() {
		Route::get('/',['uses'=>'PortfoliosController@execute','as'=>'portfolio']);
		Route::match(['get','post'],'/add',['uses'=>'PortfoliosAddController@execute','as'=>'portfoliosAdd']);
		Route::match(['get','post','delete'],'/edit/{portfolio}',['uses'=>'PortfoliosEditController@execute','as'=>'portfoliosEdit']);
	});
	//admin/services
	Route::group(['prefix'=>'services'],function() {
		Route::get('/',['uses'=>'ServicesController@execute','as'=>'services']);
		Route::match(['get','post'],'/add',['uses'=>'ServicesAddController@execute','as'=>'servicesAdd']);
		Route::match(['get','post','delete'],'/edit/{service}',['uses'=>'ServicesEditController@execute','as'=>'servicesEdit']);

	});
	//admin/term_sheets
	Route::group(['prefix'=>'term_sheets'],function() {
		Route::get('/',['uses'=>'Term_sheetsController@execute','as'=>'term_sheets']);
		Route::match(['get','post'],'/add',['uses'=>'Term_sheetsAddController@execute','as'=>'term_sheetsAdd']);
		Route::match(['get','post'],'/lcadd',['uses'=>'Term_sheets_LCAddController@execute','as'=>'term_sheetsLCAdd']);

		Route::match(['get','post','delete'],'/edit/{term_sheet}',['uses'=>'Term_sheetsEditController@execute','as'=>'term_sheetsEdit']);
	});
	//admin/term_sheetsfinal
	Route::get('/ts/{term_sheet?}',['uses'=>'Term_sheetsFinalController@execute','as'=>'term_sheetsfinal']);
	//Route::get('/term_sheet/{term_sheet?}',['uses'=>'Term_sheetsFinalController@execute','as'=>'term_sheetsfinal']);
	Route::get('/term_sheet/{term_sheet?}',['uses'=>'Term_sheetsViewController@execute','as'=>'term_sheetsview']);
	Route::group(['prefix'=>'loan_application'],function() {
		Route::get('/',['uses'=>'Loan_applicationController@execute','as'=>'loan_application']);
		//Route::match(['get','post'],'/add',['uses'=>'Loan_applicationAddController@execute','as'=>'loan_applicationAdd']);

		Route::match(['get','post','delete'],'/edit/{loan_application}',['uses'=>'Loan_applicationEditController@execute','as'=>'loan_applicationEdit']);

	});
	Route::get('/loan_application/{loan_application?}',['uses'=>'Loan_applicationFinalController@execute','as'=>'loan_applicationfinal']);
	//admin/borrowers
	Route::group(['prefix'=>'borrowers'],function() {

		///admin/borrower
		Route::get('/',['uses'=>'BorrowersController@execute','as'=>'borrowers']);
		//admin/pages/add
		Route::match(['get','post'],'/add',['uses'=>'BorrowersAddController@execute','as'=>'borrowersAdd']);
		//admin/edit/2
		Route::match(['get','post','delete'],'/edit/{borrower}',['uses'=>'BorrowersEditController@execute','as'=>'borrowersEdit']);

	});
	//admin/brokers
	Route::group(['prefix'=>'brokers'],function() {

		///admin/brokers
		Route::get('/',['uses'=>'BrokersController@execute','as'=>'brokers']);

		//admin/brokers/add
		Route::match(['get','post'],'/add',['uses'=>'BrokersAddController@execute','as'=>'brokersAdd']);
		//admin/edit/2
		Route::match(['get','post','delete'],'/edit/{broker}',['uses'=>'BrokersEditController@execute','as'=>'brokersEdit']);

	});

	//admin/personal account
	Route::group(['prefix'=>'personal_accounts'],function() {

		///admin/personal_account
		Route::get('/',['uses'=>'PersonalAccountController@execute','as'=>'personal_accounts']);
		Route::get('/pats',['uses'=>'PersonalAccountController@pats','as'=>'pats']);
		Route::get('/pala',['uses'=>'PersonalAccountController@palaview','as'=>'palaView']);
		Route::get('/padoc',['uses'=>'PersonalAccountController@padoc','as'=>'padoc']);
		Route::get('/file',['uses'=>'PersonalAccountController@create','as'=>'create']);
		Route::post('/file',['uses'=>'PersonalAccountController@store','as'=>'store']);
		//Route::match(['get','post'],'/add',['uses'=>'PersonalAccountController@palaadd','as'=>'palaadd']);

		//admin/personal_account/add
		Route::match(['get','post'],'/add',['uses'=>'PersonalAccountAddController@execute','as'=>'personal_accountAdd']);
		//admin/edit/2
		Route::match(['get','post','delete'],'/edit/{personalaccoun}',['uses'=>'PersonalAccountEditController@execute','as'=>'personal_accountEdit']);

	});
	//admin/documents
	Route::group(['prefix'=>'documents'],function() {
		///admin/documents
		Route::get('/',['uses'=>'DocumentsController@execute','as'=>'documents']);
		//admin/documents/add
		Route::get('/filesupload',['uses'=>'FileController@filesupload','as'=>'filesupload']);
		Route::match(['get','post','delete'],'/fileuploadEdit/{file}',['uses'=>'FileController@fileuploadEdit','as'=>'fileuploadEdit']);
		
		Route::match(['get','post'],'/add',['uses'=>'DocumentsAddController@execute','as'=>'documentsAdd']);
		//admin/edit/2
		Route::match(['get','post','delete'],'/edit/{document}',['uses'=>'DocumentsEditController@execute','as'=>'documentsEdit']);

	});
	Route::get('/document/{document?}',['uses'=>'DocumentsFinalController@execute','as'=>'documentfinal']);
	
	
});
//super admin
Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function() {
	Route::match(['get', 'post'], '/superAdminOnlyPage/', 'HomeController@super_admin');
	Route::group(['prefix'=>'users'],function() {
		///superAdminOnlyPage/users
	Route::get('/',['uses'=>'UsersController@execute','as'=>'Users']);
	//superAdminOnlyPage/users/add
	
	Route::match(['get','post'],'/add',['uses'=>'UsersAddController@execute','as'=>'usersadd']);
	
	//superAdminOnlyPage/edit/2
	Route::match(['get','post','delete'],'/edit/{user}',['uses'=>'UsersEditController@execute','as'=>'UsersEdit']);	

	});	
});
//mamber
Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function() {
	Route::match(['get', 'post'], '/memberOnlyPage/', 'HomeController@member');
	Route::get('/user',['uses'=>'UserController@index','as'=>'user']);
	Route::get('/profile',['uses'=>'UserController@create','as'=>'create']);	
	
		
	Route::match(['get','post','delete'],'/edit/{user}',['uses'=>'UserController@edit','as'=>'UserEdit']);
	
	
	
	Route::match(['get','post','delete'],'/update/{id}',['uses'=>'UserController@update','as'=>'UpdateEdit']);
	Route::get('/pats',['uses'=>'PersonalAccountController@pats','as'=>'pats']);
	Route::get('/pala',['uses'=>'UserController@palaview','as'=>'palaView']);
	Route::match(['get','post'],'/palaadd',['uses'=>'UserController@palaadd','as'=>'palaadd']);
	Route::post('/upload',['uses'=>'PersonalAccountController@upload','as'=>'upload']);
	Route::get('/createfile',['uses'=>'PersonalAccountController@createfile','as'=>'createfile']);
	Route::post('/file',['uses'=>'PersonalAccountController@store','as'=>'store']);
	Route::get('/term_sheet/{term_sheet?}',['uses'=>'Term_sheetsViewController@execute','as'=>'term_sheetsview']);
	//mamber/uploadfile
	
	
	Route::get('/uploadfile',['uses'=>'FileController@index','as'=>'uploadfile']);	
	
	
	Route::match(['get','post','delete'],'/uploadfile/{file}',['uses'=>'FileController@destroy','as'=>'fileEdit']);

	
});



Route::auth();
Route::get('logout', ['as' => 'account-sign-out','uses' => 'Auth\LoginController@logout']);
Route::get('/home', 'HomeController@index');


