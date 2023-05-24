<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$language = $this->session->userdata('ss_languagew');
		if(isset($language)){
		 $this->id_language = $language['name_lang'];
		}else{
		 $this->id_language = 'vn';
		}
	}

	public function index()
	{
		$url_lang = $this->uri->segment(1);
		$url_category = $this->uri->segment(2);
		// Lấy url trong CSDL
		$url = 'url_'.$url_lang;
		$check_url = array(
			$url => $url_category,
			'post_status' => 2,
		);

		$view_url = $this->db->select('*')->from('qh_post_category')->where($check_url)->get()->row_array();
		$data['view_url'] =$this->db->select('*')->from('qh_post_category')->where($check_url)->get()->row_array();
		
		// Kiểm tra nếu không có url này thì thông báo ra trang lỗi
		if(!isset($view_url)){
			redirect('error','refresh');
		}
		// Nếu là cấp cuối thì lấy toàn bộ đơn vị bài viết ra
		$check_status = array(
			'post_category_id_ze' =>$view_url['id'],
			'post_status' => 2,
		);
		$data['list_post'] = $this->db->select('*')->from('qh_posts')->where($check_status)->order_by('post_date','desc')->get()->result_array();
		// Nếu là cấp cuối thì lấy toàn bộ đơn vị bài viết ra
		$check_status_all = array(
			'post_status' => 2,
		);
		$data['list_post_all'] = $this->db->select('*')->from('qh_posts')->where($check_status_all)->order_by('post_date','desc')->get()->result_array();
		$view_template = $this->Model_frontent->view_template($view_url['post_templates_id']);
		
		// Tổng hợp các danh mục thuộc danh mục cha
		$list_folder = array();
		array_push($list_folder, $view_url['id']);
		// Lấy các danh mục thuộc danh mục cha
		$list_category = $this->db->select('*')->from('qh_post_category')->where('father_id',$view_url['id'])->get()->result_array();
		foreach ($list_category as $value) {
			array_push($list_folder, $value['id']);
		}
		$data['list_folder'] = $list_folder;

		$title = json_decode($view_url['title']);
		$description = json_decode($view_url['description']);
		$keywords = json_decode($view_url['keywords']);
		$imgsocial = json_decode($view_url['imgsocial']);

		$data['title'] = $title->{$this->id_language};
		$data['description'] = $description->{$this->id_language};
		$data['keywords'] = $keywords->{$this->id_language};
		$data['imgsocial'] = $imgsocial->{$this->id_language};

		$data['template'] = $view_template['template_link'];
		$this->load->view('frontent/layout/v_main',$data);
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */