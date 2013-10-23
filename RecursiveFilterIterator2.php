<?php

class MyRecursiveFilterIterator extends RecursiveFilterIterator {

    public static $FILTERS = array(
        '.svn',
    );

    public function accept() {
        return !in_array(
            $this->current()->getFilename(),
            self::$FILTERS,
            true
        );
    }

}

$dirItr    = new RecursiveDirectoryIterator('/sample/path');
$filterItr = new MyRecursiveFilterIterator($dirItr);
$itr       = new RecursiveIteratorIterator($filterItr, RecursiveIteratorIterator::SELF_FIRST);
foreach ($itr as $filePath => $fileInfo) {
    echo $fileInfo->getFilename() . PHP_EOL;
}

?>