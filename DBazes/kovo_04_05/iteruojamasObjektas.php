<?php

class PrekiuKrepselis implements IteratorAggregate {
    public $prekes = ['la', 'bla', 'ka'];

    public function getIterator()
    {
        return new ArrayIterator($this->prekes);
    }
}
$obj = new PrekiuKrepselis;

foreach($obj as $preke) {
    echo $preke .'<br>';
}