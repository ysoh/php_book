<?php

class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo '<br>';
        echo $this->protected;
        echo '<br>';
        echo $this->private;
        echo '<br>';
    }
}

class MyClass2 extends MyClass
{
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;    // public 출력
        echo '<br>';
        echo $this->protected; // protected2 출력
        echo '<br>';
        //echo $this->private; // Undefined 오류
        //echo '<br>';
    }
}

$obj2 = new MyClass2();
echo $obj2->public;      // Public 출력
echo '<br>';
//echo $obj2->private;   // Undefined 오류
//echo '<br>';
$obj2->printHello();     // Public, Protected2 출력 및 Undefined 오류
echo '<br>';
//echo $obj2->protected; // Fatal 오류

?>
