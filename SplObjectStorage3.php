<?php
// As an object set
$SplObjectStorage_1 = new SplObjectStorage();

$object1 = new StdClass;
$object1->attr = 'obj 1';
$object2 = new StdClass;
$object2->attr = 'obj 2';
$object3 = new StdClass;
$object3->attr = 'obj 3';

$SplObjectStorage_1->attach($object1);
$SplObjectStorage_1->attach($object2);
$SplObjectStorage_1->attach($object3);

// Another one object set
$SplObjectStorage_2 = new SplObjectStorage();

$object4 = new StdClass;
$object4->attr = 'obj 4';
$object5 = new StdClass;
$object5->attr = 'obj 5';
$object6 = new StdClass;
$object6->attr = 'obj 6';

$SplObjectStorage_2->attach($object4);
$SplObjectStorage_2->attach($object5);
$SplObjectStorage_2->attach($object6);

/**
 * Merge SplObjectStorage
 *
 * @param how many SplObjectStorage params as you want
 * @return SplObjectStorage
 */
function mergeSplObjectStorage() {
    
    $buffer   = new SplObjectStorage();

    if( func_num_args() > 0  ) {
        $args = func_get_args();
        foreach ($args as $objectStorage) {
            foreach($objectStorage as $object) {
                if(is_object( $object ) ) {
                    $buffer->attach($object);
                }
            }
        }
    }
    else{
        return FALSE;
    }
    return $buffer;
}

$merge = mergeSplObjectStorage($SplObjectStorage_1, $SplObjectStorage_2);

?>
<?php
echo $merge->count();
?>
Will output :
6

<?php
$merge->rewind();
while($merge->valid()) {
    $object = $merge->current();
    var_dump($object);
    $merge->next();
}
?>