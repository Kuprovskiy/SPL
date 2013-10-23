<?php

$list = new SplDoublyLinkedList();
$list->push('a');
$list->push('b');
$list->push('c');
$list->push('d');
 
echo "FIFO (First In First Out) :\n";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
for ($list->rewind(); $list->valid(); $list->next()) {
    echo $list->current()."\n";
}
 
Result :

// FIFO (First In First Out):
// a
// b
// c
// d
 
echo "LIFO (Last In First Out) :\n";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
for ($list->rewind(); $list->valid(); $list->next()) {
    echo $list->current()."\n";
}

// LIFO (Last In First Out):
// d
// c
// b
// a

?>