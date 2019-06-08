<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	   public function __construct()
      {
        parent::__construct();
       // $this->load->library('pagination');
       // $this->load->library('form_validation');
        $this->load->model('Blog_model');
        $this->load->model('News_model');
        $this->load->model('Team_model');
        $this->load->library(array('ion_auth', 'form_validation'));


      }
       
       public function index()
        	{
            $data['title'] = $this->lang->line('login_heading');
    $data['identity'] = array('name' => 'identity',
        'id' => 'identity',
        'type' => 'text',
        'value' => $this->form_validation->set_value('identity'),
        'class' =>'form-control',
        'placeholder' =>'Email',
      );
    $data['password'] = array('name' => 'password',
        'id' => 'password',
        'type' => 'password',
        'class' =>'form-control',
        'placeholder' =>'Password',
      );
            $data['team']=$this->Team_model->web_team_list();
            $data['blog']=$this->Blog_model->web_blog_list();
            //echo "<pre>", print_r($data['blog']), exit;
            $data['main_content'] = 'web/index';
            $this->load->view('web/template', $data);
            }


         public function about()
          {
          $data['team']=$this->Team_model->web_team_list();
           $data['blog']=$this->Blog_model->web_blog_list();
            $data['main_content'] = 'web/about_us';
            $this->load->view('web/template', $data);
            }

             
             public function forgot()
            {
            $data['main_content'] = 'web/forgot';
            $this->load->view('web/template', $data);
            }
            

           public function blog()
           {
             $data['blog']=$this->Blog_model->web_blog_list();
             $data['main_content'] = 'web/blog';
             $this->load->view('web/template', $data);
           }


           public function blog_details($blog_id)
            {
            $data['blog']=$this->Blog_model->web_blog_list();

            $data['blog_details']=$this->Blog_model->blog_details(base64_decode($blog_id));
           //echo "<pre>", print_r( $data['blog_details']), exit;
            $data['recent_post']=$this->Blog_model->recent_post();
           //echo "<pre>", print_r( $data['recent_post']), exit;
            $data['main_content'] = 'web/blog_details';
            $this->load->view('web/template', $data);
            }
           public function news()
           {
             $data['news']=$this->News_model->web_news_list();
             //echo "<pre>", print_r( $data['news']), exit;
             $data['main_content'] = 'web/news';
             $this->load->view('web/template', $data);
           }
      
         public function news_details($news_id)
            {
            $data['news']=$this->News_model->web_news_list();
            $data['news_details']=$this->News_model->news_details(base64_decode($news_id));
            //echo "<pre>", print_r( $data['news_details']), exit;
            $data['recent_post']=$this->News_model->recent_post();
           //echo "<pre>", print_r( $data['recent_post']), exit;
            $data['main_content'] = 'web/news_details';
            $this->load->view('web/template', $data);
            }
         
}
