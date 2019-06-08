<?php

class Workroom_model extends CI_Model{



public function employment_history_list($id){
  $query=$this->db->select('*')
              ->where('user_id',$id)
               ->from('employment_history')
               ->get();
  return $query->result();
}

public function social_accounts_list($id){
  $query=$this->db->select('*')
              ->where('user_id',$id)
               ->from('social_accounts')
               ->get();
  //echo "<pre>", print_r($this->db->last_query()), exit;
  return $query->row();
}

public function education_list($id){
  $query=$this->db->select('*')
              ->where('user_id',$id)
               ->from('education')
               ->get();
  return $query->result();
}

public function certificates_list($id){
$query= $this->db->select('*')
               ->where('user_id',$id)
               ->from('certificates')
               ->get();
  return $query->result();

}
public function image_list($id){
$query= $this->db->select('*')
               ->where('user_id',$id)
               ->from('portfolio')
               ->get();
  return $query->result();    
}
public function indi_image_list($id){
$query= $this->db->select('*')
               ->where('id',$id)
               ->from('portfolio')
               ->get();
  return $query->result();    
}


public function edit_image($data,$id){
if($this->db->where('id',$id)
           ->update('portfolio',$data))
return true;
else
{
return false;
}
}

public function edit_employment_history($data,$id){
if($this->db->where('id',$id)
           ->update('employment_history',$data))
return true;
else
{
return false;
}
}




  public function find_education($id){
   $query = $this->db->select('*')
              ->where(['id'=>$id])
              ->get('education');
 return $query->row();
  }
public function find_employment_history($id){
   $query = $this->db->select('*')
              ->where(['id'=>$id])
              ->get('employment_history');
 return $query->row();
  }
  public function find_certificates($id){
   $query = $this->db->select('*')
              ->where(['id'=>$id])
              ->get('certificates');
 return $query->row();
  }


