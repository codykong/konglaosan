<?php
/**
 * Created by PhpStorm.
 * User: kongqingyu
 * Date: 2015/3/12
 * Time: 15:46
 */

class Reprint extends CI_Controller {


    public function index()
    {
        $this->load->model('Reprint_Model',"reprints");
        $reprints =$this->reprints-> get_reprints();
        $data["reprints"]=$reprints;

        $previews_count=count($reprints);
        if($previews_count>=5){
            $previews_count=5;
        }
        $last_five=current(array_chunk($reprints,$previews_count));

        $data["last_five"]=$last_five;

        $this->load->helper('url');
        $this->template
            ->set_partial('header', 'layouts/header')
            ->set_partial('footer', 'layouts/footer')
            ->set_partial('bordy', 'reprint',$data)
            ->title("首页")
            ->build('home');
    }

    public function detail($id)
    {

        $this->load->model('Reprint_Model',"reprint_detail");
//      转载url
        $url=$this->reprint_detail-> get_detail($id);
        header('Location:'.$url);

    }

}