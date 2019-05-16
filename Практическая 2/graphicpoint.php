<?php 

    namespace Pract2;

    class Graphicpoint extends Point{
        protected $c;

        function setC($value){
            $this->c=$value;
        }
        function getC(){
            return $this->c;
        }
        function getDistanceTo($point){
            return sqrt(($point->x - $this->x)**2 + ($point->y - $this->y)**2);
        }
        function __construct($x, $y, $c){
            parent::__construct($x, $y);
            $this->c = $c;
        }
    }