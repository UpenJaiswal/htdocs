<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workroom extends CI_Controller {

     public function __construct(){
        parent::__construct();
        $this->load->model(array('Experience_Model', 'Workroom_model','Ion_auth_model','Project_model','Task_model','Clients_model'));
        $this->load->library(array('ion_auth', 'form_validation','pagination','user_agent'));
          if (!$this->ion_auth->logged_in()){
          redirect('login', 'refresh');
       }
      }
       
       public function index(){
            $data['main_content'] = 'workroom/dashboard';
            $data['logged_in_user'] = $this->ion_auth->user()->row();
            $data['team'] = $this->Ion_auth_model->w_user_list();
            $this->load->view('workroom/template', $data);
      }

        public function logout(){
           $this->data['title'] = "Logout";
           $logout = $this->ion_auth->logout();
          $this->session->set_flashdata( ['message'=>$this->ion_auth->messages(), 'class'=>'alert alert-success'] );
           redirect('login', 'refresh');
        }
             
         public function advance_profile($id){
            $data['experience'] =    $this->Experience_Model->experience_list();
            $data['education_list']=$this->Workroom_model->education_list(base64_decode($id));
               //echo '<pre>'; print_r( $data['education_list']); exit();
            $data['logged_in_user'] = $this->ion_auth->user()->row();
            $data['team'] = $this->Ion_auth_model->w_user_list();
            $data['pro_experience_list'] = $this->Workroom_model->pro_experience_list(base64_decode($id));

             //echo '<pre>'; print_r( $data['pro_experience_list']); exit();
           $data['skills'] =     $this->Workroom_model->skills_list();
           $data['skills_edit'] = $this->Workroom_model->skills_edit_list(base64_decode($id));
           $skills_id_string =  $data['skills_edit']->skills_id;
           $data['skills_id_array']  = explode(',', $skills_id_string);
           $data['certificates'] = $this->Workroom_model->certificates_list(base64_decode($id));
           $data['social_accounts'] = $this->Workroom_model->social_accounts_list(base64_decode($id));
           $data['employment_history']=$this->Workroom_model->employment_history_list(base64_decode($id));
           $data['expertise'] =     $this->Workroom_model->expertise_list();
           $data['expertise_edit'] = $this->Workroom_model->edit_expertise_list(base64_decode($id));
           $experties_id_string =  $data['expertise_edit']->expertise_id;
           $data['experties_id_array']  = explode(',', $experties_id_string);
           $data['industries'] =     $this->Workroom_model->industries_list();
           $data['industries_edit'] = $this->Workroom_model->industries_edit_list(base64_decode($id));
           $industries_id_string =  $data['industries_edit']->industries_id;
           $data['industries_id_array']  = explode(',', $industries_id_string);
           $data['language_proficiency'] = $this->Workroom_model->language(base64_decode($id));
           $data['reach_us'] = $this->Workroom_model->reach_us_list(base64_decode($id));
           $data['language'] =     $this->Workroom_model->language_list();
           $data['language_edit'] = $this->Workroom_model->language_edit_list(base64_decode($id));
           $language_id_string =  $data['language_edit']->language_id;
           $data['language_id_array']  = explode(',', $language_id_string);
           $data['main_content'] = 'workroom/profile/advance_profile';
           $this->load->view('workroom/template', $data);
           }

         public function profile_edit($id){
          if(!$this->form_validation->run('update_experience')) { 
           $data['logged_in_user'] = $this->ion_auth->user()->row();
           $data['team'] = $this->Ion_auth_model->w_user_list();
           $data['experience'] =    $this->Experience_Model->experience_list();
           $data['video_webpage'] = $this->Workroom_model->video_webpage(base64_decode($id));
           $data['social_accounts'] = $this->Workroom_model->social_accounts_list(base64_decode($id));
           $data['reach_us'] = $this->Workroom_model->reach_us_list(base64_decode($id));
           $data['certificates'] = $this->Workroom_model->certificates_list(base64_decode($id));
           $data['education'] = $this->Workroom_model->education_list(base64_decode($id));
           $data['language_proficiency'] = $this->Workroom_model->language(base64_decode($id));
           $data['employment_history'] = $this->Workroom_model->employment_history_list(base64_decode($id));
           $data['expertise'] =     $this->Workroom_model->expertise_list();
           $data['expertise_edit'] = $this->Workroom_model->edit_expertise_list(base64_decode($id));
           $experties_id_string =  $data['expertise_edit']->expertise_id;
           $data['experties_id_array']  = explode(',', $experties_id_string);
           $data['skills'] =     $this->Workroom_model->skills_list();
           $data['skills_edit'] = $this->Workroom_model->skills_edit_list(base64_decode($id));
           $skills_id_string =  $data['skills_edit']->skills_id;
           $data['skills_id_array']  = explode(',', $skills_id_string);
           $data['industries'] =     $this->Workroom_model->industries_list();
           $data['industries_edit'] = $this->Workroom_model->industries_edit_list(base64_decode($id));
           $industries_id_string =  $data['industries_edit']->industries_id;
           $data['industries_id_array']  = explode(',', $industries_id_string);
           $data['language'] =     $this->Workroom_model->language_list();
           $data['language_edit'] = $this->Workroom_model->language_edit_list(base64_decode($id));
           $language_id_string =  $data['language_edit']->language_id;
           $data['language_id_array']  = explode(',', $language_id_string);
           $data['main_content'] = 'workroom/edit_profile';
           $this->load->view('workroom/template', $data); 
        }
    else{
           $data = $this->input->post();          
           $this->Ion_auth_model->UpdateUser(base64_decode($id),$data);       
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Experience Updated', 'class'=>'alert alert-success'] );      
           return redirect($this->agent->referrer()); 
        }
     }   

     public function expertise($id){    
     if(!$this->form_validation->run('expertise_web')) {
          $data['logged_in_user'] = $this->ion_auth->user()->row();
          $data['team'] = $this->Ion_auth_model->w_user_list();
          $data['expertise_edit'] = $this->Workroom_model->edit_expertise_list(base64_decode($id));
          $experties_id_string =  $data['expertise_edit']->expertise_id;
          $data['experties_id_array']  = explode(',', $experties_id_string);
          $data['main_content'] = 'workroom/dashboard';
          $this->load->view('workroom/template', $data); 
       }
   else{
          $data = $this->input->post(); 
          $expertise_id_array    = $this->input->post('expertise_id');
          $data['expertise_id']  = implode(',', $expertise_id_array);   
          $this->Ion_auth_model->UpdateUser(base64_decode($id),$data);
          $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Expertise Updated', 'class'=>'alert alert-success','id'=>'area-of-expertise'] );    
          return redirect($this->agent->referrer()); 
        }
     }   

   public function skills($id){
   if(!$this->form_validation->run('skills_web')) {
         $data['logged_in_user'] = $this->ion_auth->user()->row();
         $data['team'] = $this->Ion_auth_model->w_user_list();
         $data['skills_edit'] = $this->Workroom_model->skills_edit_list(base64_decode($id));
         $skills_id_string =  $data['skills_edit']->skills_id;
         $data['skills_id_array']  = explode(',', $skills_id_string);
         $data['main_content'] = 'workroom/dashboard';
         $this->load->view('workroom/template', $data); 
       }
   else{      
         $data = $this->input->post(); 
         $skills_id_array    = $this->input->post('skills_id');
         $data['skills_id']  = implode(',', $skills_id_array);
         $this->Ion_auth_model->UpdateUser(base64_decode($id),$data);        
         $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Skills Updated', 'class'=>'alert alert-success'] );       
         return redirect($this->agent->referrer()); 
        }
     }  
    
   public function industries($id){
   if(!$this->form_validation->run('industries_web')) {
        $data['logged_in_user'] = $this->ion_auth->user()->row();
        $data['team'] = $this->Ion_auth_model->w_user_list();
        $data['industries_edit'] = $this->Workroom_model->industries_edit_list(base64_decode($id));
        $industries_id_string =  $data['industries_edit']->industries_id;
        $data['industries_id_array']  = explode(',', $industries_id_string);
        $data['main_content'] = 'workroom/dashboard';
        $this->load->view('workroom/template', $data); 
       }
  else{
        $data = $this->input->post(); 
        $industries_id_array    = $this->input->post('industries_id');
        $data['industries_id']  = implode(',', $industries_id_array);
        $this->Ion_auth_model->UpdateUser(base64_decode($id),$data);
        $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Industries Updated', 'class'=>'alert alert-success'] );       
        return redirect($this->agent->referrer()); 
      }
     }  
    


 public function about($id){
 if(!$this->form_validation->run('about')) {  
       $data['logged_in_user'] = $this->ion_auth->user()->row();
       $data['team'] = $this->Ion_auth_model->w_user_list();
       $data['main_content'] = 'workroom/dashboard';
       $this->load->view('workroom/template', $data); 
     }
 else{
       $data = $this->input->post();          
       $this->Ion_auth_model->UpdateUser(base64_decode($id),$data);          
       $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'About Updated', 'class'=>'alert alert-success'] );  
       return redirect($this->agent->referrer()); 
     }
    }

