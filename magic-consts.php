<?php

namespace Entities;

class Person
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
		$nameLine = __LINE__ - 1;

		var_dump($nameLine);
		var_dump(__FILE__);
		var_dump(__DIR__);
		var_dump(__FUNCTION__);
		var_dump(__CLASS__);
		var_dump(__METHOD__);
		var_dump(__NAMESPACE__);
		var_dump(Person::class);
	}
}

$person = new Person('John Doe');
