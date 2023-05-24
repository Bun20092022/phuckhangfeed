<?php $info = $this->session->userdata('userinfoone'); ?>
<?php 
   $name_category = json_decode($view_url_category['name']);
   $imgwebsite_category = json_decode($view_url_category['imgwebsite']);

   $name_post = json_decode($view_url_post['name']);
   $imgwebsite_news = json_decode($view_url_post['imgwebsite']);
   $content_post = json_decode($view_url_post['content']);
?>
<!--  breadcrumb start  -->
<div class="breadcrumb-area blog-breadcrumb-bg" style="background: url(<?php get_banner($imgwebsite_category->{'vn'}); ?>);">
</div>
<!--  breadcrumb end  -->
<!--    blog details section start   -->
<div class="blog-details-section section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="blog-details">
               <?php if(isset($info)){ ?>
                  <a href="backend/service/posts/update/1/<?= $view_url_post['id']; ?>" target="_blank"><i class="far fa-edit"></i></a>
                           <?php } ?>
               <h2 class="blog-details-title"><?= $name_post->{$this->id_language}; ?></h2>
               <div class="blog-details-body">

                  <?= $content_post->{$this->id_language}; ?>
               </div>
            </div>
         </div>
  
   </div>
</div>
</div>
<!--    blog details section end   -->
