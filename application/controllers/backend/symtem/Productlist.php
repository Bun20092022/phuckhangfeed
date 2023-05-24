<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productlist extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->main = 'backend/layout/v_main';
		$this->folder = 'backend/symtem/productlist';
		$this->id_symtem_template = 16;
	}
	public function index()
	{
 		$data['view_symtem_template'] = $this->Model_backend->view_id('qh_system_template',$this->id_symtem_template);
 		$data['list_num_show_gird'] = $this->db->select('*')->from('qh_system_template_setup')->where('id_father_symtem',1)->get()->result_array();
 		$data['list_num_asc'] = $this->db->select('*')->from('qh_system_template_setup')->where('id_father_symtem',7)->get()->result_array();
 		$data['id_symtem_template'] = $this->id_symtem_template;
		$data['title'] = 'Hiển thị danh sách sản phẩm';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view($this->main,$data);
	}
	public function numpost($numpost)
	{
		$update_status = array(
			'num_post' => $numpost,
		);
		$this->Model_backend->update('qh_system_template',$update_status,$this->id_symtem_template);
		redirect($this->folder);
	}
	public function numshow($numshow)
	{
		$update_status = array(
			'num_show' => $numshow,
		);
		$this->Model_backend->update('qh_system_template',$update_status,$this->id_symtem_template);
		redirect($this->folder);
	}
	public function numasc($num_asc)
	{
		$update_status = array(
			'num_asc' => $num_asc,
		);
		$this->Model_backend->update('qh_system_template',$update_status,$this->id_symtem_template);
		redirect($this->folder);
	}
}
