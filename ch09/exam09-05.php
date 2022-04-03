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

$obj = new MyClass();
echo $obj->public;    // Public 출력
echo '<br>';
//echo $obj->protected; // Fatal 오류
//echo '<br>';
//echo $obj->private;   // Fatal 오류
//echo '<br>';
$obj->printHello();   // Public, Protected, Private 출력

?>
