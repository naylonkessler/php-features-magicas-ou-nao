<?php

class Person
{
	public $name;

	public function __toString()
	{
		return "A person named {$this->name}.";
	}
}

$person = new Person();
$person->name = 'John Doe';
echo $person;
$asString = (string)$person;
echo $asString;
