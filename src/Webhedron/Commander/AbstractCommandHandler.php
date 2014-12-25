<?php namespace Webhedron\Commander;

use Webhedron\Commander\Events\EventDispatcher;

abstract class AbstractCommandHandler implements CommandHandler {

	protected $dispatcher;

	public function __construct(EventDispatcher $dispatcher) {
		$this->dispatcher = $dispatcher;
	}

}
