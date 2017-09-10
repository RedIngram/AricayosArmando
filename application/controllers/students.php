<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class students extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('student_model','students');
	}
	public function index()
	{
		
		$students= array();
		
		$rs = $this-> students->read();
		$data['students']= $rs;	
		$this -> load -> view('include/header');
		$this -> load -> view('students/view_student',$data);
		$this -> load -> view('include/footer');
	}
	
	public function profile($id)
	{
	
		
			$student= $this-> students->read(array('idno'=>$id));
			if (count($student)>0)
			{
			$data['student'] = $student;
			$this -> load-> view('include/header');
			$this -> load-> view('students/profile',$data);
			$this -> load-> view('include/footer');
			}
			
			else
			{
				redirect('students','refresh');
			}

	}
}
?>