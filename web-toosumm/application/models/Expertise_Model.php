<?php

class Expertise_Model extends CI_Model{

public function AreasOfExpertiseList()
{  //select * from users where uname=$uname and pword=$pword
  $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];

  $query=$this->db->select('*')
              ->from('expertise')
              ->order_by('id','desc')
              ->where($cond)
              ->get();
   return $query->result();

}

public function AddAreasOfExpertise($post)
{  

 return $this->db->insert('expertise',$post);
}


public function find_expertise($id)
{
        $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
         $query = $this->db->select('*')
                    ->where(['id'=>$id])
                    ->where($cond)
                    ->get('expertise');
        //print_r($this->db->last_query()) ; exit();
       return $query->row();
}


public function edit_expertise($post,$id){
   if($this->db->where(['id'=>$id])
               ->update('expertise',$post))

    return true;
  else
  {
    return false;
  }
}

 public function delete_expertise($id){
   return  $this->db->delete('expertise',['id'=>$id]);
 }

   }