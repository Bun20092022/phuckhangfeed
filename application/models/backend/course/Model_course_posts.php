<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_course_posts extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'qh_posts';
		$this->dichvu = 2;
	}
	public function show_all(){
		$this->db->select('*');
		$this->db->where('post_type_id', $this->dichvu);
		$this->db->order_by('id', 'desc');
		$query = $this->db->get($this->table);
        return $query->result_array();
	}
	public function show_all_by_service($id){
		$this->db->select('*');
		$this->db->where('post_type_id', $this->dichvu);
		$this->db->order_by('id', 'desc');
		$query = $this->db->get($this->table);
        return $query->result_array();
	}
	public function show_all_by_father($id){
		$this->db->select('*');
		$this->db->where('post_type_id', $this->dichvu);
		$this->db->where('father_id', $id);
		$this->db->order_by('id', 'desc');
		$query = $this->db->get($this->table);
        return $query->result_array();
	}
	public function checkname($name){
		$this->db->select('*');
		$this->db->where('name', $name);
		$this->db->where('post_type_id', $this->dichvu);
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