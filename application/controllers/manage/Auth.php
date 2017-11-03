<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Auth extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		redirect('manage/auth/login');
	}
	
	public function login()
	{
		if ($this->session->userdata('m_login') == TRUE) {
			redirect('manage');
		}
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if ($this->form_validation->run() == TRUE) {
			$this->doLogin();
		}else{
			$this->load->view('manage/auth/login');
		}
	}

	function doLogin()
	{
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$user = $this->User_model->get(array('login' => 1, 'username' => $username, 'password' => $password));
		if (count($user) == 1) {

			$array = array(
				'm_login' => TRUE,
				'm_id' => $user[0]['user_id'],
				'm_username' => $user[0]['user_name'],
				'm_full_name' => $user[0]['user_full_name'],
				'm_email' => $user[0]['user_email'],
				'm_role' => $user[0]['role_id']
				);

			$this->session->set_userdata( $array );
			redirect('manage');
		}else{
			$this->session->set_flashdata('errorLogin', 'Incorrect Username or Password');
			redirect('manage/auth/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('m_login');
		$this->session->unset_userdata('m_id');
		$this->session->unset_userdata('m_username');
		$this->session->unset_userdata('m_full_name');
		$this->session->unset_userdata('m_email');
		$this->session->unset_userdata('m_role');

		redirect('manage/auth/login');
	}
}


/* End of file auth.php */
/* Location: ./application/controllers/manage/auth.php */