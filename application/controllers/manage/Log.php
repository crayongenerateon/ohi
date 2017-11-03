<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('m_login') == FALSE) {
			redirect('manage/auth/login');
		}
		$this->load->model('Log_activity_model');
	}

	public function index($offset = null)
	{
		$this->load->library('pagination');
		
		$config['base_url'] = site_url('manage/log/index');
		$config['total_rows'] = count($this->Log_activity_model->get(array('is_chs' => 0)));
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);
		
		$data['log'] = $this->Log_activity_model->get(array('limit' => 10, 'offset' => $offset, 'is_chs' => 0));
		$data['page'] = 'manage/log/log_list';
		$this->load->view('manage/templates/layout', $data);
	}

}

/* End of file log.php */
/* Location: ./application/controllers/manage/log.php */