<?php

class Foo
{
    public static $static = 'Static Property!<br>';
    public $nonStatic = 'NonStatic Property!<br>';

    public static function staticMethod() {
        return '[M]' . static::$static;
    }

    function nonStaticMethod() {
        return '[M]' . $this->nonStatic;
    }
}

$foo = new Foo();

echo Foo::$static;             // 'Static Property!' 출력
echo Foo::staticMethod();      // '[M]Static Method!' 출력

//echo Foo::$nonStatic;        // 오류 출력
//echo Foo::nonStaticMethod(); // 오류 출력

//echo $foo->static;           // 오루 출력
echo $foo->staticMethod();     // '[M]Static Method!' 출력

echo $foo->nonStatic;          // 'NonStatic Property!' 출력
echo $foo->nonStaticMethod();  // '[M]NonStatic Method!' 출력

?>
