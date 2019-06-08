<?php

class Languages_model extends CI_Model{

public function languages_list()
{  //select * from users where uname=$uname and pword=$pword
  $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];

  $query=$this->db->select('*')
              ->from('languages')
              ->order_by('id','desc')
              ->where($cond)
              ->get();
   return $query->result();

}

public function add_languages($post)
{  
 return $this->db->insert('languages',$post);
}


public function find_languages($id)
{
        $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
         $query = $this->db->select('*')
                    ->where(['id'=>$id])
                    ->where($cond)
                    ->get('languages');
        //print_r($this->db->last_query()) ; exit();
       return $query->row();
}


public function edit_languages($post,$id)
{
   if($this->db->where(['id'=>$id])
               ->update('languages',$post))

    return true;
  else
  {
    return false;
  }
}

    public function delete_languages($id){      
            $this->db->where(['id'=>$id]);
           return $this->db->delete('languages');

        }
   }