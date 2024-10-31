<?php
class ParentClass {
    private $name;
    static $address;

    static function address($name){
        self::$address = $name;
        echo "this is a my " . self::$address;
    }

    public function setAddress(){
        echo "this is a my address now";
    }
}

$address = new ParentClass();

ParentClass::address("masud");
echo "\n";
echo ParentClass::$address;