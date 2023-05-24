<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$this->date = strtotime(date('d-m-Y H:i:s'));
		$this->main = 'backend/layout/v_main';
		$this->folder = 'backend/news/posts';
		$this->load->model('backend/news/Model_news_posts');
		$this->load->model('backend/news/Model_news_tags');
		$this->load->model('backend/news/Model_news_category');
		$this->load->model('backend/news/Model_news_templates');
		$this->load->model('backend/news/Model_news');
		$this->service = 1;
		$this->template_type = 2;

		$website = $this->session->userdata('ss_website');
		if(isset($website)){
			$this->id_website = $website['id_website'];
		}else{
			$this->id_website = 1;
		}

		$language = $this->session->userdata('ss_language');
		if(isset($language)){
			$this->id_language = $language['name_des'];
		}else{
			$this->id_language = 'vn';
		}
	}

	public function index()
	{
		$data['language'] = $this->id_language;
		$data['list_posts'] = $this->Model_news_posts->show_all_by_service($this->service);
		$data['title'] = 'Danh sách bài viết';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view($this->main,$data);
	}
	public function add()
	{
		if (isset($_POST['add'])) {
			$name = trim($_POST['name']);
			if(isset($_POST['post_status'])){ $post_status = 1; }else{ $post_status = 0; }
			if(isset($_POST['post_comment'])){ $post_comment = 1; }else{ $post_comment = 0; }
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
				'content' => $_POST['content'],
				'post_link_download' => trim($_POST['post_link_download']),
				'post_link_demo' => trim($_POST['post_link_demo']),
				'id_video_demo' => trim($_POST['id_video_demo']),
				'post_templates_id' => $_POST['post_templates_id'],
				'post_category_id' => json_encode($_POST['post_category_id']),
				'post_category_id_ze' => $_POST['post_category_id_ze'],
				'post_tags_id' => json_encode($_POST['post_tags_id']),
				'post_type_id' => $this->service,
				'post_website' => $this->id_website,
				'post_date' => $this->date,
				'post_status' => $post_status,
				'post_comment' => $post_comment,
			);
			$result = $this->Model_news_posts->add($thongtin);
			// Kiểm tra url vừa thêm nếu tồn tại trùng thì thêm id vào sau url
			$checkisset = array(
				'url' => trim($_POST['url']),
			);
			$listisset = $this->Model_backend->show_by('qh_posts',$checkisset);
			if(count($listisset) > 1){
				$url = trim($_POST['url']).'-'.$result;
				$updateurl = array(
					'url' => $url,
				);
				$this->db->where('id', $result);
				$this->db->update('qh_posts', $updateurl);
			}
			// Kết thúc kiểm tra url
			// Thông báo kết quả ra màn hình
			if($result){
				$dataresult = array('access' => 'ok','messenger' => 'Bạn đã thêm ['.$name.'] thành công!',);
				$this->session->set_flashdata($dataresult);
			}else{
				$dataresult = array('error' => 'ok','messenger' => 'Nội dung chưa được thêm vào cở sở dữ liệu!',);
			$this->session->set_flashdata($dataresult);
			}
			// Kết thúc thông báo để quay trở lại màn hình chính
			redirect($this->folder);
			}

		$data['language'] = $this->id_language;		
		$data['title'] = 'Thêm bài viết mới';
		$data['list_tags'] = $this->Model_news_tags->show_all_by_service($this->service);
		$data['list_templates'] = $this->Model_news_templates->show_all_by_service($this->service,$this->template_type);
		$data['template'] = $this->folder.'/v_add';
		$this->load->view($this->main,$data);
	}
	public function update($id){
		if (isset($_POST['edit'])) {
			$name = trim($_POST['name']);
			if(isset($_POST['post_status'])){ $post_status = 1; }else{ $post_status = 0; }
			if(isset($_POST['post_comment'])){ $post_comment = 1; }else{ $post_comment = 0; }
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
					'content' => $_POST['content'],
					'post_link_download' => trim($_POST['post_link_download']),
					'post_link_demo' => trim($_POST['post_link_demo']),
					'id_video_demo' => trim($_POST['id_video_demo']),
					'post_templates_id' => $_POST['post_templates_id'],
					'post_category_id' => json_encode($_POST['post_category_id']),
					'post_category_id_ze' => $_POST['post_category_id_ze'],
					'post_tags_id' => json_encode($_POST['post_tags_id']),
					'post_status' => $post_status,
					'post_comment' => $post_comment,
				);
				$result = $this->Model_news_posts->update($id,$thongtin);
				// Kiểm tra url vừa thêm nếu tồn tại trùng thì thêm id vào sau url
				$checkisset = array(
					'url' => trim($_POST['url']),
				);
				$listisset = $this->Model_backend->show_by('qh_posts',$checkisset);
				if(count($listisset) > 1){
					$url = trim($_POST['url']).'-'.$id;
					$updateurl = array(
						'url' => $url,
					);
					$this->db->where('id', $id);
					$this->db->update('qh_posts', $updateurl);
				}
				// Kết thúc kiểm tra url
				// Thông báo kết quả ra màn hình
					if($result){
						$dataresult = array('error' => 'ok','messenger' => 'Nội dung chưa được chỉnh sửa vào cở sở dữ liệu!',);
					}else{
						$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa ['.$name.'] thành công!',);
						$this->session->set_flashdata($dataresult);
					$this->session->set_flashdata($dataresult);
					}
				// Kết thúc thông báo để quay trở lại màn hình chính
				redirect($this->folder);
		}

		$data['language'] = $this->id_language;
		$data['id_posts'] = $id;
		$data['view'] = $this->Model_news_posts->viewid($id);
		$data['title'] = 'Chỉnh sửa bài viết';
		$data['list_tags'] = $this->Model_news_tags->show_all_by_service($this->service);
		$data['list_templates'] = $this->Model_news_templates->show_all_by_service($this->service,$this->template_type);
		$data['template'] = $this->folder.'/v_update';
		$this->load->view($this->main,$data);
	}
	public function img($id_posts){
		if(isset($_POST['add'])) {
			$thongtin = array(
					'id_posts' => $_POST['id_posts'],
					'link' =>  trim($_POST['link']),
					'id_position' =>  trim($_POST['id_position']),
				);
			$this->db->insert('qh_post_img', $thongtin);
		}
		$data['id_posts'] = $id_posts;
		$data['title'] = 'Thêm ảnh cho bài viết';
		$data['template'] = $this->folder.'/v_img';
		$this->load->view($this->main,$data);
	}
	public function video($id_posts){
		if(isset($_POST['add'])) {
			$thongtin = array(
					'id_posts' => $_POST['id_posts'],
					'name' =>  trim($_POST['name']),
					'codevideo' =>  trim($_POST['codevideo']),
					'num' =>  trim($_POST['num']),
					'content' =>  trim($_POST['content']),
				);
			$this->db->insert('qh_post_video', $thongtin);
		}
		$data['id_posts'] = $id_posts;
		$data['title'] = 'Thêm video cho bài viết';
		$data['template'] = $this->folder.'/v_video';
		$this->load->view($this->main,$data);
	}
	public function videodelete($id,$id_posts){
			$this->db->where('id', $id);
			$this->db->delete('qh_post_video');
			redirect('backend/news/posts/video/'.$id_posts);
	}
	public function imgdelete($id,$id_posts){
			$this->db->where('id', $id);
			$this->db->delete('qh_post_img');
			redirect('backend/news/posts/img/'.$id_posts);
	}
	public function delete($id){
			// Nếu không tồn tại thì bắt đầu được xóa
			$view = $this->Model_news_posts->viewid($id);
			$result = $this->Model_news_posts->delete($id);
			if($result){
				$dataresult = array('access' => 'ok','messenger' => 'Bạn xóa nội dung thành công!',);
			}else{
				$dataresult = array('error' => 'ok','messenger' => 'Dữ liệu chưa được xóa vào cơ sở dữ liệu vui lòng thử lại.',);
			}
			$this->session->set_flashdata($dataresult);
			redirect($this->folder);
	}
}
