<?php 
// PHPUnit boilerplate code goes here 

class AllTests { 
    public static function main() { 
        $parameters = array('verbose' => true); 
        PHPUnit_TextUI_TestRunner::run(self::suite(), $parameters); 
    } 

    public static function suite() { 
        $suite = new PHPUnit_Framework_TestSuite('AllMyTests'); // this must be something different than the class name, per PHPUnit 
        $it = new AllTestsFilterIterator( 
                  new RecursiveIteratorIterator( 
                      new RecursiveDirectoryIterator(dirname(__FILE__) . '/tests'))); 

        for ($it->rewind(); $it->valid(); $it->next()) { 
            require_once($it->current()); 
            $className = $it->current()->getBasename('.php'); 
            $suite->addTest($className::suite()); 
        } 

        return $suite; 
    } 
} 

class AllTestsFilterIterator extends FilterIterator { 
    public function accept() { 
        if (preg_match('/All.*Tests\.php/', $this->current())) { 
            return true; 
        } else { 
            return false; 
        } 
    } 
} 
?>