<?php

/**
 * Class TestTrait
 */
trait TestTrait {

    private $iSum=0;

    public function addValue($item)
    {

        return $this->changeValue($item);

    }

    private function changeValue($item)
    {

        $this->iSum=$this->iSum+1;
        return $item.' add new value<br>';

    }

    public function getCount()
    {

        return $this->iSum;

    }

}

/**
 * Class Post
 * This uses  the trait
 */
class Post {

    use TestTrait;

    function __construct(){

        echo "Constructor of Post<br>";

    }

}

/*******************************/

$oTest= new Post();
// addValue belongs to  the trait
echo $oTest->addValue("My value");
echo $oTest->addValue("My value2");
echo $oTest->getCount()."<br>";

$oTest2= new Post();
echo $oTest2->addValue("My valu1");
echo $oTest2->addValue("My value2");
echo $oTest2->getCount()."<br>";

echo $oTest->addValue("My value3");
// The trait  is unique for each instance
echo $oTest->getCount()."<br>";