  public function find_image($id){
   $query = $this->db->select('*')
              ->where(['id'=>$id])
              ->get('portfolio');
 return $query->row();
  }

public function delete_image($id){ 
   $this->db->where(['id'=>$id]);       
   return $this->db->delete('portfolio');
}
public function delete_education($id)
{
    $this->db->where(['id'=>$id]);       
   return $this->db->delete('education');
}

public function delete_employment_history($id)
{
    $this->db->where(['id'=>$id]);       
   return $this->db->delete('employment_history');
}

public function delete_certificates($id)
{

   $this->db->where(['id'=>$id]);       
   return $this->db->delete('certificates');
}

public function edit_employment_histry($id,$data){ 
$sql= $this->db->where('user_id',$id)
              ->update('employment_history',$data);              
     //print_r($this->db->last_query()) ; exit();
}

public function edit_education($id,$data) { 
       $sql= $this->db->where('id',$id)
                      ->update('education',$data);              
             //print_r($this->db->last_query()) ; exit();
      }

public function edit_certificates($id,$data){
              $this->db->where('id',$id)
             ->update('certificates',$data);
        // print_r($this->db->last_query()) ; exit();

}
public function edit_social_accounts($id,$data){

$sql = $this->db->where('user_id',$id)
               ->update('social_accounts',$data);
}

public function edit_language($id,$data){

$sql = $this->db->where('id',$id)
               ->update('users',$data);
}
public function edit_reach_us($id,$data){
$sql = $this->db->where('user_id',$id)
               ->update('reach_us',$data);
}
public function edit_video_webpage($id,$data){
$sql = $this->db->where('user_id',$id)
               ->update('video_webpage',$data);
}
public function check_employment($id){
 $sql= $this->db->select('*')
               ->from('employment_history')
               ->where('user_id',$id)
               ->get();
 return $sql->num_rows();                     
}

public function check_social_accounts($id){
 $sql= $this->db->select('*')
               ->from('social_accounts')
               ->where('user_id',$id)
               ->get();
 return $sql->num_rows();                     
}

public function check_education($id){
 $sql= $this->db->select('*')
               ->from('education')
               ->where('user_id',$id)
               ->get();
 return $sql->num_rows();                     
}

public function check_certificates($id){
 $sql= $this->db->select('*')
               ->from('certificates')
               ->where('user_id',$id)
               ->get();
 return $sql->num_rows();                     
} 

public function check_video_webpage($id){
 $sql= $this->db->select('*')
               ->from('video_webpage')
               ->where('user_id',$id)
               ->get();
 return $sql->num_rows();                     
}


public function check_language($id){
 $sql= $this->db->select('language')
               ->from('users')
               ->where('id',$id)
               ->get();
 return $sql->num_rows();                     
 }
public function check_other_language($id){
 $sql= $this->db->select('language_id')
               ->from('users')
               ->where('id',$id)
               ->get();
 //print_r($this->db->last_query()) ; exit();
 return $sql->num_rows();                       
 }
public function check_reach_us($id){
 $sql= $this->db->select('*')
               ->from('reach_us')
               ->where('user_id',$id)
               ->get();
 return $sql->num_rows();                     
 }


public function video_webpage($id){
 $sql= $this->db->select('*')
               ->from('video_webpage')
               ->where('user_id',$id)
               ->get();
 return $sql->row();                       
}


public function edit_language_list($id){
 $sql= $this->db->select('language_id')
               ->from('users')
               ->where('id',$id)
               ->get();
 return $sql->row();                       
}
 public function language($id){
   $sql= $this->db->select('language')
                 ->from('users')
                 ->where('id',$id)
                 ->get();

   return $sql->row();                       
 }
 
public function edit_expertise_list($id){
  
//echo $id; exit;
  $query=$this->db->select('id,expertise_id')
               ->from('users')
               ->where('id',$id)
               ->get();
  return $query->row();
}

public function skills_edit_list($id){
    $query=$this->db->select('id,skills_id')
                 ->from('users')
                 ->where('id',$id)
                 ->get();
    return $query->row();
}

public function industries_edit_list($id){

$query=$this->db->select('id,industries_id')
             ->from('users')
             ->where('id',$id)
             ->get();
return $query->row();
}


public function language_edit_list($id){

$query=$this->db->select('id,language_id')
             ->from('users')
             ->where('id',$id)
             ->get();
return $query->row();
}

public function insert_reach_us($id,$data){
       $this->db->where('user_id',$id);
return $this->db->insert('reach_us',$data);
}
public function insert_employment($id,$data){
         $this->db->where('user_id',$id);
 return $this->db->insert('employment_history',$data);
}

public function insert_social_accounts($id,$data){
 $this->db->where('user_id',$id);
return $this->db->insert('social_accounts',$data);
}
public function insert_language($id,$data){
 $this->db->where('id',$id);
return $this->db->insert('users',$data);
}
public function insert_video_webpage($id,$data){
 $this->db->where('user_id',$id);
return $this->db->insert('video_webpage',$data);
}
public function insert_education($id,$data){
 $this->db->where('user_id',$id);
return $this->db->insert('education',$data);
} 
public function insert_certificates($id,$data){
 $this->db->where('user_id',$id);
return $this->db->insert('certificates',$data);
}

public function fetch_column_value($table, $column_name, $where_array){
$sql = $this->db->select($column_name)
          ->from($table)
          ->where($where_array)
          ->get();
return $sql->row()->$column_name;
}


public function find_category(){
$query=$this->db->select('*')
       ->get('category');                 
return $query->result();

}
public function reach_us_list($id){
$query=$this->db->select('*')
       ->from('reach_us')
       ->where('user_id',$id)
       ->get();
return $query->row();
}
public function expertise_list(){
$query= $this->db->select('*')
       ->get('expertise');
return $query->result();
}

public function industries_list(){
$query= $this->db->select('*')
       ->get('industries');
return $query->result();

}

public function skills_list(){
$query= $this->db->select('*')
       ->get('skills');
return $query->result();
}

public function languages_list(){
$query= $this->db->select('*')
       ->get('languages');
return $query->result();
}

public function add_employment_history($id,$data)
{ 
$this->db->where('user_id',$id);
$this->db->insert('employment_history',$data);
}

public function add_education($id,$data)
{ 
$this->db->where('user_id',$id);
$this->db->insert('education',$data);
}

public function add_certificates($id,$data)
{ 
$this->db->where('user_id',$id);
$this->db->insert('certificates',$data);
}


public function add_image($id,$data)
{ 
$this->db->where('user_id',$id);
$this->db->insert('portfolio',$data);
}

public function num_rows(){
$id = $this->session->userdata('user_id');
$query=$this->db->select('*')
     ->where('user_id',$id)
      ->from(' portfolio')
      ->get();
      //print_r($this->db->last_query()) ; exit();

return $query->num_rows();
}

public function Indi_num_rows($id){
//$id = $this->session->userdata('user_id');
  //echo $id; exit();
$query=$this->db->select('*')
     ->where('user_id',$id)
      ->from(' portfolio')
      ->get();
      //print_r($this->db->last_query()) ; exit();

return $query->num_rows();
}
public function images_list($limit,$offset)
{
   //echo $offset; exit();
  $id = $this->session->userdata('user_id');
$query=$this->db->select('*')
       ->where('user_id',$id)
      ->from('portfolio')
      ->limit($limit,$offset)
      ->get();
//print_r($this->db->last_query()) ; exit();
return $query->result();

} 


public function num_images_list($id)
{
   //echo $id; exit();
  //$id = $this->session->userdata('user_id');
$query=$this->db->select('*')
       ->where('user_id',$id)
      ->from('portfolio')
      ->get();
//print_r($this->db->last_query()) ; exit();
return $query->num_rows();

} 
public function p_images_list($limit,$offset,$idi)
{  
  //echo $idi; exit();
 //$id = $this->session->userdata('user_id');
$query=$this->db->select('*')
       ->where('user_id',$idi)
      ->from('portfolio')
      ->limit($limit,$offset)
      ->get();
//print_r($this->db->last_query()) ; exit();
return $query->result();

} 
/*public function images_list($limit,$offset)
{
   //echo $offset; exit();
  $id = $this->session->userdata('user_id');
$query=$this->db->select('*')
       ->where('user_id',$id)
      ->from('portfolio')
      ->limit($limit,$offset)
      ->get();
//print_r($this->db->last_query()) ; exit();
return $query->result();

} */



public function language_list(){
  $query= $this->db->select('*')
                   ->get('languages');
      return $query->result();

}
public function pro_experience_list($id)
{
  //$user_id = $this->session->userdata('user_id');
  /*($user_id == 1) ? $cond = [] : $cond = ['n.user_id' => $user_id];*/
  $query=$this->db->select('experience.id ,experience.experience,users.id ,users.experience_id')
               /*->where($cond)*/
               ->where('users.id',$id)
               ->from('users')
               ->join('experience', 'experience.id = users.experience_id')
               ->get();
  //echo "<pre>", print_r($this->db->last_query()), exit;
  return $query->result();
}

public function team_project_list()
{
  $user_id = $this->session->userdata('user_id');
  /*($user_id == 1) ? $cond = [] : $cond = ['n.user_id' => $user_id];*/
  $query=$this->db->select('project.* ,users.id ,users.first_name,users.last_name, users.image,users.country,users.city,task.task_name,clients.clients_name')
               /*->where($cond)*/
               ->where('users.id',$user_id)
               ->from('project')
               ->join('users', 'users.id = project.user_id')
               ->join('task', 'task.id = project.task_id')
               ->join('clients', 'clients.id = project.clients_id')
               ->get();
  //echo "<pre>", print_r($this->db->last_query()), exit;
  return $query->result();
}

public function indivisual($id)
{
  //echo $id; exit();
  $query = $this->db->select('*')
                    ->where('id',$id)
                    ->get('users');
                      //echo "<pre>", print_r($this->db->last_query()), exit;

                     return $query->row();
}

