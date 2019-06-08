<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('Role_model');
         if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('company', 'refresh');
        }
    }


	public function index()
	{
        if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('company', 'refresh');
        }
        else
        {
           $data['logged_in_user'] = $this->ion_auth->user()->row(); 
           $data['main_content'] = 'company/role/view_role';
           $data['role']=$this->Role_model->role_list();
           //echo "<pre>", print_r($product); exit;
            $this->load->view('company/template', $data);

        }
	}


    public function add_role(){
    if (!$this->form_validation->run('team_role')) {
        $data['logged_in_user'] = $this->ion_auth->user()->row(); 
        $data['main_content'] = 'company/role/add_role';
        $this->load->view('company/template', $data);
     }
     
 else{    
       $post = $this->input->post(); 
   if( $this->Role_model->add_role($post)){
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Role Added Successfully', 'class'=>'alert-success'] );
    } 
else{
      $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Role Failed To Add,Please Try Again', 'class'=>'alert-danger'] );
    }
      return  redirect('company/role');
    }
    }
      
      public function delete_role($id)
      {
        if ($this->Role_model->delete_role($id)) 
        {
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Role Deleted Successfully','class'=>'alert-success']);
        }
        else
        {
           $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Role Failed To Delete,Please Try Again','class'=>'alert-danger']);
        }
         return redirect('company/role');
      }
    
      public function edit_role($id)
      {   
         if(!$this->form_validation->run('team_role')) {  
            $data['logged_in_user'] = $this->ion_auth->user()->row();
            $data['main_content']   = 'company/role/edit_role';
            $data['role']        = $this->Role_model->find_role(base64_decode($id));
             $this->load->view('company/template', $data);
            } 
             
      else{
           $post = $this->input->post(); 
        if($this->Role_model->edit_role($post,base64_decode($id)))
        {  
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Role Updated', 'class'=>'alert alert-success'] );
        } 
      else
        {
          $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Role Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
        }
         return redirect('company/role');
            
        }
      
      } 
      public function check_role_name_exists($role_name){
              $role_id = $this->uri->segment(4); 
              $id= base64_decode($role_id);

             $this->form_validation->set_message('check_role_name_exists','This Role is taken. Please choose a different one');
             if(!$id)
             {  // create case
                $record = $this->Role_model->check_role_name_exists( ['role_name'=>$role_name] );
             }
             else
             {  // update case
                $record = $this->Role_model->check_role_name_exists( ['role_name'=>$role_name, 'id!='=>$id] );
             }

              if(!$record)
              {
                return true;
              }
              else
              {
                return false;
              }
         }       
  function delete_all()
    {  
      // echo 'string'; exit();    
      if($checked = $this->input->post('checkbox_value')) {
        //echo "<pre>", print_r($this->input->post('checkbox_value')), exit;
        foreach ($checked as $id) {
            $this->Role_model->delete($id);
        }
      }
    } 
}
