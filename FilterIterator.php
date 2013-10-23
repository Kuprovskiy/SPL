<?php
class UserFilter extends FilterIterator 
{
    private $userFilter;
    
    public function __construct(Iterator $iterator , $filter )
    {
        parent::__construct($iterator);
        $this->userFilter = $filter;
    }
    
    public function accept()
    {
        $user = $this->getInnerIterator()->current();
        if( strcasecmp($user['name'],$this->userFilter) == 0) {
            return false;
        }        
        return true;
    }
}

$array = array(
array('name' => 'Jonathan','id' => '5'),
array('name' => 'Abdul' ,'id' => '22')
);

$object = new ArrayObject($array);

// Note it is case insensitive check in our example due the usage of strcasecmp function
$iterator = new UserFilter($object->getIterator(),'abdul');

foreach ($iterator as $result) {
    echo $result['name'];
}

/* Outputs Jonathan */

?>