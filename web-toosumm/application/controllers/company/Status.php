<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Status extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('Status_model');
         if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('status', 'refresh');
        }
    }


	public function index()
	{
        if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('status', 'refresh');
        }
        else
        {
           $data['logged_in_user'] = $this->ion_auth->user()->row(); 
           $data['main_content'] = 'company/status/view_status';
           $data['status']=$this->Status_model->status_list();
           //echo "<pre>", print_r($product); exit;
            $this->load->view('company/template', $data);

        }
	}


    public function add_status(){
 if (!$this->form_validation->run('status')){
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['main_content'] = 'company/status/add_status';
     $this->load->view('company/template', $data); 
      }
 else{
      $data = $this->input->post();
  
  if  ($this->Status_model->add_status($data)){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Status Added Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Status Failed To Added,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('company/status');
          }
    }
      
      public function delete_status($id)
      {

        if ($this->Status_model->delete_status($id)) 
        {
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Status Deleted Successfully','class'=>'alert-success']);
        }
        else
        {
           $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Status Failed To Delete,Please Try Again','class'=>'alert-danger']);
        }
         return redirect('company/status');
      }
    
       public function edit_status($id){ 
      if (!$this->form_validation->run('status')){
         $data['logged_in_user'] = $this->ion_auth->user()->row();
          $data['status']          = $this->Status_model->find_status(base64_decode($id));
         $data['main_content'] = 'company/status/edit_status';
         $this->load->view('company/template', $data); 
      }
  else{
          $data = $this->input->post();
    
       if  ($this->Status_model->edit_status($data,base64_decode($id))){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Status Updated Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Status Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('company/status');
          }
     } 


      public function check_status_exists($status){
         $status_id = $this->uri->segment(4); 
          $id= base64_decode($status_id);
         $this->form_validation->set_message('check_status_exists','This Status is taken. Please choose a different one');
         if(!$id)
         {  // create case
           $record = $this->Status_model->check_status_exists( ['status'=>$status] );
         }
         else
         {  // update case
         $record = $this->Status_model->check_status_exists( ['status'=>$status, 'id!='=>$id] );
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
      if($checked = $this->input->post('checkbox_value')) {
        //echo "<pre>", print_r($this->input->post('checkbox_value')), exit;
        foreach ($checked as $id) {
            $this->Status_model->delete_status($id);
        }
      }
    } 
  
}
