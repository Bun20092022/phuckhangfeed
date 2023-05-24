<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tags extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->date = strtotime(date('d-m-Y H:i:s'));
		$this->main = 'backend/layout/v_main';
		$this->folder = 'backend/news/tags';
		$this->load->model('backend/news/Model_news_tags');
		$this->load->model('backend/news/Model_news');
		$this->service = 1;

		$website = $this->session->userdata('ss_website');
		if(isset($website)){
			$this->id_website = $website['id_website'];
		}else{
			$this->id_website = 1;
		}
	}

	public function index()
	{
		$data['add'] = $this->folder.'/add';
		$data['titleadd'] = "Tạo bài viết";
		$data['website'] = '';
		$data['linkcopy'] = $this->folder.'/copy/';
		$data['linkupdate'] = $this->folder.'/update/';
		$data['linkdelete'] = $this->folder.'/delete/';

		$data['service'] = $this->service;
		$data['list_tags'] = $this->Model_news_tags->show_all_by_service($this->service);
		$data['title'] = 'Danh sách thẻ tags';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view($this->main,$data);
	}

	public function add()
	{
		if (isset($_POST['add'])) {
			$name = trim($_POST['name']);
			$checkname = $this->Model_news_tags->checkname($name);

			if(count($checkname) > 0){
				$dataresult = array('error' => 'ok','messenger' => '[ '.$name.' ] đã tồn tại trong cơ sở dữ liệu. Bạn vui lòng kiểm tra lại!',);
				$this->session->set_flashdata($dataresult);
				redirect($this->folder);
			}else {
				$seo = array(
					'title' => trim($_POST['title']),
					'description' => trim($_POST['description']),
					'keywords' => trim($_POST['keywords']),
					'imgwebsite' => trim($_POST['imgwebsite']),
					'imgsocial' => trim($_POST['imgsocial']),
				);
				$thongtin = array(
					'name' => trim($_POST['name']),
					'url' =>  trim($_POST['url']),
					'seo' => json_encode($seo),
					'post_type_id' => $this->service,
					'post_website' => $this->id_website,
				);
				$result = $this->Model_news_tags->add($thongtin);
					if($result){
						$dataresult = array('access' => 'ok','messenger' => 'Bạn đã thêm ['.$name.'] thành công!',);
						$this->session->set_flashdata($dataresult);
					}else{
						$dataresult = array('error' => 'ok','messenger' => 'Nội dung chưa được thêm vào cở sở dữ liệu!',);
					$this->session->set_flashdata($dataresult);
					}
				redirect($this->folder);
			}
		}
		$data['title'] = 'Thêm thẻ tags mới';
		$data['template'] = $this->folder.'/v_add';
		$this->load->view($this->main,$data);
	}
	public function update($id){
		if (isset($_POST['edit'])) {
			$name = trim($_POST['name']);
			$checkname = $this->Model_news_tags->checkname($name);

			if(count($checkname) > 0){
				$dataresult = array('error' => 'ok','messenger' => '[ '.$name.' ] đã được thêm vào cơ sở dữ liệu. Bạn vui lòng kiểm tra lại!',);
				$this->session->set_flashdata($dataresult);
				redirect($this->folder);
			}else {
				$seo = array(
					'title' => trim($_POST['title']),
					'description' => trim($_POST['description']),
					'keywords' => trim($_POST['keywords']),
					'imgwebsite' => trim($_POST['imgwebsite']),
					'imgsocial' => trim($_POST['imgsocial']),
				);
				$thongtin = array(
					'name' => trim($_POST['name']),
					'url' =>  trim($_POST['url']),
					'seo' => json_encode($seo),
				);
				$result = $this->Model_news_tags->update($id,$thongtin);
					if($result){
						$dataresult = array('error' => 'ok','messenger' => 'Nội dung chưa được chỉnh sửa vào cở sở dữ liệu!',);
					}else{
						$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa ['.$name.'] thành công!',);
						$this->session->set_flashdata($dataresult);
					$this->session->set_flashdata($dataresult);
					}
				redirect($this->folder);
			}
		}
		$data['view'] = $this->Model_news_tags->viewid($id);
		$data['title'] = 'Chỉnh sửa thẻ Tags';
		$data['template'] = $this->folder.'/v_update';
		$this->load->view($this->main,$data);
	}
	public function delete($id){
		// Lấy toàn bộ thông tin bảng qh_posts
		$list_all_post = $this->Model_news->show_all();
		// Nếu tồn tại trong bảng dữ liệu Post thì không được xóa
		$id_isset = 'no_isset';
		foreach ($list_all_post as $value) {
			$listtags = json_decode($value['post_tags_id']);
			if(in_array($id, $listtags)){
				$id_isset = 'isset';
			}
		}
		if($id_isset == 'isset'){
			$dataresult = array('error' => 'ok','messenger' => 'Tồn tại dữ liệu con. Bạn vui lòng xóa dữ liệu con trước khi thực hiện',);
		}else
		{
			// Nếu không tồn tại thì bắt đầu được xóa
			$view = $this->Model_news_tags->viewid($id);
			$result = $this->Model_news_tags->delete($id);
			if($result){
				$dataresult = array('access' => 'ok','messenger' => 'Bạn xóa nội dung thành công!',);
			}else{
				$dataresult = array('error' => 'ok','messenger' => 'Dữ liệu chưa được xóa vào cơ sở dữ liệu vui lòng thử lại.',);
			}
		}
			$this->session->set_flashdata($dataresult);
			redirect($this->folder);
		
	}

	public function distribution()
	{
		$this->db->truncate('qh_post_tags_distribution');
		$listtags = $this->db->select('*')->from('qh_posts')->get()->result_array();
		foreach ($listtags as $valuetags) {
			$list_tags = json_decode($valuetags['post_tags_id']);
			if(count($list_tags) > 0){
			foreach ($list_tags as $value_tags) {
				$insearttag = array(
					'id_post' => $valuetags['id'],
					'id_tags' => $value_tags,
					'post_website' => $valuetags['post_website'],
				);
				$this->db->insert('qh_post_tags_distribution', $insearttag);
			}
			}
		}
		redirect('backend/news/tags');
	}
}
