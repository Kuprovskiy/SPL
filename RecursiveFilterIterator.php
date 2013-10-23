<?php
class GreaterThanFilter extends RecursiveFilterIterator {
    protected $limit;

    public function __construct(RecursiveIterator $recursiveIter, $limit) {
        $this->limit = $limit;
        parent::__construct($recursiveIter);
    }
    public function accept() {
        return $this->hasChildren() || strlen($this->current()) >= $this->limit;
    }
     public function getChildren() {
        return new self($this->getInnerIterator()->getChildren(), $this->limit);
    }
}
$iter = new RecursiveArrayIterator($array);
$filter   = new GreaterThanFilter($iter, 5);

foreach(new RecursiveIteratorIterator($filter) as $key => $value)
{
    echo $value . "\n";
}
?>