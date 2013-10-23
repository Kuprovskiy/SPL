<?php
echo "Create Object of Spl. Queue:";
$obj = new SplQueue();

echo "<br>Check for Queue is Empty:";
if($obj->isEmpty())
{
    $obj->enqueue("Simple");
    $obj->enqueue("Example");
    $obj->enqueue("Of");
    $obj->enqueue("PHP");
}

echo "<br>View queue:";
print_r($obj);

if(! $obj->offsetExists(4))
{
    $obj->enqueue(10);
}

print_r($obj);

echo "<br>Get the value of the offset at 3 ";
if($obj->offsetGet(3))
{
    echo $obj->offsetGet(3);
    
    echo "<br>Resetting the value of a node:";
    $obj->offsetSet(4,6);
}
?>