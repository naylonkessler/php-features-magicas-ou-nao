<?php

class Engine
{
	public function __invoke()
	{
		var_dump('Engine turned on ...');
	}
}

$engine = new Engine();
$engine();
