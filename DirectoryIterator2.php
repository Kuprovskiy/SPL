<?php
    $directory = dirname(__FILE__)."/demo";
    $filenames = array();
    $iterator = new DirectoryIterator($directory);
    foreach ($iterator as $fileinfo) {
        if ($fileinfo->isFile()) {
            $filenames[$fileinfo->getMTime()] = $fileinfo->getFilename();
        }
    }
    ksort($filenames);
    print_r($filenames);
    echo "\n";
    $i=0;
    if(sizeof($filenames)>1){
        foreach ($filenames as $file){
            if($i>0){
                echo $file."\n";
                unlink($directory."/".$file);
            }
            $i++;
        }
    }
?>