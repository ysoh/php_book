<?php
final class BaseClass {
   public function test() {
       echo "BaseClass::test() 호출\n";
   }

   // 여기서는 함수의 final 지정 여부는 관계 없습니다.
   final public function moreTesting() {
       echo "BaseClass::moreTesting() 호출\n";
   }
}

class ChildClass extends BaseClass {
}
// BaseClass가 final로 선언돼 상속 불가

?>
