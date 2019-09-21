<?php

trait HasData
{
	protected $data = [];

	public function __get($name)
	{
		return $this->data[$name];
	}

	public function __set($name, $value)
	{
		$this->data[$name] = $value;
	}
}

class Person
{
	use HasData;
}

class Product
{
	use HasData;
}

$person = new Person();
var_dump($person);

$product = new Product();
var_dump($product);
