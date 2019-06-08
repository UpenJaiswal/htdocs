<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expertise extends CI_Controller {

    public function __construct(){      
        parent::__construct();       
        $this->load->library('form_validation');
        $this->load->model('Expertise_Model');
         if ( ! $this->ion_auth->logged_in())
        {
            redirect('company', 'refresh');
        }
    }

	public function index(){       
           $data['logged_in_user'] = $this->ion_auth->user()->row(); 
           $data['AreasOfExpertise']=$this->Expertise_Model->AreasOfExpertiseList();
           $data['main_content'] = 'company/expertise/ViewExpertise';
           $this->load->view('company/template', $data);
	}

    public function add_expertise (){              
       if (!$this->form_validation->run('expertise')){ 
          $data['logged_in_user'] = $this->ion_auth->user()->row(); 
          $data['main_content'] = 'company/expertise/AddExpertise';
          $this->load->view('company/template', $data);
           }
           else{
            $post = $this->input->post(); 
            if ($this->Expertise_Model->AddAreasOfExpertise($post)){
            $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Expertise Added Successfully', 'class'=>'alert-success'] );
            }
            else{
              $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Expertise Failed To Add,Please Try Again', 'class'=>'alert-danger'] );
            }
              return redirect('company/expertise');
          }
       }

    public function edit_expertise($id){ 
         if(!$this->form_validation->run('expertise')) {  
            $data['logged_in_user'] = $this->ion_auth->user()->row();
            $data['main_content']   = 'company/expertise/EditExpertise';
            $data['expertise']        = $this->Expertise_Model->find_expertise(base64_decode($id));
             $this->load->view('company/template', $data);
            }              
      else{
           $post = $this->input->post(); 
        if($this->Expertise_Model->edit_expertise($post,base64_decode($id)))
        {  
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Expertise Updated', 'class'=>'alert alert-success'] );
        } 
      else
        {
          $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Expertise Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
        }
         return redirect('company/expertise');
            
        }
      
      }      
   
      
      public function delete_expertise($id)
      {
        if ($this->Expertise_Model->delete_expertise($id)) 
        {
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Expertise Deleted Successfully','class'=>'alert-success']);
        }
        else
        {
           $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Expertise Failed To Delete,Please Try Again','class'=>'alert-danger']);
        }
         return redirect('company/expertise');
      }
    
      function delete_all()
     {      
      if($checked = $this->input->post('checkbox_value')) {
        //echo "<pre>", print_r($this->input->post('checkbox_value')), exit;
        foreach ($checked as $id) {
            $this->Expertise_Model->delete_expertise($id);
        }
      }
     } 
  
}
