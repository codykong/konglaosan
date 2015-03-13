<?php
/**
 * Created by PhpStorm.
 * User: kongqingyu
 * Date: 2015/2/4
 * Time: 19:34
 */


class Home extends CI_Controller {




    public function index()
    {
        $this->load->model('Blog_Model',"blog_preview");
        $previews =$this->blog_preview-> get_previews();
        $data["previews"]=$previews;

        $previews_count=count($previews);
       if($previews_count>=5){
            $previews_count=5;
        }
        $last_five=current(array_chunk($previews,$previews_count));

        $data["last_five"]=$last_five;

        $this->load->helper('url');
        $this->template
            ->set_partial('header', 'layouts/header')
            ->set_partial('footer', 'layouts/footer')
            ->set_partial('bordy', 'home',$data)
            ->title("首页")
            ->build('home');
    }

    public function about(){
        $this->load->helper('url');
        $this->template
            ->set_partial('header', 'layouts/header')
            ->set_partial('footer', 'layouts/footer')
            ->set_partial('bordy', 'about')
            ->title("关于我")
            ->build('about');
    }

    public function dishiren(){
        $this->load->helper('url');
        $this->template
            ->set_partial('header', 'layouts/header')
            ->set_partial('footer', 'layouts/footer')
            ->set_partial('bordy', 'dishiren')
            ->title("第十人理论")
            ->build('dishiren');
    }

    public function jd(){
        header('Location: http://union.click.jd.com/jdc?e=&p=AiIBZRprFDJWWA1FBCVbV0IUEEULRFRBSkAOClBMW0srGU8DR2YOaVJ3XkpzCGUNRVkbVyl7HRkOIgZlHVIdBhYHVCtrdHAi&t=W1dCFBBFC0RUQUpADgpQTFtL');
    }




}

