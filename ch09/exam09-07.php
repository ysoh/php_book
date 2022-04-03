<?php

class MyClass
{
    public function __construct() { echo "1<br>"; }
    public function myPublic() { echo "2<br>"; }
    protected function myProtected() { echo "3<br>"; }
    private function myPrivate() { echo "4<br>"; }

    // 접근제한자가 생략된 경우 public
    function foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;  // 1 출력(생성자에 의한 출력)
$myclass->myPublic();    // 2 출력
//$myclass->myProtected(); // Fatal Error
//$myclass->myPrivate();   // Fatal Error
$myclass->foo();         // 2, 3, 4출력

?>
