<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->main = 'backend/layout/v_main';
	}

	public function index()
	{
		$data['template'] = 'backend/layout/v_home';
		$this->load->view($this->main, $data);
	}

	public function changewebsite($id_website){
		$userdata = array(
			'id_website'  => $id_website,
		);
		$this->session->set_userdata('ss_website', $userdata);
		redirect('backend/news/posts');
	}
	public function change_language($name_des){
		$userdata = array(
			'name_des'  => $name_des,
		);
		$this->session->set_userdata('ss_language', $userdata);
		redirect('backend/news/category');
	}
	public function chuyentitle(){
		$list_posts = $this->db->select('*')->from('qh_post_category')->get()->result_array();
		 foreach ($list_posts as $value) {
		 	$seo = json_decode($value['seo']);
		 	$dem = 0;
		 	foreach ($seo as $value_seo) {
		 		$dem = $dem + 1;
		 		if($dem == 1){
		 			$a_title = array(
				 		'vn' => $value_seo,
				 		'en' => '',
				 		'jp' => '',
				 		'kr' => '',
				 		'ch' => '',
				 		'lg' => '',
				 	);
				 	$u_title = array(
				 		'title' => json_encode($a_title)
				 	);
				 	$this->db->where('id', $value['id']);
				 	$this->db->update('qh_post_category', $u_title);
		 		}
		 		if($dem == 2){
		 			$a_title = array(
				 		'vn' => $value_seo,
				 		'en' => '',
				 		'jp' => '',
				 		'kr' => '',
				 		'ch' => '',
				 		'lg' => '',
				 	);
				 	$u_title = array(
				 		'description' => json_encode($a_title)
				 	);
				 	$this->db->where('id', $value['id']);
				 	$this->db->update('qh_post_category', $u_title);
		 		}
		 		if($dem == 3){
		 			$a_title = array(
				 		'vn' => $value_seo,
				 		'en' => '',
				 		'jp' => '',
				 		'kr' => '',
				 		'ch' => '',
				 		'lg' => '',
				 	);
				 	$u_title = array(
				 		'keywords' => json_encode($a_title)
				 	);
				 	$this->db->where('id', $value['id']);
				 	$this->db->update('qh_post_category', $u_title);
		 		}
		 		if($dem == 4){
		 			$a_title = array(
				 		'vn' => $value_seo,
				 		'en' => '',
				 		'jp' => '',
				 		'kr' => '',
				 		'ch' => '',
				 		'lg' => '',
				 	);
				 	$u_title = array(
				 		'imgwebsite' => json_encode($a_title)
				 	);
				 	$this->db->where('id', $value['id']);
				 	$this->db->update('qh_post_category', $u_title);
		 		}
		 		if($dem == 5){
		 			$a_title = array(
				 		'vn' => $value_seo,
				 		'en' => '',
				 		'jp' => '',
				 		'kr' => '',
				 		'ch' => '',
				 		'lg' => '',
				 	);
				 	$u_title = array(
				 		'imgsocial' => json_encode($a_title)
				 	);
				 	$this->db->where('id', $value['id']);
				 	$this->db->update('qh_post_category', $u_title);
		 		}
		 	}
		 }
	}
	public function thaydoidulieu(){
		 $list_posts = $this->db->select('*')->from('qh_post_category')->get()->result_array();
		 foreach ($list_posts as $value) {
		 	$a_name = array(
		 		'vn' => $value['name'],
		 		'en' => '',
		 		'jp' => '',
		 		'kr' => '',
		 		'ch' => '',
		 		'lg' => '',
		 	);
		 	$a_url = array(
		 		'vn' => $value['url'],
		 		'en' => '',
		 		'jp' => '',
		 		'kr' => '',
		 		'ch' => '',
		 		'lg' => '',
		 	);
		 	$a_content = array(
		 		'vn' => $value['content'],
		 		'en' => '',
		 		'jp' => '',
		 		'kr' => '',
		 		'ch' => '',
		 		'lg' => '',
		 	);
		 	$u_title = array(
				'name' => json_encode($a_name),
				'url' => json_encode($a_url),
				'content' => json_encode($a_content),
			);
			$this->db->where('id', $value['id']);
			$this->db->update('qh_post_category', $u_title);
		 }
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/backend/Home.php */