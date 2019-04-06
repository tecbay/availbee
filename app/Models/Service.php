<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

	protected $fillable = [ 'name', 'slang', 'service_category_id' ];

	public function serviceRequests() {
		return $this->morphedByMany( 'App\Models\ServiceRequest', 'serviceable' );
	}

	public function category() {
		return $this->belongsTo('App\Models\ServiceCategory','service_category_id');
	}
}
