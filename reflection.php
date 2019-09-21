<?php

/**
 * @table tbl_person
 */
class Person
{
	/**
	 * @column person_name
	 */
	public $name;
}

$class = new ReflectionClass('Person');
$classDoc = $class->getDocComment();
var_dump($classDoc);

$attribute = new ReflectionProperty('Person', 'name');
$attributeDoc = $attribute->getDocComment();
var_dump($attributeDoc);
