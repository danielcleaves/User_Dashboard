<?php 
class Message extends CI_Model {


	public function add_message($message)
	{
		$query= "INSERT INTO posts (message,created_at, updated_at, user_id, wall_id)
		VALUES (?, NOW(),NOW(),?,?)";
		$values = array($message['message'], $message['user_id'], $message['wall_id']);
		$this->db->query($query, $values);
		return TRUE; 
	}


	public function get_message($id)
	{
		return $this->db->query("SELECT * FROM posts WHERE wall_id = {$id}")->result_array();

	}



}
