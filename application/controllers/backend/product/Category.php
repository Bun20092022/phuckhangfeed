 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Category extends MY_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->date = strtotime(date('d-m-Y H:i:s'));
 		$this->main = 'backend/layout/v_main';
 		$this->folder = 'backend/product/category';
 		$this->post_type_id = 2;
 		$this->template_type = 1;
 	}

 	public function index()
 	{
 		$data['add'] = $this->folder.'/add';
 		$data['titleadd'] = "Tạo sản phẩm";
 		$data['website'] = '';
 		$data['linkcopy'] = $this->folder.'/copy/';
 		$data['linkupdate'] = $this->folder.'/update/';
 		$data['linkdelete'] = $this->folder.'/delete/';

 		
 		$data['language'] = $this->id_language;

 		$check_category = array(
 			'post_website' => $this->id_website,
 			'father_id' => 0,
 			'post_type_id' => $this->post_type_id,
 		);
 		$data['list_category'] = $this->Model_backend->get_where('qh_post_category',$check_category);
 		$data['title'] = 'Danh sách chuyên mục'.' '.$this->id_language;
 		$data['template'] = $this->folder.'/v_main';
 		$this->load->view($this->main,$data);
 	}

 	public function add()
 	{
 		if (isset($_POST['add'])) {
 			if(isset($_POST['post_status'])){ $post_status = 2; }else{ $post_status = 3; }
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
 			$imgbackground = array(
 				'vn' => '',
 				'en' => '',
 				'jp' => '',
 				'kr' => '',
 				'ch' => '',
 				'lg' => '',
 			);
 			$imgbackground[$this->id_language]= $_POST['imgbackground_'.$this->id_language];
 			// Lấy danh sách các chuyên mục cùng cấp để đếm số thứ tự
 			$list_father = $this->db->select('*')->from('qh_post_category')->where('father_id',$_POST['father_id'])->get()->result_array();
 			$url = 'url_'.$this->id_language;
 			$thongtin = array(
 				'name' => json_encode($name),
 				$url =>  trim($_POST[$url]),
 				'title' => json_encode($title),
 				'description' => json_encode($description),
 				'keywords' => json_encode($keywords),
 				'imgwebsite' => json_encode($imgwebsite),
 				'imgsocial' => json_encode($imgsocial),
 				'content' => json_encode($content),
 				'father_id' => trim($_POST['father_id']),
 				'img_background' => json_encode($imgbackground),
 				'color_background' => $_POST['color_background'],
 				'color_text' => $_POST['color_text'],
 				'post_website' => $this->id_website,
 				'post_status' => $post_status,
 				'posts_style' => 1,
 				'post_type_id' => $this->post_type_id,
 				'post_templates_id' => $_POST['post_templates_id'],
 				'num' => count($list_father) + 1,
 			);
 			$result = $this->Model_backend->insert('qh_post_category',$thongtin);
			// Kiểm tra url vừa thêm nếu tồn tại trùng thì thêm id vào sau url
 			$checkisset = array(
 				$url => $_POST[$url],
 			);
 			$listisset = $this->Model_backend->show_by('qh_post_category',$checkisset);
 			if(count($listisset) > 1){
 				$url_new = $_POST[$url].'-'.$result;
 				$updateurl = array(
 					$url => $url_new,
 				);
 				$this->db->where('id', $result);
 				$this->db->update('qh_post_category', $updateurl);
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
 		$data['list_templates'] = $this->Model_backend->show_all_by_template_type($this->post_type_id,$this->template_type);

 		$check_category = array(
 			'post_website' => $this->id_website,
 			'father_id' => 0,
 			'post_type_id' => $this->post_type_id,
 		);
 		$data['list_category'] = $this->Model_backend->get_where('qh_post_category',$check_category);

 		$data['title'] = 'Thêm chuyên mục mới'.' '.$this->id_language;
 		$data['template'] = $this->folder.'/v_add';
 		$this->load->view($this->main,$data);
 	}
 	
 	public function update($id){
 		if (isset($_POST['edit'])) {
 			if(isset($_POST['post_status'])){ $post_status = 2; }else{ $post_status = 3; }
 			$view_category = $this->Model_backend->view_id('qh_post_category',$id);
 			$name = json_decode($view_category['name']);
 			$title = json_decode($view_category['title']);
 			$description = json_decode($view_category['description']);
 			$keywords = json_decode($view_category['keywords']);
 			$imgwebsite = json_decode($view_category['imgwebsite']);
 			$imgsocial = json_decode($view_category['imgsocial']);
 			$content = json_decode($view_category['content']);
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
 			$imgbackground = array(
 				'vn' => '',
 				'en' => '',
 				'jp' => '',
 				'kr' => '',
 				'ch' => '',
 				'lg' => '',
 			);
 			$imgbackground[$this->id_language]= $_POST['imgbackground_'.$this->id_language];
 			$url = 'url_'.$this->id_language;
 			$thongtin = array(
 				'name' => json_encode($name),
 				$url =>  trim($_POST[$url]),
 				'title' => json_encode($title),
 				'description' => json_encode($description),
 				'keywords' => json_encode($keywords),
 				'imgwebsite' => json_encode($imgwebsite),
 				'imgsocial' => json_encode($imgsocial),
 				'content' => json_encode($content),
 				'father_id' => trim($_POST['father_id']),
 				'img_background' => json_encode($imgbackground),
 				'color_background' => $_POST['color_background'],
 				'color_text' => $_POST['color_text'],
 				'post_status' => $post_status,
 				'post_templates_id' => $_POST['post_templates_id'],
 			);
 			$result = $this->Model_backend->update('qh_post_category',$thongtin,$id);
				// Kiểm tra url vừa thêm nếu tồn tại trùng thì thêm id vào sau url
			$checkisset = array(
				$url => $_POST[$url],
			);
			$listisset = $this->Model_backend->show_by('qh_post_category',$checkisset);
			if(count($listisset) > 1){
				$url_new = $_POST[$url].'-'.$id;
				$updateurl = array(
					$url => $url_new,
				);
				$this->db->where('id', $id);
				$this->db->update('qh_post_category', $updateurl);
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
 			redirect($this->folder);
 		}
 		$data['language'] = $this->id_language;
 		$data['list_templates'] =  $this->Model_backend->show_all_by_template_type($this->post_type_id,$this->template_type);
 		$data['view'] = $this->Model_backend->view_id('qh_post_category',$id);
 		$check_category = array(
 			'post_website' => $this->id_website,
 			'father_id' => 0,
 			'post_type_id' => $this->post_type_id,
 		);
 		$data['list_category'] = $this->Model_backend->get_where('qh_post_category',$check_category);
 		
 		$data['title'] = 'Chỉnh sửa chuyên mục'.' '.$this->id_language;
 		$data['template'] = $this->folder.'/v_update';
 		$this->load->view($this->main,$data);
 	}
 	public function tamdung($id_posts)
	{
		$thongtin = array(
			'post_status' => 3,
		);
		$this->Model_backend->update('qh_post_category',$thongtin,$id_posts);
		redirect($this->folder);		
	}
	public function kichhoat($id_posts)
	{
		$thongtin = array(
			'post_status' => 2,
		);
		$this->Model_backend->update('qh_post_category',$thongtin,$id_posts);
		redirect($this->folder);		
	}
 	public function tang($id_category,$father_id,$num){
 		if ($num == 0){
 			$dataresult = array('error' => 'ok','messenger' => 'Chuyên mục đang ở  vị trí đầu tiên bạn không thể tăng',);
 			$this->session->set_flashdata($dataresult);
 			redirect('backend/news/category');
 		}else{
 			// Lấy thông tin của num hiện tại
 			$num_truoc = array(
 				'father_id' => $father_id,
 				'num' => $num-1,
 			);
 			$truoc = $this->db->select('*')->from('qh_post_category')->where($num_truoc)->get()->row_array();

 			$id_numtruoc = $truoc['id'];

 			$this->db->where('id', $id_category);
 			$this->db->update('qh_post_category', $num_truoc);

 			// Tăng bậc của id trước
 			$num_tang_bac = array(
 				'num' => $num,
 			);
 			$this->db->where('id', $id_numtruoc);
 			$this->db->update('qh_post_category', $num_tang_bac);
 			$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa số thứ tự thành công',);
 		}
 		$this->session->set_flashdata($dataresult);
 		redirect('backend/news/category');

 	}
 	public function giam($id_category,$father_id,$num){
 		if ($num == 100){
 			$dataresult = array('error' => 'ok','messenger' => 'Chuyên mục đang ở vị trí cuối tiên bạn không thể tăng',);
 			$this->session->set_flashdata($dataresult);
 			redirect('backend/news/category');
 		}else{
 			// Lấy thông tin của num hiện tại
 			$num_truoc = array(
 				'father_id' => $father_id,
 				'num' => $num+1,
 			);
 			$truoc = $this->db->select('*')->from('qh_post_category')->where($num_truoc)->get()->row_array();

 			$id_numtruoc = $truoc['id'];

 			$this->db->where('id', $id_category);
 			$this->db->update('qh_post_category', $num_truoc);

 			// Tăng bậc của id trước
 			$num_tang_bac = array(
 				'num' => $num,
 			);
 			$this->db->where('id', $id_numtruoc);
 			$this->db->update('qh_post_category', $num_tang_bac);
 			$dataresult = array('access' => 'ok','messenger' => 'Bạn đã chỉnh sửa số thứ tự thành công',);
 		}
 		$this->session->set_flashdata($dataresult);
 		redirect('backend/news/category');

 	}
 	public function delete($id){
		// Lấy toàn bộ thông tin bảng qh_posts
 		$list_all_post = $this->Model_backend->get_all('qh_posts');
 		// Kiểm tra nếu là bài post thì cho xóa luôn
 		$view_category = $this->Model_backend->view_id('qh_post_category',$id);
 		if($view_category['posts_style'] == 2){
 			// Nếu không tồn tại thì bắt đầu được xóa
 			$view = $this->Model_backend->view_id('qh_post_category',$id);
 			$result = $this->Model_backend->delete('qh_post_category',$id);

 			// Sắp xếp lại số thứ tự các chuyên mục trong Category
 		$list_father = $this->db->select('*')->from('qh_post_category')->where('father_id',0)->order_by('num','asc')->get()->result_array();
 		$dem = 0;
 		foreach ($list_father as $value) {
 			$dem += 1;
 			$num = array(
 				'num' => $dem,
 			);
 			$this->db->where('id', $value['id']);
 			$this->db->update('qh_post_category', $num);
 			$list_father1 = $this->db->select('*')->from('qh_post_category')->where('father_id',$value['id'])->order_by('num','asc')->get()->result_array();
 			if(count($list_father1) > 0) {
 				$dem1 = 0;
 				foreach ($list_father1 as $value1) {
 					$dem1 += 1;
		 			$num1 = array(
		 				'num' => $dem1,
		 			);
		 			$this->db->where('id', $value1['id']);
		 			$this->db->update('qh_post_category', $num1);
		 			$list_father2 = $this->db->select('*')->from('qh_post_category')->where('father_id',$value1['id'])->order_by('num','asc')->get()->result_array();
		 			if(count($list_father2) > 0) {
		 				$dem2 = 0;
		 				foreach ($list_father2 as $value2) {
		 					$dem2 += 1;
				 			$num2 = array(
				 				'num' => $dem2,
				 			);
				 			$this->db->where('id', $value2['id']);
				 			$this->db->update('qh_post_category', $num2);
				 			$list_father3 = $this->db->select('*')->from('qh_post_category')->where('father_id',$value2['id'])->order_by('num','asc')->get()->result_array();
				 			if(count($list_father3) > 0) {
				 				$dem3 = 0;
				 				foreach ($list_father3 as $value3) {
				 					$dem3 += 1;
						 			$num3 = array(
						 				'num' => $dem3,
						 			);
						 			$this->db->where('id', $value3['id']);
						 			$this->db->update('qh_post_category', $num3);
						 			$list_father4 = $this->db->select('*')->from('qh_post_category')->where('father_id',$value3['id'])->order_by('num','asc')->get()->result_array();
						 			if(count($list_father4) > 0) {
						 				$dem4 = 0;
						 				foreach ($list_father4 as $value4) {
						 					$dem4 += 1;
								 			$num4 = array(
								 				'num' => $dem4,
								 			);
								 			$this->db->where('id', $value4['id']);
								 			$this->db->update('qh_post_category', $num4);
						 				}
						 			}
				 				}
				 			}
		 				}
		 			}
 				}
 			}
 		}

 			if($result){
 				$dataresult = array('access' => 'ok','messenger' => 'Bạn xóa nội dung thành công!',);
 			}else{
 				$dataresult = array('error' => 'ok','messenger' => 'Dữ liệu chưa được xóa vào cơ sở dữ liệu vui lòng thử lại.',);
 			}
 		}else{
		// Nếu tồn tại trong bảng dữ liệu Post thì không được xóa
 		$id_isset = 'no_isset';
 		foreach ($list_all_post as $value) {
 			$listcategory = json_decode($value['post_category_id']);
 			if(in_array($id, $listcategory)){
 				$id_isset = 'isset';
 			}
 		}
 		if($id_isset == 'isset'){
 			$dataresult = array('error' => 'ok','messenger' => 'Tồn tại dữ liệu con. Bạn vui lòng xóa dữ liệu con trước khi thực hiện',);
 		}else
 		{
			// Nếu không tồn tại thì bắt đầu được xóa
 			$view = $this->Model_backend->view_id('qh_post_category',$id);
 			$result = $this->Model_backend->delete('qh_post_category',$id);

 			// Sắp xếp lại số thứ tự các chuyên mục trong Category
 		$list_father = $this->db->select('*')->from('qh_post_category')->where('father_id',0)->order_by('num','asc')->get()->result_array();
 		$dem = 0;
 		foreach ($list_father as $value) {
 			$dem += 1;
 			$num = array(
 				'num' => $dem,
 			);
 			$this->db->where('id', $value['id']);
 			$this->db->update('qh_post_category', $num);
 			$list_father1 = $this->db->select('*')->from('qh_post_category')->where('father_id',$value['id'])->order_by('num','asc')->get()->result_array();
 			if(count($list_father1) > 0) {
 				$dem1 = 0;
 				foreach ($list_father1 as $value1) {
 					$dem1 += 1;
		 			$num1 = array(
		 				'num' => $dem1,
		 			);
		 			$this->db->where('id', $value1['id']);
		 			$this->db->update('qh_post_category', $num1);
		 			$list_father2 = $this->db->select('*')->from('qh_post_category')->where('father_id',$value1['id'])->order_by('num','asc')->get()->result_array();
		 			if(count($list_father2) > 0) {
		 				$dem2 = 0;
		 				foreach ($list_father2 as $value2) {
		 					$dem2 += 1;
				 			$num2 = array(
				 				'num' => $dem2,
				 			);
				 			$this->db->where('id', $value2['id']);
				 			$this->db->update('qh_post_category', $num2);
				 			$list_father3 = $this->db->select('*')->from('qh_post_category')->where('father_id',$value2['id'])->order_by('num','asc')->get()->result_array();
				 			if(count($list_father3) > 0) {
				 				$dem3 = 0;
				 				foreach ($list_father3 as $value3) {
				 					$dem3 += 1;
						 			$num3 = array(
						 				'num' => $dem3,
						 			);
						 			$this->db->where('id', $value3['id']);
						 			$this->db->update('qh_post_category', $num3);
						 			$list_father4 = $this->db->select('*')->from('qh_post_category')->where('father_id',$value3['id'])->order_by('num','asc')->get()->result_array();
						 			if(count($list_father4) > 0) {
						 				$dem4 = 0;
						 				foreach ($list_father4 as $value4) {
						 					$dem4 += 1;
								 			$num4 = array(
								 				'num' => $dem4,
								 			);
								 			$this->db->where('id', $value4['id']);
								 			$this->db->update('qh_post_category', $num4);
						 				}
						 			}
				 				}
				 			}
		 				}
		 			}
 				}
 			}
 		}

 			if($result){
 				$dataresult = array('access' => 'ok','messenger' => 'Bạn xóa nội dung thành công!',);
 			}else{
 				$dataresult = array('error' => 'ok','messenger' => 'Dữ liệu chưa được xóa vào cơ sở dữ liệu vui lòng thử lại.',);
 			}
 		}
 	}
 	$this->session->set_flashdata($dataresult);
 		redirect($this->folder);
 	}
 }
