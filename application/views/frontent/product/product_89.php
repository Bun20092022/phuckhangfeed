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
if(count($list_category) < 1){
  $list_category = $this->db->select('*')->from('qh_post_category')->where('id',$view_url['id'])->get()->result_array();
}
?>
<style>
  #menu ul {
    background: #0C4DA2;
    width: 250px;
    padding: 0;
    list-style-type: none;
    text-align: left;
    z-index: 99999999999;
  }
  #menu li {
    width: auto;
    height: 40px;
    line-height: 40px;
    border-bottom: 1px solid #e8e8e8;
    padding: 0 1em;
  }
  #menu li a {
    text-decoration: none;
    color: #fff;
    display: block;
  }
  #menu li:hover {
    background: #1b66d5;
  }

/*==Dropdown Menu==*/
#menu ul li {
  position: relative;
}
#menu .sub-menu {
  position: absolute;
  left: 250px;
  top: 0;
  display: none;
}
#menu li:hover .sub-menu {
  display: block;
}
</style>

<?php
// Lấy danh sách Menu Sản phẩm
$check_menu_product = array(
  'post_type_id' => 2,
  'post_status' => 2,
  'father_id' => $view_url['id'],
);
$list_menu = $this->Model_backend->get_where('qh_post_category',$check_menu_product);
if(count($list_menu) < 1) {
  $check_menu_product_father = array(
    'post_type_id' => 2,
    'post_status' => 2,
    'father_id' => $view_url['father_id'],
  );
  $list_menu = $this->Model_backend->get_where('qh_post_category',$check_menu_product_father);
}
?>
<section id="courses" class="courses">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-md-3 d-none d-lg-block">
        <div id="menu">
          <ul>
            <?php foreach ($list_menu as $value): ?>
              <?php
                // Lấy danh sách Menu Sản phẩm
              $check_menu_product_2 = array(
                'post_type_id' => 2,
                'post_status' => 2,
                'father_id' => $value['id'],
              );
              $list_menu_2 = $this->Model_backend->get_where('qh_post_category',$check_menu_product_2);
              ?>
              <?php $name_category = json_decode($value['name']); ?>
              <li><a href="<?= base_url().$this->id_language.'/'.$value['url_'.$this->id_language]; ?>"><?= $name_category->{$this->id_language}; ?></a>
                <?php if(count($list_menu_2) > 0){ ?>
                  <ul class="sub-menu">
                    <?php foreach ($list_menu_2 as $value_2): ?>
                      <?php $name_category = json_decode($value_2['name']); ?>
                      <li><a href="<?= base_url().$this->id_language.'/'.$value_2['url_'.$this->id_language]; ?>"><?= $name_category->{$this->id_language}; ?></a></li>
                    <?php endforeach ?>
                  </ul>
                <?php } ?>
              </li>
            <?php endforeach ?>
            
          </ul>
        </div>
      </div>
      <div class="col-md-9">
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
    </div>
  </div>
</section><!-- End Courses Section -->

