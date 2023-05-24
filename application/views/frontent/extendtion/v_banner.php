<?php $info = $this->session->userdata('userinfoone'); ?>
<div id="demo" class="carousel slide" data-ride="carousel" style="padding-top: 75px;">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <?php $dem = -1; ?>
    <?php $listbanner = $this->Model_frontent->show_banner_by(2);?>
    <?php foreach ($listbanner as $value): ?>
      <?php $dem += 1; ?>
      <!-- Html banner -->
      <div class="carousel-item<?php if($dem == 0){ echo ' active'; } ?>">
        <li data-target="#demo" data-slide-to="0" class="<?php if($dem == 0){ echo 'active'; } ?>"></li>
      </div>
    <?php endforeach ?>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <?php $dem = 0; ?>
    <?php $listbanner = $this->Model_frontent->show_banner_by(2);?>
    <?php foreach ($listbanner as $value): ?>
      <?php $dem += 1; ?>
      <!-- Html banner -->
      <div class="carousel-item<?php if($dem == 1){ echo 'active'; } ?>">
        <img src="<?= $value['imgslider'] ?>" alt="">
      </div>
    <?php endforeach ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
</style>
<div class="container">
  <?php if(isset($info)){ ?>
  <a href="<?= base_url(); ?>backend/setup/banner/listimg/2" target="_blank" style="font-size: 13px;"><i class="far fa-edit"></i> Chỉnh sửa banner</a>
  <?php } ?>
</div>
