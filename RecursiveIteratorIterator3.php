<?php 
$arr = array('Zero', 'name'=>'Adil', 'address' => array( 'city'=>'Dubai', 'tel' => array('int' => 971, 'tel'=>12345487)), '' => 'nothing'); 

$iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($arr)); 
var_dump(iterator_to_array($iterator,true)); 
?> 