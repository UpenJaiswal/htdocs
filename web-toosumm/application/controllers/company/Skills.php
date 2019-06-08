<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skills extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('Skills_model');
         if ( ! $this->ion_auth->logged_in())
        {
            redirect('company', 'refresh');
        }
    }


	public function index()
	{
           $data['logged_in_user'] = $this->ion_auth->user()->row(); 
           $data['main_content'] = 'company/skills/view_skills';
           $data['skills']=$this->Skills_model->skills_list();
           $this->load->view('company/template', $data);        
	}


    public function add_skills(){
    if (!$this->form_validation->run('skills')) {
        $data['logged_in_user'] = $this->ion_auth->user()->row(); 
        $data['main_content'] = 'company/skills/add_skills';
        $this->load->view('company/template', $data);
     }
     
 else{    
       $post = $this->input->post(); 
   if( $this->Skills_model->add_skills($post)){
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Skills Added Successfully', 'class'=>'alert-success'] );
    } 
else{
      $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Skills Failed To Add,Please Try Again', 'class'=>'alert-danger'] );
    }
      return  redirect('company/skills');
    }
    }
      
      public function delete_skills($id)
      {
          $this->Skills_model->delete_skills($id);
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'skills Deleted Successfully','class'=>'alert-success']);
         return redirect('company/skills');
      }
    
      public function edit_skills($id)
      { 
         if(!$this->form_validation->run('skills')) {  
            $data['logged_in_user'] = $this->ion_auth->user()->row();
            $data['main_content']   = 'company/skills/edit_skills';
            $data['skills']        = $this->Skills_model->find_skills(base64_decode($id));
             $this->load->view('company/template', $data);
            } 
             
      else{
           $post = $this->input->post(); 
        if($this->Skills_model->edit_skills($post,base64_decode($id)))
        {  
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Skills Updated', 'class'=>'alert alert-success'] );
        } 
      else
        {
          $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Skills Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
        }
         return redirect('company/skills');
            
        }
      
      }      
   function delete_all()
     {      
      if($checked = $this->input->post('checkbox_value')) {
        foreach ($checked as $id) {
            $this->Skills_model->delete_skills($id);
        }
      }
     } 
}
