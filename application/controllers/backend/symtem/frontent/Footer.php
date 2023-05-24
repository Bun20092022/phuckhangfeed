<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Footer extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->main = 'backend/layout/v_main';
		$this->folder = 'backend/symtem/frontent/footer';
		$this->id = 15;
	}

	public function index()
	{
		$check_menu1 = array(
                'father_symtem' => $this->id,
                'num_colum' => 1,
            );
			// Lấy danh sách các chuyên mục cùng cấp để đếm số thứ tự
 			$list_father1 = $this->db->select('*')->from('qh_system_frontent_extend')->where($check_menu1)->get()->result_array();
		if (isset($_POST['add1'])) {
			
			$data_up = array(
				'id_plugin' => $_POST['id_plugin'],
				'father_symtem' => $this->id,
				'id_public' => 1,
				'num_colum' => 1,
				'num' => count($list_father1) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		if (isset($_POST['title1'])) {
			$data_up = array(
				'id_text' => $_POST['id_text'],
				'father_symtem' => $this->id,
				'id_public' => 2,
				'num_colum' => 1,
				'num' => count($list_father1) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		if (isset($_POST['menu1'])) {
			$data_up = array(
				'id_menu' => $_POST['id_menu'],
				'father_symtem' => $this->id,
				'id_public' => 3,
				'num_colum' => 1,
				'num' => count($list_father1) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		$check_menu2 = array(
                'father_symtem' => $this->id,
                'num_colum' => 2,
            );
			// Lấy danh sách các chuyên mục cùng cấp để đếm số thứ tự
 			$list_father2 = $this->db->select('*')->from('qh_system_frontent_extend')->where($check_menu2)->get()->result_array();
		if (isset($_POST['add2'])) {
			$data_up = array(
				'id_plugin' => $_POST['id_plugin'],
				'father_symtem' => $this->id,
				'id_public' => 1,
				'num_colum' => 2,
				'num' => count($list_father2) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		if (isset($_POST['title2'])) {
			$data_up = array(
				'id_text' => $_POST['id_text'],
				'father_symtem' => $this->id,
				'id_public' => 2,
				'num_colum' => 2,
				'num' => count($list_father2) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		if (isset($_POST['menu2'])) {
			$data_up = array(
				'id_menu' => $_POST['id_menu'],
				'father_symtem' => $this->id,
				'id_public' => 3,
				'num_colum' => 2,
				'num' => count($list_father2) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		$check_menu3 = array(
                'father_symtem' => $this->id,
                'num_colum' => 3,
            );
			// Lấy danh sách các chuyên mục cùng cấp để đếm số thứ tự
 			$list_father3 = $this->db->select('*')->from('qh_system_frontent_extend')->where($check_menu3)->get()->result_array();
		if (isset($_POST['add3'])) {
			$data_up = array(
				'id_plugin' => $_POST['id_plugin'],
				'father_symtem' => $this->id,
				'id_public' => 1,
				'num_colum' => 3,
				'num' => count($list_father3) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		if (isset($_POST['title3'])) {
			$data_up = array(
				'id_text' => $_POST['id_text'],
				'father_symtem' => $this->id,
				'id_public' => 2,
				'num_colum' => 3,
				'num' => count($list_father3) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		if (isset($_POST['menu3'])) {
			$data_up = array(
				'id_menu' => $_POST['id_menu'],
				'father_symtem' => $this->id,
				'id_public' => 3,
				'num_colum' => 3,
				'num' => count($list_father3) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		$check_menu4 = array(
                'father_symtem' => $this->id,
                'num_colum' => 4,
            );
			// Lấy danh sách các chuyên mục cùng cấp để đếm số thứ tự
 			$list_father4 = $this->db->select('*')->from('qh_system_frontent_extend')->where($check_menu4)->get()->result_array();
		if (isset($_POST['add4'])) {
			
			$data_up = array(
				'id_plugin' => $_POST['id_plugin'],
				'father_symtem' => $this->id,
				'id_public' => 1,
				'num_colum' => 4,
				'num' => count($list_father4) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		if (isset($_POST['title4'])) {
			$data_up = array(
				'id_text' => $_POST['id_text'],
				'father_symtem' => $this->id,
				'id_public' => 2,
				'num_colum' => 4,
				'num' => count($list_father4) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		if (isset($_POST['menu4'])) {
			$data_up = array(
				'id_menu' => $_POST['id_menu'],
				'father_symtem' => $this->id,
				'id_public' => 3,
				'num_colum' => 4,
				'num' => count($list_father4) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		$check_menu5 = array(
                'father_symtem' => $this->id,
                'num_colum' => 5,
            );
			// Lấy danh sách các chuyên mục cùng cấp để đếm số thứ tự
 			$list_father5 = $this->db->select('*')->from('qh_system_frontent_extend')->where($check_menu5)->get()->result_array();
		if (isset($_POST['add5'])) {
			
			$data_up = array(
				'id_plugin' => $_POST['id_plugin'],
				'father_symtem' => $this->id,
				'id_public' => 1,
				'num_colum' => 5,
				'num' => count($list_father5) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		if (isset($_POST['title5'])) {
			$data_up = array(
				'id_text' => $_POST['id_text'],
				'father_symtem' => $this->id,
				'id_public' => 2,
				'num_colum' => 5,
				'num' => count($list_father5) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		if (isset($_POST['menu5'])) {
			$data_up = array(
				'id_menu' => $_POST['id_menu'],
				'father_symtem' => $this->id,
				'id_public' => 3,
				'num_colum' => 5,
				'num' => count($list_father5) + 1,
			);
			$this->Model_backend->insert('qh_system_frontent_extend',$data_up);
			redirect($this->folder);
		}
		$view = $this->Model_backend->view_id('qh_system_frontent',$this->id);
		$data['list_menu'] = $this->db->select('*')->from('qh_system_frontent')->where('father_id',$view['father_id'])->get()->result_array();
		$data['list_text'] = $this->db->select('*')->from('qh_system_frontent')->where('father_id',$view['father_id'])->get()->result_array();
		$data['view'] = $this->Model_backend->view_id('qh_system_frontent',$this->id);
		$data['title'] = 'Footer';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view($this->main,$data);
	}
	public function tang($id_table,$num_colum,$father_symtem,$num){
 		if ($num == 0){
 			$dataresult = array('error' => 'ok','messenger' => 'Chuyên mục đang ở  vị trí đầu tiên bạn không thể tăng',);
 			$this->session->set_flashdata($dataresult);
 			redirect($this->folder);
 		}else{
 			// Lấy thông tin của num hiện tại
 			$num_truoc = array(
 				'father_symtem' => $father_symtem,
 				'num_colum' => $num_colum,
 				'num' => $num-1,
 			);
 			$truoc = $this->db->select('*')->from('qh_system_frontent_extend')->where($num_truoc)->get()->row_array();

 			$id_numtruoc = $truoc['id'];

 			$this->db->where('id', $id_table);
 			$this->db->update('qh_system_frontent_extend', $num_truoc);

 			// Tăng bậc của id trước
 			$num_tang_bac = array(
 				'num' => $num,
 			);
 			$this->db->where('id', $id_numtruoc);
 			$this->db->update('qh_system_frontent_extend', $num_tang_bac);
 			$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa số thứ tự thành công',);
 		}
 		$this->session->set_flashdata($dataresult);
 		redirect($this->folder);

 	}
 	public function giam($id_table,$num_colum,$father_symtem,$num){
 		if ($num == 100){
 			$dataresult = array('error' => 'ok','messenger' => 'Chuyên mục đang ở vị trí cuối tiên bạn không thể tăng',);
 			$this->session->set_flashdata($dataresult);
 			redirect($this->folder);
 		}else{
 			// Lấy thông tin của num hiện tại
 			$num_truoc = array(
 				'father_symtem' => $father_symtem,
 				'num_colum' => $num_colum,
 				'num' => $num+1,
 			);
 			$truoc = $this->db->select('*')->from('qh_system_frontent_extend')->where($num_truoc)->get()->row_array();

 			$id_numtruoc = $truoc['id'];

 			$this->db->where('id', $id_table);
 			$this->db->update('qh_system_frontent_extend', $num_truoc);

 			// Tăng bậc của id trước
 			$num_tang_bac = array(
 				'num' => $num,
 			);
 			$this->db->where('id', $id_numtruoc);
 			$this->db->update('qh_system_frontent_extend', $num_tang_bac);
 			$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa số thứ tự thành công',);
 		}
 		$this->session->set_flashdata($dataresult);
 		redirect($this->folder);

 	}
	public function delete($id,$num_colum){
 			$this->Model_backend->delete('qh_system_frontent_extend',$id);
 			// Sắp xếp lại số thứ tự các chuyên mục trong Category
 			$check_menu = array(
 				'father_symtem' => $this->id,
 				'num_colum' => $num_colum,
 			);
	 		$list_father = $this->db->select('*')->from('qh_system_frontent_extend')->where($check_menu)->order_by('num','asc')->get()->result_array();
	 		$dem = 0;
	 		foreach ($list_father as $value) {
	 			$dem += 1;
	 			$num = array(
	 				'num' => $dem,
	 			);
	 			$this->db->where('id', $value['id']);
	 			$this->db->update('qh_system_frontent_extend', $num);
	 		}
	 		$this->session->set_flashdata($dataresult);
	 		redirect($this->folder);
	}
}
