<?php
/**
 * Created by PhpStorm.
 * User: kongqingyu
 * Date: 2015/2/4
 * Time: 20:08
 */

class Test  extends CI_Controller {

    public function index()
    {
        $query = $this->db->query('SELECT title, content_preview, insert_time FROM dsr_blog');

        foreach ($query->result() as $row)
        {
            echo $row->title;
            echo $row->content_preview;
            echo $row->insert_time;
        }

        echo 'Total Results: ' . $query->num_rows();
    }

    public function testObject(){
        $qq=new Car();
        echo $qq->color;
        $qq=new Car("white");
        echo $qq->color;

    }


}

class Car {
    var $color;

    function Car($color="green"){
        $this->color=$color;

    }

    function getColor(){
        return $this->color;
    }

}