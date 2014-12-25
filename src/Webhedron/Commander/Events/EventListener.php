<?php namespace Webhedron\Commander\Events;

class EventListener {

	public function handle($event) {
		$eventName = $this->getEventName($event);
		if ($this->isListenerRegistered($eventName)) {
			return call_user_func([$this, 'when' . $eventName], $event);
		}
	}

	protected function getEventName($event) {
		return (new \ReflectionClass($event))->getShortName();
	}

	protected function isListenerRegistered($eventName) {
		$methodName = "when{$eventName}";
		return method_exists($this, $methodName);
	}

}
