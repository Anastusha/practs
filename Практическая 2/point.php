<?php 

namespace Pract2;

class Point{
    protected $x;
    protected $y;

    function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    static function initPoints($count){
        $points = [];
        for($i = 0; $i < $count; $i++){
            $points[] = new Point($i, $i);
        }
        return $points;
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