public function social_accounts($id){
if(!$this->form_validation->run('social_accounts')){ 
       $data['social_accounts'] = $this->Workroom_model->social_accounts_list(base64_decode($id));
       $data['check_social_accounts']=$this->Workroom_model->check_social_accounts(base64_decode($id));
       $data['logged_in_user'] = $this->ion_auth->user()->row();
       $data['main_content'] = 'workroom/edit_profile';
       $this->load->view('workroom/template', $data); 
    }
else{
       $data = $this->input->post();
       $check_social_accounts=$this->Workroom_model->check_social_accounts(base64_decode($id));
 if ($check_social_accounts==0) {
       $this->Workroom_model->insert_social_accounts(base64_decode($id),$data);
       $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Social Accounts Created', 'class'=>'alert alert-success'] );
              return redirect($this->agent->referrer()); 
 }else{           
       $data['user_id']= $this->input->post('user_id');
       unset( $data['user_id']);
       $this->Workroom_model->edit_social_accounts(base64_decode($id),$data);
       $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Social Accounts Updated', 'class'=>'alert alert-success'] );
       return redirect($_SERVER['HTTP_REFERER']);
      } 
    }
}
public function reach_us($id){
            
   if(!$this->form_validation->run('reach_us')) { 
      $data['reach_us'] = $this->Workroom_model->social_accounts_list(base64_decode($id));
      $data['check_reach_us']=$this->Workroom_model->check_reach_us(base64_decode($id));
      $data['logged_in_user'] = $this->ion_auth->user()->row();
      $data['main_content'] = 'workroom/edit_profile';
      $this->load->view('workroom/template', $data); 
     }
 else{
      $data = $this->input->post();
      $check_reach_us=$this->Workroom_model->check_reach_us(base64_decode($id));
  if ($check_reach_us==0) {
     $this->Workroom_model->insert_reach_us(base64_decode($id),$data);
     $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>' Details  Created', 'class'=>'alert alert-success'] );
            return redirect($this->agent->referrer()); 
}else{           
     $data['user_id']= $this->input->post('user_id');
     unset( $data['user_id']);
     $this->Workroom_model->edit_reach_us(base64_decode($id),$data);
     $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Details Updated', 'class'=>'alert alert-success'] );
       return redirect($_SERVER['HTTP_REFERER']);
    } 
   }
  }
