<?php 
$language = $this->session->userdata('ss_languagew');
if(isset($language)){
   $this->id_language = $language['name_lang'];
}else{
   $this->id_language = 'vn';
}
?>
<?php $get_home = $this->Model_home->get_home(); ?>
<?php foreach ($get_home as $value): ?>
   <?php $view_extendtion = $this->Model_frontent->view_id('qh_system_template',$value['id_plugin']); ?>
   <?php if($value['id_public'] == 1){ ?>
      <?php $this->load->view($view_extendtion['link_hienthi']); ?>
   <?php } ?>
   <?php if($value['id_public'] == 2){ ?>
      <?php $view_text = $this->Model_backend->view_id('qh_setup_extend',$value['id_text']); ?>
      <?php $lang_view_text = json_decode($view_text['lang']); ?>
      <div class="container">
      <?= $lang_view_text->{$this->id_language}; ?>
      </div>
   <?php } ?>
   <?php endforeach ?>
