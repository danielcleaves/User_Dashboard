<?php 
class User extends CI_Model {


	public function any_users()
	{	
		return $this->db->query("SELECT * FROM users")->result_array();
	}


	public function get_id($id)
	{
		$query = "SELECT id, first_name, last_name, email, created_at, updated_at, password, user_level, description
		FROM users WHERE id = '{$id}'";
		return $this->db->query($query)->row_array();
	}



	public function update($users)
	{
		$query = "UPDATE users SET email = ? , first_name = ?, last_name = ?
		WHERE id = ?";
		$result = array($users['email'], $users['first_name'], $users['last_name'], $users['id']);
		$this->db->query($query, $result);
		return $result;
	}

	public function validate_reg($data)
	{
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules("first_name", "First Name", "trim|required|alpha");
			$this->form_validation->set_rules("last_name", "Last Name", "trim|required|alpha");
			$this->form_validation->set_rules("email", "Email", "trim|required|valid_email|is_unique[users.email]");
			$this->form_validation->set_rules("password", "Password", "trim|required|min_length[2]|matches[confirm_password]");
			$this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required|matches[password]");
		}
	
		if($this->form_validation->run() === FALSE)
		
		{
			$this->session->set_flashdata('errors', validation_errors());
			return FALSE;
		}

		else 
		{
			return TRUE;
		}
	}

	public function create_user($data)
	{
		$query = "INSERT INTO users (first_name,last_name, email, created_at, updated_at, password, user_level,description)
			VALUES(?,?,?,NOW(),NOW(),?,?,?)";
		$values = array($data['first_name'], $data['last_name'], $data['email'], $data['password'], $data['user_level'], $data['description']);
		$this->db->query($query,$values);	
		return TRUE;		
	}  

	public function update_name($users)
	{
		$query = "UPDATE users SET email = ?, first_name = ?, last_name = ?, updated_at = NOW() WHERE id = ?";
		$result = array($users['email'], $users['first_name'], $users['last_name'],$users['id']);
		$this->db->query($query, $result);
		return $result;
	}

	public function update_description($users)
	{
		$query = "UPDATE users SET description = ?, updated_at = NOW() WHERE id = ?";
		$result = array($users['description'], $users['id']);
		$this->db->query($query, $result);
		return $result;
	}

		public function update_password($users)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[2]|matches[confirm_password]");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required|matches[password]");

		if($this->form_validation->run() === FALSE)
		
		{
			$this->session->set_flashdata('errors', validation_errors());
			return FALSE;
		}

		else 
		{
			$query = "UPDATE users SET password = ?,  updated_at = NOW() WHERE id = ?";
			$result = array($users['password'], $users['id']);
			$this->db->query($query, $result);
			return $result;
		}
		
	}


	public function logging_in($data)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
		}
		else 
		{
			$query = "SELECT first_name, last_name, email, description, created_at, id, user_level FROM users WHERE email = ? AND password = ?";
			$result = array($data['email'], $data['password']);
			return $this->db->query($query, $result)->row_array();
		
		}
	}

	public function delete_user($id)
	{
		$query = "DELETE FROM users WHERE id = '{$id}'";
		return $this->db->query($query);
	}



	


}
?>