public function team($id){
      //echo base64_decode($id); exit();
       $data['logged_in_user'] = $this->ion_auth->user()->row();
       $data['team'] = $this->Ion_auth_model->w_user_list();
       $data['team_project'] = $this->Workroom_model->user_list();
         //  echo "<pre>", print_r($data['team_project']), exit;
         foreach ($data['team_project'] as $value) {
              $idd = $value->id;
              $teamid = $value->teamid;
             // echo $teamid;
             $data['task_array'][$idd]=$this->Workroom_model->task_project($idd);
             $data['reach'][$teamid]=$this->Workroom_model->reach_us($teamid);
             $data['task_project'][$teamid]=$this->Workroom_model->team_task_project($teamid);
             $data['team_list'][$teamid]=$this->Workroom_model->team_list($teamid);

           }
                  //echo "<pre>", print_r($data['team_list']), exit;

       $data['main_content']   = 'workroom/team/team';
       $this->load->view('workroom/template', $data); 
    }


    public function clients($id){
       $data['logged_in_user'] = $this->ion_auth->user()->row();
       $data['clients'] = $this->Clients_model->clients_web_list();
     $data['team'] = $this->Ion_auth_model->w_user_list();
       $data['main_content']   = 'workroom/client/client';
       $this->load->view('workroom/template', $data); 
    }

       public function time_sheet($id){
       $data['logged_in_user'] = $this->ion_auth->user()->row();
      // $data['clients'] = $this->Clients_model->clients_web_list();
     //$data['team'] = $this->Ion_auth_model->w_user_list();
       $data['main_content']   = 'workroom/time-sheet/time-sheet';
       $this->load->view('workroom/template', $data); 
    }
