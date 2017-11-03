<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get($params = array())
	{
		if (isset($params['id'])) {
			$this->db->where('user_id', $params['id']);
		}
		if (isset($params['username'])) {
			$this->db->where('user_name', $params['username']);
		}
		if (isset($params['password'])) {
			$this->db->where('user_password', $params['password']);
		}
		if (isset($params['role'])) {
			$this->db->where('user.role_id', $params['role']);
		}
		if(isset($params['limit']))
		{
			if(!isset($params['offset']))
			{
				$params['offset'] = NULL;
			}

			$this->db->limit($params['limit'], $params['offset']);
		}

		$this->db->select('user.user_id, user.role_id, user.user_name, user.user_full_name, user.user_password, user.user_email, user.date_created, user.last_update');
		$this->db->select('role.role_id, role.role_name');
		$this->db->join('role', 'role.role_id = user.role_id', 'left');
		$ret = $this->db->get('user');

		if (isset($params['id'])) {
			return $ret->row_array();
		}else{
			return $ret->result_array();
		}
	}	

	public function add($params)
	{
		if (isset($params['id'])) {
			$this->db->where('user_id', $params['id']);
		}
		if (isset($params['username'])) {
			$this->db->set('user_name', $params['username']);
		}
		if (isset($params['password'])) {
			$this->db->set('user_password', $params['password']);
		}
		if (isset($params['fullname'])) {
			$this->db->set('user_full_name', $params['fullname']);
		}
		if (isset($params['role'])) {
			$this->db->set('role_id', $params['role']);
		}
		if (isset($params['email'])) {
			$this->db->set('user_email', $params['email']);
		}
		if (isset($params['date_created'])) {
			$this->db->set('date_created', $params['date_created']);
		}
		if (isset($params['last_update'])) {
			$this->db->set('last_update', $params['last_update']);
		}

		if (isset($params['id'])) {
			$this->db->update('user');
			return $params['id'];
		}else{
			$this->db->insert('user');
			return $this->db->insert_id();
		}

	}

	public function delete($id)
	{
		if (isset($id)) {
			$this->db->where('user_id', $id);
			$this->db->delete('user');
		}
	}

	public function get_role()
	{
		return $this->db->get('role')->result_array();
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */