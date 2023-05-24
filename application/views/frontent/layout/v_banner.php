<!--  hero area start  -->
<div class="hero-area home-4">
 <div class="hero-carousel owl-carousel owl-theme">
  <?php $listbanner = $this->Model_frontent->show_banner_by(2);?>
  <?php foreach ($listbanner as $value): ?>
    <div class="single-hero-item hero-bg" style="background: url('<?= $value['imgslider'] ?>');">
     <div class="container">
      <div class="row">
       <div class="col-xl-6 col-lg-8">
        <div class="hero-txt">
          <?= $value['info'] ?>
          <a class="wow fadeInUp boxed-btn" data-wow-duration="1.5s" href="<?= $value['link'] ?>"><span><?= $value['button_name'] ?></span></a>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-overlay"></div>
</div>
<?php endforeach ?>
</div>
</div>
<!--  hero area end  -->