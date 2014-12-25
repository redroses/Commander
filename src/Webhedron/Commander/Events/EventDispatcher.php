<?php namespace Webhedron\Commander\Events;

class EventDispatcher {

	protected $pendingEvents = [];

	public function dispatch(array $events) {
		foreach ($events as $event) {
			$eventName = $this->getEventName($event);
			\Event::fire($eventName, $event);
			\Log::info("$eventName was fired.");
		}
	}

	protected function getEventName($event) {
		return str_replace('\\', '.', get_class($event));
	}

}
