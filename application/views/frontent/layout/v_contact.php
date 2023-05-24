<style type="text/css">
  @media (max-width: 768px) {
    .map-contact {
      width: 100%;
      height: 450;
    }
    .contact-text{
      margin: 20px 10px;
    }
  }
  @media (min-width: 768px) {
    .map-contact {
      width: 100%;
      height: 850px;
    }
    .contact-text{
      margin: 200px 50px 100px 100px;
    }
  }
</style>
<div class="row">
  <div class="col-md-6">
    <iframe src="<?php $this->Model_info->get_map(); ?>" class="map-contact" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="col-md-6">
    <div class="contact-text">
      <?php $this->Model_info->get_contact(); ?>
    </div>
  </div>
</div>