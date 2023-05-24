<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->main = 'backend/layout/v_main';
		$this->folder = 'backend/symtem/aboutus';
		$this->id_symtem_template = 18;
	}
	public function index()
	{
		if(isset($_POST['add'])) {
 			// Lấy danh sách các chuyên mục cùng cấp để đếm số thứ tự
 			$check_left = array(
				'id_symtem_template' => $this->id_symtem_template,
				'left_int' => 1,
			);
			$list_father = $this->db->select('*')->from('qh_system_template_extend')->where($check_left)->get()->result_array();
			$thongtin = array(
				'id_text' => $_POST['id_text'],
				'id_symtem_template' => $this->id_symtem_template,
				'num' => count($list_father) + 1,
				'left_int' => 1,
			);
			$this->Model_backend->insert('qh_system_template_extend',$thongtin);
			redirect($this->folder);		
		}
		if(isset($_POST['add2'])) {
 			// Lấy danh sách các chuyên mục cùng cấp để đếm số thứ tự
			$check_right = array(
				'id_symtem_template' => $this->id_symtem_template,
				'right_int' => 1,
			);
			$list_father = $this->db->select('*')->from('qh_system_template_extend')->where($check_right)->get()->result_array();
			$thongtin = array(
				'link_img' => $_POST['link_img'],
				'id_symtem_template' => $this->id_symtem_template,
				'num' => count($list_father) + 1,
				'right_int' => 1,
			);
			$this->Model_backend->insert('qh_system_template_extend',$thongtin);
			redirect($this->folder);		
		}
		$data['view_symtem_template'] = $this->Model_backend->view_id('qh_system_template',$this->id_symtem_template);
		$data['list_num_show_gird'] = $this->db->select('*')->from('qh_system_template_setup')->where('id_father_symtem',1)->get()->result_array();
		$data['id_symtem_template'] = $this->id_symtem_template;
		$data['title'] = 'Hiển thị chuyên mục giới thiệu ngắn';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view($this->main,$data);
	}
	public function tang($id_table,$id_symtem_template,$num){
		if ($num == 0){
			$dataresult = array('error' => 'ok','messenger' => 'Chuyên mục đang ở  vị trí đầu tiên bạn không thể tăng',);
			$this->session->set_flashdata($dataresult);
			redirect($this->folder);
		}else{
 			// Lấy thông tin của num hiện tại
			$num_truoc = array(
				'id_symtem_template' => $id_symtem_template,
				'left_int' => 1,
				'num' => $num-1,
			);
			$truoc = $this->db->select('*')->from('qh_system_template_extend')->where($num_truoc)->get()->row_array();

			$id_numtruoc = $truoc['id'];

			$this->db->where('id', $id_table);
			$this->db->update('qh_system_template_extend', $num_truoc);

 			// Tăng bậc của id trước
			$num_tang_bac = array(
				'num' => $num,
			);
			$this->db->where('id', $id_numtruoc);
			$this->db->update('qh_system_template_extend', $num_tang_bac);
			$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa số thứ tự thành công',);
		}
		$this->session->set_flashdata($dataresult);
		redirect($this->folder);

	}
	public function giam($id_table,$id_symtem_template,$num){
		if ($num == 100){
			$dataresult = array('error' => 'ok','messenger' => 'Chuyên mục đang ở vị trí cuối tiên bạn không thể tăng',);
			$this->session->set_flashdata($dataresult);
			redirect($this->folder);
		}else{
 			// Lấy thông tin của num hiện tại
			$num_truoc = array(
				'id_symtem_template' => $id_symtem_template,
				'num' => $num+1,
				'left_int' => 1,
			);
			$truoc = $this->db->select('*')->from('qh_system_template_extend')->where($num_truoc)->get()->row_array();

			$id_numtruoc = $truoc['id'];

			$this->db->where('id', $id_table);
			$this->db->update('qh_system_template_extend', $num_truoc);

 			// Tăng bậc của id trước
			$num_tang_bac = array(
				'num' => $num,
			);
			$this->db->where('id', $id_numtruoc);
			$this->db->update('qh_system_template_extend', $num_tang_bac);
			$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa số thứ tự thành công',);
		}
		$this->session->set_flashdata($dataresult);
		redirect($this->folder);

	}
	public function tangright($id_table,$id_symtem_template,$num){
		if ($num == 0){
			$dataresult = array('error' => 'ok','messenger' => 'Chuyên mục đang ở  vị trí đầu tiên bạn không thể tăng',);
			$this->session->set_flashdata($dataresult);
			redirect($this->folder);
		}else{
 			// Lấy thông tin của num hiện tại
			$num_truoc = array(
				'id_symtem_template' => $id_symtem_template,
				'right_int' => 1,
				'num' => $num-1,
			);
			$truoc = $this->db->select('*')->from('qh_system_template_extend')->where($num_truoc)->get()->row_array();

			$id_numtruoc = $truoc['id'];

			$this->db->where('id', $id_table);
			$this->db->update('qh_system_template_extend', $num_truoc);

 			// Tăng bậc của id trước
			$num_tang_bac = array(
				'num' => $num,
			);
			$this->db->where('id', $id_numtruoc);
			$this->db->update('qh_system_template_extend', $num_tang_bac);
			$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa số thứ tự thành công',);
		}
		$this->session->set_flashdata($dataresult);
		redirect($this->folder);

	}
	public function giamright($id_table,$id_symtem_template,$num){
		if ($num == 100){
			$dataresult = array('error' => 'ok','messenger' => 'Chuyên mục đang ở vị trí cuối tiên bạn không thể tăng',);
			$this->session->set_flashdata($dataresult);
			redirect($this->folder);
		}else{
 			// Lấy thông tin của num hiện tại
			$num_truoc = array(
				'id_symtem_template' => $id_symtem_template,
				'num' => $num+1,
				'right_int' => 1,
			);
			$truoc = $this->db->select('*')->from('qh_system_template_extend')->where($num_truoc)->get()->row_array();

			$id_numtruoc = $truoc['id'];

			$this->db->where('id', $id_table);
			$this->db->update('qh_system_template_extend', $num_truoc);

 			// Tăng bậc của id trước
			$num_tang_bac = array(
				'num' => $num,
			);
			$this->db->where('id', $id_numtruoc);
			$this->db->update('qh_system_template_extend', $num_tang_bac);
			$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa số thứ tự thành công',);
		}
		$this->session->set_flashdata($dataresult);
		redirect($this->folder);

	}
	public function deleteleft($id){
		$result = $this->Model_backend->delete('qh_system_template_extend',$id);
 			// Sắp xếp lại số thứ tự các chuyên mục trong Category
 		$check_left = array(
				'id_symtem_template' => $this->id_symtem_template,
				'left_int' => 1,
			);
		$list_father = $this->db->select('*')->from('qh_system_template_extend')->where($check_left)->order_by('num','asc')->get()->result_array();
		$dem = 0;
		foreach ($list_father as $value) {
			$dem += 1;
			$num = array(
				'num' => $dem,
			);
			$this->db->where('id', $value['id']);
			$this->db->update('qh_system_template_extend', $num);
		}
		$this->session->set_flashdata($dataresult);
		redirect($this->folder);
	}
	public function deleteright($id){
		$result = $this->Model_backend->delete('qh_system_template_extend',$id);
 			// Sắp xếp lại số thứ tự các chuyên mục trong Category
 		$check_right = array(
				'id_symtem_template' => $this->id_symtem_template,
				'right_int' => 1,
			);
		$list_father = $this->db->select('*')->from('qh_system_template_extend')->where($check_right)->order_by('num','asc')->get()->result_array();
		$dem = 0;
		foreach ($list_father as $value) {
			$dem += 1;
			$num = array(
				'num' => $dem,
			);
			$this->db->where('id', $value['id']);
			$this->db->update('qh_system_template_extend', $num);
		}
		$this->session->set_flashdata($dataresult);
		redirect($this->folder);
	}
	public function left($status)
	{
		$update_status = array(
			'left' => $status,
		);
		$this->Model_backend->update('qh_system_template',$update_status,$this->id_symtem_template);
		redirect($this->folder);
	}
	public function right($status)
	{
		$update_status = array(
			'right' => $status,
		);
		$this->Model_backend->update('qh_system_template',$update_status,$this->id_symtem_template);
		redirect($this->folder);
	}
}
