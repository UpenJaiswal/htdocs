<?php

class Industries_Model extends CI_Model{

public function industries_list()
{  //select * from users where uname=$uname and pword=$pword
  $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];

  $query=$this->db->select('*')
              ->from('industries')
              ->order_by('id','desc')
              ->where($cond)
              ->get();
   return $query->result();

}

public function add_industries($post)
{  
 return $this->db->insert('industries',$post);
}


public function find_industries($id)
{
        $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
         $query = $this->db->select('*')
                    ->where(['id'=>$id])
                    ->where($cond)
                    ->get('industries');
        //print_r($this->db->last_query()) ; exit();
       return $query->row();
}


public function edit_industries($post,$id)
{
   if($this->db->where(['id'=>$id])
               ->update('industries',$post))

    return true;
  else
  {
    return false;
  }
}
  public function delete_industries($id) {
             $this->db->where(['id'=>$id]);
      return $this->db->delete('industries');

    }

   }