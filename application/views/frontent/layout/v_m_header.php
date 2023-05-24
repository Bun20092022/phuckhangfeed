<!DOCTYPE html>
<html lang="en">
<?php 
   $language = $this->session->userdata('ss_languagew');
   if(isset($language)){
      $this->id_language = $language['name_lang'];
   }else{
      $this->id_language = 'vn';
   }
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php $this->load->view('frontent/layout/v_title'); ?>
  <!-- Favicons -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>public/frontent/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>public/frontent/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>public/frontent/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>public/frontent/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>public/frontent/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>public/frontent/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url(); ?>public/frontent/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>public/frontent/phone.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>public/frontent/assets/css/style.css" rel="stylesheet">

</head>

<body>
<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
     <div class="hotline-phone-ring-circle"></div>
     <div class="hotline-phone-ring-circle-fill"></div>
     <div class="hotline-phone-ring-img-circle">
        <a href="tel:<?php $this->Model_info->get_phone(); ?>" class="pps-btn-img" id="12345168">
         <img src="<?= base_url(); ?>public/frontent/img/icon-call-nh.png" alt="Gọi điện thoại" width="50">
      </a>
   </div>
</div>
<div class="hotline-bar">
  <a href="tel:<?php $this->Model_info->get_phone(); ?>">
   <span class="text-hotline"><?php $this->Model_info->get_phone(); ?></span>
</a>
</div>
</div>
<?php $this->load->view('frontent/layout/v_header'); ?>
