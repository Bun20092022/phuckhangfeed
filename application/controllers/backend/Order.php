<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->folder = 'backend/order';
		$info = $this->session->userdata('userinfoone');
		$this->id_nhanvien = $info['iduser'];
		date_default_timezone_set('Asia/Ho_Chi_Minh');
	}

	public function index()
	{

		$data['list_order'] = $this->Model_backend->get_all('qh_order');
		$data['title'] = 'Lịch sử đơn hàng';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view('backend/layout/v_main',$data);
	}
	public function new()
	{
		$check_list = array(
			'status>=' => 24,
			'status<=' => 25,
		);
		$data['list_order'] = $this->db->select('*')->from('qh_order')->where($check_list)->get()->result_array();
		$data['title'] = 'Lịch sử đơn hàng';
		$data['title_folder'] = 'mới';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view('backend/layout/v_main',$data);
	}
	public function access()
	{
		$check_list = array(
			'status' => 26,
		);
		$data['list_order'] = $this->db->select('*')->from('qh_order')->where($check_list)->get()->result_array();
		$data['title'] = 'Lịch sử đơn hàng';
		$data['title_folder'] = 'thành công';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view('backend/layout/v_main',$data);
	}
	public function cancel()
	{
		$check_list = array(
			'status' => 27,
		);
		$data['list_order'] = $this->db->select('*')->from('qh_order')->where($check_list)->get()->result_array();
		$data['title'] = 'Lịch sử đơn hàng';
		$data['title_folder'] = 'hủy';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view('backend/layout/v_main',$data);
	}
	public function status($id_order,$id_status)
	{
		$status = array(
			'status' => $id_status,
		);
		$this->Model_backend->update('qh_order',$status,$id_order);
		redirect($this->folder);
	}
	public function view($id_order)
	{
		$check_xem = array(
			'status' => 25,
		);
		$this->Model_backend->update('qh_order',$check_xem,$id_order);
		$data['list_order'] = $this->Model_backend->get_all('qh_order');
		$data['view_order'] = $this->Model_backend->view_id('qh_order',$id_order);
		$data['title'] = 'Lịch sử đơn hàng';
		$data['template'] = $this->folder.'/v_view';
		$this->load->view('backend/layout/v_main',$data);
	}
}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */