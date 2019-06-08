<?php

class Priority_model extends CI_Model{


public function priority_list()
{  //select * from users where uname=$uname and pword=$pword
  $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];

  $query=$this->db->select('*')
              ->from('priority')
              ->order_by('id','desc')
              ->where($cond)
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();

}  

public function add_priority($post)
{  

 return $this->db->insert('priority',$post);
}


public function find_category($id)
{
  $query = $this->db->select('*')
                    ->where('id',$id)
                    ->get('category');
         //print_r($this->db->last_query()) ; exit();
       return $query->row();
}

public function find_priority($id)
{
  $query = $this->db->select('*')
                    ->where('id',$id)
                    ->get('priority');
         //print_r($this->db->last_query()) ; exit();
       return $query->row();
}
     
public function delete_priority($id)
{
return $this->db->delete('priority',['id'=>$id]);
}

public function edit_priority($data,$id)
{

   if($this->db->where('id',$id)
             ->update('priority',$data))

    return true;
  
  else
  {
    return false;
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

    public function check_priority_name_exists($where_array){
      $query = $this->db->get_where('priority', $where_array);
        return $query->num_rows();
    }

public function delete($id)
 {

  $this->db->where('id', $id);
  $this->db->delete('priority');
 }

   }