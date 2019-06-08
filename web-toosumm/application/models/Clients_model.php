<?php

class Clients_model extends CI_Model{
public function clients_list()
{  //select * from users where uname=$uname and pword=$pword
  $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];

  $query=$this->db->select('*')
              ->from('clients')
              ->order_by('id','desc')
              ->where($cond)
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();

}  
public function clients_web_list()
{
       $id = $this->session->userdata('user_id');
       $parent_id = $this->session->userdata('parent_id');
       $not_in_array = [$id, $parent_id];
       $query=$this->db->select('*')
             // ->order_by('id ','desc')
            // ->where_not_in('p.user_id', $not_in_array)
             ->where(['clients.user_id' => $parent_id])
              ->from('clients')
             // ->join('users u', 'u.id = p.user_id')
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();
}
public function add_clients($post)
{  

 return $this->db->insert('clients',$post);
}


public function find_category($id)
{
  $query = $this->db->select('*')
                    ->where('id',$id)
                    ->get('category');
         //print_r($this->db->last_query()) ; exit();
       return $query->row();
}

public function find_clients($id)
{
  $query = $this->db->select('*')
                    ->where('id',$id)
                    ->get('clients');
         //print_r($this->db->last_query()) ; exit();
       return $query->row();
}
     
public function delete_clients($id)
{
return $this->db->delete('clients',['id'=>$id]);
}

public function edit_clients($data,$id)
{

   if($this->db->where('id',$id)
             ->update('clients',$data))

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
   public function check_clients_name_exists($where_array){
      $query = $this->db->get_where('clients', $where_array);
        return $query->num_rows();
    }

    public function delete($id) {
      $this->db->where('id', $id);
      $this->db->delete('clients');
      }

   }