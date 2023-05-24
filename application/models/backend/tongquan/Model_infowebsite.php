<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_infowebsite extends CI_Model {
    public function show_all()
    {
        $query = $this->db->query("SELECT * FROM qh_website ORDER BY ID ASC");
        return $query->result_array();
    }
    public function show_all_language()
    {
        $query = $this->db->query("SELECT * FROM qln_language");
        return $query->result_array();
    }
    public function show_all_website($idwebsite)
    {
        $query = $this->db->query("SELECT * FROM qh_website WHERE website=?",$idwebsite);
        return $query->result_array();
    }
    public function show_father($id)
    {
        $query = $this->db->query("SELECT * FROM qh_website WHERE father=?",$id);
        return $query->result_array();
    }
    public function show_list_father($id)
    {
        $query = $this->db->query("SELECT * FROM qh_website WHERE father=? ORDER BY num ASC",$id);
        return $query->result_array();
    }
    public function show_one_id($id)
    {
        $query = $this->db->query("SELECT * FROM qh_website WHERE id=?",$id);
        return $query->first_row('array');
    }
    public function add($data) {
        $this->db->insert('qh_website',$data);
        return $this->db->insert_id();
    }
    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('qh_website',$data);
    }
    function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('qh_website');
    }

}