public function individual_team($id){
          //echo "<pre>", print_r($data['indivisual']), exit;
      // echo $id; exit;
     $config=[
           //'base_url'=> base_url('workroom/Workroom/indivisual_team/'.$id),
           'base_url'=> base_url('workroom/Workroom/individual_team/'.$id),
            'per_page'=> 2,
            'total_rows' => $this->Workroom_model->Indi_num_rows(base64_decode($id)),
            'full_tag_open'=>"<ul class='pagination'>",
            'full_tag_close'=>"</ul>",
            'first_tag_open' =>"<li>",
            'first_tag_close' =>"</li>",
            'last_tag_open' =>"<li>",
            'last_tag_close' =>"</li>",
            'next_tag_open' =>"<li>",
            'next_tag_close' =>"</li>",
            'prev_tag_open' =>"<li>",
            'prev_tag_close' =>"</li>",
            'num_tag_open' =>"<li>",
            'num_tag_close' =>"</li>",
            'cur_tag_open' =>"<li class='active'><a href='#'>",
            'cur_tag_close' =>"</a></li>",
    ];           
    $this->pagination->initialize($config);
    $idh=$this->uri->segment(4);
     $idi= base64_decode($idh);
    $data['num_images_list']=$this->Workroom_model->num_images_list(base64_decode($id));
    $data['galleryi']=$this->Workroom_model->p_images_list($config['per_page'], $this->uri->segment(5),$idi); 

   // echo $this->uri->segment(4);exit();

    $data['image']=$this->Workroom_model->indi_image_list(base64_decode($id));
    $data['reach_us'] = $this->Workroom_model->reach_us_list(base64_decode($id));
    $data['language_proficiency'] = $this->Workroom_model->language(base64_decode($id));
    $data['experiencei'] = $this->Workroom_model->pro_experience_list(base64_decode($id));
    $data['education_list']=$this->Workroom_model->education_list(base64_decode($id));
    $data['language'] =     $this->Workroom_model->language_list();
    $data['logged_in_user'] = $this->ion_auth->user()->row();
    $data['team'] = $this->Ion_auth_model->w_user_list();
    $data['social_accounts'] = $this->Workroom_model->social_accounts_list(base64_decode($id));
    $data['expertise'] =     $this->Workroom_model->expertise_list();
    $data['expertise_edit'] = $this->Workroom_model->edit_expertise_list(base64_decode($id));
    $experties_id_string =  $data['expertise_edit']->expertise_id;
    $data['experties_id_array']  = explode(',', $experties_id_string);
    $data['skills'] =     $this->Workroom_model->skills_list();
    $data['skills_edit'] = $this->Workroom_model->skills_edit_list(base64_decode($id));
    $skills_id_string =  $data['skills_edit']->skills_id;
    $data['skills_id_array']  = explode(',', $skills_id_string);
    $data['industries'] =     $this->Workroom_model->industries_list();
    $data['industries_edit'] = $this->Workroom_model->industries_edit_list(base64_decode($id));
    $industries_id_string =  $data['industries_edit']->industries_id;
    $data['industries_id_array']  = explode(',', $industries_id_string);
    $data['language'] =     $this->Workroom_model->language_list();
    $data['language_edit'] = $this->Workroom_model->language_edit_list(base64_decode($id));
    $language_id_string =  $data['language_edit']->language_id;
    $data['language_id_array']  = explode(',', $language_id_string);
    $data['employment_history']=$this->Workroom_model->employment_history_list(base64_decode($id));
   $data['indivisual']= $this->Workroom_model->indivisual(base64_decode($id));

    $data['main_content']   = 'workroom/team/indivisual_team';
    $this->load->view('workroom/template', $data); 
  }


