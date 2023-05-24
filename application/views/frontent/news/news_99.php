<?php $info = $this->session->userdata('userinfoone'); ?>
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
$img_background = json_decode($view_url_category['img_background']);
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
      <?php if(isset($info)){ ?>
            <a href="<?= base_url(); ?>backend/news/posts/add" target="_blank" style="font-size: 13px;"><i class="far fa-plus-square"></i></a>
            <a href="<?= base_url(); ?>backend/news/category/update/<?= $view_url_category['id']; ?>" target="_blank" style="font-size: 13px;"><i class="far fa-edit"></i></a>
         <?php } ?>
    </h2>
    <p><i class="bi bi-house-door-fill"></i> Trang chủ / <?= $name_category->{$this->id_language}; ?></p>
  </div>
</div><!-- End Breadcrumbs -->
<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
  <div class="container" data-aos="fade-up">
    <div class="sidebartitle"><?= $name_post->{$this->id_language}; ?>
      <?php if(isset($info)){ ?>
            <a href="<?= base_url(); ?>backend/news/posts/update/<?= $view_url_post['id']; ?>" target="_blank" style="font-size: 13px;"><i class="far fa-edit"></i></a>
         <?php } ?>
    </div>
    <?= $content_post->{$this->id_language}; ?>
    <div class="row" data-aos="zoom-in" data-aos-delay="100">


    </div>

  </div>
</section><!-- End Courses Section -->
