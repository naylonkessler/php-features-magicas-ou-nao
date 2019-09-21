<?php

$linkedList = new SplDoublyLinkedList();
$linkedList->push(2);
$linkedList->push(10);
$linkedList->unshift('Bla');
$linkedList->rewind();

$current = $linkedList->current();
var_dump($current);
$linkedList->next();
$current = $linkedList->current();
var_dump($current);
$linkedList->prev();
$current = $linkedList->current();
var_dump($current);
