<?php 
    class Shape{

    }
    class Shapes{
        private $shapes;

        public function __construct(){
            $this -> shapes = [];
        }

        public function addShape( Shape $shape){
            array_push( $this -> shapes, $shape );
        }

        public function totalShape(){
            return count( $this -> shapes );
        }
    }

    class Rectangle extends Shape{

    }

    class Triangle extends Shape{

    }

    class Student {
        
    }

    $newShapes = new Shapes();
    $newShapes -> addShape( new Rectangle());
    $newShapes -> addShape( new Triangle());

    echo  $newShapes -> totalShape();