<?php

class Portfolio_model extends CI_Model{

        public function portfolio_list()
          {
            $user_id = $this->session->userdata('user_id');
            ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
            $query=$this->db->select('*')
                         ->where($cond)
                         ->from('portfolio')
                         ->get();
            //echo "<pre>", print_r($this->db->last_query()), exit;
            return $query->result();
          }

      public function add_portfolio($post)
      {  
       return $this->db->insert('portfolio',$post);
      }

     public function edit_portfolio_list($id)
     {
      $query=$this->db->select('*')
                         ->from('portfolio')
                         ->where('id', $id)
                         ->get();
      return $query->row();
    }

    public function find_portfolio($id)
     {
        $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
         $query = $this->db->select('*')
                    ->where(['id'=>$id])
                    ->where($cond)
                    ->get('portfolio');
        //print_r($this->db->last_query()) ; exit();
       return $query->row();
     }
   
       
    public function delete_news($id)
      {
        $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
            $this->db->where(['id'=>$id])
                     ->where($cond);
           return $this->db->delete('news');
      }

     public function edit_portfolio($data,$id)
          { 
             if($this->db->where(['id'=>$id]) 
                        ->update('portfolio',$data))
              return true;
            else
            {
              return false;
            }
                 //print_r($this->db->last_query()) ; exit();
          }


     public function fetch_column_value($table, $column_name, $where_array)
        {
          $sql = $this->db->select($column_name)
                          ->from($table)
                          ->where($where_array)
                          ->get();
          return $sql->row()->$column_name;
        }
 

     public function find_category()
       {
          $query=$this->db->select('*')
                       //>where('news.id',$id)
                       ->get('category');
                       
           return $query->result();

       }

       ////////////////////////////////////Web section//////////////////////////////////////////////
       public function web_news_list()
          {
            
            $query=$this->db->select('u.id as userr_id,u.first_name,c.id as cat_id,c.category_name,n.id as news_id,n.news_title,n.news_detail,n.category_id,n.news_image,n.user_id,n.created_at')
                         ->from('news n')
                         ->join('category c', 'c.id = n.category_id')
                         ->join('users u', 'u.id = n.user_id')
                         ->get();
            //echo "<pre>", print_r($this->db->last_query()), exit;
            return $query->result();
          }

             public function news_details($news_id)
               { 
                //echo $blog_id; exit();
                $query=$this->db->select('u.id as userr_id,u.first_name,n.id as news_id,n.news_title,n.news_detail,n.news_image,c.id as cat_id,c.category_name,n.user_id,n.created_at')
                           ->where('n.id',$news_id)
                           ->from('news n')
                           ->join('category c', 'c.id = n.category_id')
                           ->join('users u', 'u.id = n.user_id')
                           ->get();
             // echo "<pre>", print_r($this->db->last_query()), exit;
              return $query->row(); 

              } 

                 public function recent_post()
              {
               $query = $this->db->select('id,news_title,news_image,created_at')
                      ->order_by('id','desc')
                      ->get('news'); 
  //print_r($this->db->last_query()) ; exit();
                 return $query->result();
            }
 }