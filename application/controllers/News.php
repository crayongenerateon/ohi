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

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
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