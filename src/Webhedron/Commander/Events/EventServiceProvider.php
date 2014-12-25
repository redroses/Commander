<?php namespace Webhedron\Commander\Events;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	public function register() {
		$listeners = \Config::get('webhedron.listeners');
		foreach ($listeners as $listener) {
			\Event::listen('Webhedron.*', $listener);
		}
	}

}
