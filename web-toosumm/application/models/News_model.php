<?php

class News_model extends CI_Model{

        public function news_list(){
            $user_id = $this->session->userdata('user_id');
            ($user_id == 1) ? $cond = [] : $cond = ['n.user_id' => $user_id];
            $query=$this->db->select('c.id as cat_id,c.category_name,n.id as news_id,n.news_title,n.news_detail,n.category_id,n.news_image,n.user_id,n.created_at')
                         ->where($cond)
                         ->from('news n')
                         ->join('category c', 'c.id = n.category_id')
                         ->get();
            //echo "<pre>", print_r($this->db->last_query()), exit;
            return $query->result();
          }

      public function add_news($post){  
       return $this->db->insert('news',$post);
      }

     public function edit_news_list($id){
      $query=$this->db->select('*')
                         ->from('news')
                         ->where('id', $id)
                         ->get();
      return $query->row();
    }

    public function find_news($id){
        $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
         $query = $this->db->select('*')
                    ->where(['id'=>$id])
                    ->where($cond)
                    ->get('news');
       return $query->row();
     }
   
       
    public function delete_news($id){
        $user_id = $this->session->userdata('user_id');
        ($user_id == 1) ? $cond = [] : $cond = ['user_id' => $user_id];
            $this->db->where(['id'=>$id])
                     ->where($cond);
           return $this->db->delete('news');
      }

     public function edit_news($data,$id){
             if($this->db->where(['id'=>$id]) 
                        ->update('news',$data))
              return true;
              else
              {
                return false;
              }
          }


     public function fetch_column_value($table, $column_name, $where_array){
          $sql = $this->db->select($column_name)
                          ->from($table)
                          ->where($where_array)
                          ->get();
          return $sql->row()->$column_name;
        }
 

     public function find_category(){
          $query=$this->db->select('*')
                       ->get('category');                       
          return $query->result();

       }

       ///////////////////////////Web section//////////////////
     public function web_news_list(){            
          $query=$this->db->select('u.id as userr_id,u.first_name,c.id as cat_id,c.category_name,n.id as news_id,n.news_title,n.news_detail,n.category_id,n.news_image,n.user_id,n.created_at')
                       ->from('news n')
                       ->join('category c', 'c.id = n.category_id')
                       ->join('users u', 'u.id = n.user_id')
                       ->get();
          //echo "<pre>", print_r($this->db->last_query()), exit;
          return $query->result();
        }

       public function news_details($news_id){ 
          $query=$this->db->select('u.id as userr_id,u.first_name,n.id as news_id,n.news_title,n.news_detail,n.news_image,c.id as cat_id,c.category_name,n.user_id,n.created_at')
                     ->where('n.id',$news_id)
                     ->from('news n')
                     ->join('category c', 'c.id = n.category_id')
                     ->join('users u', 'u.id = n.user_id')
                     ->get();
        return $query->row(); 

              } 

         public function recent_post(){
             $query = $this->db->select('id,news_title,news_image,created_at')
                    ->order_by('id','desc')
                    ->get('news'); 
               return $query->result();    
             }
 }