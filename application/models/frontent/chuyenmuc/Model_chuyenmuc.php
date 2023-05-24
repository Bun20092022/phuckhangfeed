<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_chuyenmuc extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'blog_category';
	}

	public function view($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get($this->table);
		return $query->row_array();
	}
	// Lấy template của Blog
	public function viewtemplateblog($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get('qln_templateblog');
		return $query->row_array();
	}
	public function viewblog($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get('blog_noidung');
		return $query->row_array();
	}
	public function listblog($id){
			$this->db->select('*');
			$this->db->where('father', $id);
			$query = $this->db->get('blog_noidung');
			return $query->result_array();
		}
}

/* End of file Model_chuyenmuc.php */
/* Location: ./application/models/frontent/chuyenmuc/Model_chuyenmuc.php */