<?php

class Connection
{
	private $dsn;

	private $username;

	private $password;

	public function __construct($dsn, $username, $password)
	{
		$this->dsn = $dsn;
		$this->username = $username;
		$this->password = $password;
	}

	public function __sleep()
	{
		var_dump('Going to sleep ...');

		return ['dsn', 'username'];
	}

	public function __wakeup()
	{
		var_dump('Waking up ...');
	}
}

$connection = new Connection('any:bla', 'root', 'hapegadinhadomalandro');
var_dump($connection);
$serialized = serialize($connection);
$connection = unserialize($serialized);
var_dump($connection);