public function profile_img_validation($field_value){     
if($_FILES['image']['name'] != ''){
    $profileImage_name = $_FILES['image']['name'];
    $profileImage_size = $_FILES["image"]["size"];
    $profileImage_type = strtolower(pathinfo($profileImage_name,PATHINFO_EXTENSION));
    //FILE EXTENSION MATCH
if($profileImage_type != "jpg" && $profileImage_type != "png" && $profileImage_type != "jpeg"
&& $profileImage_type != "gif" )
  {
    $this->form_validation->set_message('profile_img_validation', "Invalid Image Format");
    return false;
  }
else
 {
   return true;
 }
}
else
{
   return true;
}
}      

    public function update_image($id){ 
    if (!$this->form_validation->run('update_image')){
       $data['logged_in_user'] = $this->ion_auth->user()->row();
       $data['team'] = $this->Ion_auth_model->w_user_list();
       $data['main_content'] = 'workroom/dashboard';
       $this->load->view('workroom/template', $data); 
    }
else{
      $data = $this->input->post();
 if($_FILES['image']['name'] != '') {
      $config['upload_path'] = 'Uploads/users/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
      $config['overwrite']        = FALSE;
      $config['encrypt_name']     = TRUE;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
  if($this->upload->do_upload('image')) {
     @unlink("./Uploads/users/".$this->input->post('image')); 
  }   
      $image = $this->upload->data();
      $data['image'] = $image['file_name'];
}
  if (empty($data)) {
      $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Nothing Changed', 'class'=>'alert alert-danger'] );
      return redirect($this->agent->referrer()); 
}else{

      $this->Ion_auth_model->UpdateUser(base64_decode($id),$data);
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Image Updated Successfully', 'class'=>'alert alert-success'] );
}          
      return redirect($this->agent->referrer()); 
}
}
public function video_webpage($id){
if(!$this->form_validation->run('video_webpage')) {        
      $data['video_webpage'] = $this->Workroom_model->video_webpage(base64_decode($id));
      $data['logged_in_user'] = $this->ion_auth->user()->row();
      $data['team'] = $this->Ion_auth_model->w_user_list();
      $data['main_content'] = 'workroom/edit_profile';
      $this->load->view('workroom/template', $data); 
     }
else{
      $data = $this->input->post();
      $check_video_webpage =$this->Workroom_model->check_video_webpage(base64_decode($id));
if ($check_video_webpage==0) {           
      $this->Workroom_model->insert_video_webpage(base64_decode($id),$data);
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Video & Webpage Created', 'class'=>'alert alert-success'] );
      return redirect($this->agent->referrer('#area-of-expertise')); 
 }else{      
      $data['user_id']= $this->input->post('user_id');
      unset( $data['user_id']);
      $this->Workroom_model->edit_video_webpage(base64_decode($id),$data);
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Video & Webpage Updated', 'class'=>'alert alert-success'] );
      return redirect($this->agent->referrer('#area-of-expertise')); 
      } 
    }
  }
 public function language($id){ 
 if (!$this->form_validation->run('language')){
     $data['language_proficiency'] = $this->Workroom_model->language(base64_decode($id));
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['team'] = $this->Ion_auth_model->w_user_list();
     $data['main_content'] = 'workroom/edit_profile';
     $this->load->view('workroom/template', $data); 
    }
else{
     $data = $this->input->post();
     $check_language =$this->Workroom_model->check_language(base64_decode($id)); 
if ($check_language==0) {           
     $this->Workroom_model->insert_language(base64_decode($id),$data);
     $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Language Created', 'class'=>'alert alert-success'] );
     return redirect($_SERVER['HTTP_REFERER']);
    }
else{      
     $data['user_id']= $this->input->post('user_id');
     unset( $data['user_id']);
     $this->Workroom_model->edit_language(base64_decode($id),$data);
     $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Language Updated', 'class'=>'alert alert-success'] );
     return redirect($this->agent->referrer());  
    } 
   }
 }
public function other_language($id){    
if(!$this->form_validation->run('other_language')) {
      $data['logged_in_user'] = $this->ion_auth->user()->row();
      $data['team'] = $this->Ion_auth_model->w_user_list();
      $data['language_edit'] = $this->Workroom_model->language_edit_list(base64_decode($id));
      $language_id_string =  $data['language_edit']->language_id;
      $data['language_id_array']  = explode(',', $language_id_string);
      $data['main_content'] = 'workroom/dashboard';
      $this->load->view('workroom/template', $data); 
    }
else{      
      $data = $this->input->post(); 
      $language_id_array    = $this->input->post('language_id');
      $data['language_id']  = implode(',', $language_id_array);
      $this->Ion_auth_model->UpdateUser(base64_decode($id),$data);        
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Language Updated', 'class'=>'alert alert-success'] );
          return redirect($this->agent->referrer()); 
    }
   }

public function besic_profile($id){ 

  //echo $id; exit();
if(!$this->form_validation->run('besic_profile')) {
      $data['reach_us'] = $this->Workroom_model->reach_us_list(base64_decode($id));
      $data['logged_in_user'] = $this->ion_auth->user()->row();
      $data['team'] = $this->Ion_auth_model->w_user_list();
          // $data['language_edit'] = $this->Workroom_model->language_edit_list(base64_decode($id));
      $data['main_content'] = 'workroom/profile/besic_profile';
      $this->load->view('workroom/template', $data); 
    }
else{  
      $data = $this->input->post(); 
      $data['user_id']= $this->input->post('user_id');
       unset( $data['user_id']);
      $data['dob']= date('Y-m-d H:i:s', strtotime( $this->input->post('dob')));
      $this->Ion_auth_model->UpdateUser(base64_decode($id),$data);        
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Profile Updated', 'class'=>'alert alert-success'] );
      return redirect($this->agent->referrer()); 
    }
   }
