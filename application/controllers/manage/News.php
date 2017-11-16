<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('m_login') == FALSE) {
            redirect('manage/auth/login');
        }
        $this->load->model('News_model');
        $this->load->model('Log_activity_model');
        $this->load->library('upload');
    }

    // News view in list
    public function index($offset = NULL) {
        $this->load->model('News_model');
        $this->load->library('pagination');
        $data['news'] = $this->News_model->get(array('limit' => 10, 'offset' => $offset));
    
        $config['base_url'] = site_url('manage/news/index');
        $config['uri_segment'] = 4;
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

        $data['title'] = 'Berita';
        $data['page'] = 'manage/news/news_list';
        $this->load->view('manage/templates/layout', $data);
    }

    // Add News and Update
    public function add($id = NULL) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('news_title', 'Title', 'required');
        $this->form_validation->set_rules('news_desc', 'Description', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST AND $this->form_validation->run() == TRUE) {

            // if (!empty($_FILES['inputGambar']['name'])) {
            //     $params['news_image'] = $this->do_upload();
            // } elseif ($this->input->post('inputGambarExisting')) {
            //     $params['news_image'] = $this->input->post('inputGambarExisting');
            // } else {
            //     if ($this->input->post('news_id')) {
            //         $params['news_image'] = $this->input->post('inputGambarCurrent');
            //     } else {
            //         $params['news_image'] = '';
            //     }
            // }

            if ($this->input->post('news_id')) {
                $params['id'] = $this->input->post('news_id');
                $params['last_update'] = date('Y-m-d H:i');
            } else {
                $params['date_created'] = date('Y-m-d H:i');
            }

            // if ($this->input->post('inputGambarCurrent')) {
            //     $params['image'] = $this->input->post('inputGambarCurrent');
            // }

            $params['title'] = $this->input->post('news_title');
            $params['desc'] = stripslashes($this->input->post('news_desc'));
            $params['user_id'] = $this->session->userdata('m_id');
            $params['post_date'] = date('Y-m-d H:i');
            
            // if ($this->input->post('category_id_new')) {
            //     $params['category_id'] = $query->row('category_id');
            // } else {
            //     $params['category_id'] = $this->input->post('category_id');
            // }

            $status = $this->News_model->add($params);

            $this->Log_activity_model->add(
                array(
                    'user_id' => $this->session->userdata('m_id'),
                    'is_chs' => 0,
                    'module' => 'News',
                    'action' => $data['operation'],
                    'info' => 'ID :'.$status.';',
                    'date_created' => date('Y-m-d H:i')
                    )
                );

            $this->session->set_flashdata('success', $data['operation'] . ' berita berhasil');
            redirect('manage/news');
        } else {
            if ($this->input->post('news_id')) {
                redirect('manage/news/edit/' . $this->input->post('news_id'));
            }

            // Edit mode
            if (!is_null($id)) {
                $data['news'] = $this->News_model->get(array('id' => $id));
            }

            $data['title'] = $data['operation'] . ' Berita';
            $data['page'] = 'manage/news/news_add';
            $this->load->view('manage/templates/layout', $data);
        }
    }


    public function delete($id = NULL) {
        if ($_POST) {
            $this->News_model->delete($this->input->post('del_id'));

            $this->Log_activity_model->add(
                array(
                    'user_id' => $this->session->userdata('m_id'),
                    'is_chs' => 0,
                    'module' => 'News',
                    'action' => 'Hapus Berita',
                    'info' => 'Berita; ID : '.$id.';',
                    'date_created' => date('Y-m-d H:i')
                    )
                );

            $this->session->set_flashdata('success', 'Hapus berita berhasil');
            redirect('manage/news');
        } elseif (!$_POST) {
            $this->session->set_flashdata('delete', 'Delete');
            redirect('manage/news/edit/' . $id);
        }
    }

}

/* End of file news.php */
/* Location: ./application/controllers/manage/news.php */
