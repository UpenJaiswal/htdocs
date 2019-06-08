<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Clients extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('Clients_model');
         if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('clients', 'refresh');
        }
    }


	public function index()
	{
        if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('clients', 'refresh');
        }
        else
        {
           $data['logged_in_user'] = $this->ion_auth->user()->row(); 
           $data['main_content'] = 'company/clients/view_clients';
           $data['clients']=$this->Clients_model->clients_list();
           //echo "<pre>", print_r($product); exit;
            $this->load->view('company/template', $data);

        }
	}


    public function add_clients(){
 if (!$this->form_validation->run('clients')){
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['main_content'] = 'company/clients/add_clients';
     $this->load->view('company/template', $data); 
      }
 else{
      $data = $this->input->post();
   if($_FILES['image']['name'] != '') {
      $config['upload_path'] = 'Uploads/clients/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
      $config['overwrite']        = FALSE;
      $config['encrypt_name']     = TRUE;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->do_upload('image');    
      $image = $this->upload->data();
      $data['image'] = $image['file_name']; 
      }
      unset($data['_hidden_field']);
  if  ($this->Clients_model->add_clients($data)){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Clients Added Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Clients Failed To Added,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('company/clients');
          }
    }
      
      public function delete_clients($id,$image)
      {

        if ($this->Clients_model->delete_clients($id)) 
        {
           $path = './Uploads/clients/'.$image;
          @unlink($path);
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Clients Deleted Successfully','class'=>'alert-success']);
        }
        else
        {
           $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Clients Failed To Delete,Please Try Again','class'=>'alert-danger']);
        }
         return redirect('company/clients');
      }
    
       public function edit_clients($id){ 
      if (!$this->form_validation->run('clients')){
         $data['logged_in_user'] = $this->ion_auth->user()->row();
          $data['clients']          = $this->Clients_model->find_clients(base64_decode($id));
         $data['main_content'] = 'company/clients/edit_clients';
         $this->load->view('company/template', $data); 
      }
  else{
          $data = $this->input->post();
      if  ($_FILES['image']['name'] != '') {
          $config['upload_path'] = 'Uploads/clients/';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
          $config['overwrite']        = FALSE;
          $config['encrypt_name']     = TRUE;
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
     if ($this->upload->do_upload('image')) {
          @unlink("./Uploads/clients/".$this->input->post('image')); 
         }   
            $image = $this->upload->data();
            $data['image'] = $image['file_name']; 
         }
       if  ($this->Clients_model->edit_clients($data,base64_decode($id))){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Clients Updated Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Clients Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('company/clients');
          }
     }
           

       public function img_validation($field_value)
    { 
    if($_FILES['image']['name'] != ''){
      $profileImage_name = $_FILES['image']['name'];
      $profileImage_size = $_FILES["image"]["size"];
      $profileImage_type = strtolower(pathinfo($profileImage_name,PATHINFO_EXTENSION));

    //FILE EXTENSION MATCH
   if($profileImage_type != "jpg" && $profileImage_type != "png" && $profileImage_type != "jpeg"
&& $profileImage_type != "gif" )
      {
        $this->form_validation->set_message('img_validation', "Invalid Image Format");
        return false;
      }
      else
      {
        return true;
      }
    }
    elseif($this->input->post('_hidden_field') == true){
      $this->form_validation->set_message('img_validation', "Choose Image First ");

        return false;
    }
    else
    {
      return true;
    }
  } 
   
    public function check_clients_name_exists($clients_name){
              $clients_id = $this->uri->segment(4); 
              $id= base64_decode($clients_id);
             $this->form_validation->set_message('check_clients_name_exists','This clients is taken. Please choose a different one');
             if(!$id)
             {  // create case
                $record = $this->Clients_model->check_clients_name_exists( ['clients_name'=>$clients_name] );
             }
             else
             {  // update case
                $record = $this->Clients_model->check_clients_name_exists( ['clients_name'=>$clients_name, 'id!='=>$id] );
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


   public function delete_all()
        {      
         if($checked = $this->input->post('checkbox_value')) {
        //echo "<pre>", print_r($this->input->post('checkbox_value')), exit;
         foreach ($checked as $id) {
          $this->Clients_model->delete($id);
        }
      }
    }   
  
}
