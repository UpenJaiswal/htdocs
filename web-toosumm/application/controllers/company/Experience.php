<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience extends CI_Controller {

    public function __construct()
    {
        parent::__construct();       
        $this->load->library('form_validation');
        $this->load->model('Experience_Model');
         if ( ! $this->ion_auth->logged_in())
        {
            redirect('company', 'refresh');
        }
    }
	public function index() {
           $data['logged_in_user'] = $this->ion_auth->user()->row(); 
           $data['experience']=$this->Experience_Model->experience_list();
           $data['main_content'] = 'company/experience/view_experience';
           $this->load->view('company/template', $data);
	}

    public function add_experience (){              
       if (!$this->form_validation->run('experience')){ 
          $data['logged_in_user'] = $this->ion_auth->user()->row(); 
          $data['main_content'] = 'company/experience/add_experience';
          $this->load->view('company/template', $data);
           }
           else{
            $post = $this->input->post(); 
            if ($this->Experience_Model->add_experience($post)){
            $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Experience Added Successfully', 'class'=>'alert-success'] );
            }
            else{
              $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Experience Failed To Add,Please Try Again', 'class'=>'alert-danger'] );
            }
              return redirect('company/experience');
          }

       }
    public function edit_experience($id)
      {
         if(!$this->form_validation->run('experience')) {  
            $data['logged_in_user'] = $this->ion_auth->user()->row();
            $data['main_content']   = 'company/experience/edit_experience';
            $data['experience']        = $this->Experience_Model->find_experience(base64_decode($id));
             $this->load->view('company/template', $data);
            } 
             
      else{
           $post = $this->input->post(); 
        if($this->Experience_Model->edit_experience($post,base64_decode($id)))
        {  
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Experience Updated', 'class'=>'alert alert-success'] );
        } 
      else
        {
          $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Experience Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
        }
         return redirect('company/experience');
            
        }
      
      }  
   
      
      public function delete_experience($id)
      {
        $this->Experience_Model->delete_experience($id); 
        $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Experience Deleted Successfully','class'=>'alert-success']);   
                   
        return redirect('company/experience');
      }
    
      function delete_all()
       {      
       if($checked = $this->input->post('checkbox_value')) {
        foreach ($checked as $id) 
        {
            $this->Experience_Model->delete_experience($id);
        }
      }
     } 

}
