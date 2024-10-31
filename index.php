<?php
abstract class Shape {
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends Shape {
    private $base, $height;

    function __construct( $base, $height ){
        $this->base     = $base;
        $this->height   = $height;
    }

    public function setArea( $base ){
        $this->base     = $base;
    }

    public function setHeight( $height ){
        $this->height     = $height;
    }

    public function getArea(){
        return $this->base*$this->height;
    }

    function getPerimeter(){

    }

}


class Triangle extends Shape{
    public function getArea(){
       
    }

    function getPerimeter(){

    }
}

$b = new Rectangle(10, 10);
echo $b->getArea();