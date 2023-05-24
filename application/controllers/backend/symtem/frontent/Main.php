<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->main = 'backend/layout/v_main';
		$this->folder = 'backend/symtem/frontent';
	}

	public function list($id)
	{

		$data['list_menu'] = $this->db->select('*')->from('qh_system_frontent')->where('father_id',$id)->get()->result_array();
		$data['view'] = $this->Model_backend->view_id('qh_system_frontent',$id);
		$data['title'] = 'Hiển thị chuyên mục tin tức';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view($this->main,$data);
	}
	public function listitem($id)
	{
		$view = $this->Model_backend->view_id('qh_system_frontent',$id);
		$data['list_menu'] = $this->db->select('*')->from('qh_system_frontent')->where('father_id',$view['father_id'])->get()->result_array();
		$data['view'] = $this->Model_backend->view_id('qh_system_frontent',$id);
		$data['title'] = 'Hiển thị chuyên mục tin tức';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view($this->main,$data);
	}
}
