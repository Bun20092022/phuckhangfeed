<?php 
$language = $this->session->userdata('ss_languagew');
if(isset($language)){
   $this->id_language = $language['name_lang'];
}else{
   $this->id_language = 'vn';
}
?>
<!--   header area start   -->
<div class="header-area">
<?php $this->load->view('frontent/extendtion/v_header'); ?>

</div>
<!--   header area end   -->