public function gallery($id){       
      $config=[
               'base_url'=> base_url('workroom/Workroom/gallery/wt'),
                'per_page'=> 2,
                'total_rows' => $this->Workroom_model->num_rows(),
                'full_tag_open'=>"<ul class='pagination'>",
                'full_tag_close'=>"</ul>",
                'first_tag_open' =>"<li>",
                'first_tag_close' =>"</li>",
                 'next_link'       =>'<span class="">Last</span>',
                 'prev_link'      =>'<span class="">First</span>',
                'next_tag_open' =>"<li>",
                'next_tag_close' =>"</li>",
                'prev_tag_open' =>"<li>",
                'prev_tag_close' =>"</li>",
                'num_tag_open' =>"<li>",
                'num_tag_close' =>"</li>",
                'cur_tag_open' =>"<li class='active'><a href='#'>",
                'cur_tag_close' =>"</a></li>",
    ];
     $this->pagination->initialize($config);     
     $data['main_content'] = 'workroom/gallery/gallery';
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['team'] = $this->Ion_auth_model->w_user_list();
     $data['gallery']=$this->Workroom_model->images_list($config['per_page'],$this->uri->segment(5));
     //echo $this->uri->segment(3); exit();
     $this->load->view('workroom/template', $data); 
    }
     
public function employment_history($id){       
     $data['employment_history']=$this->Workroom_model->employment_history_list(base64_decode($id));
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['team'] = $this->Ion_auth_model->w_user_list();
     $data['main_content'] = 'workroom/employment-history/view_employment_history';
     $this->load->view('workroom/template', $data); 
  }
public function certificates($id){
     $data['certificates_list']=$this->Workroom_model->certificates_list(base64_decode($id));
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['team'] = $this->Ion_auth_model->w_user_list();
     $data['main_content'] = 'workroom/certificates/view_certificates';
     $this->load->view('workroom/template', $data); 
     }

public function education($id){
     $data['education_list']=$this->Workroom_model->education_list(base64_decode($id));
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['team'] = $this->Ion_auth_model->w_user_list();
     $data['main_content'] = 'workroom/education/view_education';
     $this->load->view('workroom/template', $data); 
 }
public function add_education($id){
 if (!$this->form_validation->run('education')){
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['team'] = $this->Ion_auth_model->w_user_list();
     $data['main_content'] = 'workroom/education/add_education';
     $this->load->view('workroom/template', $data); 
   }
else{
    $data = $this->input->post();
    $data['start']= date('Y-m-d H:i:s', strtotime( $this->input->post('start')));
    $data['end']= date('Y-m-d H:i:s', strtotime( $this->input->post('end')));
    $this->Workroom_model->add_education(base64_decode($id),$data);
    $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Education Added Successfully', 'class'=>'alert alert-success'] ); 
    return redirect('workroom/Workroom/education/'.($id));
  }
}
   
public function edit_education($id){ 
if (!$this->form_validation->run('education')){
    $data['logged_in_user'] = $this->ion_auth->user()->row();
    $data['team'] = $this->Ion_auth_model->w_user_list();
    $data['find_education']= $this->Workroom_model->find_education(base64_decode($id));
    $data['main_content'] = 'workroom/education/edit_education';
    $this->load->view('workroom/template', $data); 
   }
else{
    $data = $this->input->post();
    $data['start']= date('Y-m-d H:i:s', strtotime( $this->input->post('start')));
    $data['end']= date('Y-m-d H:i:s', strtotime( $this->input->post('end')));
    $this->Workroom_model->edit_education(base64_decode($id),$data);
    $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Education Updated Successfully', 'class'=>'alert alert-success'] );
    return redirect($this->agent->referrer()); 
  }
 }

public function delete_education($id){
if ($this->Workroom_model->delete_education(base64_decode($id))){
    $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Education Deleted Successfully','class'=>'alert-success']);
    }
else{
    $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Education Failed To Delete,Please Try Again','class'=>'alert-danger']);
    }
    return redirect($this->agent->referrer()); 
  }

public function add_certificates($id){
 if (!$this->form_validation->run('certificates')){
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['team'] = $this->Ion_auth_model->w_user_list();
     $data['main_content'] = 'workroom/certificates/add_certificates';
     $this->load->view('workroom/template', $data); 
      }
 else{
      $data = $this->input->post();
      $data['start']= date('Y-m-d H:i:s', strtotime( $this->input->post('start')));
      $data['end']= date('Y-m-d H:i:s', strtotime( $this->input->post('end')));
      $this->Workroom_model->add_certificates(base64_decode($id),$data);
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Certificates Added Successfully', 'class'=>'alert alert-success'] ); 
      return redirect('workroom/Workroom/certificates/'.($id));
    }
  }

