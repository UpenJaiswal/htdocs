<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Task extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model(['Task_model','Ion_auth_model','Project_model']);
         if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('task', 'refresh');
        }
    }


	public function index()
	{
        if ( ! $this->ion_auth->logged_in() /*OR ! $this->ion_auth->is_admin()*/)
        {
            redirect('task', 'refresh');
        }
        else
        {
           $data['logged_in_user'] = $this->ion_auth->user()->row(); 
           $data['main_content'] = 'company/task/view_task';
           $data['task']=$this->Task_model->task_list();
        // echo "<pre>", print_r($data['task']); exit;
           $data['task_team_array'] = [];
           foreach ($data['task'] as $value) {
              $idd = $value->id;
          //echo "<pre>", print_r($value);
           
             $data['task_team_array'][$idd]=$this->Task_model->task_team($idd);
         // echo "<pre>", print_r($data['task_team']); exit;

           }

           //$data['task_team']=$this->Task_model->task_team();
           //echo "<pre>", print_r($product); exit;
            $this->load->view('company/template', $data);

        }
	}


    public function add_task(){
 if (!$this->form_validation->run('task')){
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['team'] = $this->Ion_auth_model->user_list();
    $data['project_list']= $this->Task_model->find_project();
     $data['status_list']= $this->Project_model->find_status();
    // $data['task_list']= $this->Project_model->find_task();
     $data['priority_list']= $this->Project_model->find_priority();
     $data['main_content'] = 'company/task/add_task';
     $this->load->view('company/template', $data); 
      }
 else{
      $data = $this->input->post();
     $team_id_array    = $this->input->post('team_id');
     $data['team_id']  = implode(',', $team_id_array);
    //echo '<pre>'; print_r($data);
      $data['start_date']= date('Y-m-d', strtotime($this->input->post('start_date')));
      $data['due_date']= date('Y-m-d', strtotime($this->input->post('due_date')));
     $this->Task_model->add_task($data);
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Task Added Successfully', 'class'=>'alert alert-success'] );
             return redirect('company/task');
          }
    }
      
      public function delete_task($id)
      {
        $this->Task_model->delete_task($id);        
          $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Task Deleted Successfully','class'=>'alert-success']);         
         return redirect('company/task');
      }
    
       public function edit_task($id){ 
      if (!$this->form_validation->run('task')){
         $data['logged_in_user'] = $this->ion_auth->user()->row();
         $data['project_list']= $this->Task_model->find_project();
         $data['status_list']= $this->Project_model->find_status();
         $data['priority_list']= $this->Project_model->find_priority();
         $data['task']          = $this->Task_model->find_task(base64_decode($id));
          $data['team'] = $this->Ion_auth_model->user_list();
          $data['team_edit'] = $this->Task_model->task_team_list(base64_decode($id));
           $team_id_string =  $data['team_edit']->team_id;
           $data['team_id_array']  = explode(',', $team_id_string); 
                    // echo '<pre>'; print_r($data['team']); exit();

         $data['main_content'] = 'company/task/edit_task';
         $this->load->view('company/template', $data); 
      }
  else{
          $data = $this->input->post();
           $team_id_array    = $this->input->post('team_id');
          $data['team_id']  = implode(',', $team_id_array);
          $data['start_date']= date('Y-m-d H:i:s', strtotime( $this->input->post('start_date')));
           $data['due_date']= date('Y-m-d H:i:s', strtotime($this->input->post('due_date')));
      $this->Task_model->edit_task($data,base64_decode($id));
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Task Updated Successfully', 'class'=>'alert alert-success'] );
      
             return redirect('company/task');
          }
     } 
     
     public function check_task_name_exists($task_name){
              $task_id = $this->uri->segment(4); 
              $id= base64_decode($task_id);
             $this->form_validation->set_message('check_task_name_exists','This Task is taken. Please choose a different one');
             if(!$id)
             {  // create case
                $record = $this->Task_model->check_task_name_exists( ['task_name'=>$task_name] );
             }
             else
             {  // update case
                $record = $this->Task_model->check_task_name_exists( ['task_name'=>$task_name, 'id!='=>$id] );
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
            $this->Task_model->delete($id);
        }
      }
    } 
}
