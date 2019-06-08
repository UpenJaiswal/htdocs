<?php

class Experience_Model extends CI_Model{

public function experience_list()
{  
  $query=$this->db->select('*')
              ->from('experience')
              ->get();
   return $query->result();
    //print_r($this->db->last_query()) ; exit();

}


public function add_experience($post)
{  

 return $this->db->insert('experience',$post);
}



public function find_experience($id)
{
  $query = $this->db->select('*')
                    ->where('id',$id)
                    ->get('experience');
         //print_r($this->db->last_query()) ; exit();
       return $query->row();
}

public function edit_experience($post,$id)
{
   if($this->db->where(['id'=>$id])
               ->update('experience',$post))

    return true;
  else
  {
    return false;
  }
}

public function delete_experience($id){
  $this->db->delete('experience',['id'=>$id]);
}
}