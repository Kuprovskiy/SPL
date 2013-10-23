<?php 

class PQtest extends SplPriorityQueue 
{ 
    public function compare($priority1, $priority2) 
    { 
        if ($priority1 === $priority2) return 0; 
        return $priority1 < $priority2 ? -1 : 1; 
    } 
} 

$objPQ = new PQtest(); 

$objPQ->insert('A',3); 
$objPQ->insert('B',6); 
$objPQ->insert('C',1); 
$objPQ->insert('D',2); 

echo "COUNT->".$objPQ->count()."<BR>"; 

//mode of extraction 
$objPQ->setExtractFlags(PQtest::EXTR_BOTH); 

//Go to TOP 
$objPQ->top(); 

while($objPQ->valid()){ 
    print_r($objPQ->current()); 
    echo "<BR>"; 
    $objPQ->next(); 
} 

?>