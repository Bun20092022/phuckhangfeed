<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$this->date = strtotime(date('d-m-Y H:i:s'));
		$this->main = 'backend/layout/v_main';
		$this->folder = 'backend/service/posts';
		$this->load->model('backend/news/Model_news_posts');
		$this->load->model('backend/news/Model_news_tags');
		$this->load->model('backend/news/Model_news_category');
		$this->load->model('backend/news/Model_news_templates');
		$this->load->model('backend/news/Model_news');
		$this->service = 1;
		$this->template_type = 2;
	}
	public function id($id_service)
	{
		$data['xuatban'] = 1;
		$data['link_add'] = $this->folder.'/add/'.$id_service;
		$data['title_add'] = 'Thêm bài viết';
		$data['language'] = $this->id_language;
		$data['id_service'] = $id_service;
		$data['list_posts'] = $this->Model_backend->get_type('qh_posts',$id_service);
		$data['title'] = 'Danh sách bài viết';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view($this->main,$data);
	}
	public function add($id_service)
	{
		if (isset($_POST['add'])) {
			if(isset($_POST['post_status'])){ $post_status = 2; }else{ $post_status = 3; }
			if(isset($_POST['post_comment'])){ $post_comment = 2; }else{ $post_comment = 3; }
			$name = array(
				'vn' => '',
				'en' => '',
				'jp' => '',
				'kr' => '',
				'ch' => '',
				'lg' => '',
			);
			$name[$this->id_language]= $_POST['name_'.$this->id_language];
			$title = array(
				'vn' => '',
				'en' => '',
				'jp' => '',
				'kr' => '',
				'ch' => '',
				'lg' => '',
			);
			$title[$this->id_language]= $_POST['title_'.$this->id_language];
			$description = array(
				'vn' => '',
				'en' => '',
				'jp' => '',
				'kr' => '',
				'ch' => '',
				'lg' => '',
			);
			$description[$this->id_language]= $_POST['description_'.$this->id_language];
			$keywords = array(
				'vn' => '',
				'en' => '',
				'jp' => '',
				'kr' => '',
				'ch' => '',
				'lg' => '',
			);
			$keywords[$this->id_language]= $_POST['keywords_'.$this->id_language];
			$imgwebsite = array(
				'vn' => '',
				'en' => '',
				'jp' => '',
				'kr' => '',
				'ch' => '',
				'lg' => '',
			);
			$imgwebsite[$this->id_language]= $_POST['imgwebsite_'.$this->id_language];
			$imgsocial = array(
				'vn' => '',
				'en' => '',
				'jp' => '',
				'kr' => '',
				'ch' => '',
				'lg' => '',
			);
			$imgsocial[$this->id_language]= $_POST['imgsocial_'.$this->id_language];
			$content = array(
				'vn' => '',
				'en' => '',
				'jp' => '',
				'kr' => '',
				'ch' => '',
				'lg' => '',
			);
			$content[$this->id_language]= $_POST['content_'.$this->id_language];
			$url = 'url_'.$this->id_language;
			// Lấy các danh mục trực thuộc của danh mục con để hiển thị trên hệ thống
			$array_father_id = [];
			array_push($array_father_id, $_POST['post_category_id_ze']);
			$view_father_id_1 = $this->Model_backend->view_id('qh_post_category',$_POST['post_category_id_ze']);
			if($view_father_id_1['father_id'] == 0){
				
			}else{
				array_push($array_father_id, $view_father_id_1['father_id']);
				$view_father_id_2 = $this->Model_backend->view_id('qh_post_category',$view_father_id_1['father_id']);
				if($view_father_id_2['father_id'] == 0){
					
				}else{
					array_push($array_father_id, $view_father_id_2['father_id']);
					$view_father_id_3 = $this->Model_backend->view_id('qh_post_category',$view_father_id_2['father_id']);
					if($view_father_id_3['father_id'] == 0){
						
					}else{
						array_push($array_father_id, $view_father_id_3['father_id']);
						$view_father_id_4 = $this->Model_backend->view_id('qh_post_category',$view_father_id_3['father_id']);
						if($view_father_id_4['father_id'] == 0){
							
						}else{
							array_push($array_father_id, $view_father_id_4['father_id']);
						}
					}
				}
			}

			$thongtin = array(
				'name' => json_encode($name),
				$url =>  trim($_POST[$url]),
				'title' => json_encode($title),
				'description' => json_encode($description),
				'keywords' => json_encode($keywords),
				'imgwebsite' => json_encode($imgwebsite),
				'imgsocial' => json_encode($imgsocial),
				'content' => json_encode($content),
				'post_templates_id' => $_POST['post_templates_id'],
				'post_category_id' => json_encode($array_father_id),
				'post_category_id_ze' => $_POST['post_category_id_ze'],
				'post_tags_id' => json_encode($_POST['post_tags_id']),
				'post_type_id' => $id_service,
				'post_website' => $this->id_website,
				'post_date' => $this->date,
				'post_status' => $post_status,
				'post_comment' => $post_comment,
			);
			$result = $this->Model_news_posts->add($thongtin);
			// Kiểm tra url vừa thêm nếu tồn tại trùng thì thêm id vào sau url
			$checkisset = array(
				$url => trim($url),
			);
			$listisset = $this->Model_backend->show_by('qh_posts',$checkisset);
			if(count($listisset) > 1){
				$url_new = trim($url).'-'.$result;
				$updateurl = array(
					$url => $url_new,
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
			redirect($this->folder.'/id/'.$id_service);
		}

		$data['language'] = $this->id_language;		
		$data['title'] = 'Thêm bài viết mới';
		$data['id_service'] = $id_service;

		$data['list_tags'] = $this->Model_news_tags->show_all_by_service($id_service);
		$data['list_templates'] = $this->Model_backend->get_template_post('qh_post_template',$id_service);
		$data['template'] = $this->folder.'/v_add';
		$this->load->view($this->main,$data);
	}
	public function update($id_service,$id){
		if (isset($_POST['edit'])) {
			if(isset($_POST['post_status'])){ $post_status = 2; }else{ $post_status = 3; }
			if(isset($_POST['post_comment'])){ $post_comment = 2; }else{ $post_comment = 3; }
			$view_posts = $this->Model_backend->view_id('qh_posts',$id);
 			$name = json_decode($view_posts['name']);
 			$title = json_decode($view_posts['title']);
 			$description = json_decode($view_posts['description']);
 			$keywords = json_decode($view_posts['keywords']);
 			$imgwebsite = json_decode($view_posts['imgwebsite']);
 			$imgsocial = json_decode($view_posts['imgsocial']);
 			$content = json_decode($view_posts['content']);
 			$name = array(
 				'vn' => $name->{'vn'},
 				'en' => $name->{'en'},
 				'jp' => $name->{'jp'},
 				'kr' => $name->{'kr'},
 				'ch' => $name->{'ch'},
 				'lg' => $name->{'lg'},
 			);
 			$name[$this->id_language]= $_POST['name_'.$this->id_language];
 			$title = array(
 				'vn' => $title->{'vn'},
 				'en' => $title->{'en'},
 				'jp' => $title->{'jp'},
 				'kr' => $title->{'kr'},
 				'ch' => $title->{'ch'},
 				'lg' => $title->{'lg'},
 			);
 			$title[$this->id_language]= $_POST['title_'.$this->id_language];
 			$description = array(
 				'vn' => $description->{'vn'},
 				'en' => $description->{'en'},
 				'jp' => $description->{'jp'},
 				'kr' => $description->{'kr'},
 				'ch' => $description->{'ch'},
 				'lg' => $description->{'lg'},
 			);
 			$description[$this->id_language]= $_POST['description_'.$this->id_language];
 			$keywords = array(
 				'vn' => $keywords->{'vn'},
 				'en' => $keywords->{'en'},
 				'jp' => $keywords->{'jp'},
 				'kr' => $keywords->{'kr'},
 				'ch' => $keywords->{'ch'},
 				'lg' => $keywords->{'lg'},
 			);
 			$keywords[$this->id_language]= $_POST['keywords_'.$this->id_language];
 			$imgwebsite = array(
 				'vn' => $imgwebsite->{'vn'},
 				'en' => $imgwebsite->{'en'},
 				'jp' => $imgwebsite->{'jp'},
 				'kr' => $imgwebsite->{'kr'},
 				'ch' => $imgwebsite->{'ch'},
 				'lg' => $imgwebsite->{'lg'},
 			);
 			$imgwebsite[$this->id_language]= $_POST['imgwebsite_'.$this->id_language];
 			$imgsocial = array(
 				'vn' => $imgsocial->{'vn'},
 				'en' => $imgsocial->{'en'},
 				'jp' => $imgsocial->{'jp'},
 				'kr' => $imgsocial->{'kr'},
 				'ch' => $imgsocial->{'ch'},
 				'lg' => $imgsocial->{'lg'},
 			);
 			$imgsocial[$this->id_language]= $_POST['imgsocial_'.$this->id_language];
 			$content = array(
 				'vn' => $content->{'vn'},
 				'en' => $content->{'en'},
 				'jp' => $content->{'jp'},
 				'kr' => $content->{'kr'},
 				'ch' => $content_->{'ch'},
 				'lg' => $content->{'lg'},
 			);
 			$content[$this->id_language]= $_POST['content_'.$this->id_language];
			$url = 'url_'.$this->id_language;
			// Lấy các danh mục trực thuộc của danh mục con để hiển thị trên hệ thống
			$array_father_id = [];
			array_push($array_father_id, $_POST['post_category_id_ze']);
			$view_father_id_1 = $this->Model_backend->view_id('qh_post_category',$_POST['post_category_id_ze']);
			if($view_father_id_1['father_id'] == 0){
				
			}else{
				array_push($array_father_id, $view_father_id_1['father_id']);
				$view_father_id_2 = $this->Model_backend->view_id('qh_post_category',$view_father_id_1['father_id']);
				if($view_father_id_2['father_id'] == 0){
					
				}else{
					array_push($array_father_id, $view_father_id_2['father_id']);
					$view_father_id_3 = $this->Model_backend->view_id('qh_post_category',$view_father_id_2['father_id']);
					if($view_father_id_3['father_id'] == 0){
						
					}else{
						array_push($array_father_id, $view_father_id_3['father_id']);
						$view_father_id_4 = $this->Model_backend->view_id('qh_post_category',$view_father_id_3['father_id']);
						if($view_father_id_4['father_id'] == 0){
							
						}else{
							array_push($array_father_id, $view_father_id_4['father_id']);
						}
					}
				}
			}
			$thongtin = array(
				'name' => json_encode($name),
				$url =>  trim($_POST[$url]),
				'title' => json_encode($title),
				'description' => json_encode($description),
				'keywords' => json_encode($keywords),
				'imgwebsite' => json_encode($imgwebsite),
				'imgsocial' => json_encode($imgsocial),
				'content' => json_encode($content),
				'post_templates_id' => $_POST['post_templates_id'],
				'post_category_id' => json_encode($array_father_id),
				'post_category_id_ze' => $_POST['post_category_id_ze'],
				'post_tags_id' => json_encode($_POST['post_tags_id']),
				'post_status' => $post_status,
				'post_comment' => $post_comment,
			);
			 $result = $this->Model_news_posts->update($id,$thongtin);
				// Kiểm tra url vừa thêm nếu tồn tại trùng thì thêm id vào sau url
			$checkisset = array(
				$url => trim($url),
			);
			$listisset = $this->Model_backend->show_by('qh_posts',$checkisset);
			if(count($listisset) > 1){
				$url_new = trim($url).'-'.$id;
				$updateurl = array(
					$url => $url_new,
				);
				$this->db->where('id', $id);
				$this->db->update('qh_posts', $updateurl);
			}
			// Kết thúc kiểm tra url
			// Thông báo kết quả ra màn hình
			if($result){
				$dataresult = array('error' => 'ok','messenger' => 'Nội dung chưa được thêm vào cở sở dữ liệu!',);
				$this->session->set_flashdata($dataresult);
			}else{
				$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa thành công!',);
				$this->session->set_flashdata($dataresult);
			}
				// Kết thúc thông báo để quay trở lại màn hình chính
			redirect($this->folder.'/id/'.$id_service);
		}

		$data['language'] = $this->id_language;
		$data['id_posts'] = $id;
		$data['view'] = $this->Model_news_posts->viewid($id);
		$data['title'] = 'Chỉnh sửa bài viết';
		$data['list_tags'] = $this->Model_news_tags->show_all_by_service($this->service);
		$data['list_templates'] = $this->Model_backend->get_template_post('qh_post_template',$id_service);
		$data['id_service'] = $id_service;

		$data['template'] = $this->folder.'/v_update';
		$this->load->view($this->main,$data);
	}
	public function tamdung($id_service,$id_posts)
	{
		$thongtin = array(
			'post_status' => 3,
		);
		$this->Model_backend->update('qh_posts',$thongtin,$id_posts);
		redirect($this->folder.'/id/'.$id_service);		
	}
	public function kichhoat($id_service,$id_posts)
	{
		$thongtin = array(
			'post_status' => 2,
		);
		$this->Model_backend->update('qh_posts',$thongtin,$id_posts);
		redirect($this->folder.'/id/'.$id_service);		
	}
	public function img($id_service,$id_posts){
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
	public function video($id_service,$id_posts){
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
	public function delete($id_service,$id){
			// Nếu không tồn tại thì bắt đầu được xóa
		$view = $this->Model_news_posts->viewid($id);
		$result = $this->Model_news_posts->delete($id);
		if($result){
			$dataresult = array('access' => 'ok','messenger' => 'Bạn xóa nội dung thành công!',);
		}else{
			$dataresult = array('error' => 'ok','messenger' => 'Dữ liệu chưa được xóa vào cơ sở dữ liệu vui lòng thử lại.',);
		}
		$this->session->set_flashdata($dataresult);
		redirect($this->folder.'/id/'.$id_service);
	}
}