public function edit_certificates($id){ 
  if (!$this->form_validation->run('certificates')){
      $data['logged_in_user'] = $this->ion_auth->user()->row();
      $data['team'] = $this->Ion_auth_model->w_user_list();
      $data['find_certificates']= $this->Workroom_model->find_certificates(base64_decode($id));
      $data['main_content'] = 'workroom/certificates/edit_certificates';
      $this->load->view('workroom/template', $data); 
      }
  else{
      $data = $this->input->post();
      $data['start']= date('Y-m-d H:i:s', strtotime( $this->input->post('start')));
      $data['end']= date('Y-m-d H:i:s', strtotime( $this->input->post('end')));
      $this->Workroom_model->edit_certificates(base64_decode($id),$data);
      $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Certificates Updated Successfully', 'class'=>'alert alert-success'] );
      return redirect($this->agent->referrer()); 
    }
  }


 public function delete_certificates($id){
    if ($this->Workroom_model->delete_certificates(base64_decode($id))){
        $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Certificates Deleted Successfully','class'=>'alert-success']);
    }
  else{
        $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Certificates Failed To Delete,Please Try Again','class'=>'alert-danger']);
      }
        return redirect($this->agent->referrer()); 
      }

 public function add_employment_history($id){
 if (!$this->form_validation->run('employment_histry')){
         $data['logged_in_user'] = $this->ion_auth->user()->row();
         $data['team'] = $this->Ion_auth_model->w_user_list();
         $data['main_content'] = 'workroom/employment-history/add_employment_history';
         $this->load->view('workroom/template', $data); 
      }
 else{
         $data = $this->input->post();
         $data['start']= date('Y-m-d H:i:s', strtotime( $this->input->post('start')));
         $data['end']= date('Y-m-d H:i:s', strtotime( $this->input->post('end')));
         $this->Workroom_model->add_employment_history(base64_decode($id),$data);
         $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Image Added Successfully', 'class'=>'alert alert-success'] ); 
         return redirect('workroom/Workroom/employment_history/'.($id));
      }
    }
   

  public function edit_employment_history($id){ 
    if (!$this->form_validation->run('employment_histry')){
         $data['logged_in_user'] = $this->ion_auth->user()->row();
         $data['team'] = $this->Ion_auth_model->w_user_list();
         $data['find_employment_history']    = $this->Workroom_model->find_employment_history(base64_decode($id));
         $data['main_content'] = 'workroom/employment-history/edit_employment_history';
         $this->load->view('workroom/template', $data); 
      }
  else{
         $data = $this->input->post();
         $data['start']= date('Y-m-d H:i:s', strtotime( $this->input->post('start')));
         $data['end']= date('Y-m-d H:i:s', strtotime( $this->input->post('end')));
      if($this->Workroom_model->edit_employment_history($data,base64_decode($id))){
         $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Histry Updated Successfully', 'class'=>'alert alert-success'] );
      }
  else{
         $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Histry Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
      }  
         return redirect($this->agent->referrer()); 
      }
     }
  

  public function delete_employment_history($id){
     if ($this->Workroom_model->delete_employment_history(base64_decode($id))){
         $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Histry Deleted Successfully','class'=>'alert-success']);
        }
  else{
         $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Histry Failed To Delete,Please Try Again','class'=>'alert-danger']);
      }
         return redirect($this->agent->referrer()); 
      }
