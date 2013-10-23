<?php
# Think of the stack as an array reversed, where the last element has index zero

$stack = new SplStack();
$stack->push('a');
$stack->push('b');
$stack->push('c');

$stack->offsetSet(0, 'C'); # the last element has index zero

$stack->rewind();

while( $stack->valid() )
{
    echo $stack->current(), PHP_EOL;
    $stack->next();
}

/* 

OUTPUT
****************************

C
b
a

*/
?>