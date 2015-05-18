<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

	public function new_user($user_data) {
		$query = "INSERT into users (first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?, NOW(), NOW())";
		$values = array($user_data['first_name'],$user_data['last_name'], $user_data['email'], $user_data['password']);
		$results = $this->db->query($query, $values);
		return $results;

	}

	public function login_user($login_data)
	{
		$query = "SELECT * FROM users WHERE email = '{$login_data['email']}' AND password = '{$login_data['password']}'";
		$user = $this->db->query($query)->row_array();
		return $user;
	}

	public function retrieveAllUsers()
	{
		$query = "SELECT * FROM users";
		return $this->db->query($query)->result_array();
		
	}

	public function retrieveUser($id)
	{
		$query = "SELECT * FROM WHERE wall_id = ?";
		return $this->db->query($query, array($id))->result_array();

	}

}