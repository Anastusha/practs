<?php 
    require('point.php');
    require('graphicpoint.php');

    $point = new Point(5,7);
    $point->setX(5);
    $point->setY(5);

    $graphicpoint = new Graphicpoint(13,53, '3f5a77');
    $graphicpoint->setC('3f5a77');

    print $graphicpoint->getDistanceTo($point).PHP_EOL;