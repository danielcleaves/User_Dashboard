<?php 
class Comment extends CI_Model {


	public function add_comment($comment)
	{
		$query= "INSERT INTO comments (comment,created_at, updated_at, post_id, user_id)
		VALUES (?, NOW(),NOW(),?,?)";
		$values = array($comment['comment'], $comment['post_id'], $comment['user_id']);
		$this->db->query($query, $values);
		return TRUE; 
	}

	public function get_comment($id)
	{
		return $this->db->query("SELECT * FROM comments JOIN posts On post_id = posts.id WHERE wall_id = {$id}")->result_array();
	}



}