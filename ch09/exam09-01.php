<?php

// 클래스의 정의
class SimpleClass // 클래스 이름
{
    // 프로퍼티 정의
    public $var = 'a default value';

    // 메소드 정의
    public function displayVar() {
        echo $this->var;
    }
}

//인스턴스(객체)의 생성
$sc = new SimpleClass();

//인스턴스(객체)의 생성
echo $sc->var;

?>
