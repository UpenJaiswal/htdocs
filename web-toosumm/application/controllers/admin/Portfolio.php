<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('Portfolio_model');
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
           $data['main_content'] = 'admin/portfolio/view_portfolio';
           $data['portfolio']=$this->Portfolio_model->portfolio_list();
            $this->load->view('admin/template', $data);

        }
	}


    public function add_portfolio(){
    if (!$this->form_validation->run('portfolio')) {
        $data['logged_in_user'] = $this->ion_auth->user()->row(); 
        $data['main_content'] = 'admin/portfolio/add_portfolio';
        $this->load->view('admin/template', $data);
     }
 else{
      $data = $this->input->post();
   if($_FILES['portfolio']['name'] != '') {
      $config['upload_path'] = 'Uploads/portfolio/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
      $config['overwrite']        = FALSE;
      $config['encrypt_name']     = TRUE;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->do_upload('portfolio');    
      $portfolio = $this->upload->data();
      $data['portfolio'] = $portfolio['file_name']; 
      }
      unset($data['_hidden_field']);
   if( $this->Portfolio_model->add_portfolio($data)){
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Portfolio Added Successfully', 'class'=>'alert-success'] );
    } 
else{
      $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Portfolio Failed To Add,Please Try Again', 'class'=>'alert-danger'] );
    }
      return  redirect('admin/portfolio');
    }
    }
      
      public function delete_category($id)
      {
        if ($this->Category_model->delete_category($id)) 
        {
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Category Deleted Successfully','class'=>'alert-success']);
        }
        else
        {
           $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Category Failed To Delete,Please Try Again','class'=>'alert-danger']);
        }
         return redirect('admin/category');
      }
    
      public function edit_portfolio($id)
      { 
         if(!$this->form_validation->run('portfolio')) {  
            $data['logged_in_user'] = $this->ion_auth->user()->row();
            $data['main_content']   = 'admin/portfolio/edit_portfolio';
            $data['portfolio']        = $this->Portfolio_model->find_portfolio(base64_decode($id));
             $this->load->view('admin/template', $data);
            } 
             
     else{
            $data = $this->input->post();
        if  ($_FILES['portfolio']['name'] != '') {
            $config['upload_path'] = 'Uploads/portfolio/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
            $config['overwrite']        = FALSE;
            $config['encrypt_name']     = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
         if ($this->upload->do_upload('portfolio')) {
             @unlink("./Uploads/portfolio/".$this->input->post('portfolio')); 
            }   
            $portfolio = $this->upload->data();
            $data['portfolio'] = $portfolio['file_name']; 
         }
             // unset($data['portfolio']);
          //@unlink("./Uploads/blog/".$old_blog_name); 
        if($this->Portfolio_model->edit_portfolio($data,base64_decode($id)))
        {  
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Portfolio Updated', 'class'=>'alert alert-success'] );
        } 
      else
        {
          $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Portfolio Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
        }
         return redirect('admin/portfolio');
            
        }
      
      }      
  
     public function portfolio_img_validation($field_value){ 
    if($_FILES['portfolio']['name'] != ''){
      $profileImage_name = $_FILES['portfolio']['name'];
      $profileImage_size = $_FILES["portfolio"]["size"];
      $profileImage_type = strtolower(pathinfo($profileImage_name,PATHINFO_EXTENSION));

    //FILE EXTENSION MATCH
   if($profileImage_type != "jpg" && $profileImage_type != "png" && $profileImage_type != "jpeg"
&& $profileImage_type != "gif" )
      {
        $this->form_validation->set_message('portfolio_img_validation', "Invalid Image Format");
        return false;
      }
      else
      {
        return true;
      }
    }
    elseif($this->input->post('_hidden_field') == true){
      $this->form_validation->set_message('portfolio_img_validation', "Portfolio Image required ");

        return false;
    }
    else
    {
      return true;
    }
  } 
}
