<?php namespace Webhedron\Commander;

abstract class AbstractCommandBus implements CommandBus {

	protected $commandTranslator;

	public function __construct(CommandTranslator $commandTranslator) {
		$this->commandTranslator = $commandTranslator;
	}

}
