<?php 
$name = json_decode($view_url['name']);
$content_category = json_decode($view_url['content']);
$imgwebsite_category = json_decode($view_url['imgwebsite']);
?>
<?php $list_posts = $this->Model_frontent->get_all_post_desc(); ?>
<!--  breadcrumb start  -->
<div class="breadcrumb-area services-breadcrumb-bg" style="background: url(<?php get_banner($imgwebsite_category->{$this->id_language}); ?>);">

</div>
<!--  breadcrumb end  -->
<!--  service section start  -->
<div class="service-section services">
   <div class="container">
      <h2 class="subtitle"><?= $name->{$this->id_language}; ?></h2>
      <div class="row">
         <div class="col-md-12">
          <?= $content_category->{$this->id_language}; ?>
       </div>
       <?php foreach ($list_posts as $value_news): ?>
          <?php if(in_array($value_news['post_category_id_ze'],$list_folder)){ ?>
           <?php $imgwebsite_news = json_decode($value_news['imgwebsite']); ?>
           <?php $name_post_news = json_decode($value_news['name']); ?>
           <?php $description_news = json_decode($value_news['description']); ?>
           <?php $view_category = $this->Model_frontent->view_id('qh_post_category',$value_news['post_category_id_ze']); ?>
           <div class="col-lg-4 col-md-6">
            <div class="single-service wow fadeInRight" data-wow-duration="1s">
               <a href="<?= $this->id_language.'/'.$view_category['url_'.$this->id_language].'/'.$value_news['url_vn']; ?>">
                  <div class="img-wrapper" style="background: url(<?php get_img($imgwebsite_news->{$this->id_language});?>);height: 250px;background-size: cover;">
                  </div>
               </a>
               <div class="service-txt">
                  <a href="<?= $this->id_language.'/'.$view_category['url_'.$this->id_language].'/'.$value_news['url_vn']; ?>">
                     <h4 class="service-title"><?= $name_post_news->{$this->id_language}; ?></h4>
                  </a>
                  <p class="service-para"><?= $description_news->{$this->id_language}; ?></p>
               </div>
            </div>
         </div>
      <?php } ?>
   <?php endforeach ?>
</div>
</div>
</div>
      <!--  service section end  -->