<?php

class StudentDb extends CI_Model
{
function Messages()
{
    parent::Model();
    $this->load->database('test', TRUE);
}


function getStudents()
{
	$results = array();
    $query = $this->db->get('student');

	if ( $query->num_rows() > 0 )
    {
        return $results= $query->result();
        
    }  
    return $results;

}

function setStudents($name, $password){
   
  $data = array(
   'user_name' => $name ,
   'password' => $password   
  );

  $this->db->insert('student', $data); 

}

}
?>