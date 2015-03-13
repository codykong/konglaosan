<?php
/**
 * Created by PhpStorm.
 * User: kongqingyu
 * Date: 2015/2/5
 * Time: 15:08
 */

namespace test;


class Car {
    var $color;

    function Car($color="green"){
        $this->color=$color;

    }

    function getColor(){
        return $this->color;
    }

}