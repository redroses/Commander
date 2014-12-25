<?php namespace Webhedron\Commander\Events;

trait EventableTrait {

	protected $pendingEvents = [];

	public function raise($event) {
		$this->pendingEvents[] = $event;
	}

	public function releaseEvents() {
		$events = $this->pendingEvents;
		$this->pendingEvents = [];
		return $events;
	}

}
