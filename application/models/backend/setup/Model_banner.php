<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_banner extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'qh_banner';
	}
	public function show_all(){
		$this->db->select('*');
		$query = $this->db->get($this->table);
        return $query->result_array();
	}
	public function loadslidergroup($id){
		$this->db->select('*');
		$this->db->where('id_slidergroup', $id);
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

/* End of file Model_chuyenmuc.php */
/* Location: ./application/models/backend/baiviet/Model_chuyenmuc.php */