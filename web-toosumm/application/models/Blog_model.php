<?php

class Blog_model extends CI_Model{

public function blog_list()
{  //select * from users where uname=$uname and pword=$pword
	$user_id = $this->session->userdata('user_id');
  ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];

	$query=$this->db->select('*')
	            ->from('blog')
              ->order_by('id','desc')
              ->where($cond)
	            ->get();
              //echo "<pre>", print_r($this->db->last_query()), exit;

	 return $query->result();

}   


public function add_blog($add)
{  
 return  $this->db->insert('blog',$add);
}


public function find_blog($id)
{
        $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
         //$array = array('id' => $id,$cond); 
  //echo "<pre>", print_r($cond), exit;
         $query = $this->db->select('*')
                    ->where(['id'=>$id])
                    ->where($cond)
                    ->get('blog');
        //print_r($this->db->last_query()) ; exit();
       return $query->row();
}
     
public function delete_blog($id)
{
        $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
            $this->db->where(['id'=>$id])
                     ->where($cond);
           return $this->db->delete('blog');}

public function edit_blog($data,$id)
{

   if($this->db->where('id',$id)
             ->update('blog',$data))
    return true;
  else
  {
    return false;
  }
}


///////////////////////////////////////////Web Section/////////////////////

   public function recent_post()
     {
               $query = $this->db->select('id,blog_name,blog_image,created_at')
                      ->order_by('id','desc')
                      ->get('blog',5); 
  //print_r($this->db->last_query()) ; exit();
                 return $query->result();
    }

      public function web_blog_list()
       {  
    $query=$this->db->select('u.id as userr_id,u.first_name,b.id as blog_id,b.blog_name,b.blog_detail,b.blog_image,b.user_id,b.created_at')
                ->from('blog b')
                ->join('users u', 'u.id = b.user_id')
                    ->get();
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

      } 
   }