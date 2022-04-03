<?php
class BaseClass {
   function __construct() {
       echo "BaseClass의 생성자<br>";
   }
}

class SubClass extends BaseClass {
   function __construct() {
       parent::__construct(); // 'BaseClass의 생성자' 출력
       echo "SubClass의 생성자<br>";
   }
}

class SubClass2 extends BaseClass {
    // BaseClass의 생성자 상속
}

$obj = new BaseClass(); // 'BaseClass의 생성자' 출력
$obj = new SubClass();  // 'BaseClass의 생성자'와 'SubClass의 생성자' 출력
$obj = new SubClass2(); // 'BaseClass의 생성자' 출력
?>
