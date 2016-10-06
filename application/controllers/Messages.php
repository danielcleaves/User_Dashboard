<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

	public function add_message($id)
	{
		$this->load->model('Message');
		$message = [
			'message' => $this->input->post('message'),
			'user_id' => $this->session->userdata('user')['id'],
			'wall_id' => $id
			

		];
		$this->Message->add_message($message);
		redirect("/profile/{$id}");

	}


}