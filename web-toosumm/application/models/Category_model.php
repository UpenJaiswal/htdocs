<?php

class Category_model extends CI_Model{

public function category_list()
{  //select * from users where uname=$uname and pword=$pword
  $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];

  $query=$this->db->select('*')
              ->from('category')
              ->order_by('id','desc')
              ->where($cond)
              ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;

   return $query->result();

}  

public function add_category($post)
{  

 return $this->db->insert('category',$post);
}


public function find_category($id)
{
  $query = $this->db->select('*')
                    ->where('id',$id)
                    ->get('category');
         //print_r($this->db->last_query()) ; exit();
       return $query->row();
}
     
public function delete_category($id)
{
return $this->db->delete('category',['id'=>$id]);
}

public function edit_category($data,$id)
{

   if($this->db->where('id',$id)
             ->update('category',$data))

    return true;
  
  else
  {
    return false;
  }

}



   }