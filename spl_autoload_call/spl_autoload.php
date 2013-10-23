<?php 
/* 
* defined function responsible for loading class, 
* replacing the old __ autoload. 
* ROOT is constant of the path root of the system 
*/ 
spl_autoload_extensions('.class.php'); 
spl_autoload_register('loadClasses'); 

 function loadClasses($className) 
 { 
    
    if( file_exists(ROOT_DIR.DS.'controller/'.$className.'.class.php' ) ) {
        set_include_path(ROOT_DIR.DS.'controller'.DS); 
        spl_autoload($className); 
    } 
    elseif( file_exists('model/'.$className.'.class.php' ) ){ 
        set_include_path(ROOT_DIR.DS.'model'.DS); 
        spl_autoload($className); 
    }elseif( file_exists('view/'.$className.'.class.php' ) ){ 
        set_include_path(ROOT_DIR.DS.'view'.DS); 
        spl_autoload($className    ); 
    }else 
    { 
        set_include_path(ROOT_DIR.DS.'lib'.DS); 
        spl_autoload($className    ); 
    } 
 } 
?>