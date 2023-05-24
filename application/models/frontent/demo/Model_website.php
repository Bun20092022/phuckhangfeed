<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_website extends CI_Model {

	public function loadcategorygroup()
	{
		$this->db->select('*');
		$this->db->where('hienthi', 1);
		$this->db->order_by('vitri', 'asc');
		$query = $this->db->get("qln_categorygroup"); //lấy dữ liệu từ bảng tb_user
		return $query->result_array();    //trả về 1 mảng các đối tượng
	}
	public function loadcategory($id,$idgroup)
	{
		$this->db->select('*');
		$this->db->where('public', 1);
		$this->db->where('father', $id);
		$this->db->where('categorygroup', $idgroup);
		$this->db->order_by('num', 'asc');
		$query = $this->db->get("qln_category"); //lấy dữ liệu từ bảng tb_user
		return $query->result_array();    //trả về 1 mảng các đối tượng
	}
	public function loadcategorysub($id)
	{
		$this->db->select('*');
		$this->db->where('public', 1);
		$this->db->where('father', $id);
		$this->db->order_by('num', 'asc');
		$query = $this->db->get("qln_category"); //lấy dữ liệu từ bảng tb_user
		return $query->result_array();    //trả về 1 mảng các đối tượng
	}

}

/* End of file Model_home.php */
/* Location: ./application/models/frontent/home/Model_home.php */