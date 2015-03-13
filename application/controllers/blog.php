<?php
/**
 * Created by PhpStorm.
 * User: kongqingyu
 * Date: 2015/2/4
 * Time: 19:34
 */


class Blog extends CI_Controller {

//    public function index()
//    {
//    }



    public function detail($id)
    {
        $blog_type_value=array("ALL","编程语言","数据库","经验积累","工具","日常思考","大数据");
        $this->load->model('Blog_Model',"blog_detail");
//        博文详情
        $detail= $this->blog_detail-> get_detail($id);
        $data["detail_title"]=$detail->title;
        $data["detail_id"]=$detail->id;
        $data["detail_content"]=$detail->content;
        $data["detail_insert_time"]=$detail->insert_time;
        $data["detail_view_count"]=$detail->view_count;
        $data["detail_type_name"]=$blog_type_value[$detail->type] ;

//        栏目最新
        $data["type_previews"]=$this->blog_detail-> get_type_last($detail->type);

//        下一条博文
        $next =$this->blog_detail-> get_next($id);
        $data["next_title"]=$next->title;
        $data["next_id"]=$next->id;
//        上一条博文
        $prev =$this->blog_detail-> get_prev($id);
        $data["prev_title"]=$prev->title;
        $data["prev_id"]=$prev->id;



        $this->load->helper('url');
        $this->template
            ->set_partial('header', 'layouts/header')
            ->set_partial('footer', 'layouts/footer')
            ->set_partial('bordy', 'blog_detail',$data)
            ->title($detail->title)
            ->build('blog_detail');
    }












}

