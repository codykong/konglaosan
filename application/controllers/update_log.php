<?php
/**
 * Created by PhpStorm.
 * User: kongqingyu
 * Date: 2015/2/15
 * Time: 15:06
 */

class Update_Log extends CI_Controller{

    public function index()
    {
        $this->load->model('Update_Log_Model',"update_log");
        $data["logs"] =$this->update_log-> get_Logs();

        $this->load->helper('url');
        $this->template
            ->set_partial('header', 'layouts/header')
            ->set_partial('footer', 'layouts/footer')
            ->set_partial('bordy', 'update_log',$data)
            ->title("更新日志")
            ->build('update_log');
    }

}