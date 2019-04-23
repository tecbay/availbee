<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarBrand;
use Illuminate\Http\Request;

class CarBrandController extends Controller {
	private $CarBrand;

	public function __construct() {
		$this->CarBrand = (CarBrand::all())->sortBy( 'name' );

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public $asd = 'ascasc';

	public function index() {
		return view( 'admin.CarBrand.index', [ 'carBrands' => $this->CarBrand ] );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

		return view( 'admin.CarBrand.index', [ 'carBrands' => $this->CarBrand ] );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {

		$carBrand = CarBrand::create( $request->only( [ 'name', 'desc', 'avatar' ] ) );

		return redirect()->back();
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\CarBrand $carBrand
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( CarBrand $carBrand ) {
		return view( 'admin.CarBrand.edit', [ 'carBrands' => $this->CarBrand, 'car' => $carBrand ] );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Models\CarBrand $carBrand
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, CarBrand $carBrand ) {
		$carBrand = $carBrand->update( $request->only( [ 'name', 'desc', 'avatar' ] ) );

		return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\CarBrand $carBrand
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( CarBrand $carBrand ) {
		//
	}
}
