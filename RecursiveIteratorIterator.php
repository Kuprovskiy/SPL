<?php
$directory = "/demo/";
$fileSPLObjects =  new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($directory),
                RecursiveIteratorIterator::CHILD_FIRST
            );
try {
    foreach( $fileSPLObjects as $fullFileName => $fileSPLObject ) {
        print $fullFileName . " " . $fileSPLObject->getFilename() . "\n";
    }
}
catch (UnexpectedValueException $e) {
    printf("Directory [%s] contained a directory we can not recurse into", $directory);
}
?>