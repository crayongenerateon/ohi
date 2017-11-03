<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('m_login') == FALSE) {
			redirect('manage/auth/login');
		}
		$this->load->model(array('News_model', 'Log_activity_model'));
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['count_news'] = count($this->News_model->get());
		$data['count_log'] = count($this->Log_activity_model->get(array('is_chs' => FALSE)));
		$data['page'] = 'manage/dashboard';
		$this->load->view('manage/templates/layout', $data);
	}

}

/* End of file base.php */
/* Location: ./application/controllers/manage/base.php */