<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industries extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('Industries_model');
         if ( ! $this->ion_auth->logged_in())
        {
            redirect('company', 'refresh');
        }
    }


	public function index()
	{
     $data['logged_in_user'] = $this->ion_auth->user()->row(); 
     $data['main_content'] = 'company/industries/view_industries';
     $data['industries']=$this->Industries_model->industries_list();
      $this->load->view('company/template', $data);       
	}


    public function add_industries(){
    if (!$this->form_validation->run('industries')) {
        $data['logged_in_user'] = $this->ion_auth->user()->row(); 
        $data['main_content'] = 'company/industries/add_industries';
        $this->load->view('company/template', $data);
     }
     
 else{    
       $post = $this->input->post(); 
   if( $this->Industries_model->add_industries($post)){
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Industries Added Successfully', 'class'=>'alert-success'] );
    } 
else{
      $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Industries Failed To Add,Please Try Again', 'class'=>'alert-danger'] );
    }
      return  redirect('company/industries');
    }
    }
      
      public function delete_industries($id)
      {
        $this->Industries_model->delete_industries($id);     
        $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Industries Deleted Successfully','class'=>'alert-success']);       
         return redirect('company/industries');
      }
    
      public function edit_industries($id)
      { 
         if(!$this->form_validation->run('industries')) {  
            $data['logged_in_user'] = $this->ion_auth->user()->row();
            $data['main_content']   = 'company/industries/edit_industries';
            $data['industries']        = $this->Industries_model->find_industries(base64_decode($id));
             $this->load->view('company/template', $data);
            } 
             
      else{
           $post = $this->input->post(); 
        if($this->Industries_model->edit_industries($post,base64_decode($id)))
        {  
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Industries Updated', 'class'=>'alert alert-success'] );
        } 
      else
        {
          $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Industries Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
        }
         return redirect('company/industries');
            
        }
      
      }  

      function delete_all(){      
      if($checked = $this->input->post('checkbox_value')) {
        foreach ($checked as $id) {
            $this->Industries_model->delete_industries($id);
        }
      }
     }     
  
}
