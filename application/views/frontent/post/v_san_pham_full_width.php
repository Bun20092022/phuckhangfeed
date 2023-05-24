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
$imgwebsite_post = json_decode($view_url_post['imgwebsite']);
$extend = json_decode($view_url_post['extend']);
$list_img = $this->Model_frontent->get_where_asc('qh_post_img','id_posts',$view_url_post['id']);
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
<!-- ======= Courses Section ======= -->
<section class="shop-single-content pb80 pt0 ovh">
   <div class="container">
      <div class="row wrap">
         <div class="col-xl-7">
            <div class="column">
               <div class="shop_single_natabmenu">
                  <div class="d-block d-sm-flex align-items-start posr pb100-xs">
                     <div class="nav d-flex flex-sm-column nav-pills me-0 me-sm-3 custom_nav_list" id="v-pills-tab2" role="tablist" aria-orientation="vertical">

                        <button class="nav-link active" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><img src="<?php if(strlen($imgwebsite_post->{$this->id_language}) > 0){ echo $imgwebsite_post->{$this->id_language}; }else{ echo 'public/img/error-img.png'; } ?>" alt=""></button>

                        <?php foreach ($list_img as $value_img): ?>
                           <button class="nav-link" id="v-pills-messages-tab<?= $value_img['id']; ?>" data-bs-toggle="pill" data-bs-target="#v-pills-messages<?= $value_img['id']; ?>" type="button" role="tab" aria-controls="v-pills-messages<?= $value_img['id']; ?>" aria-selected="false"><img src="<?php if(strlen($value_img['link']) > 0){ echo $value_img['link']; }else{ echo 'public/img/error-img.png'; } ?>" alt=""></button>
                        <?php endforeach ?>
                        
                     </div>
                     <div class="tab-content ms-0 m-xl-auto custom_tab_contents" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                           <div class="shop_single_navmenu_content justify-content-center">
                              <div class="zoomimg_wrapper m-auto hizoom hi3">
                                 <img class="zoom-img" id="zoom_03" src="<?php if(strlen($imgwebsite_post->{$this->id_language}) > 0){ echo $imgwebsite_post->{$this->id_language}; }else{ echo 'public/img/error-img.png'; } ?>" data-zoom-image="<?php if(strlen($imgwebsite_post->{$this->id_language}) > 0){ echo $imgwebsite_post->{$this->id_language}; }else{ echo 'public/img/error-img.png'; } ?>" width="510" alt="Shop Single Image">
                              </div>
                           </div>
                        </div>
                         <?php foreach ($list_img as $value_img): ?>
                           <div class="tab-pane fade" id="v-pills-messages<?= $value_img['id']; ?>" role="tabpanel" aria-labelledby="v-pills-messages-tab<?= $value_img['id']; ?>">
                           <div class="shop_single_navmenu_content justify-content-center">
                              <div class="zoomimg_wrapper m-auto hizoom hi3">
                                 <img class="zoom-img" id="zoom_03" src="<?php if(strlen($value_img['link']) > 0){ echo $value_img['link']; }else{ echo 'public/img/error-img.png'; } ?>" data-zoom-image="<?php if(strlen($value_img['link']) > 0){ echo $value_img['link']; }else{ echo 'public/img/error-img.png'; } ?>" width="510" alt="Shop Single Image">
                              </div>
                           </div>
                        </div>
                        <?php endforeach ?>
                     </div>
                  </div>
               </div>
               <div class="shop_single_product_details ps-0 mt-4 d-block d-xl-none">
                  <h4 class="title mb15"><?= $name_post->{$this->id_language}; ?></h4>
                  <hr style="margin-bottom: 30px;">
                  <?php if($view_url_post['priceevent'] > 0){ ?>
                     <div class="row">
                        <div class="col-md-12 col-xs-12">
                           <p>
                              <span style="font-size:35px;color: #8d021f;font-weight: bold;"><?= number_format($view_url_post['priceevent']) ?> ₫ </span>
                              <span style="font-size:20px;color: #000;text-decoration-line: line-through;"><?= number_format($view_url_post['price']) ?> ₫ </span>
                              <span style="font-size:25px;color: #8d021f;text-align: right;font-weight: bold;margin-left: 10px;border: 1px solid #8d021f;padding: 5px 10px;border-radius: 5px;">-<?= round(((($view_url_post['price'] - $view_url_post['priceevent'])/$view_url_post['price'])*100)) ?>%</span></p>
                           </div>
                        </div>
                     <?php }else{ ?>
            <div class="row">
               <div class="col-md-12 col-xs-12">
                  <p>
                     <span style="font-size:35px;color: #8d021f;font-weight: bold;"><?= number_format($view_url_post['price']) ?> ₫ </span>
                  </div>
               </div>
            <?php } ?>
                  <div class="mb-0">
                     <ul class="cart_btn_widget shop_single3_style db-767 d-flex mb-0">
                        <li class="me-0 me-sm-3 mb-3"><a href="frontent/shop/insert/<?= $view_url_post['id']; ?>/<?= $view_url_post['price']; ?>/<?= $view_url_post['priceevent']; ?>" class="btn btn-white bdr_thm bdrs60">ĐẶT MUA NGAY</a></li>
                     </ul>
                  </div>
                  <hr>
                  <div class="vendor_iconbox style2 d-flex mb-1 mt-4">
                     <span class="icon fz30 heading-color"><span class="flaticon-truck"></span></span>
                     <div class="details ms-3 mt-0">
                        <?= $extend->{'giaohang'}; ?>
                     </div>
                  </div>
                  <div class="vendor_iconbox style2 d-flex mb-1">
                     <span class="icon fz30 heading-color"><span class="flaticon-shop"></span></span>
                     <div class="details ms-3 mt-0">
                       <?= $extend->{'vanchuyen'}; ?>
                     </div>
                  </div>
                  <div class="vendor_iconbox style2 d-flex mb-0">
                     <span class="icon fz30 heading-color"><span class="flaticon-return-box"></span></span>
                     <div class="details ms-3 mt-0">
                        <?= $extend->{'doitra'}; ?>
                     </div>
                  </div>
                  <hr>
                  <div class="shop_single_siderbar_mini_content mt-4">
                     <h4>Thông tin thêm (2)</h4>
                     <?= $extend->{'thongtinthem'}; ?>
                  </div>
               </div>
               <div class="shortcode_widget_accprdons shop_single_accordion px-0 mt-5">
                  <div class="faq_according text-start">
                     <div class="shop_single_description">
                        <h4 class="title">Mô tả chi tiết</h4>
                        <?= $content_post->{$this->id_language}; ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 offset-xl-1 d-none d-xl-block z0">
            <div class="column">
               <div class="shop_single_product_details sidebar mb-3 mb-xl-0">
                  <h4 class="title mb15"><?= $name_post->{$this->id_language}; ?></h4>
                  <hr style="margin-bottom: 30px;">
                 <?php if($view_url_post['priceevent'] > 0){ ?>
                     <div class="row">
                        <div class="col-md-12 col-xs-12">
                           <p>
                              <span style="font-size:35px;color: #8d021f;font-weight: bold;"><?= number_format($view_url_post['priceevent']) ?> ₫ </span>
                              <span style="font-size:20px;color: #000;text-decoration-line: line-through;"><?= number_format($view_url_post['price']) ?> ₫ </span>
                              <span style="font-size:25px;color: #8d021f;text-align: right;font-weight: bold;margin-left: 20px;border: 1px solid #8d021f;padding: 5px 10px;border-radius: 5px;">-<?= round(((($view_url_post['price'] - $view_url_post['priceevent'])/$view_url_post['price'])*100)) ?>%</span></p>
                           </div>
                        </div>
                     <?php }else{ ?>
            <div class="row">
               <div class="col-md-12 col-xs-12">
                  <p>
                     <span style="font-size:35px;color: #8d021f;font-weight: bold;"><?= number_format($view_url_post['price']) ?> ₫ </span>
                  </div>
               </div>
            <?php } ?>
                  <div class="d-grid mb-3 mt-3">
                     <a href="frontent/shop/insert/<?= $view_url_post['id']; ?>/<?= $view_url_post['price']; ?>/<?= $view_url_post['priceevent']; ?>" class="btn btn-white bdr_thm ss_cart_btn header_top_iconbox home10_style" >Đặt mua ngay</a>
                  </div>
                  <hr>
                  <div class="vendor_iconbox style2 d-block d-sm-flex mb-1">
                     <span class="icon fz30 heading-color"><span class="flaticon-truck"></span></span>
                     <div class="details ms-0 ms-sm-4 mt-2 mt-sm-0">
                        <p class="heading-color"> <?= $extend->{'giaohang'}; ?></p>
                     </div>
                  </div>
                  <div class="vendor_iconbox style2 d-block d-sm-flex mb-1">
                     <span class="icon fz30 heading-color"><span class="flaticon-shop"></span></span>
                     <div class="details ms-0 ms-sm-4 mt-2 mt-sm-0">
                        <?= $extend->{'vanchuyen'}; ?>
                     </div>
                  </div>
                  <div class="vendor_iconbox style2 d-block d-sm-flex mb-0">
                     <span class="icon fz30 heading-color"><span class="flaticon-return-box"></span></span>
                     <div class="details ms-0 ms-sm-4 mt-2 mt-sm-0">
                        <?= $extend->{'doitra'}; ?>
                     </div>
                  </div>
                  <hr>
                  <div class="shop_single_siderbar_mini_content">
                     <h4>Thông tin thêm (2)</h4>
                     <?= $extend->{'thongtinthem'}; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   </div>
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
            <h2 class="title">Sản phẩm khác </h2>
          </div>
        </div>
      </div>
 <?php         
$check_status = array(
  'post_templates_id' => 42,
  'post_status' => 2,
);
  // xem có thư mục con không nếu có thì lấy thư mục con ra
$list_sub = $this->db->select('*')->from('qh_posts')->where($check_status)->get()->result_array();
?>
            <div class="row">
               <?php foreach ($list_sub as $value): ?>
                  <?php $imgwebsite = json_decode($value['imgwebsite']); ?>
   <?php $name_post = json_decode($value['name']); ?>
                  <div class="col-md-6 col-xl-3">
                <div class="vendor_grid">
                  <div class="thumb">
                    <img src="<?= $imgwebsite->{'vn'}; ?>" alt="<?= $name_post->{'vn'}; ?>">
                  </div>
                  <div class="details">
                    <h5 class="title"><?= $name_post->{'vn'}; ?></h5>
                  </div>
                </div>
              </div>
               <?php endforeach ?>

            </div>
          </div>
      
    </div>
  </section>