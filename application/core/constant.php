<?php
/**
 * Created by PhpStorm.
 * User: kongqingyu
 * Date: 2015/2/15
 * Time: 17:06
 */

class Constant {


    public static function get_blog_type($id){
        $blog_type_value=array("ALL","编程语言","数据库","经验积累","工具","大数据");
        return $blog_type_value[$id];
    }

}