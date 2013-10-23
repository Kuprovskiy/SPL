<?php
$doesntStartWithLetterT = function ($current) {
    return $current->getFileName()[0] !== 'T';
};

$rdi = new RecursiveDirectoryIterator(__DIR__);
$files = new RecursiveCallbackFilterIterator($rdi, $doesntStartWithLetterT);
foreach (new RecursiveIteratorIterator($files) as $file) {
    echo $file->getPathname() . PHP_EOL;
}
?>