<?php

class Father
{
	public static function me()
	{
		var_dump(__CLASS__);
	}

	public static function check()
	{
		self::me();
	}

	public static function checkLate()
	{
		static::me();
	}
}

class Child extends Father
{
	public static function me()
	{
		var_dump(__CLASS__);
	}
}

Father::check();
Father::checkLate();
Child::check();
Child::checkLate();
