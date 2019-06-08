<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('Blog_model');
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
           $data['main_content'] = 'admin/blog/view_blog';
           $data['blog']=$this->Blog_model->blog_list();
           //echo "<pre>", print_r($product); exit;
            $this->load->view('admin/template', $data);

        }
	}


    public function add_blog(){
 if (!$this->form_validation->run('blog')){
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['main_content'] = 'admin/blog/add_blog';
     $this->load->view('admin/template', $data); 
      }
 else{
      $data = $this->input->post();
   if($_FILES['blog_image']['name'] != '') {
      $config['upload_path'] = 'Uploads/blog/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
      $config['overwrite']        = FALSE;
      $config['encrypt_name']     = TRUE;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->do_upload('blog_image');    
      $blog_image = $this->upload->data();
      $data['blog_image'] = $blog_image['file_name']; 
      }
      unset($data['_hidden_field']);
  if  ($this->Blog_model->add_blog($data)){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Blog Added Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Blog Failed To Added,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('admin/blog');
          }
    }
      



      public function delete_blog($id,$blog_image)
      {
        if ($this->Blog_model->delete_blog($id)) 
        {
          $path = './Uploads/blog/'.$blog_image;
          @unlink($path);
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Blog Deleted Successfully','class'=>'alert-success']);
        }
        else
        {
           $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Blog Failed To Delete,Please Try Again','class'=>'alert-danger']);
        }
         return redirect('admin/blog');
      }
    
    
       public function edit_blog($id){ 
      if (!$this->form_validation->run('blog')){
         $data['logged_in_user'] = $this->ion_auth->user()->row();
          $data['blog']          = $this->Blog_model->find_blog(base64_decode($id));
         $data['main_content'] = 'admin/blog/edit_blog';
         $this->load->view('admin/template', $data); 
      }
  else{
          $data = $this->input->post();
      if  ($_FILES['blog_image']['name'] != '') {
          $config['upload_path'] = 'Uploads/blog/';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
          $config['overwrite']        = FALSE;
          $config['encrypt_name']     = TRUE;
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
     if ($this->upload->do_upload('blog_image')) {
          @unlink("./Uploads/blog/".$this->input->post('blog_image')); 
         }   
            $blog_image = $this->upload->data();
            $data['blog_image'] = $blog_image['file_name']; 
         }
       if  ($this->Blog_model->edit_blog($data,base64_decode($id))){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Blog Updated Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Blog Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('admin/blog');
          }
     }
           



    public function blog_img_validation($field_value)
    { 
    if($_FILES['blog_image']['name'] != ''){
      $profileImage_name = $_FILES['blog_image']['name'];
      $profileImage_size = $_FILES["blog_image"]["size"];
      $profileImage_type = strtolower(pathinfo($profileImage_name,PATHINFO_EXTENSION));

    //FILE EXTENSION MATCH
   if($profileImage_type != "jpg" && $profileImage_type != "png" && $profileImage_type != "jpeg"
&& $profileImage_type != "gif" )
      {
        $this->form_validation->set_message('blog_img_validation', "Invalid Image Format");
        return false;
      }
      else
      {
        return true;
      }
    }
    elseif($this->input->post('_hidden_field') == true){
      $this->form_validation->set_message('blog_img_validation', "Choose Image First ");

        return false;
    }
    else
    {
      return true;
    }
  } 

    

    
}