  public function user_list()
     {
      //echo "<pre>", print_r($this->session->userdata()), exit;
       $id = $this->session->userdata('user_id');
       //echo "<pre>", print_r($id), exit;
       $parent_id = $this->session->userdata('parent_id');
       $not_in_array = [$id, $parent_id];
       //echo "<pre>", print_r($not_in_array), exit;
       //($user_id == 1) ? $cond = [] : $cond = ['users.user_id' => $user_id];
        $query=$this->db->select('users.id as teamid ,users.user_id , users.first_name, users.last_name,users.image,users.company ,users.country ,users.city , users.email ,users.active,users.created_on,team_role.role_name,project.project_name,project.id,project.start_date,project.due_date,project.project_image,project.internal_cost,project.external_cost,status.status,priority.priority_name,clients.clients_name')
            ->where_not_in('users.id', $not_in_array)
             ->where(['users.user_id' => $parent_id])
              ->from('users')
               ->join('team_role','users.team_role_id = team_role.id')
               ->join('project','users.project_id = project.id')
                ->join('priority','project.priority_id = priority.id')
               ->join('clients','project.clients_id = clients.id')
               ->join('status','project.status_id = status.id')
              // ->join('reach_us','reach_us.user_id = users.id')
                
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;
 //echo "<pre>", print_r($query->result()), exit;
   return $query->result();
     }
    




