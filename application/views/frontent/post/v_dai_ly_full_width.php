<?php 
$language = $this->session->userdata('ss_languagew');
if(isset($language)){
  $this->id_language = $language['name_lang'];
}else{
  $this->id_language = 'vn';
}

$name_category = json_decode($view_url_category['name']);
$name_post = json_decode($view_url_post['name']);
$content_post = json_decode($view_url_post['content']);
?>
<?php 
$language = $this->session->userdata('ss_languagew');
if(isset($language)){
  $this->id_language = $language['name_lang'];
}else{
  $this->id_language = 'vn';
}

$name_category = json_decode($view_url_category['name']);
$name_post = json_decode($view_url_post['name']);
$content_post = json_decode($view_url_post['content']);
?>
<section class="inner_page_breadcrumb">
   <div class="container">
      <div class="row">
         <div class="col-xl-6">
            <div class="breadcrumb_content">
             <p><i class="bi bi-house-door-fill"></i> Trang chủ / <?= $name_category->{$this->id_language}; ?></p>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- Main Blog Post Content -->
<section class="blog_post_container pt30">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
     <h2 class="title"><?= $name_post->{$this->id_language}; ?></h2>
  </div>
</div>
<div class="row mt50">
   <div class="col-md-6" style="background: #f5f5f5;padding: 30px 35px;">
    <div class="vendor_address mb20">
     <?= $content_post->{$this->id_language}; ?>
  </div>
</div>
<div class="col-md-6"><iframe src="<?= $view_url_post['post_link_demo'] ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>
</div>

</div>
</section>
<section class="blog_post_container pt30">
  <div class="container">
   <hr>
   <div class="row">
    <div class="col-lg-12">
     <div class="main-title">
      <h2 class="title">Danh sách đại lý khác</h2>
   </div>
</div>
</div>
<div class="row">
<?php 
     $check_news = array(
       'post_category_id_ze' => $view_url_category['id'],
       'post_status' => 2,
     );
     $list_news = $this->db->select('*')->from('qh_posts')->where($check_news)->limit(4)->get()->result_array();
     ?>
     <?php foreach ($list_news as $value_news): ?>
       <?php $imgwebsite_news = json_decode($value_news['imgwebsite']); ?>
       <?php $name_post_news = json_decode($value_news['name']); ?>
       <?php $infosub_post_news = json_decode($value_news['infosub']); ?>
      <div class="col-md-6 col-xl-3">
        <div class="vendor_grid">
          <div class="thumb">
            <img src="<?= $imgwebsite_news->{$this->id_language}; ?>" width="100%" alt="<?= $name_post_news->{$this->id_language}; ?>">
          </div>
          <div class="details">
            <h5 class="title"><?= $name_post_news->{$this->id_language}; ?></h5>
            <div class="flex-grow-1 mb15">
              <div class="d-block d-md-flex">
                <div class="sspd_postdate me-2 mb10-sm">
                  <div class="sspd_review">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fas fa-star"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <?= $infosub_post_news->{$this->id_language}; ?>
            <div class="d-grid">
              <a class="btn btn-white bdr_thm" href="<?= $view_url_category['url_'.$this->id_language].'/'.$value_news['url_'.$this->id_language]; ?>">Thông tin chi tiết</a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach ?>
</div>
</div>

</div>
</section>