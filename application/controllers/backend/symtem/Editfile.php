<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editfile extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->main = 'backend/layout/v_main';
		$this->folder = 'backend/symtem/editfile';
	}
	public function list($id)
	{

		if (isset($_POST['edit'])) {
			$codefile = trim($_POST['codefile']);
			$view = $this->Model_backend->view_id('qh_system_template',$id);
			$myFile = 'application/views/'.$view['link'];
			$fh = fopen($myFile, 'w+');
			fwrite($fh,$codefile);
			fclose($fh);
			$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa thành công!',);
			$this->session->set_flashdata($dataresult);
			redirect('backend/symtem/editfile/list/'.$id);
		}


		$data['view'] = $this->Model_backend->view_id('qh_system_template',$id);
		$data['id'] = $id;
		$data['title'] = 'Chỉnh sửa File';
		$data['template'] = $this->folder.'/v_list';
		$this->load->view($this->main,$data);
	}
}
