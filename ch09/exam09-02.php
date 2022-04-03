
<?php

class Foo
{
    public $var = 'Object-Oriented Programming!<br>';

    public function printItem($string)
    {
        echo 'Foo: ' . $string . '<br>';
    }

    public function printPHP()
    {
        echo 'PHP is great.' . '<br>';
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: ' . $string . '<br>';
    }
}

$foo = new Foo();
$bar = new Bar();

$foo->printItem('baz'); // 출력: 'Foo: baz'
$foo->printPHP();       // 출력: 'PHP is great'
echo $foo->var;         // 출력: 'Object-Oriented Programming!'

$bar->printItem('baz'); // 출력: 'Bar: baz'
$bar->printPHP();       // 출력: 'PHP is great'
echo $bar->var;         // 출력: 'Object-Oriented Programming!'

?>
