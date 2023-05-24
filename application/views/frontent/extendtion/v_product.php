<?php $info = $this->session->userdata('userinfoone'); ?>
<?php
$language = $this->session->userdata('ss_languagew');
if(isset($language)){
 $this->id_language = $language['name_lang'];
}else{
 $this->id_language = 'vn';
}
?>
<?php $view_service = $this->Model_frontent->view_id('qh_system_template',11); ?>
<?php $view_show = $this->Model_frontent->view_id('qh_system_template_setup',$view_service['num_show']); ?>
<?php 
      $view_title = $this->Model_frontent->view_id('qh_setup_extend',$view_service['id_text']); 
      $lang_title = json_decode($view_title['lang']); 
?>
<?php $list_category_show = $this->db->select('*')->from('qh_system_template_extend')->where('id_symtem_template',11)->order_by('num','asc')->get()->result_array(); ?>
<section style="background:url(<?= $view_service['link_img']; ?>);min-height: 600px;background-size: cover;">
  <div class="container" data-aos="fade-up">
    <?= $lang_title->{$this->id_language}; ?>
    <?php if(isset($info)){ ?><a href="<?= base_url(); ?>backend/symtem/product" target="_blank" style="font-size: 15px;color:green"><i class="far fa-edit"></i></a><?php } ?>
    <div class="row" style="margin-top:50px">
      <?php foreach ($list_category_show as $value): ?>
        <?php $view_category = $this->Model_frontent->view_id('qh_post_category',$value['id_category']); ?>
        <?php $name = json_decode($view_category['name']); ?>
        <?php $imgwebsite = json_decode($view_category['imgwebsite']); ?>
        <div class="col-md-<?= $view_show['symtem_extend_num'] ?> mb-3">
          <a href="<?= base_url().$this->id_language.'/'.$view_category['url_'.$this->id_language]; ?>">
            <img src="<?= get_img($imgwebsite->{$this->id_language}); ?>" width="100%" class="mb-3">
          </a>
          <a href="<?= base_url().$this->id_language.'/'.$view_category['url_'.$this->id_language]; ?>">
            <h6 class="text-center fw-bold" style="text-transform:uppercase;"><?= $name->{$this->id_language}; ?></h6></a>
          </div>
        <?php endforeach ?>
      </div>

  </div>
</section><!-- End About Section -->