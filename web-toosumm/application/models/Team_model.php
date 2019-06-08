<?php

class Team_model extends CI_Model{

public function team_list()
{  //select * from users where uname=$uname and pword=$pword
	$user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
	$query=$this->db->select('*')
	            ->from('team')
              ->where($cond)
	            ->get();
	 return $query->result();

}   

public function add_team($add)
{  
 return  $this->db->insert('team',$add);
}


public function find_team($id)
{
       $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
         $query = $this->db->select('*')
                    ->where(['id'=>$id])
                    ->where($cond)
                    ->get('team');
       return $query->row();
}
     
public function delete_team($id)
{
  $user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
         $this->db->where(['id'=>$id])
                  ->where($cond);
  return $this->db->delete('team');}

public function edit_team($data,$id)
{

   if($this->db->where('id',$id)
             ->update('team',$data))
    return true;
  else
  {
    return false;
  }
}


public function fetch_column_value($table, $column_name, $where_array)
{
  $sql = $this->db->select($column_name)
                  ->from($table)
                  ->where($where_array)
                  ->get();
  return $sql->row()->$column_name;
}
////////////////////////////////////////Web section/////////////////////////////////

    public function web_team_list()
       {  
    $query=$this->db->select('*')
                ->from('team')
                    ->get();
     return $query->result();

      } 

   public function recent_post()
{
   $query = $this->db->select('id,blog_name,created_at')
                      ->order_by('id','desc')
                      ->get('blog',5); 
  //print_r($this->db->last_query()) ; exit();
return $query->result();
}

        public function blog_details($blog_id)
       { 
        //echo $blog_id; exit();
        $query=$this->db->select('u.id as userr_id,u.first_name,b.id as blog_id,b.blog_name,b.blog_detail,b.blog_image,b.user_id,b.created_at')
                   ->where('b.id',$blog_id)
                   ->from('blog b')
                   ->join('users u', 'u.id = b.user_id')
                   ->get();
     // echo "<pre>", print_r($this->db->last_query()), exit;
      return $query->row(); 
    $query=$this->db->select('*')
                ->from('blog')
                 ->where('id',$id)
                ->get();
     return $query->row();

      } 
   }