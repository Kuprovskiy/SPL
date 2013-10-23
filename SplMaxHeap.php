<?php

class MySimpleHeap extends SplHeap
{
    public function  compare( $value1, $value2 ) {
        return ( $value1 - $value2 );
    }
}

$obj = new MySimpleHeap();
$obj->insert( 4 );
$obj->insert( 8 );
$obj->insert( 1 );
$obj->insert( 0 );

foreach( $obj as $number ) {
    echo $number.'<br>';
}

/* 
    Output display : 
    8 
    4 
    1 
    0 
*/

?>