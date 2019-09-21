<?php

class Person
{
	public $name;

	public function __clone()
	{
		$this->name = "A {$this->name}'s clone.";
	}
}

$john = new Person();
$john->name = 'John Doe';
var_dump($john->name);

$clone = clone $john;
var_dump($clone->name);
