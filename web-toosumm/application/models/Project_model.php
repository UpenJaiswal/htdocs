<?php

class Project_model extends CI_Model{


public function project_list()
{  //select * from users where uname=$uname and pword=$pword
  $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['p.user_id ' => $user_id];

  $query=$this->db->select('p.id,p.project_name,p.start_date,p.due_date,p.project_image,p.created_at,s.status,pr.priority_name,c.clients_name')
              ->from('project p')
              ->order_by('id ','desc')
              ->where($cond)
              ->join('status s', 's.id = p.status_id')
              ->join('priority pr', 'pr.id = p.priority_id')
              ->join('clients c', 'c.id = p.clients_id')
             // ->join('users u', 'u.id = p.user_id')
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();

} 

public function workroom_project_list($id)
{  //select * from users where uname=$uname and pword=$pword
  //echo $id; exit();

  $query=$this->db->select('p.id,p.project_name,p.start_date as project_startdate,p.due_date as project_duedate,p.project_image,p.created_at,s.status,pr.priority_name,c.clients_name,t.id as taskid,t.task_name,t.start_date,t.due_date')
              ->from('project p')
              ->order_by('id ','desc')
              ->where('p.id',$id)
              ->join('status s', 's.id = p.status_id')
              ->join('priority pr', 'pr.id = p.priority_id')
              ->join('clients c', 'c.id = p.clients_id')
              ->join('task t', 't.project_id= p.id')
              ->get();
             // echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();

}   
public function project_web_list()
{
 $id = $this->session->userdata('user_id');
       $parent_id = $this->session->userdata('parent_id');
              //echo "<pre>", print_r($parent_id), exit;

       $not_in_array = [$id, $parent_id];
  $query=$this->db->select('p.id,p.project_name,p.start_date,p.due_date,p.project_image,p.created_at,s.status,pr.priority_name,c.clients_name')
              ->from('project p')
             // ->order_by('id ','desc')
            // ->where_not_in('p.user_id', $not_in_array)
             ->where(['p.user_id' => $parent_id])
              ->join('status s', 's.id = p.status_id')
              ->join('priority pr', 'pr.id = p.priority_id')
              ->join('clients c', 'c.id = p.clients_id')
             // ->join('users u', 'u.id = p.user_id')
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();
}


public function task_list_user($id)
{  //select * from users where uname=$uname and pword=$pword
  //echo $id; exit();

 $query=$this->db->select('task.task_name,users.first_name')
              ->from('task')
              ->order_by('id ','desc')
              ->where('task.project_id',$id)
              ->join('task_team', 'task_team.task_id= task.id')
              ->join('users', 'users.id= p.id')
              ->get();
              echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();

}

public function add_project($post)
{   

 return $this->db->insert('project',$post);
   //$project_id = $this->db->insert_id();

 //$team_id=$post['team_id'];
 // $data  = explode(',', $team_id);
  /*foreach ($data as  $value) {
   $this->db->insert('project_team',['project_id'=>$project_id,'team_id'=>$value]);

  }
*/
}




 public function find_project($id){
        $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
         $query = $this->db->select('*')
                    ->where(['id'=>$id])
                    ->where($cond)
                    ->get('project');
       return $query->row();
     }

 public function find_status()
       {
          $query=$this->db->select('*')
                       //>where('news.id',$id)
                       ->get('status');
                       
           return $query->result();

       }

public function find_task()
       {
          $query=$this->db->select('*')
                       //>where('news.id',$id)
                       ->get('task');
                       
           return $query->result();

       }
     

public function find_priority()
 {
    $query=$this->db->select('*')
                 //>where('news.id',$id)
                 ->get('priority');
                 
     return $query->result();

 }

 public function find_clients()
 {
   $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['clients.user_id' => $user_id];
    $query=$this->db->select('*')
                ->order_by('id','desc')
              ->where($cond)
                 ->get('clients');
                 
     return $query->result();

 }
 public function team_list(){
    $query = $this->db->select('*')
                      ->from('team')
                      ->get();
    return $query->result();

  }
     
public function delete_project($id)
{

 // echo $id; exit();
 $this->db->delete('project',['id'=>$id]);
 $this->db->delete('project_team',['project_id'=>$id]);


}





public function edit_project($data,$id){
  $this->db->where('id',$id)
           ->update('project',$data);
  //$team_id=$data['team_id'];
 // $data  = explode(',', $team_id);
  //$this->db->delete('project_team',['project_id'=>$id]);
  //foreach ($data as  $value) {
  // $this->db->insert('project_team',['project_id'=>$id,'team_id'=>$value]);

 // }
}
  public function delete($id)
 {

  $this->db->where('id', $id);
  $this->db->delete('project');
 }


public function check_project_name_exists($where_array){
      $query = $this->db->get_where('project', $where_array);
        return $query->num_rows();
    }
  }