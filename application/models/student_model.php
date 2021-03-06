<?php
	class student_model extends CI_Model
	{
		private $table= "student";
		private $table1= "courses";
		
		public function create($data)
		{
			$this->db->insert($this->table, $data);
			return TRUE;
		}
		
		public function read($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this-> table);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		 
		}
		
		public function update()
		{
			$this->db->where($data);
			$this->db->update($this->table, $data);
			return TRUE;	
		}
		
		public function del()
		{
			$this->db->where($data);
			$this->db->delete($this->table);
			return TRUE;	
		}
			
		public function read_course($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this-> table1);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		 
		}
		public function create_course($data)
		{
			$this->db->insert($this->table1, $data);
			return TRUE;
		}
		
		public function all_course()
		{
			$query = $this->db->query('SELECT name FROM courses');
			return $query->result();
		}
	}
?>