<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Project extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('Project_model');
        $this->load->model('Ion_auth_model');
         if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('project', 'refresh');
        }
    }


	public function index()
	{
        if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('project', 'refresh');
        }
        else
        {
           $data['logged_in_user'] = $this->ion_auth->user()->row(); 
           $data['main_content'] = 'company/project/view_project';
           $data['project']=$this->Project_model->project_list();
           //echo "<pre>", print_r($product); exit;
            $this->load->view('company/template', $data);

        }
	}


    public function add_project(){
 if (!$this->form_validation->run('project')){
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['main_content'] = 'company/project/add_project';
     $data['status_list']= $this->Project_model->find_status();
     $data['priority_list']= $this->Project_model->find_priority();
     $data['clients_list']= $this->Project_model->find_clients();
     $this->load->view('company/template', $data); 
      }
 else{
         $data=$this->input->post();
   if($_FILES['project_image']['name'] != '') {
      $config['upload_path'] = 'Uploads/project/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
      $config['overwrite']        = FALSE;
      $config['encrypt_name']     = TRUE;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->do_upload('project_image');    
      $project_image = $this->upload->data();
      $data['project_image'] = $project_image['file_name']; 
      }
      unset($data['_hidden_field']);
      $data['start_date']= date('Y-m-d', strtotime($this->input->post('start_date')));
      $data['due_date']= date('Y-m-d', strtotime($this->input->post('due_date')));
      //echo '<pre>'; print_r($data); exit();
      $this->Project_model->add_project($data);
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Clients Added Successfully', 'class'=>'alert alert-success'] );
             return redirect('company/project');
      }
    }
      
      public function delete_project($id,$image)
      {

       $this->Project_model->delete_project($id); 
        
           $path = './Uploads/project/'.$image;
          @unlink($path);
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Project Deleted Successfully','class'=>'alert-success']);
        
         return redirect('company/project');
      }
    
       public function edit_project($id){ 
      if (!$this->form_validation->run('project')){
         $data['logged_in_user'] = $this->ion_auth->user()->row();
          $data['project']          = $this->Project_model->find_project(base64_decode($id));
           $data['status_list']= $this->Project_model->find_status();
           $data['priority_list']= $this->Project_model->find_priority();
           $data['clients_list']= $this->Project_model->find_clients();
         $data['main_content'] = 'company/project/edit_project';
         $this->load->view('company/template', $data); 
      }
  else{    $data = $this->input->post(); 
           ///$task_id_array    = $this->input->post('task_id');
         // $data['task_id']  = implode(',', $task_id_array);
          // $team_id_array    = $this->input->post('team_id');
         // $data['team_id']  = implode(',', $team_id_array);
          $data['start_date']= date('Y-m-d H:i:s', strtotime( $this->input->post('start_date')));
           $data['due_date']= date('Y-m-d H:i:s', strtotime($this->input->post('due_date')));
      if  ($_FILES['project_image']['name'] != '') {
          $config['upload_path'] = 'Uploads/project/';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
          $config['overwrite']        = FALSE;
          $config['encrypt_name']     = TRUE;
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
     if ($this->upload->do_upload('project_image')) {
          @unlink("./Uploads/project/".$this->input->post('project_image')); 
         }   
            $project_image = $this->upload->data();
            $data['project_image'] = $project_image['file_name']; 
            //echo '<pre>'; print_r($data['project_image']); exit();
         }


         //echo '<pre>'; print_r($data); exit();
             
       $this->Project_model->edit_project($data,base64_decode($id));
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Project Updated Successfully', 'class'=>'alert alert-success'] );
       
             return redirect('company/project');
          }
     }
           

       public function img_validation($field_value){ 
    if($_FILES['project_image']['name'] != ''){
      $profileImage_name = $_FILES['project_image']['name'];
      $profileImage_size = $_FILES["project_image"]["size"];
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
    
     public function check_project_name_exists($project_name){
            $project_id = $this->uri->segment(4);
            //echo $project_id; exit();
                $id = base64_decode($project_id);
             $this->form_validation->set_message('check_project_name_exists','This Project is taken. Please choose a different one');
             if(!$id)
             {  // create case
                $record = $this->Project_model->check_project_name_exists( ['project_name'=>$project_name] );
             }
             else
             {  // update case
                $record = $this->Project_model->check_project_name_exists( ['project_name'=>$project_name, 'id!='=>$id] );
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
            $this->Project_model->delete($id);
        }
      }
    }   
}
