<?php

class Moods
{
	public $happy = 'Great \o/';
	public $sad = 'Why?';
	public $crying = 'Are you hurt?';
	public $angry = 'Do you want to kick something?';
}

$mood = $argv[1];
$moods = new Moods();

echo $moods->{$mood};
