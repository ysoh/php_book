<?php

class BaseClass {
   public function test() {
       echo "BaseClass::test() 호출\n";
   }

   final public function moreTesting() {
       echo "BaseClass::moreTesting() 호출\n";
   }
}

class ChildClass extends BaseClass {
   public function moreTesting() {
   // BaseClass에서 final로 선언돼 ChildClass 에서 오버라이딩 불가

       echo "ChildClass::moreTesting() 호출\n";
   }
}

?>
