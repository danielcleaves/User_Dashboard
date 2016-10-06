<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {


	public function index()
	{
		$this->load->view('home_page');
	}

	public function sign_on()
	{
		$this->load->view('Signon');
	}



	// public function show()
	// {

	// 	$this->load->model('Message');
	// 	$messages = $this->Message->get_message();
	// 	$this->load->view('show', array('messages' => $messages));

	// }

	public function profile($id)
	{
		$this->load->model('User');
		$show =  $this->User->get_id($id);
		$this->load->model('Message');
		$this->load->model('Comment');
		$messages = $this->Message->get_message($id);
		$comments = $this->Comment->get_comment($id);
		$this->load->view('show', array('messages' => $messages, 'comments' => $comments, 'show' => $show));

	}


	public function register()
	{
		$this->load->model('User');
		$status = $this->User->validate_reg($this->input->post());
		$this->load->view('register');
		

		if($status === TRUE)
		{
			$users = $this->User->any_users();
			if(count($users) == 0)
			{
				$user_info = [
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'user_level' => 'Admin',
					'description' => ''
				];

			}
			else 
			{
				$user_info = [
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'email'=> $this->input->post('email'),
					'password' => $this->input->post('password'),
					'user_level' => "Normal",
					'description' => ''
				];

			}
			$this->User->create_user($user_info);
			redirect('/sign_in');
		
		}

	}

	public function sign_in()

	{
		$this->load->model('User');
		$user = $this->User->logging_in($this->input->post());

		if($user)
		{
			$this->session->set_userdata('user',$user);
			redirect("/profile/{$user['id']}");

			// $status = $this->User->get_id($id);
			// redirect('show', $status);
		}
		else
		{
			$this->session->set_flashdata('login_errors', 'User does not exist');
			redirect('/sign_in');
		}

	}

	public function edit($id)
	{
		$this->load->Model('User');
		$edit_user = $this->User->get_id($id);
		$this->load->view('edit', $edit_user);

	}

	public function update_name($id)
	{
		$this->load->model('User');
		$user = array (
			'email' => $this->input->post('email'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'description' => $this->input->post('description'),
			'id' => $id
			);
		$this->User->update_name($user);
		redirect('/log_off');
	}

	public function update_password($id)
	{
		$this->load->model('User');
		$this->load->view('edit');
		$user = array (
			'password' => $this->input->post('password'),
			'confirm_password' => $this->input->post('confirm_password'),
			'id' => $id
			);
		$status = $this->User->update_password($user);
		

		if($status === FALSE)
		{
			$this->session->set_flashdata('update_error', 'Something went wrong, your password could not be changed');
			redirect('/admin');

		}
		else 
		{
			$this->session->set_flashdata('update_success', 'You changed your password');
			redirect('/admin');
			
		}
	}

		public function update_description($id)
	{
		$this->load->model('User');
		$user = array (
			'description' => $this->input->post('description'),
			'id' => $id
			);
		
		$this->User->update_description($user);
		$this->session->set_flashdata('description_success', "Your description has been updated");
		redirect('/admin');
		
	}

		

	public function log_off()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('logout', 'You have logged out');
		$this->load->view('home_page');

	}

	public function admin()
	{	
		$this->load->model('User');
		$show = $this->User->any_users();
		$this->load->view('dashboard', array('view' => $show));
	}

	public function admin_add()
	{
		$this->load->model('User');
		$status = $this->User->validate_reg($this->input->post());
		$this->load->view('new');	

			if($status === TRUE)
		{
			$users = $this->User->any_users();
			if(count($users) == 0)
			{
				$user_info = [
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'description' => "Temporary Description",
					'user_level' => 'Admin'
				];

			}
			else 
			{
				$user_info = [
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'email'=> $this->input->post('email'),
					'password' => $this->input->post('password'),
					'description' => "Temporary Description",
					'user_level' => "Normal"
				];

			}
			$this->User->create_user($user_info);
			redirect('/sign_on');
		
		}


	}

	public function delete($id)
	{
		$this->load->model('User');
		$this->User->delete_user($id);
		redirect('/admin');
	}





}
		