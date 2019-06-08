<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Priority extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('Priority_model');
         if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('priority', 'refresh');
        }
    }


	public function index()
	{
        if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('priority', 'refresh');
        }
        else
        {
           $data['logged_in_user'] = $this->ion_auth->user()->row(); 
           $data['main_content'] = 'company/priority/view_priority';
           $data['priority']=$this->Priority_model->priority_list();
           //echo "<pre>", print_r($product); exit;
            $this->load->view('company/template', $data);

        }
	}


    public function add_priority(){
 if (!$this->form_validation->run('priority')){
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['main_content'] = 'company/priority/add_priority';
     $this->load->view('company/template', $data); 
      }
 else{
      $data = $this->input->post();
  
  if  ($this->Priority_model->add_priority($data)){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Priority Added Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Priority Failed To Added,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('company/priority');
          }
    }
      
      public function delete_priority($id)
      {

        if ($this->Priority_model->delete_priority($id)) 
        {
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Priority Deleted Successfully','class'=>'alert-success']);
        }
        else
        {
           $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Priority Failed To Delete,Please Try Again','class'=>'alert-danger']);
        }
         return redirect('company/priority');
      }
    
       public function edit_priority($id){ 
      if (!$this->form_validation->run('priority')){
         $data['logged_in_user'] = $this->ion_auth->user()->row();
          $data['priority']          = $this->Priority_model->find_priority(base64_decode($id));
         $data['main_content'] = 'company/priority/edit_priority';
         $this->load->view('company/template', $data); 
      }
  else{
          $data = $this->input->post();
    
       if  ($this->Priority_model->edit_priority($data,base64_decode($id))){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Priority Updated Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Clients Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('company/priority');
          }
     } 
     
     public function check_priority_name_exists($priority_name){
              $priority_id = $this->uri->segment(4); 
              $id= base64_decode($priority_id);
             $this->form_validation->set_message('check_priority_name_exists','This Priority is taken. Please choose a different one');
             if(!$id)
             {  // create case
                $record = $this->Priority_model->check_priority_name_exists( ['priority_name'=>$priority_name] );
             }
             else
             {  // update case
                $record = $this->Priority_model->check_priority_name_exists( ['priority_name'=>$priority_name, 'id!='=>$id] );
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
            $this->Priority_model->delete($id);
        }
      }
    } 
}
