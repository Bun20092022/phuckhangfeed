<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$view_gioithieu = $this->db->select('*')->from('qh_setup_extend')->where('id',2)->get()->row_array();
		$this->headertop = $this->db->select('*')->from('qh_system_template')->where('id',23)->get()->row_array();
		$language = $this->session->userdata('ss_languagew');
		if(isset($language)){
			$this->id_language = $language['name_lang'];
		}else{
			$this->id_language = 'vn';
		}
	}
	public function get_home(){
		$this->db->select('*');
		$this->db->where('father_symtem', 14);
		$this->db->order_by('num', 'asc');
		$query = $this->db->get('qh_system_frontent_extend');
		return $query->result_array();
	}
	public function get_header_top_color_background(){
		echo $this->headertop['color_background'];
	}
	public function get_header_top_color_text(){
		echo $this->headertop['color_text'];
	}
	// Lấy ngôn ngữ đang được sử dụng
	public function get_language()
	{
		$this->db->select('*');
		$this->db->where('public', 1);
		$query = $this->db->get("qh_setup_language"); //lấy dữ liệu từ bảng tb_user
		return $query->result_array();    //trả về 1 mảng các đối tượng
	}
	// Lấy các kênh Social liên kết
	public function get_social()
	{
		$this->db->select('*');
		$this->db->order_by('num_social', 'asc');
		$query = $this->db->get("qh_setup_social"); //lấy dữ liệu từ bảng tb_user
		return $query->result_array();    //trả về 1 mảng các đối tượng
	}
}
