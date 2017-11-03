<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	var $table = 'news';

    // Get From Databases
	function get($params = array())
	{
		if(isset($params['id']))
		{
			$this->db->where('news.news_id', $params['id']);
		}

		if(isset($params['limit']))
		{
			if(!isset($params['offset']))
			{
				$params['offset'] = NULL;
			}

			$this->db->limit($params['limit'], $params['offset']);
		}
		if (isset($params['title'])) {
			$this->db->like('news.news_title', $params['title']);
		}
		if (isset($params['desc'])) {
			$this->db->like('news.news_desc', $params['desc']);
		}

		$this->db->select('news.news_id, news.news_title, news.news_desc, news.news_post_date, news.date_created, news.last_update');
		$this->db->order_by('news.news_id', 'DESC');
		$res = $this->db->get('news');

		if(isset($params['id']))
		{
			return $res->row_array();
		}
		else
		{
			return $res->result_array();
		}
	}

    // Add and update to database
	function add($data = array()) {
		if (isset($data['title'])) {
			$this->db->set('news_title', $data['title']);
		}
		if (isset($data['desc'])) {
			$this->db->set('news_desc', $data['desc']);
		}
		if (isset($data['post_date'])) {
			$this->db->set('news_post_date', $data['post_date']);
		}
		if (isset($data['date_created'])) {
			$this->db->set('date_created', $data['date_created']);
		}
		if (isset($data['last_update'])) {
			$this->db->set('last_update', $data['last_update']);
		}

		if (isset($data['id'])) {
			$this->db->where('news_id', $data['id']);
			$this->db->update('news');
			$id = $data['id'];
		} else {
			$this->db->insert('news');
			$id = $this->db->insert_id();
		}

		$status = $this->db->affected_rows();
		return ($status == 0) ? FALSE : $id;
	}

	function delete($id) {
		$this->db->where('news_id', $id);
		$this->db->delete('news');
	}

	function total() {
		return $this->db->count_all('news');
	}

}
