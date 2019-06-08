<?php

class Skills_Model extends CI_Model{

public function skills_list()
{  //select * from users where uname=$uname and pword=$pword
  $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];

  $query=$this->db->select('*')
              ->from('skills')
              ->order_by('id','desc')
              ->where($cond)
              ->get();
   return $query->result();

}

public function add_skills($post)
{  
 return $this->db->insert('skills',$post);
}


public function find_skills($id)
{
        $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
         $query = $this->db->select('*')
                    ->where(['id'=>$id])
                    ->where($cond)
                    ->get('skills');
        //print_r($this->db->last_query()) ; exit();
       return $query->row();
}


public function edit_skills($post,$id)
{
   if($this->db->where(['id'=>$id])
               ->update('skills',$post))

    return true;
  else
  {
    return false;
  }
}
  
public function delete_skills($id){
  $this->db->delete('skills',['id'=>$id]);
}

   }