<?php

class MyRecursiveIterator implements RecursiveIterator
{
    private $_data;
    private $_position = 0;
    
    public function __construct(array $data) {
        $this->_data = $data;
    }
    
    public function valid() {
        return isset($this->_data[$this->_position]);
    }
    
    public function hasChildren() {
        return is_array($this->_data[$this->_position]);
    }
    
    public function next() {
        $this->_position++;
    }
    
    public function current() {
        return $this->_data[$this->_position];
    }
    
    public function getChildren() {
        echo '<pre>';
        print_r($this->_data[$this->_position]);
        echo '</pre>';
    }
    
    public function rewind() {
        $this->_position = 0;
    }
    
    public function key() {
        return $this->_position;
    }
}

$arr = array(0, 1, 2, 3, 4, 5 => array(10, 20, 30), 6, 7, 8, 9 => array(1, 2, 3));
$mri = new MyRecursiveIterator($arr);

foreach ($mri as $c => $v) {
    if ($mri->hasChildren()) {
        echo "$c has children: <br />";
        $mri->getChildren();
    } else {
        echo "$v <br />";
    }

}
?>