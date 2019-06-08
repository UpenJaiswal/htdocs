<?php

class Task_model extends CI_Model{


public function task_list()
{  //select * from users where uname=$uname and pword=$pword
  $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['t.user_id' => $user_id];

  $query=$this->db->select('t.id,t.task_name,t.task_details,t.start_date,t.due_date,t.created_at,p.project_name,s.status,pr.priority_name')
              ->from('task t')
              ->order_by('id','desc')
              ->where($cond)
               ->join('status s', 's.id = t.status_id')
              ->join('priority pr', 'pr.id = t.priority_id')
              ->join('project p', 'p.id = t.project_id')
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();

}  

public function web_task_list($id)
{ 

  //echo $id; exit();
  $query=$this->db->select('t.id,t.task_name,t.task_details,t.start_date,t.due_date,t.created_at,p.project_name')
              ->from('task t')
            //  ->order_by('id','desc')
              ->where(['t.project_id' => $id])
              ->join('project p', 'p.id = t.project_id')
              ->get();
             //echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();

} 

public function add_task($post){  
 $this->db->insert('task',$post);
  $task_id = $this->db->insert_id();
 $team_id=$post['team_id'];
  $data  = explode(',', $team_id);
  foreach ($data as  $value) {
   $this->db->insert('task_team',['task_id'=>$task_id,'team_id'=>$value]);

  }
}


public function find_category($id)
{
  $query = $this->db->select('*')
                    ->where('id',$id)
                    ->get('category');
         //print_r($this->db->last_query()) ; exit();
       return $query->row();
}

public function find_task($id)
{
  $query = $this->db->select('*')
                    ->where('id',$id)
                    ->get('task');
         //print_r($this->db->last_query()) ; exit();
       return $query->row();
}
     
public function delete_task($id)
{
 $this->db->delete('task',['id'=>$id]);
 $this->db->delete('task_team',['task_id'=>$id]);

}

public function edit_task($data,$id){
   $this->db->where('id',$id)
           ->update('task',$data);
  $team_id=$data['team_id'];
  $data  = explode(',', $team_id);
  $this->db->delete('task_team',['task_id'=>$id]);
  foreach ($data as  $value) {
   $this->db->insert('task_team',['task_id'=>$id,'team_id'=>$value]);
}
}
public function edit_role($data,$id)
{

   if($this->db->where('id',$id)
             ->update('team_role',$data))

    return true;
  
  else
  {
    return false;
  }

}

    public function check_task_name_exists($where_array){
      $query = $this->db->get_where('task', $where_array);
        return $query->num_rows();
    }

public function delete($id)
 {

  $this->db->where('id', $id);
  $this->db->delete('task');
 }

public function task_team_list($id)
{
  $query = $this->db->select('team_id')
                    ->where('id',$id)
                    ->get('task');
         //print_r($this->db->last_query()) ; exit();
       return $query->row();
}

 function task_team($idd)
    {
  //echo $idd .'<br>'; 
        $query=$this->db->select('users.first_name,users.image')
            // ->where_not_in('users.id', $not_in_array)
            // ->where(['project_team.team_id' => $id])
             ->where(['task.id' => $idd])
              ->from('task_team')
               ->join('users','task_team.team_id = users.id')
               ->join('task','task_team.task_id = task.id')
               //->join('task','task_team.task_id = clients.id')
               //->join('status','project.status_id = status.id')
             //  ->join('project_team','project.id = project_team.project_id')
                
              ->get();
             // echo "<pre>", print_r($this->db->last_query()), exit;
 //echo "<pre>", print_r($query->result()), exit;
return $query->result(); 
}

 function project_task_team($idd)
    {
 // echo $idd .'<br>'; 
        $query=$this->db->select ('users.first_name,users.image,project.project_name')
                        ->group_by('first_name')
            // ->where_not_in('users.id', $not_in_array)
            // ->where(['project_team.team_id' => $id])
             ->where(['task.id' => $idd])
              ->from('task_team')
               ->join('users','task_team.team_id = users.id')
               ->join('task','task_team.task_id = task.id')
               ->join('project','project.id = task.project_id')
               //->join('status','project.status_id = status.id')
             //  ->join('project_team','project.id = project_team.project_id')
                
              ->get();
             // echo "<pre>", print_r($this->db->last_query()), exit;
 //echo "<pre>", print_r($query->result()), exit;
return $query->result(); 
}
 public function find_project()
       {
           $user_id = $this->session->userdata('user_id');
           ($user_id == 1) ? $cond = [] : $cond = ['project.user_id' => $user_id];
           $query=$this->db->select('*')
                       ->order_by('id','desc')
                       ->where($cond)
                       ->get('project');
           return $query->result();
       }
   }