<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('News_model');
        $this->load->model('Category_model');
         if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('admin', 'refresh');
        }
    }


	public function index()
	{
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('admin', 'refresh');
        }
        else
        {

           $data['logged_in_user'] = $this->ion_auth->user()->row();
           //$data['is_admin'] = $this->ion_auth->is_admin();
           //print_r($data['is_admin']);exit; 
           $data['main_content'] = 'admin/news/view_news';
           $data['news']=$this->News_model->news_list();
           //echo "<pre>", print_r($news); exit;
            $this->load->view('admin/template', $data);

        }
	}


    public function add_news()
    {
 if (!$this->form_validation->run('news')){
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['main_content'] = 'admin/news/add_news';
     $data['category_list']= $this->News_model->find_category();
     $this->load->view('admin/template', $data); 
      }
 else{
      $data = $this->input->post();
   if($_FILES['news_image']['name'] != '') {
      $config['upload_path'] = 'Uploads/news/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
      $config['overwrite']        = FALSE;
      $config['encrypt_name']     = TRUE;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->do_upload('news_image');    
      $news_image = $this->upload->data();
      $data['news_image'] = $news_image['file_name']; 
      }
      unset($data['_hidden_field']);
  if  ($this->News_model->add_news($data)){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'News Added Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'News Failed To Added,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('admin/News');
          }
    }
      
      public function delete_news($id,$news_image)
      {
        if ($this->News_model->delete_news($id)) 
        {
          $path = './Uploads/news/'.$news_image;
          @unlink($path);
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'News Deleted Successfully','class'=>'alert-success']);
        }
        else
        {
           $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'News Failed To Delete,Please Try Again','class'=>'alert-danger']);
        }
         return redirect('admin/news');
      }
    
public function edit_news($id)
      { 
      if (!$this->form_validation->run('news')){
         $data['logged_in_user'] = $this->ion_auth->user()->row();
         $data['news']          = $this->News_model->find_news(base64_decode($id));
         $data['category_list'] =$this->News_model->find_category();
         $data['main_content'] = 'admin/news/edit_news';
         $this->load->view('admin/template', $data); 
      }
  else{
    //echo "<pre>", print_r($this->input->post('blog_image_name')), exit;
          $data = $this->input->post();
      if  ($_FILES['news_image']['name'] != '') {
          $config['upload_path'] = 'Uploads/news/';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
          $config['overwrite']        = FALSE;
          $config['encrypt_name']     = TRUE;
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
       if ($this->upload->do_upload('news_image')) {
          @unlink("./Uploads/news/".$this->input->post('news_image')); 
        }   
            $news_image = $this->upload->data();
            $data['news_image'] = $news_image['file_name']; 
        }
       if  ($this->News_model->edit_news($data,base64_decode($id))){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'News Updated Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'News Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('admin/news');
          }
     } 
    
    
     public function news_img_validation($field_value)
    { 
    if($_FILES['news_image']['name'] != ''){
      $profileImage_name = $_FILES['news_image']['name'];
      $profileImage_size = $_FILES["news_image"]["size"];
      $profileImage_type = strtolower(pathinfo($profileImage_name,PATHINFO_EXTENSION));

    //FILE EXTENSION MATCH
   if($profileImage_type != "jpg" && $profileImage_type != "png" && $profileImage_type != "jpeg"
&& $profileImage_type != "gif" )
      {
        $this->form_validation->set_message('news_img_validation', "Invalid Image Format");
        return false;
      }
      else
      {
        return true;
      }
    }
    elseif($this->input->post('_hidden_field') == true){
      $this->form_validation->set_message('news_img_validation', "Choose Image First ");

        return false;
    }
    else
    {
      return true;
    }
  } 
   
}
