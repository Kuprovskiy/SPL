<?php

/*    works fine    */
    spl_autoload_call('Child.class');

/*    throws: Fatal error: Cannot redeclare class Parent in /parent.class.php on line 2    */
    spl_autoload_call('Parent1');

?>