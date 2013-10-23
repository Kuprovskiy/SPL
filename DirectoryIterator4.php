<?php

echo "php ".phpversion().": ";
$dirit = new DirectoryIterator( '.' );
var_dump( method_exists( $dirit, 'seek' ) );
var_dump( method_exists( $dirit, 'count' ) );

?>