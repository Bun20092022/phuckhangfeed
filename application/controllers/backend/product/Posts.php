<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$this->date = strtotime(date('d-m-Y H:i:s'));
		$this->main = 'backend/layout/v_main';
		$this->folder = 'backend/product/posts';
		$this->post_type_id = 2;
		$this->template_type_id = 2;
	}

	public function index()
	{
		$data['link_add'] = $this->folder.'/add';
		$data['title_add'] = 'Thêm sản phẩm';
		$data['language'] = $this->id_language;

		$data['list_posts'] = $this->Model_backend->get_post_type_id('qh_posts',$this->post_type_id);
		$data['title'] = 'Danh sách sản phẩm';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view($this->main,$data);
	}
	public function status($status)
	{
		$data['link_add'] = $this->folder.'/add';
		$data['title_add'] = 'Thêm sản phẩm';
		$data['language'] = $this->id_language;
		$check_status = array(
			'post_status' => $status,
			'post_type_id' => $this->post_type_id,
		);
		$data['list_posts'] = $this->Model_backend->get_where('qh_posts',$check_status);

		$data['id_status'] = $status;
		$data['title'] = 'Danh sách sản phẩm';
		$data['template'] = $this->folder.'/v_main';
		$this->load->view($this->main,$data);
	}
	public function add()
	{
		$post_status = 2;
		$post_comment = 2;
		$array_lang = array(
			'vn' => '',
			'en' => '',
			'jp' => '',
			'kr' => '',
			'ch' => '',
			'lg' => '',
		);

		$array_father_id = [0];
			// Lấy template mặc định
		$check_template_active = array(
			'post_type_id' => $this->post_type_id,
			'template_type_id' => $this->template_type_id,
			'post_website' => $this->id_website,
			'keyselect' => 1,
		);
		$view_template = $this->db->select('*')->from('qh_post_template')->where($check_template_active)->get()->row_array();
		$thongtin = array(
			'name' => json_encode($array_lang),
			'title' => json_encode($array_lang),
			'description' => json_encode($array_lang),
			'keywords' => json_encode($array_lang),
			'imgwebsite' => json_encode($array_lang),
			'imgsocial' => json_encode($array_lang),
			'content' => json_encode($array_lang),
			'post_category_id' => json_encode($array_father_id),
			'post_tags_id' => json_encode($array_father_id),
			'post_type_id' => $this->post_type_id,
			'post_website' => $this->id_website,
			'post_templates_id' =>$view_template['id'],
			'post_status' => 3,
			'post_date' => strtotime(date('d-m-Y')),
			'post_comment' => 3,
		);
		$result = $this->Model_backend->insert('qh_posts',$thongtin);
		redirect($this->folder.'/update/'.$result);
	}
	public function update($id){
		if (isset($_POST['edit'])) {
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
				'post_status' => $_POST['post_status'],
				'post_comment' => $post_comment,
				'post_date' => strtotime($_POST['post_date']),
			);
			$result = $this->Model_backend->update('qh_posts',$thongtin,$id);
				// Kiểm tra url vừa thêm nếu tồn tại trùng thì thêm id vào sau url
			$checkisset = array(
				$url => $_POST[$url],
			);
			$listisset = $this->Model_backend->show_by('qh_posts',$checkisset);
			if(count($listisset) > 1){
				$url_new = $_POST[$url].'-'.$id;
				$updateurl = array(
					$url => $url_new,
				);
				$this->db->where('id', $id);
				$this->db->update('qh_posts', $updateurl);
			}
			// Kết thúc kiểm tra url
			redirect($this->folder.'/status/2');
		}

		$data['language'] = $this->id_language;
		$data['id_posts'] = $id;
		$data['view'] = $this->Model_backend->view_id('qh_posts',$id);
		$data['title'] = 'Chỉnh sửa sản phẩm';
		$data['list_tags'] = $this->Model_backend->get_post_type_id('qh_post_tags',$this->post_type_id);
		$data['list_templates'] =  $this->Model_backend->show_all_by_template_type($this->post_type_id,$this->template_type_id);
		$check_category = array(
			'post_website' => $this->id_website,
			'father_id' => 0,
			'post_type_id' => $this->post_type_id,
		);
		$data['list_category'] = $this->Model_backend->get_where('qh_post_category',$check_category);
		$data['template'] = $this->folder.'/v_update';
		$this->load->view($this->main,$data);
	}
	public function tamdung($id_posts,$id_status)
	{
		$thongtin = array(
			'post_status' => 3,
		);
		$this->Model_backend->update('qh_posts',$thongtin,$id_posts);
		redirect($this->folder.'/status/'.$id_status);		
	}
	public function kichhoat($id_posts,$id_status)
	{
		$thongtin = array(
			'post_status' => 2,
		);
		$this->Model_backend->update('qh_posts',$thongtin,$id_posts);
		redirect($this->folder.'/status/'.$id_status);		
	}
	public function add_img(){
		$thongtin = array(
			'id_posts' => $_GET['id_posts'],
			'link' =>  trim($_GET['img_product']),
		);
		$this->db->insert('qh_post_img', $thongtin);

		$data['id_posts'] = $_GET['id_posts'];
		$this->load->view($this->folder.'/list_img',$data);
	}
	public function list_img(){
		$data['id_posts'] = $_POST['id_posts'];
		$this->load->view($this->folder.'/list_img',$data);
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
		$data['title'] = 'Thêm video cho sản phẩm';
		$data['template'] = $this->folder.'/v_video';
		$this->load->view($this->main,$data);
	}
	public function videodelete($id,$id_posts){
		$this->db->where('id', $id);
		$this->db->delete('qh_post_video');
		redirect('backend/news/posts/video/'.$id_posts);
	}
	public function delete_img(){
		$this->db->where('id', $_POST['id_img']);
		$this->db->delete('qh_post_img');

		$data['id_posts'] = $_POST['id_posts'];
		$this->load->view($this->folder.'/list_img',$data);
	}
	public function delete($id,$id_status){
		$result = $this->Model_backend->delete('qh_posts',$id);
		redirect($this->folder.'/status/'.$id_status);
	}
}
