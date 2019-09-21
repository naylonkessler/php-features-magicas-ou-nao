<?php

$dir = __DIR__;

$filesystem = new FilesystemIterator($dir);

foreach ($filesystem as $fileInfo) {
	var_dump($fileInfo->getFilename());
}
