<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('News_model'));
		$this->load->library('Zebra_Mptt');
		$this->mptt = new Zebra_Mptt();
	}

	public function index($offset = NULL)
	{
		$this->load->library('pagination');

		$data['news'] = $this->News_model->get(array('limit' => 10, 'offset' => $offset));
        $config['base_url'] = site_url('news/index');
        $config['total_rows'] = $this->db->count_all('news');
        $this->pagination->initialize($config);

        $data['news_latest'] = $this->News_model->get(array('limit' => 5));
		$data['news'] = $this->News_model->get(array('limit' => 10, 'offset' => $offset));
		$data['title'] = 'Daftar Berita';
		$data['page'] = 'templates/news/list';
		$params['limit'] = 10;
		$this->load->view('news/list', $data);
	}

	public function view($id = null)
	{
		if ($id == null) {
			redirect('news');
		}
		$data['news'] = $this->News_model->get(array('id' => $id));
		$data['news_latest'] = $this->News_model->get(array('limit' => 5));
		if (count($data['news']) == 0) {
			redirect('news');
		}
		$data['title'] = $data['news']['news_title'];
		$data['page'] = 'templates/news/view';
		$params['limit'] = 10;
		$this->load->view('news/view', $data);
	}

}

/* End of file News.php */
/* Location: ./application/controllers/News.php */