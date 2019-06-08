
<?php  

	class Home_model extends CI_Model
	{
        public function insert_contact_us($form_data)
		{
			$this->db->insert('user_contact', $form_data);
			return $this->db->affected_rows();
		}
		
        public function products_list()
	     {  
		$query=$this->db->select('*')
		            ->from('products')
		            ->get();
		 return $query->result();

	    } 
	      public function product_details($id)
	     {  
		$query=$this->db->select('*')
		            ->from('products')
		             ->where('id',$id)
		            ->get();
		 return $query->row();

	    } 

	     public function num_rows()
		   {
			$query=$this->db->select('*')
			            ->from('products')
			            ->get();
			 return $query->num_rows();

		   } 

		   public function product_list($limit,$offset)
				{  
					$query=$this->db->select('*')
					            ->from('products')
					            ->limit($limit,$offset)
					            ->get();
					 return $query->result();

				}    
		}

?>