<?php
/**
 * Created by PhpStorm.
 * User: kongqingyu
 * Date: 2015/2/5
 * Time: 18:17
 */



class Reprint_Model extends CI_Model{

    var $id;
    var $title;
    var $type;
    var $url;
    var $insert_time;
    var $update_time;
    var $author;
    var $view_count;

    /**
     * 获取转载列表
     * @return array
     */
    function get_reprints(){
        $query = $this->db->query('SELECT id,title , type , insert_time,url,author,view_count  FROM dsr_reprint ORDER BY  insert_time DESC ');
        $reprints = array();
        foreach ($query->result('Reprint_Model') as $row)
        {
            array_push( $reprints,$row);
        }

        return $reprints;
    }

    /**
     * 转载详情,并将view_count+1
     * @param $id
     * @return 页面
     */
    function get_detail($id){

        $query = $this->db->query('SELECT url,view_count FROM dsr_reprint WHERE id='.$id);
        $detail=new Reprint_Model();

        if ($query->num_rows() > 0){
            $detail = $query->row(0,'Reprint_Model');
        }

//        将view_count+1
        $view_count=$detail->view_count +1;
        $data = array(
            'view_count' => $view_count
        );
        $this->db->update('dsr_reprint',$data, "id = $id");

        return $detail->url;
    }



}