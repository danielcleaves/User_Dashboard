<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {

	public function add_comment($id)
	{
		$this->load->model('Comment');
		$comment = [
			'comment' => $this->input->post('comment'),
			'wall_id' => $this->input->post('wall_id'),
			'user_id' => $this->session->userdata('user')['id'],
			'post_id' => $id
		];
		$this->Comment->add_comment($comment);
		redirect("/profile/{$comment['wall_id']}");
	}
}
