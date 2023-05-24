<?php 
$info = $this->session->userdata('userinfoone');
$language = $this->session->userdata('ss_languagew');
if(isset($language)){
   $this->id_language = $language['name_lang'];
}else{
   $this->id_language = 'vn';
}
?>
<?php 
  $headertop = $this->db->select('*')->from('qh_system_template')->where('id',23)->get()->row_array();
  $view_text = $this->db->select('*')->from('qh_setup_extend')->where('id',$headertop['id_text'])->get()->row_array();
  $lang = json_decode($view_text['lang']);
  $lang_extend = $lang->{$this->id_language};
  $deltext1 = trim($lang_extend,"<p>");
  $deltext2 = trim($deltext1,"<\/p>\r\n");

  $get_language = $this->Model_home->get_language();
  $get_social = $this->Model_home->get_social();
 ?>

<div class="info-bar" style="background: <?= $this->Model_home->get_header_top_color_background(); ?>;color: <?= $this->Model_home->get_header_top_color_text(); ?>;">
  <div class="container">
   <div class="row">
    <div class="col-lg-4 col-8">
     <ul class="social-links">
      <?php foreach ($get_social as $value): ?>
        <li><a href="<?= $value['link_socical']; ?>" style="color: <?= $this->Model_home->get_header_top_color_text(); ?>;" target="_blank"><i class="<?= $value['class_social']; ?>"></i></a></li>
      <?php endforeach ?>
      <?php if(isset($info)){ ?>
      <li><a href="backend/symtem/headertop" style="color: <?= $this->Model_home->get_header_top_color_text(); ?>;" target="_blank"><i class="far fa-edit"></i></a></li>
    <?php } ?>
    </ul>
  </div>
  <div class="col-lg-8 col-4">
   <div class="right-content">
    <span class="working-time"><?= $deltext2; ?></span>
    <div class="language">
     <a href="<?= $this->id_language; ?>" class="dropdown-btn" style="text-transform: uppercase;color: <?= $this->Model_home->get_header_top_color_text(); ?>;"><?= $this->id_language; ?> <i class="flaticon-down-arrow"></i></a>
     <ul class="language-dropdown">
      <?php foreach ($get_language as $value): ?>
        <li>
         <a href="<?= $value['name_des']; ?>"><?= $value['name']; ?></a>
       </li>
      <?php endforeach ?>
   </ul>
 </div>
</div>
</div>
</div>
</div>
</div>