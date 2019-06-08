<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Languages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('Languages_model');
         if ( ! $this->ion_auth->logged_in())
        {
            redirect('company', 'refresh');
        }
    }


	public function index()
	{
     $data['logged_in_user'] = $this->ion_auth->user()->row(); 
     $data['main_content'] = 'company/languages/view_languages';
     $data['languages']=$this->Languages_model->languages_list();
     $this->load->view('company/template', $data);
	}


    public function add_languages(){
    if (!$this->form_validation->run('languages')) {
        $data['logged_in_user'] = $this->ion_auth->user()->row(); 
        $data['main_content'] = 'company/languages/add_languages';
        $this->load->view('company/template', $data);
     }
     
 else{    
       $post = $this->input->post(); 
   if( $this->Languages_model->add_languages($post)){
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Languages Added Successfully', 'class'=>'alert-success'] );
    } 
else{
      $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Languages Failed To Add,Please Try Again', 'class'=>'alert-danger'] );
    }
      return  redirect('company/languages');
    }
    }
      
      public function delete_languages($id)
      {
        if ($this->Languages_model->delete_languages($id)) 
        {
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Languages Deleted Successfully','class'=>'alert-success']);
        }
        else
        {
           $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Languages Failed To Delete,Please Try Again','class'=>'alert-danger']);
        }
         return redirect('company/languages');
      }
    
      public function edit_languages($id)
      { 
         if(!$this->form_validation->run('languages')) {  
            $data['logged_in_user'] = $this->ion_auth->user()->row();
            $data['main_content']   = 'company/languages/edit_languages';
            $data['languages']        = $this->Languages_model->find_languages(base64_decode($id));
             $this->load->view('company/template', $data);
            } 
             
      else{
           $post = $this->input->post(); 
        if($this->Languages_model->edit_languages($post,base64_decode($id)))
        {  
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Languages Updated', 'class'=>'alert alert-success'] );
        } 
      else
        {
          $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Languages Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
        }
         return redirect('company/languages');
            
        }
      
      }      
  function delete_all()
     {      
      if($checked = $this->input->post('checkbox_value')) {
        foreach ($checked as $id) {
            $this->Languages_model->delete_languages($id);
        }
      }
     } 
}
