<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_template extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'qln_category';
	}
	public function loadfather($id){
		$this->db->select('*');
		$this->db->where('father', $id);
		$query = $this->db->get($this->table);
        return $query->result_array();
	}
	public function viewid($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get($this->table);
        return $query->row_array();
	}
	public function add($thongtin)
	{
		$this->db->insert($this->table, $thongtin);
		return $this->db->insert_id();
	}
	public function update($id,$thongtin)
	{
		$this->db->where('id', $id);
		$this->db->update($this->table, $thongtin);

	}
		public function delete($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->delete($this->table);
		if($query){ return true; }else{ return False; }
	}

}

/* End of file Model_template.php */
/* Location: ./application/models/backend/trang/Model_template.php */