<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('m_login') == FALSE) {
			redirect('manage/auth/login');
		}
		$this->load->model('User_model');
		
	}

	public function index($offset = null)
	{
		$params['limit'] = 10;
		$params['offset'] = $offset;
		$this->load->library('pagination');
		$config['base_url'] = site_url('manage/user/index');
		$config['total_rows'] = count($this->User_model->get(array()));
		$this->pagination->initialize($config);

		$data['user'] = $this->User_model->get($params);
		$data['page'] = 'manage/user/list';
		$this->load->view('manage/templates/layout', $data);
	}

	public function add($id = null)
	{
		$this->load->library('form_validation');

		$data['operation'] = ($id == null) ? 'Tambah' : 'Edit';

		$this->form_validation->set_rules('inputFullName', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('inputEmail', 'Email', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		if (!$this->input->post('inputId')) {
			$this->form_validation->set_rules('inputUsername', 'Username', 'trim|required|is_unique[user.user_name]');
			$this->form_validation->set_rules('inputPassword', 'Password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('inputPasswordConfirmation', 'Password Konfirmasi', 'trim|required|matches[inputPassword]');
		}

		if ($this->form_validation->run() == TRUE) {
			if ($this->input->post('inputId')) {
				$params['last_update'] = date('Y-m-d H:i:s');
				$params['id'] = $id;
			}else{
				$params['date_created'] = date('Y-m-d H:i:s');
				$params['username'] = $this->input->post('inputUsername');
				$params['password'] = sha1($this->input->post('inputPassword'));
			}

			$params['fullname'] = $this->input->post('inputFullName');
			$params['email'] = $this->input->post('inputEmail');
			$params['role'] = $this->input->post('inputRole');
			
			$return = $this->User_model->add($params);

			$this->session->set_flashdata('success', $data['operation'] . ' petugas berhasil');
			redirect('manage/user');

		}

		if ($id != null) {
			$data['user'] = $this->User_model->get(array('id' => $id));
		}
		$data['title'] = $data['operation'].' User';
		$data['role'] = $this->User_model->get_role();
		$data['page'] = 'manage/user/add';
		$this->load->view('manage/templates/layout', $data);
	}

	public function view($id = null)
	{

		if ($id != null) {
			$data['user'] = $this->User_model->get(array('id' => $id));
			if (count($data['user']) == 0) {
				redirect('manage');
			}
		}
		$data['title'] = 'View User';
		$data['page'] = 'manage/user/view';
		$this->load->view('manage/templates/layout', $data);
	}

	public function rpw($id = null)
	{
		if (!in_array($this->session->userdata('m_role'), $this->role)) {
			redirect('manage');
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules('inputPassword', 'Password', 'required|min_length[6]|matches[inputPasswordConfirmation]');
		$this->form_validation->set_rules('inputPasswordConfirmation', 'Password Confirmation', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		if($_POST AND $this->form_validation->run() == TRUE)
		{  
			$params['id'] = $this->input->post('inputId');
			$params['password'] = sha1($this->input->post('inputPassword'));
			$params['last_update'] = date('Y-m-d H:i:s');

			$ret = $this->User_model->add($params);

			redirect('manage/user');

		}else{
			$data['title'] = 'Reset Password';
			$data['header'] = 'Reset Password';
			$data['page'] = 'manage/user/cpw';
			$this->load->view('manage/templates/layout', $data);
		}
	}

	public function cpw(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('inputOldPassword', 'Current Password', 'required|callback_check_current_password');
		$this->form_validation->set_rules('inputPassword', 'Password', 'required|min_length[6]|matches[inputPasswordConfirmation]');
		$this->form_validation->set_rules('inputPasswordConfirmation', 'Password Confirmation', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($_POST AND $this->form_validation->run() == TRUE)
		{  
			$params['id'] = $this->session->userdata('m_id');
			$params['password'] = sha1($this->input->post('inputPassword'));
			$params['last_update'] = date('Y-m-d H:i:s');

			$ret = $this->User_model->add($params);

			redirect('manage/user/profil');

		}else{
			$data['title'] = 'Change Password';
			$data['header'] = 'Ubah Password';
			$data['page'] = 'manage/user/cpw';
			$this->load->view('manage/templates/layout', $data);
		}
	}

	function check_current_password()
	{
		$id = $this->session->userdata('m_id');
		$pass = $this->input->post('inputOldPassword');
		$user = $this->User_model->get(array('id' => $id));
		if (sha1($pass) == $user['user_password']) {
			return TRUE;
		}else{
			$this->form_validation->set_message('check_current_password', 'The Password did not match with the current password');
			return FALSE;
		}
	}

	public function del($id = null)
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('inputId', 'User Id', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$data['operation'] = 'Delete';

		if($_POST AND $this->form_validation->run() == TRUE)
		{
			$this->User_model->delete($this->input->post('inputId'));
			redirect('manage/user');
		}else{
			$data['user'] = $this->User_model->get(array('id' => $id));
			if (count($data['user']) == 0) {
				redirect('manage/user');
			}
			$data['title'] = 'Delete User';
			$data['page'] = 'manage/user/del';

			$this->load->view('manage/templates/layout', $data);
		}
	}

	public function profil($id = null)
	{
		$id = $this->session->userdata('m_id');
		if ($id != null) {
			$data['user'] = $this->User_model->get(array('id' => $id));
			if (count($data['user']) == 0) {
				redirect('manage');
			}
		}
		$data['title'] = 'Profil';
		$data['page'] = 'manage/user/profil';
		$this->load->view('manage/templates/layout', $data);
	}


}

/* End of file user.php */
/* Location: ./application/controllers/manage/user.php */