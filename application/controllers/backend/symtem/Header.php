<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->main = 'backend/layout/v_main';
		$this->folder = 'backend/symtem/header';
		$this->id_symtem_template = 24;
	}
	public function index()
	{
		if(isset($_POST['title'])) {
			$thongtin = array(
				'id_text' => $_POST['id_text'],
			);
			$this->Model_backend->update('qh_system_template',$thongtin,$this->id_symtem_template);
			redirect($this->folder);		
		}
		if(isset($_POST['img'])) {
			$thongtin = array(
				'color_background' => $_POST['color_background'],
				'color_text' => $_POST['color_text'],
			);
			$this->Model_backend->update('qh_system_template',$thongtin,$this->id_symtem_template);
			redirect($this->folder);		
		}
		$data['view_symtem_template'] = $this->Model_backend->view_id('qh_system_template',$this->id_symtem_template);
		$data['list_num_show_gird'] = $this->db->select('*')->from('qh_system_template_setup')->where('id_father_symtem',1)->get()->result_array();
		$data['id_symtem_template'] = $this->id_symtem_template;
		$data['title'] = 'Hiển thị Header';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view($this->main,$data);
	}
	public function add_menu($id_menu)
	{
		$thongtin = array(
			'id_menu' => $id_menu,
		);
		$this->Model_backend->update('qh_system_template',$thongtin,$this->id_symtem_template);
		redirect($this->folder);		
	}
}
