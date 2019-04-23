<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel {
	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		//
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule $schedule
	 *
	 * @return void
	 */
	protected function schedule( Schedule $schedule ) {


		$schedule->command( 'queue:work' )
		         ->appendOutputTo( storage_path() . '/que.log' )
		         ->everyMinute()
		         ->withoutOverlapping();


		$schedule->command( 'websockets:serve' )
		         ->appendOutputTo( storage_path() . '/webs.log' )
		         ->everyMinute()
		         ->withoutOverlapping();
	}

	/**
	 * Register the commands for the application.
	 *
	 * @return void
	 */
	protected function commands() {
		$this->load( __DIR__ . '/Commands' );

		require base_path( 'routes/console.php' );
	}
}
