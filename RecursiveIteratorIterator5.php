<?php
$tree = array();
$tree[1][2][3] = 'lemon';
$tree[1][4] = 'melon';
$tree[2][3] = 'orange';
$tree[2][5] = 'grape';
$tree[3] = 'pineapple';

print_r($tree);
 
$arrayiter = new RecursiveArrayIterator($tree);
$iteriter = new RecursiveIteratorIterator($arrayiter);
 
foreach ($iteriter as $key => $value) {
  $d = $iteriter->getDepth();
  echo "depth=$d k=$key v=$value\n";
}
?>