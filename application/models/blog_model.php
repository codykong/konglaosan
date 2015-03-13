<?php
/**
 * Created by PhpStorm.
 * User: kongqingyu
 * Date: 2015/2/5
 * Time: 18:17
 */



class Blog_Model extends CI_Model{

    var $id;
    var $title;
    var $content_preview;
    var $content;
    var $insert_time;
    var $view_count;
    var $type;
    var $preview_pic;

    /**
     * 获取博客列表
     * @return array
     */
    function get_previews(){
        $query = $this->db->query('SELECT id,title , content_preview , insert_time,view_count,preview_pic  FROM dsr_blog ORDER BY  insert_time DESC ');
        $previews = array();
        foreach ($query->result('Blog_Model') as $row)
        {

            array_push( $previews,$row);
        }

        return $previews;
    }

    /**
     * 博文详情,并将view_count+1
     * @param $id
     * @return Blog_Model
     */
    function get_detail($id){

        $query = $this->db->query('SELECT id,title , content ,type, insert_time,view_count  FROM dsr_blog WHERE id='.$id);
        $detail=new Blog_Model();

        if ($query->num_rows() > 0){
            $detail = $query->row(0,'Blog_Model');
        }

//        将view_count+1
        $view_count=$detail->view_count +1;
        $data = array(
            'view_count' => $view_count
        );
        $this->db->update('dsr_blog',$data, "id = $id");

        return $detail;
    }

    /**
     * 获取下一条博文
     * @param $id
     * @return Blog_Model
     */
    function get_next($id){

        $query = $this->db->query('SELECT id,title   FROM dsr_blog WHERE id>'.$id .' ORDER BY insert_time asc');
        $detail=new Blog_Model();
        if ($query->num_rows() > 0){
            $detail = $query->row(0,'Blog_Model');
        }

        return $detail;
    }

    /**
     * 获取上一条博文
     * @param $id
     * @return Blog_Model
     */
    function get_prev($id){

        $query = $this->db->query('SELECT id,title   FROM dsr_blog WHERE id<'.$id .' ORDER BY insert_time desc');
        $detail=new Blog_Model();
        if ($query->num_rows() > 0){
            $detail = $query->row(0,'Blog_Model');

        }
        return $detail;
    }


    /**
     * 查询同栏目下的博文
     * @param $type_id
     * @return array
     */
    function get_type_last($type_id){
        $query = $this->db->query('SELECT id,title   FROM dsr_blog WHERE type='.$type_id.' ORDER BY insert_time desc');
        $previews = array();
        foreach ($query->result('Blog_Model') as $row)
        {

            array_push( $previews,$row);
        }

        return $previews;
    }

}