<?php

class MyClass
{
    public function __construct() { echo "1<br>"; }
    public function myPublic() { echo "2<br>"; }
    protected function myProtected() { echo "3<br>"; }
    private function myPrivate() { echo "4<br>"; }

    function foo()
    {
        $this->myPublic();
        $this->myProtected();
        $this->myPrivate();
    }
}

class MyClass2 extends MyClass
{
    // 접근제한자가 생략된 경우 public
    function foo2()
    {
        $this->myPublic();    // 2 출력
        $this->myProtected(); // 3 출력
        //$this->myPrivate(); // Fatal Error
    }
}

$myclass2 = new MyClass2; // 1출력(부모로부터 상속된 생성자에 의한 출력)
$myclass2->myPublic(); // 2 출력
$myclass2->foo2();     // 2, 3 출력

?>
