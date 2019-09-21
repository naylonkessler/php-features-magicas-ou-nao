<?php

class MemoryLogger
{
	protected $entries = [];

	public function __call($name, $arguments)
	{
		$this->entries[] = "[{$name}] " . implode(' / ', $arguments);
	}

	public static function __callStatic($name, $arguments)
	{
		throw new Exception('Unable to log statically.');
	}

	public function dump()
	{
		var_dump($this->entries);
	}
}

$logger = new MemoryLogger();
$logger->info('Starting logging ...');
$logger->warning('First warning.');
$logger->error('Some error message.');
$logger->dump();
MemoryLogger::error('Will throw an Exception');
