<?php

/*

 Route::group(['middleware' => ['role:super-admin|writer']], function () {

});

Route::group(['middleware' => ['permission:publish articles|edit articles']], function () {

});

*/


Auth::routes( [ 'verify' => true ] );


//<editor-fold desc="Guest Routes">
Route::group( [ 'middleware' => [ 'guest' ] ], function () {

	Route::get( '/', function () {
		return view( 'welcome' );
	} );

	Route::resource( 'service-request', 'ServiceRequestController' );

} );
//</editor-fold>

// All Authenticate user routes
Route::group( [ 'middleware' => [ 'auth' ] ], function () {
	//<editor-fold desc="Redirecting user after login base on role">
	Route::get( '/home', 'HomeController@index' )->name( 'home' );  // this controller handel the rediraction after login
	//</editor-fold>

	Route::get( 'set/status/online', 'UserOnlineController' );  // this controller handel the rediraction after login
	Route::get( 'set/status/offline', 'UserOfflineController' );  // this controller handel the rediraction after login

	//<editor-fold desc="Admin Route">
	Route::group( [
		'prefix'     => 'admin',
		'middleware' => [ 'role:admin' ],
		'namespace'  => 'Admin',
		'as'         => 'admin.'
	], function () {
		// All Admin Routes +++++
		Route::get( '/', 'DashboardController@home' )->name( 'home' );
		Route::resource( 'service', 'ServiceController' );
		Route::resource( 'service-category', 'ServiceCategoryController' );
		Route::resource( 'car-brand', 'CarBrandController' );
		Route::resource( 'car-type', 'CarTypeController' );
	} );
	//</editor-fold>


	//<editor-fold desc="Service Partner Route">

	Route::group( [
		'prefix'     => 'service-partner',
		'middleware' => [ 'role:service_partner' ],
		'namespace'  => 'ServicePartner',
		'as'         => 'service.partner.'
	], function () {
		//All User Routes +++++
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );
		Route::post( 'offer/accepted', 'ServiceOfferController@accepted' )->name( 'offer.accepted' );
		Route::post( 'offer/declined', 'ServiceOfferController@decliced' )->name( 'offer.declined' );
	} );
	//</editor-fold>

	//<editor-fold desc="Inventory Partner Route">
	Route::group( [
		'prefix'     => 'inventory-partner',
		'middleware' => [ 'role:inventory_partner' ],
		'namespace'  => 'InventoryPartner',
		'as'         => 'inventory.partner.'
	], function () {
		//All User Routes +++++
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );
	//</editor-fold>

	//<editor-fold desc="towing Partner Route">
	Route::group( [
		'prefix'     => 'towing-partner',
		'middleware' => [ 'role:towing_partner' ],
		'namespace'  => 'TowingPartner',
		'as'         => 'towing.partner.'
	], function () {
		//All User Routes +++++
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );
	//</editor-fold>

	//<editor-fold desc="Collusion Partner Route">
	Route::group( [
		'prefix'     => 'collusion-center-partner',
		'middleware' => [ 'role:collusion_center_partner' ],
		'namespace'  => 'CollusionPartner',
		'as'         => 'collusion.partner.'
	], function () {
		//All User Routes +++++
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );
	//</editor-fold>

	//<editor-fold desc="Banking Partner Route">
	Route::group( [
		'prefix'     => 'banking-partner',
		'middleware' => [ 'role:banking_partner' ],
		'namespace'  => 'BankingPartner',
		'as'         => 'banking.partner.'
	], function () {
		//All User Routes +++++
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );
	//</editor-fold>

	//<editor-fold desc="Insurance Partner Route">
	Route::group( [
		'prefix'     => 'insurance-partner',
		'middleware' => [ 'role:insurance_partner' ],
		'namespace'  => 'InsurancePartner',
		'as'         => 'insurance.partner.'
	], function () {
		//All User Routes +++++
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );
	//</editor-fold>

	//<editor-fold desc="Insurance Partner Route">
	Route::group( [
		'prefix'     => 'insurance-partner',
		'middleware' => [ 'role:insurance_partner' ],
		'namespace'  => 'InsurancePartner',
		'as'         => 'insurance.partner.'
	], function () {
		//All User Routes +++++
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );
	//</editor-fold>

	//<editor-fold desc="Customer Route">
	Route::group( [
		'prefix'     => 'customer',
		'middleware' => [ 'role:customer' ],
		'namespace'  => 'Customer',
		'as'         => 'customer.'
	], function () {
		//All Customer Routes +++++
		Route::get( '/dashboard', 'DashboardController@home' )->name( 'home' );
		Route::resource( 'service-request', 'ServiceRequestController' );

	} );
	//</editor-fold>

} );

use App\Events\ServiceRequestDeclined;

Route::get( '/dashboarasdcascasdmailk', function () {
	Mail::raw( 'Text', function ( $message ) {
		$message->to( 'miraj.net.xp@gmail.com' );
	} );

} );


Route::get( '/dashboarasdcascasd/{id}', function ( $id ) {
	$serviceRequest = \App\Models\ServiceRequest::find( $id );

	event( new \App\Events\ConfirmedServiceRequest( $serviceRequest ) );
} );



