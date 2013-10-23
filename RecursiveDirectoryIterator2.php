<?php
function empty_dir($dir) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir),
                                              RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($iterator as $path) {
      if ($path->isDir()) {
         rmdir($path->__toString());
      } else {
         unlink($path->__toString());
      }
    }
//    rmdir($dir);
}
?>