public function add_image($id){
  if (!$this->form_validation->run('gallery')){
       $data['logged_in_user'] = $this->ion_auth->user()->row();
       $data['team'] = $this->Ion_auth_model->w_user_list();
       $data['main_content'] = 'workroom/gallery/add_gallery';
       $this->load->view('workroom/template', $data); 
      }
 else{
       $data = $this->input->post();
   if($_FILES['image']['name'] != '') {
       $config['upload_path'] = 'Uploads/portfolio/';
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
       $this->Workroom_model->add_image(base64_decode($id),$data);
       $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Image Added Successfully', 'class'=>'alert alert-success'] ); 
       return redirect('workroom/Workroom/gallery/'.($id));
      }
    }
      

 public function edit_image($id){ 
    if (!$this->form_validation->run('gallery')){
       $data['logged_in_user'] = $this->ion_auth->user()->row();
       $data['team'] = $this->Ion_auth_model->w_user_list();
       $data['find_image']    = $this->Workroom_model->find_image(base64_decode($id));
       $data['main_content'] = 'workroom/gallery/update_gallery';
       $this->load->view('workroom/template', $data); 
      }
  else{
       $data = $this->input->post();
  if  ($_FILES['image']['name'] != '') {
       $config['upload_path'] = 'Uploads/portfolio/';
       $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
       $config['overwrite']        = FALSE;
       $config['encrypt_name']     = TRUE;
       $this->load->library('upload', $config);
       $this->upload->initialize($config);
  if  ($this->upload->do_upload('image')) {
       @unlink("./Uploads/portfolio/".$this->input->post('image')); 
      }   
       $image = $this->upload->data();
       $data['image'] = $image['file_name']; 
      }
  if  ($this->Workroom_model->edit_image($data,base64_decode($id))){
       $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Image Updated Successfully', 'class'=>'alert alert-success'] );
      }
  else{
      $this->session->set_flashdata( ['main_message'=>'Oops!!', 'message'=>'Image Failed To Update,Please Try Again', 'class'=>'alert-danger'] ); 
      }  
      return redirect('workroom/Workroom/gallery/'.$id,'refresh');
     }
     }
  public function delete_image($id){
    if ($this->Workroom_model->delete_image(base64_decode($id))){
        $this->session->set_flashdata(['main_message'=>'Congratulation!!', 'message'=>'Image Deleted Successfully','class'=>'alert-success']);
     }
 else{
       $this->session->set_flashdata(['main_message'=>'Oops!!', 'message'=>'Image Failed To Delete,Please Try Again','class'=>'alert-danger']);
     }
       return redirect($this->agent->referrer()); 
    }
    

  public function img_validation($field_value){ 
   if($_FILES['image']['name'] != ''){
      $profileImage_name = $_FILES['image']['name'];
      $profileImage_size = $_FILES["image"]["size"];
      $profileImage_type = strtolower(pathinfo($profileImage_name,PATHINFO_EXTENSION));
    //FILE EXTENSION MATCH
  if($profileImage_type != "jpg" && $profileImage_type != "png" && $profileImage_type != "jpeg"
  && $profileImage_type != "gif" ){
     $this->form_validation->set_message('img_validation', "Invalid Image Format");
     return false;
    }
else{
     return true;
    }
  }
elseif($this->input->post('_hidden_field') == true){
       $this->form_validation->set_message('img_validation', "Choose Image First ");
     return false;
    }
else{
      return true;
    }
  }


  public function work_room($id){  
 //echo $id; exit(); 
 //echo base64_decode($id); exit(); 
     $data['project']=$this->Project_model->workroom_project_list(base64_decode($id));
    $data['task']=$this->Task_model->web_task_list(base64_decode($id));
        // echo "<pre>", print_r($data['task']); exit;
           $data['task_team_array'] = [];
           foreach ($data['task'] as $value) {
              $idd = $value->id;
          //echo "<pre>", print_r($value);
           
             $data['task_team_array'][$idd]=$this->Task_model->task_team($idd);
             $data['project_task_team_array'][$idd]=$this->Task_model->project_task_team($idd);
          
           }
        //echo "<pre>", print_r($data['project_task_team_array']); exit;

     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['team'] = $this->Ion_auth_model->w_user_list();
     $data['main_content'] = 'workroom/work-room/work_room_details';
     $this->load->view('workroom/template', $data); 
  }

   public function work_room_list($id){  
 //echo base64_decode($id); exit(); 
     $data['project']=$this->Project_model->project_web_list();
    $data['task']=$this->Task_model->web_task_list(base64_decode($id));
        // echo "<pre>", print_r($data['task']); exit;
           $data['task_team_array'] = [];
           foreach ($data['task'] as $value) {
              $idd = $value->id;
          //echo "<pre>", print_r($value);
           
             $data['task_team_array'][$idd]=$this->Task_model->task_team($idd);
         // echo "<pre>", print_r($data['task_team']); exit;

           }
        // echo "<pre>", print_r($data['task_team']); exit;


     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['team'] = $this->Ion_auth_model->w_user_list();
     $data['main_content'] = 'workroom/work-room/work_room';
     $this->load->view('workroom/template', $data); 
  }

   public function work_room_details($id){  
     $data['project']=$this->Project_model->workroom_project_list(base64_decode($id));
     $data['logged_in_user'] = $this->ion_auth->user()->row();
     $data['team'] = $this->Ion_auth_model->w_user_list();
      

        $data['task']=$this->Task_model->web_task_list();
        // echo "<pre>", print_r($data['task']); exit;
           $data['task_team_array'] = [];
           foreach ($data['task'] as $value) {
              $idd = $value->id;
          //echo "<pre>", print_r($value);
           
             $data['task_team_array'][$idd]=$this->Task_model->task_team($idd);
         // echo "<pre>", print_r($data['task_team']); exit;

           }

     $data['main_content'] = 'workroom/work-room/work_roomhjhj';

 //echo '<pre>'; print_r($data['task_team_array']); exit();
    $this->load->view('workroom/template', $data); 
  }
}