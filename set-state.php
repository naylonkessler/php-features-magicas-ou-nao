<?php

class Person
{
	public $name;

	public static function __set_state($data)
	{
		$person = new Person();
		$person->name = $data['name'] . ' reevaluated.';

		return $person;
	}
}

$person = new Person();
$person->name = 'John Doe';

$exported = var_export($person, true);

eval('$second = ' . $exported . ';');
var_dump($second);
