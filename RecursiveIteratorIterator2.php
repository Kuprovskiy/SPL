<?php
$timer = function ($name = 'default', $unset_timer = TRUE)
{
    static $timers = array();
    
    if ( isset( $timers[ $name ] ) )
    {
        list($s_sec, $s_mic) = explode(' ', $timers[ $name ]);
        list($e_sec, $e_mic) = explode(' ', microtime());
        
        if ( $unset_timer )
            unset( $timers[ $name ] );
        
        return $e_sec - $s_sec + ( $e_mic - $s_mic );
    }
    
    $timers[ $name ] = microtime();
};

function f1 ($array) {
    $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($array), RecursiveIteratorIterator::SELF_FIRST);

    foreach ( $iterator as $key => $value ) {
        if ( is_array($value) )
            continue;
    }
}

function f2($array) {
    foreach ( $array as $key => $value ) {
        if ( is_array($value) )
            f2($value);
    }
}

foreach ( array(100, 1000, 10000) as $num )
{
    $array = array();
    
    for ( $i = 0; ++$i < $num; )
        $array[] = array(1,2,3 => array(4,5,6 => array(7,8,9 => 10,11,12 => array(13,14,15 => array(16,17,18)))));
    
    $timer();
    f1($array);
    printf("RecursiveIteratorIterator: %7d elements -> %.3f sec\n", $num, $timer());
    
    $timer();
    f2($array);
    printf("Recursive function       : %7d elements -> %.3f sec\n", $num, $timer());
}

?>