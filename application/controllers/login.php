<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_register');

	}

	public function new_user() 
	{
		// form validations

		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'FIRST NAME', 'required');
		$this->form_validation->set_rules('last_name', 'LAST NAME', 'required');
		$this->form_validation->set_rules('email', 'EMAIL ADDRESS', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'PASSWORD', 'required|min_length[8]');
		$this->form_validation->set_rules('password_confirm', 'PASSWORD CONFIRMATION', 'required|matches[password]');


		if($this->form_validation ->run() == FALSE)
			{
				$this->session->set_flashdata('validation_errors', validation_errors());
				redirect('/');
			}

		else
			{
			 $this->session->set_flashdata('thank_you', 'Thanks for registering! You may now log in.');
			$results = $this->login_model->new_user($this->input->post());
			redirect('/');
			}
	}

	public function user_login() 
	{
		//login validations to check that the fields are filled out 

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email Address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE)
			{

			$this->session->set_flashdata('login_errors', validation_errors());
			redirect('/');
	 
			}

		else {
			$user = $this->login_model->login_user($this->input->post());
			if ($user)

				{
					$this->session->set_userdata('user', $user);
					
					redirect('/allUsers');

				}
			else
				{
					$this->session->set_flashdata('error_message', 'Sorry, but you have invalid login credentials.');
					redirect('/');
				}
			}	
		}

		public function messageBoard()
		{
			$user = $this->session->userdata('user');
			$this->load->view('messageboard', array('user'=>$user));
		}

		public function allUsers()
		{
			$allUsers = $this->login_model->retrieveAllUsers();
			$user = $this->session->userdata('user');
			$this->load->view('welcome', array(
				'allUsers'=>$allUsers,
				'user' => $user
				));

		}


		public function userBoard($id)
		{
			$messages = $this->login_model->retrieveUser($id);
			$this->load->view('messageboard', array(
				'messages' => $messages
				));
		}
	
	
}

	





