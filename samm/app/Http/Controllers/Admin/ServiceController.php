<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class ServiceController extends Controller {

	public function __construct() {

	}

	public function index() {
		return view( 'admin.Service.index' );
	}

	public function store( Request $request ) {
		//TODO validation imp
		$request->validate( [
			'slang' => 'required|unique:permissions,name',
		] );

		Service::create( $request->all() );
		if ( $request->service_category_id ) {
			Permission::create( [
				'name'         => $request->slang,
				'display_name' => $request->name,
				'type'         => 'service'
			] );
		} else {
			Permission::create( [
				'name'         => $request->slang,
				'display_name' => $request->name,
				'type'         => 'extra_service'
			] );
		}

		return redirect()->back();
	}
}
