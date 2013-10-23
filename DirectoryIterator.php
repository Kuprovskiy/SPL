<?php

foreach (new DirectoryIterator(__DIR__) as $fileInfo) {
    if($fileInfo->isDot()) continue;
    echo $fileInfo->getFilename() . "<br>\n";
}

?>