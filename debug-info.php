<?php

class DebugStamped
{
	private $what;

	public function __construct($what)
	{
		$this->what = $what;
	}

	public function __debugInfo()
	{
		return [
			'what' => $this->what,
			'at' => time(),
		];
	}
}

$stamped = new DebugStamped('Something');
var_dump($stamped);
