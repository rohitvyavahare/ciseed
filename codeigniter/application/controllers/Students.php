<?php

class Students extends CI_Controller {

function Thiscontroller()
{
	parent::Controller();
	$this->load->database(); 
	$this->load->model('StudentDb');
}

public function one(){
	echo " I am one";
}

public function ShowResult(){
	 $this->load->view('students');
}
public function getStudents() {
	$this->load->model('StudentDb');           
    $query['data'] = $this->StudentDb->getStudents();
    $this->load->view('studentresult', $query);
}

public function saveStudent(){
                    
  
    $password = $this->input->post("password");
    $username = $this->input->post("user_name");

    //$query['data'] = $username.":".$password;
 	//$this->load->view('result',  $query);   
	$this->load->model('StudentDb'); 

	$this->StudentDb->setStudents($username,$password);     

}

}