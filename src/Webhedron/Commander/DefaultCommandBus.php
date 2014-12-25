<?php namespace Webhedron\Commander;

class DefaultCommandBus extends AbstractCommandBus {

	public function execute($command) {
		$handler = $this->commandTranslator->toCommandHandler($command);
		\App::make($handler)->handle($command);
	}

}
