<?php $info = $this->session->userdata('userinfoone'); ?>
<?php 
$language = $this->session->userdata('ss_languagew');
if(isset($language)){
 $this->id_language = $language['name_lang'];
}else{
 $this->id_language = 'vn';
}

$name_category = json_decode($view_url_category['name']);
$imgwebsite_category = json_decode($view_url_category['imgwebsite']);

$name_post = json_decode($view_url_post['name']);
$content_post = json_decode($view_url_post['content']);
$img_background = json_decode($view_url_category['img_background']);
$imgwebsite_post = json_decode($view_url_post['imgwebsite']);
?>
<style type="text/css">
  .sidebartitle {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  .sidebartitle:after {
    content: '';
    display: block;
    width: 30px;
    height: 3px;
    background: #85c44e;
    margin-top: 5px;
  }
</style>
<div class="breadcrumbs" data-aos="fade-in" style="<?php if(strlen($img_background->{$this->id_language}) > 10){ ?>
background: url(<?= $img_background->{$this->id_language}; ?>);<?php }else{ ?>background:<?= $view_url_category['color_background']; ?> ;<?php } ?>background-size: cover;min-height: 400px;">
  <div class="container">
    <h2 style="margin-top: 260px;font-size: 40px;font-weight: bold;">
      <?= $name_category->{$this->id_language}; ?>
    </h2>
    <p><i class="bi bi-house-door-fill"></i> Trang chủ / <?= $name_category->{$this->id_language}; ?></p>
  </div>
</div><!-- End Breadcrumbs -->
<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
  <div class="container" data-aos="fade-up">
    <div class="sidebartitle"><?= $name_post->{$this->id_language}; ?>
      <?php if(isset($info)){ ?>
            <a href="<?= base_url(); ?>backend/product/posts/update/<?= $view_url_post['id']; ?>" target="_blank" style="font-size: 13px;"><i class="far fa-edit"></i></a>
         <?php } ?>
    </div>
    <div class="row" data-aos="zoom-in" data-aos-delay="100" style="margin-top: 50px;margin-bottom: 100px;">
      <div class="col-md-4">
        <img src="<?= $imgwebsite_post->{$this->id_language}; ?>" class="img-fluid" alt="<?= $name_post->{$this->id_language}; ?>" style="padding: 20px 40px 0px 40px">
      </div>
      <div class="col-md-8" style="padding-top: 100px;padding-left: 10%;">
        <?= $content_post->{$this->id_language}; ?>
      </div>
    </div>
    <div class="sidebartitle" style="margin-top: 50px;">Sản phẩm cùng loại</div>
    <?php $list_post = $this->db->select('*')->from('qh_posts')->where('post_category_id_ze',$view_url_post['post_category_id_ze'])->limit(4)->get()->result_array(); ?>
    <div class="row">
      <?php foreach ($list_post as $value): ?>
        <?php $imgwebsite = json_decode($value['imgwebsite']); ?>
        <?php $name_post = json_decode($value['name']); ?>
        <?php $description_post = json_decode($value['description']); ?>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-3">
          <div class="course-item">
            <a href="<?= base_url().$this->id_language.'/'.$view_url_category['url_'.$this->id_language].'/'.$value['url_'.$this->id_language]; ?>">
              <img src="<?= $imgwebsite->{$this->id_language}; ?>" class="img-fluid" alt="<?= $name_post->{$this->id_language}; ?>" style="padding: 20px 40px 0px 40px">
            </a>
            <div class="course-content">
              <a href="<?= base_url().$this->id_language.'/'.$view_url_category['url_'.$this->id_language].'/'.$value['url_'.$this->id_language]; ?>" style="text-transform: capitalize;"><?= $name_post->{$this->id_language}; ?></a>
            </div>
          </div>
        </div> <!-- End Course Item-->
      <?php endforeach ?>
    </div>
  </div>
</section><!-- End Courses Section -->
