<?php 
function array_flatten_recursive($array) { 
    if($array) { 
        $flat = array(); 
        foreach(new RecursiveIteratorIterator(new RecursiveArrayIterator($array), RecursiveIteratorIterator::SELF_FIRST) as $key=>$value) { 
            if(!is_array($value)) { 
                $flat[] = $value; 
            } 
        } 
        
        return $flat; 
    } else { 
        return false; 
    } 
} 

$array = array( 
    'A' => array('B' => array( 1, 2, 3, 4, 5)), 
    'C' => array( 6,7,8,9) 
); 

print_r(array_flatten_recursive($array)); 
?>