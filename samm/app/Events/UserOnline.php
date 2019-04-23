<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;


class UserOnline {
	use Dispatchable, InteractsWithSockets, SerializesModels;

	public $uid;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */


	public function __construct( $uid ) {
		$this->uid = $uid;
	}

}
