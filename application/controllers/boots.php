<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class boots extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('student_model','students');
	}
	public function index()
	{
		$rs = $this->students->read();

		foreach($rs as $r)
		{
			$info = array(
						'idno' => $r['idno'],
						'lname' => $r['lname'],
						'fname' => $r['fname'],
						'mname' => $r['mname'],
						'course' => $r['course'],
						'sex' => $r['sex']					
						);
			$students[] = $info;
		}
		
		$data['students'] = $students;
		$header_data['title'] = "Student Management System";
		$this->load->view('include/header1',$header_data);
		$this->load->view('students/content',$data);
		$this->load->view('include/footer');
	}
	
	public function add_student()
		{
			$data = array();
			if($_SERVER['REQUEST_METHOD']=='POST')
			{
				$validate = array (
				array('field'=>'idno','label'=>'ID No','rules'=>'trim|required|min_length[2]'),
				array('field'=>'lname','label'=>'Last Name','rules'=>'trim|required|min_length[2]'),
				array('field'=>'fname','label'=>'First Name','rules'=>'trim|required|min_length[2]'),
				//array('field'=>'email','label'=>'Email Address','rules'=>'trim|required|is_unique[students.email]|valid_email|min_length[10]'),
			);
				$this->form_validation->set_rules($validate);
				
			if ($this->form_validation->run()===FALSE)
			{
				$data['errors'] = validation_errors();
			}
			else{ //save the form
				
				//check for duplicate
				$record = array(
								'idno'=>$_POST['idno'],
								'lname'=>$_POST['lname'],
								'fname'=>$_POST['fname'],
								'mname'=>$_POST['mname'],
								'course'=>$_POST['course'],
								'sex'=>$_POST['sex'],
							);
							
				$insert_id = $this->students->create($record);
				
				$data['saved'] = TRUE;
				
			}
			}
		
			else
			{
				
			}
			
		$header_data['title'] = "Add New Student";	
		$this->load->view('include/header1',$header_data);
		$this->load->view('students/new_student', $data);
		$this->load->view('include/footer');
		}
		
		
}
?>