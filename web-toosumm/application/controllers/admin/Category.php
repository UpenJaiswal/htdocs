<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
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
           $data['main_content'] = 'admin/category/view_category';
           $data['category']=$this->Category_model->category_list();
           //echo "<pre>", print_r($product); exit;
            $this->load->view('admin/template', $data);

        }
	}


    public function add_category(){
    if (!$this->form_validation->run('category')) {
        $data['logged_in_user'] = $this->ion_auth->user()->row(); 
        $data['main_content'] = 'admin/category/add_category';
        $this->load->view('admin/template', $data);
     }
     
 else{    
       $post = $this->input->post(); 
   if( $this->Category_model->add_category($post)){
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Category Added Successfully', 'class'=>'alert-success'] );
    } 
else{
      $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Category Failed To Add,Please Try Again', 'class'=>'alert-danger'] );
    }
      return  redirect('admin/category');
    }
    }
      
      public function delete_category($id)
      {
        echo 'string'; exit;
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
    
      public function edit_category($id)
      {   
         if(!$this->form_validation->run('category')) {  
            $data['logged_in_user'] = $this->ion_auth->user()->row();
            $data['main_content']   = 'admin/category/edit_category';
            $data['category']        = $this->Category_model->find_category(base64_decode($id));
             $this->load->view('admin/template', $data);
            } 
             
      else{
           $post = $this->input->post(); 
        if($this->Category_model->edit_category($post,base64_decode($id)))
        {  
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Category Updated', 'class'=>'alert alert-success'] );
        } 
      else
        {
          $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Category Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
        }
         return redirect('admin/category');
            
        }
      
      }      
  
}
