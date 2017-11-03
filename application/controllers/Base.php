<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(array('News_model'));
		$this->load->library('Zebra_Mptt');
		$this->mptt = new Zebra_Mptt();
	}

	public function index($id = NULL)
	{
		$data['news'] = $this->News_model->get();
		$this->load->view('templates/base', $data);
	}

}

/* End of file Base.php */
/* Location: ./application/controllers/Base.php */