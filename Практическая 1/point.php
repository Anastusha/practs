<?php 

class Point{
    private $x;
    private $y;

    function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
    function __destruct(){
        print "Уничтожен \n";
    }
    function setX($value){
        $this->x=$value;
    }
    function setY($value){
        $this->y=$value;
    }
    function getX(){
        return $this->x;
    }
    function getY(){
        return $this->y;
    }
}