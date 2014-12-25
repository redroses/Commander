<?php namespace Webhedron\Commander;

class ValidationCommandBus extends AbstractCommandBus {

	private $commandBus;

	public function __construct(DefaultCommandBus $commandBus, CommandTranslator $commandTranslator) {
		parent::__construct($commandTranslator);
		$this->commandBus = $commandBus;
	}

	public function execute($command) {
		$validator = $this->commandTranslator->toValidator($command);
		if ($validator) {
			\App::make($validator)->validate($command);
		}
		$this->commandBus->execute($command);
	}

}
