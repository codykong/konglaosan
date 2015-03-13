<?php
/**
 * Created by PhpStorm.
 * User: kongqingyu
 * Date: 2015/2/5
 * Time: 18:17
 */



class Update_Log_Model extends CI_Model{

    var $id;
    var $update_title;
    var $update_content;
    var $update_date;
    var $insert_time;


    /**
     * 获取更新日志列表
     * @return array
     */
    function get_Logs(){
        $query = $this->db->query('SELECT id,update_title , update_content ,update_date, insert_time  FROM dsr_update_log ORDER BY  insert_time DESC ');
        $logs = array();
        foreach ($query->result('Update_Log_Model') as $row)
        {
            array_push( $logs,$row);
        }
        return $logs;
    }

}