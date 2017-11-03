<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_activity_model extends CI_Model {

	public function add($params = array())
	{
		$object = array(
			'user_id' => $params['user_id'],
			'log_is_chs' => $params['is_chs'],
			'log_module' => $params['module'],
			'log_action' => $params['action'],
			'log_info' => $params['info'],
			'date_created' => $params['date_created']
			);

		$this->db->insert('log_activity', $object);
	}

	public function get($params = array())
	{

		if (isset($params['limit'])) {
			if (!isset($params['offset'])) {
				$params['offset'] = NULL;
			}

			$this->db->limit($params['limit'], $params['offset']);
		}

		if (isset($params['is_chs'])) {
			$this->db->where('log_is_chs', $params['is_chs']);
		}

		$this->db->select('log_activity.log_id, log_activity.user_id, log_activity.log_module, log_activity.log_action, log_activity.log_info, log_activity.log_is_chs, log_activity.date_created');
		$this->db->select('user.user_id, user.user_name');
		$this->db->join('user', 'user.user_id = log_activity.user_id', 'left');
		$this->db->order_by('log_activity.log_id', 'desc');
		$ret = $this->db->get('log_activity');

		if (isset($params['id'])) {
			return $ret->row_array();
		}else{
			return $ret->result_array();
		}
	}

}

/* End of file Log_activity_model.php */
/* Location: ./application/models/Log_activity_model.php */