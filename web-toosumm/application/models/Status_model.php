<?php

class Status_model extends CI_Model{


public function status_list()
{  //select * from users where uname=$uname and pword=$pword
  $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];

  $query=$this->db->select('*')
              ->from('status')
              ->order_by('id','desc')
              ->where($cond)
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();

}  

public function add_status($post)
{  

 return $this->db->insert('status',$post);
}


public function find_status($id)
{
  $query = $this->db->select('*')
                    ->where('id',$id)
                    ->get('status');
         //print_r($this->db->last_query()) ; exit();
       return $query->row();
}


     
public function delete_status($id)
{
return $this->db->delete('status',['id'=>$id]);
}

public function edit_status($data,$id)
{

   if($this->db->where('id',$id)
             ->update('status',$data))

    return true;
  
  else
  {
    return false;
  }

 }

 public function check_status_exists($where_array){
      $query = $this->db->get_where('status', $where_array);
        return $query->num_rows();
    }

  
}