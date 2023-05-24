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

$check_father = 0;
if($view_url_category['father_id'] == 0){
  $check_father = $view_url_category['id'];
}else{
  $check_father = $view_url_category['father_id'];
}
$list_father = $this->db->select('*')->from('qh_post_category')->where('father_id',$check_father)->get()->result_array();
$list_post = $this->db->select('*')->from('qh_posts')->where('post_category_id_ze',$view_url_category['id'])->get()->result_array();
?>
<div class="container">
<div class="row mt50">
   <div class="col-lg-4 col-xl-3">
  <div class="sidebar_search_widget mb30">
   <div class="blog_search_widget">
</div>
</div>
<div class="terms_condition_widget">
   <h4 class="title">Danh mục <?= $name_category->{$this->id_language}; ?></h4>
   <div class="widget_list">
    <ul class="list_details">
      <?php foreach ($list_father as $value): ?>
         <?php $name = json_decode($value['name']); ?>
         <li><a href="<?= $value['url_vn']; ?>"><?= $name->{'vn'}; ?></a></li>
      <?php endforeach ?>
  </ul>
</div>
</div>
<div class="sidebar_feature_listing">
   <h4 class="title">Bài viết liên quan</h4>
   <?php foreach ($list_post as $value): ?>
      <?php $name = json_decode($value['name']); ?>
      <?php $imgwebsite = json_decode($value['imgwebsite']); ?>
      <a href="<?= $view_url_category['url_vn'].'/'.$value['url_vn']; ?>">
      <div class="d-flex">
    <div class="flex-shrink-0">
     <img class="align-self-start mr-3" src="<?= $imgwebsite->{'vn'}; ?>" alt="s1.jpg">
  </div>
  <div class="flex-grow-1 ms-3">
     <h5 class="post_title"><?= $name->{'vn'}; ?></h5>
     <?= date('d-m-Y',$value['post_date']); ?>
  </div>
</div>
</a>
   <?php endforeach ?>

</div>
</div>
<div class="col-lg-8 col-xl-9">
   <h1><?= $name_post->{$this->id_language}; ?></h1>
   <?= $content_post->{$this->id_language}; ?>
</div>

</div>
</div>