<?php namespace Webhedron\Commander;

class CommandTranslator {

	public function toCommandHandler($command) {
		$handler = str_replace('Command', 'CommandHandler', get_class($command));

		if (!class_exists($handler)) {
			$message = "Command handler [$handler] does not exist";
			throw new Exception($message);
		}
		return $handler;
	}

	public function toValidator($command) {
		$validator = str_replace('Command', 'Validator', get_class($command));

		if (!class_exists($validator)) {
			//$message = "Validator [$validator] does not exist";
			//throw new Exception($message);
			return null;
		}
		return $validator;
	}

}
