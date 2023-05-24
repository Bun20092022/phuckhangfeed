<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if(isset($_POST['login'])){
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			$select = array(
				'username' => $email,
				'password' => $password,
			);
			$list = $this->db->select('*')->from('qh_user')->where($select)->get()->result_array();
			$view = $this->db->select('*')->from('qh_user')->where($select)->get()->row_array();
			if(count($list) > 0){
				$userdata = array(
					'login'  => 'yes',
					'iduser'  => $view['id'],
		            'nameuser'  => $view['name'],
		        );
		    $this->session->set_userdata('userinfoone', $userdata);
			redirect('backend/news/category');
			}else {
				$dataresult = array('error' => 'ok','messenger' => ' Tài khoản sai',);
				$this->session->set_flashdata($dataresult);
				redirect('backend/user/login');
			}
		}
		$this->load->view('backend/user/v_login');
	}
		public function logout()
		{
		  $this->session->unset_userdata('userinfoone');
		  redirect('admin');
		 }
}

/* End of file Login.php */
/* Location: ./application/controllers/giaodien/Login.php */