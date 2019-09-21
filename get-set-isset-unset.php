<?php

class Record
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

	public function __isset($name)
	{
		return isset($this->data[$name]);
	}

	public function __unset($name)
	{
		unset($this->data[$name]);
	}
}

$record = new Record();
$record->name = 'First One';
var_dump($record->name);
var_dump(isset($record->name));
unset($record->name);
var_dump(empty($record->name));
