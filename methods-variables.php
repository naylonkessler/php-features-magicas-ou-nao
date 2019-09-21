<?php

class Machine
{
	public function talk()
	{
		var_dump('Hey let me talk something clever!');
	}

	public function eat()
	{
		var_dump('I want some energy source ...');
	}

	public function workout()
	{
		var_dump('No. Machines cannot do it.');
	}
}

$action = $argv[1];
$machine = new Machine();
$machine->$action();

$callable = [$machine, $action];
$callable();