    function find_task($value='')
    {
       $id = $this->session->userdata('user_id');
       //echo "<pre>", print_r($id), exit;
       $parent_id = $this->session->userdata('parent_id');
       $not_in_array = [$id, $parent_id];
       $query=$this->db->select('task.task_name,task.id')
             ->where_not_in('users.id', $not_in_array)
             ->where(['users.user_id' => $parent_id])
              ->from('task')
               //->join('team_role','users.team_role_id = team_role.id')
               ->join('project','task.project_id = project.id')
                //->join('priority','project.priority_id = priority.id')
              /// ->join('clients','project.clients_id = clients.id')
               //->join('status','project.status_id = status.id')
                
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;
 //echo "<pre>", print_r($query->result()), exit;
   return $query->result();

    }

     function task_project($idd)
    { 
           //echo $idd;  
       $data= explode(',', $idd);

         // echo'<pre>'; print_r($data);exit();
       foreach ($data as $id) {
       $query=$this->db->select('task.task_name,task.id')
                        ->where('project_id',$id)
                        ->get('task');
                         return $query->result();
       }
    }

      function team_task_project($teamid)
    { 
           //echo $teamid;  
       $data= explode(',', $teamid);

        //  echo'<pre>'; print_r($data);exit();
       foreach ($data as $id) {
       $query=$this->db->select('task.task_name,task.id,task.start_date,task.due_date,status.status,priority.priority_name,project.project_name')
                        ->where('task_team.team_id',$id)
                        ->join('task','task.id = task_team.task_id')
                        ->join('project','project.id = task.project_id')
                        ->join('status', 'status.id = task.status_id')
                   ->join('priority', 'priority.id = task.priority_id')
                         ->from('task_team')
                        ->get();
                        // echo "<pre>", print_r($query->result()), exit;
                         return $query->result();
       }
      //$query=$this->db->select('task.task_name,task.id')
     
    }


  public function team_list($teamid)
     {
         $data= explode(',', $teamid);

         // echo'<pre>'; print_r($data);exit();
       foreach ($data as $id) { 

       // echo $id;
        $query=$this->db->select('users.id , users.first_name, users.last_name,users.company , users.email ,users.image,users.created_on,project.project_name,project.priority_id,project.status_id,team_role.role_name')
             ->where('users.id',$id)
              ->from('users')
            //  ->join('priority','project.priority_id = priority.id')
             // ->join('team_role','users.team_role_id = team_role.id')
              ->join('project','users.project_id = project.id')
                  ->join('team_role','users.team_role_id = team_role.id')
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;
 
   return $query->result();
     }
        }
    function reach_us($teamid)
    {
      //echo $teamid;
      $query=$this->db->select('mail,skype,linkdien,phone')
          
             ->where(['reach_us.user_id' => $teamid])
              ->from('reach_us')
              
              // ->join('reach_us','reach_us.user_id = users.id')
                
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;
 //echo "<pre>", print_r($query->result()), exit;
   return $query->result();
    }


      public function task_list()
{  //select * from users where uname=$uname and pword=$pword
  $id = $this->session->userdata('user_id');
       //echo "<pre>", print_r($id), exit;
       $parent_id = $this->session->userdata('parent_id');
       $not_in_array = [$id, $parent_id];

  $query=$this->db->select('t.id,t.task_name,t.task_details,t.created_at,p.project_name')
              ->from('task t')
                ->where_not_in('users.id', $not_in_array)
             ->where(['users.user_id' => $parent_id])
              ->join('project p', 'p.id = t.project_id')
              ->get();
              echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();

}  


   }