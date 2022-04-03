<?php

class MyClass {
   function __construct() {
       print "생성자 실행<br>";
   }

   function __destruct() {
       print "소멸자 실행<br>";
   }
}

$obj = new MyClass();

?>
