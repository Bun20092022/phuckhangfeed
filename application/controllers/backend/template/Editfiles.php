<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editfiles extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->main = 'backend/layout/v_main';
	}
	public function index()
	{

		$data['title'] = 'Theme File Editor';
		$data['template'] = 'backend/template/v_main';
		$this->load->view($this->main, $data);
	}
	public function view($id)
	{
		if (isset($_POST['edit'])) {
				$view = $this->Model_backend->view_id('qh_system_template',$id);
				$codefile = trim($_POST['codefile']);
				$myFile = $view['link'];
				$fh = fopen($myFile, 'w+');
				fwrite($fh,$codefile);
				fclose($fh);
				$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa thành công!',);
				$this->session->set_flashdata($dataresult);
				$this->session->set_flashdata($dataresult);
				redirect('backend/template/editfiles/view/'.$id);
			}
		$data['view'] = $this->Model_backend->view_id('qh_system_template',$id);
		$data['template'] = 'backend/template/v_editfile';
		$this->load->view($this->main, $data);

	}

}
