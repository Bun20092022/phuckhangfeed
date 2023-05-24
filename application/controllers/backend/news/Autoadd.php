<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autoadd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->date = strtotime(date('d-m-Y H:i:s'));
		$this->load->model('backend/news/Model_news_posts');

	}
	public function index()
	{
			for ($i=1; $i < 155; $i++) { 
				$name = 'Ảnh meme chế '.$i.' - Chia sẻ meme chế';
			$seo = array(
				'title' => $name,
				'description' => 'Share bộ meme chế '.$i.' - bộ hiệu ứng chữ vô cùng độc đáo, chất lượng, bộ sưu tập hiệu ứng chữ cập nhật liên tục đáp ứng các yêu cầu của mọi người',
				'keywords' => '',
				'imgwebsite' => 'https://themebun.com/ckfinder/userfiles/images/designer/hinh-anh/meme/anh-meme-ghep-'.$i.'.png',
				'imgsocial' => 'https://themebun.com/ckfinder/userfiles/images/designer/hinh-anh/meme/anh-meme-ghep-'.$i.'.png',
			);
			$content = '<p><img alt="" src="https://themebun.com/ckfinder/userfiles/images/designer/hinh-anh/meme/anh-meme-ghep-'.$i.'.png" width="100%"/></p><p>Sau những giờ l&agrave;m việc căng thẳng th&igrave; lướt Newfeed giải tr&iacute; tr&ecirc;n Instagram, TikTok, Facebook hay 1 số trang như Haivl (giờ tạch rồi) l&agrave; một h&igrave;nh thức được nhiều người y&ecirc;u th&iacute;ch. Kh&ocirc;ng chỉ cập nhật tin tức một c&aacute;ch nhanh ch&oacute;ng, bắt trend hot m&agrave; đ&acirc;y c&ograve;n được xem l&agrave; một kho t&agrave;ng giải tr&iacute; khổng lồ.</p>

<p>N&oacute;i đến t&iacute;nh giải tr&iacute; v&agrave; h&agrave;i hước, kh&ocirc;ng thể kh&ocirc;ng kể đến c&ocirc;ng lao to lớn của thần d&acirc;n netizen. Nếu trước đ&acirc;y mọi người được phen th&iacute;ch th&uacute; với những c&acirc;u n&oacute;i trending th&igrave; b&acirc;y giờ c&ograve;n c&oacute; th&ecirc;m những ảnh meme n&oacute;i về độ h&agrave;i hước th&igrave; khỏi phải b&agrave;n.&nbsp;</p>

<p>Nghe meme c&oacute; vẻ xa lạ nếu bạn kh&ocirc;ng r&agrave;nh văn h&oacute;a internet, nhưng thật ra meme l&agrave; một tr&agrave;o lưu chế ảnh h&agrave;i hước kh&aacute; quen thuộc, h&atilde;y c&ugrave;ng t&igrave;m hiểu về meme l&agrave; g&igrave; v&agrave; h&igrave;nh ảnh meme hot dưới đ&acirc;y nha!</p>

<h3><strong>Meme bắt nguồn từ đ&acirc;u</strong></h3>

<p>N&oacute;i về nguồn gốc meme thật ra kh&ocirc;ng bắt nguồn từ trực tuyến m&agrave; đ&acirc;y l&agrave; thuật ngữ lần đầu ti&ecirc;n được sử dụng bởi t&aacute;c giả Richard Dawkins trong t&aacute;c phẩm The Selfish Gene v&agrave;o năm 1976. Meme được sử dụng để mi&ecirc;u tả những &yacute; tưởng hay c&aacute;c h&agrave;nh vi lan truyền trong khắp cộng động.</p>

<p>Meme l&agrave; g&igrave;? Như vậy, meme l&agrave; một phần của văn ho&aacute; truyền miệng, như nhắc đến c&acirc;u chuyện hấp dẫn, những c&acirc;u n&oacute;i v&iacute; von hay trending h&agrave;i hước, hay đơn giản l&agrave; một c&acirc;u b&ocirc;ng đ&ugrave;a được mọi người th&ecirc;m v&agrave;o bức ảnh hợp người hợp ho&agrave;n cảnh.</p>
';
			$post_category_id = [107,130];
			$post_tags_id = [21];
			$thongtin = array(
				'name' => 'Ảnh meme chế '.$i,
				'url' =>  convert_vi_to_en($name),
				'seo' => json_encode($seo),
				'content' => $content,
				'post_link_download' => '',
				'post_link_demo' => '',
				'post_templates_id' => 24,
				'post_category_id' => json_encode($post_category_id),
				'post_category_id_ze' => 130,
				'post_tags_id' => json_encode($post_tags_id),
				'post_type_id' => 1,
				'post_website' => 2,
				'post_date' => $this->date,
				'post_status' => 1,
				'post_comment' => 0,
			);
			$result = $this->Model_news_posts->add($thongtin);
			// Kiểm tra url vừa thêm nếu tồn tại trùng thì thêm id vào sau url
			$checkisset = array(
				'url' => convert_vi_to_en($name),
			);
			$listisset = $this->Model_backend->show_by('qh_posts',$checkisset);
			if(count($listisset) > 1){
				$url = convert_vi_to_en($name).'-'.$result;
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
			}
			
	}

}

/* End of file Autoadd.php */
/* Location: ./application/controllers/Autoadd.php */