<?php
$rdi = new RecursiveDirectoryIterator(__DIR__);
$iter = new RecursiveIteratorIterator($rdi, RecursiveIteratorIterator::CHILD_FIRST);

$rdi = new RecursiveDirectoryIterator(__DIR__);
$iter = new RecursiveIteratorIterator($rdi, RecursiveIteratorIterator::CHILD_FIRST);
$dirsOnly = new ParentIterator($iter);
?>