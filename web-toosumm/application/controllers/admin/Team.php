<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->helper('file'); 
        $this->load->helper('download'); 
        $this->load->library('zip'); 

        $this->load->library('form_validation');
        $this->load->model('Team_model');
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
           $data['main_content'] = 'admin/team/view_team';
           $data['team']=$this->Team_model->team_list();
           //echo "<pre>", print_r($product); exit;
            $this->load->view('admin/template', $data);

        }
	}


    public function add_team()
    {
 if (!$this->form_validation->run('team')){
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['main_content'] = 'admin/team/add_team';
     $this->load->view('admin/template', $data); 
      }
 else{
      $data = $this->input->post();
   if($_FILES['image']['name'] != '') {
      $config['upload_path'] = 'Uploads/team/';
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
  if  ($this->Team_model->add_team($data)){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Team Added Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Team Failed To Added,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('admin/Team');
          }
    }
      
      public function delete_team($id,$image)
      {
        if ($this->Team_model->delete_team($id)) 
        {
          $path = './Uploads/team/'.$image;
          @unlink($path);

          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Team Deleted Successfully','class'=>'alert-success']);
        }
        else
        {
           $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Team Failed To Delete,Please Try Again','class'=>'alert-danger']);
        }
         return redirect('admin/Team');
      }
    
      public function edit_team($id)
      { 
      if (!$this->form_validation->run('team')){
         $data['logged_in_user'] = $this->ion_auth->user()->row();
         $data['team']          = $this->Team_model->find_team(base64_decode($id));
         $data['main_content'] = 'admin/team/edit_team';
         $this->load->view('admin/template', $data); 
      }
  else{
        $data = $this->input->post();
    if  ($_FILES['image']['name'] != '') {
        $config['upload_path'] = 'Uploads/team/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
        $config['overwrite']        = FALSE;
        $config['encrypt_name']     = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
    if ($this->upload->do_upload('image')) {
      @unlink("./Uploads/team/".$this->input->post('image')); 
     }   
        $image = $this->upload->data();
        $data['image'] = $image['file_name']; 
     }
       if  ($this->Team_model->edit_team($data,base64_decode($id))){
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Team Updated Successfully', 'class'=>'alert alert-success'] );
      }else{
           $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Team Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
           }  
             return redirect('admin/team');
          }
     }      

          public function database_backup()
            {
            $this->load->dbutil(); 
            $db_format=array('format'=>'zip','filename'=>'my_db_backup.sql');
            $backup=& $this->dbutil->backup($db_format); 
            $dbname='backup-on-'.date('Y-m-d').time().'.zip';
            $save='assets/db_backup/'.$dbname; write_file($save,$backup);
            force_download($dbname,$backup); 
            }

    public function team_img_validation($field_value){ 
    if($_FILES['image']['name'] != ''){
      $profileImage_name = $_FILES['image']['name'];
      $profileImage_size = $_FILES["image"]["size"];
      $profileImage_type = strtolower(pathinfo($profileImage_name,PATHINFO_EXTENSION));

    //FILE EXTENSION MATCH
   if($profileImage_type != "jpg" && $profileImage_type != "png" && $profileImage_type != "jpeg"
&& $profileImage_type != "gif" )
      {
        $this->form_validation->set_message('team_img_validation', "Invalid Image Format");
        return false;
      }
      else
      {
        return true;
      }
    }
    elseif($this->input->post('_hidden_field') == true){
      $this->form_validation->set_message('team_img_validation', " Image Field Required ");

        return false;
    }
    else
    {
      return true;
    }
  }
}
