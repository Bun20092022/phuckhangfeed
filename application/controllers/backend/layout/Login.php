<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if(isset($_POST['login'])){
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			$select = array(
				'email' => $email,
				'password' => $password,
			);
			$list = $this->db->select('*')->from('qln_user')->where($select)->get()->result_array();
			$view = $this->db->select('*')->from('qln_user')->where($select)->get()->row_array();
			$viewquantri = $this->db->select('*')->from('qln_usercongviec')->where('id',$view['congviec'])->get()->row_array();
			if(count($list) > 0){
				$userdata = array(
					'login'  => 'yes',
					'iduser'  => $view['id'],
		            'nameuser'  => $view['name'],
		            'website'  => $view['website'],
		            'congviec'  => $view['congviec'],
		        );
		    $this->session->set_userdata('userinfoone', $userdata);
			redirect('backend/news/posts');
			}else {
				echo 'Chưa có tài khoản';
			}
		}
		$this->load->view('giaodien/v_login');
	}
		public function logout()
		{
		  $this->session->unset_userdata('userinfoone');
		  redirect('crm/user/clogin');
		 }
}

/* End of file Login.php */
/* Location: ./application/controllers/giaodien/Login.php */