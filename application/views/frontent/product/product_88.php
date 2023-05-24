<?php 
$language = $this->session->userdata('ss_languagew');
if(isset($language)){
 $this->id_language = $language['name_lang'];
}else{
 $this->id_language = 'vn';
}

$name = json_decode($view_url['name']);
$imgwebsite = json_decode($view_url['imgwebsite']);
$img_background = json_decode($view_url['img_background']);
?>

<div class="breadcrumbs" data-aos="fade-in" style="<?php if(strlen($img_background->{$this->id_language}) > 10){ ?>
  background: url(<?= $img_background->{$this->id_language}; ?>);<?php }else{ ?>background:<?= $view_url['color_background']; ?> ;<?php } ?>background-size: cover;min-height: 400px;">
  <div class="container">
    <h2 style="margin-top: 260px;font-size: 40px;font-weight: bold;text-shadow: 5px 3px 2px black;color:<?= $view_url['color_text']; ?>">
      <?= $name->{$this->id_language}; ?>
    </h2>
    <p><i class="bi bi-house-door-fill"></i> Trang chủ / <?= $name->{$this->id_language}; ?></p>
  </div>
</div><!-- End Breadcrumbs -->
<!-- Lấy danh sách các thành phần trong chuyên mục con rồi hiển thị sản phẩm của từng chuyên mục -->
<?php 
// Lấy các danh mục thuộc danh mục cha
$list_category = $this->db->select('*')->from('qh_post_category')->where('father_id',$view_url['id'])->get()->result_array();
?>

<section id="courses" class="courses">
  <div class="container" data-aos="fade-up">

    <?php foreach ($list_category as $value_category): ?>
      <?php $name_category = json_decode($value_category['name']); ?>
      <div class="sidebartitle"><?= $name_category->{$this->id_language}; ?></div>
      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php foreach ($list_post_all as $value): ?>
          <?php $father_id_ar = json_decode($value['post_category_id']); ?>
          <?php if(in_array($value_category['id'],$father_id_ar)){ ?>
            <?php $imgwebsite = json_decode($value['imgwebsite']); ?>
            <?php $name_post = json_decode($value['name']); ?>
            <?php $description_post = json_decode($value['description']); ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-3">
              <div class="course-item">
                <a href="<?= base_url().$this->id_language.'/'.$view_url['url_'.$this->id_language].'/'.$value['url_'.$this->id_language]; ?>">
                  <img src="<?= $imgwebsite->{$this->id_language}; ?>" class="img-fluid" alt="<?= $name_post->{$this->id_language}; ?>" style="padding: 20px 40px 0px 40px">
                </a>
                <div class="course-content">
                  <a href="<?= base_url().$this->id_language.'/'.$view_url['url_'.$this->id_language].'/'.$value['url_'.$this->id_language]; ?>" style="text-transform: capitalize;font-size: 15px;text-align: center;" title="<?= $name_post->{$this->id_language}; ?>"><?= $name_post->{$this->id_language}; ?></a>
                </div>
              </div>
            </div> <!-- End Course Item-->
          <?php } ?>
        <?php endforeach ?>

      </div>
    <?php endforeach ?>
    
  </div>
</section><!-- End Courses Section -->

