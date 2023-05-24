<?php $info = $this->session->userdata('userinfoone'); ?>
<?php 
$language = $this->session->userdata('ss_languagew');
if(isset($language)){
 $this->id_language = $language['name_lang'];
}else{
 $this->id_language = 'vn';
}

$name = json_decode($view_url['name']);
$imgwebsite = json_decode($view_url['imgwebsite']);
$img_background = json_decode($view_url['img_background']);

?>
<style type="text/css">
  .sidebartitle {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  .sidebartitle:after {
    content: '';
    display: block;
    width: 30px;
    height: 3px;
    background: #85c44e;
    margin-top: 5px;
  }
</style>
<?php 
  // xem có thư mục con không nếu có thì lấy thư mục con ra
if($view_url['father_id'] == 0){
$check_status = array(
      'father_id' =>$view_url['id'],
      'post_status' => 2,
    );
$list_category = $this->db->select('*')->from('qh_post_category')->where($check_status)->get()->result_array();
}else{
  $check_status = array(
      'father_id' =>$view_url['father_id'],
      'post_status' => 2,
    );
$list_category = $this->db->select('*')->from('qh_post_category')->where($check_status)->get()->result_array();
}
?>
<div class="breadcrumbs" data-aos="fade-in" style="<?php if(strlen($img_background->{$this->id_language}) > 10){ ?>
background: url(<?= $img_background->{$this->id_language}; ?>);<?php }else{ ?>background:<?= $view_url['color_background']; ?> ;<?php } ?>background-size: cover;min-height: 400px;">
  <div class="container">
    <h2 style="margin-top: 260px;font-size: 40px;font-weight: bold;">
      <?= $name->{$this->id_language}; ?>
      <?php if(isset($info)){ ?>
            <a href="<?= base_url(); ?>backend/video/posts/add" target="_blank" style="font-size: 13px;"><i class="far fa-plus-square"></i></a>
            <a href="<?= base_url(); ?>backend/video/category/update/<?= $view_url['id']; ?>" target="_blank" style="font-size: 13px;"><i class="far fa-edit"></i></a>
         <?php } ?>
    </h2>
    <p><i class="bi bi-house-door-fill"></i> Trang chủ / <?= $name->{$this->id_language}; ?></p>
  </div>
</div><!-- End Breadcrumbs -->
<?php $list_video = $this->db->select('*')->from('qh_posts')->where('post_status',2)->order_by('post_date','desc')->get()->result_array(); ?>


<?php 
  $dem = 0;
  foreach ($list_video as $value) {
    $father_id = json_decode($value['post_category_id']);
    if(in_array($view_url['id'], $father_id)){
      $dem += 1;
      if($dem == 1){
        $id_posts_video = $value['id_posts_video'];
      }
    }
  }
?>

<!-- ======= Courses Section ======= -->
<div class="container">
  <div class="row" style="margin-top: 50px;margin-bottom: 100px;">
    <div class="col-md-12 text-center">
      <?php foreach ($list_category as $value): ?>
        <?php $name_category = json_decode($value['name']); ?>
        <a href="<?= base_url().$this->id_language; ?>/<?= $value['url_'.$this->id_language] ?>"><button style="background: #0C4DA2;color: #fff;border: none;padding: 6px 20px"><?= $name_category->{$this->id_language}; ?></button></a>
      <?php endforeach ?>
    </div>
    <div class="col-md-12" style="margin-top: 50px;">
      <div class="sidebartitle"><?= $name->{$this->id_language}; ?>
        <?php if(isset($info)){ ?>
            <a href="<?= base_url(); ?>backend/video/posts/add" target="_blank" style="font-size: 13px;"><i class="far fa-plus-square"></i></a>
            <a href="<?= base_url(); ?>backend/video/category/update/<?= $view_url['id']; ?>" target="_blank" style="font-size: 13px;"><i class="far fa-edit"></i></a>
         <?php } ?>
      </div>
    </div>
    <div class="col-md-9 d-none d-sm-block">
    <?php if(isset($id_posts_video) && strlen($id_posts_video) > 3){ ?>
      <iframe width="100%" height="550" src="https://www.youtube.com/embed/<?= $id_posts_video; ?>?rel=0&&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen showinfo="0"></iframe>
    <?php } ?>
    </div>
    <div class="col-md-9 d-block d-sm-none">
      <?php if(isset($id_posts_video) && strlen($id_posts_video) > 3){ ?>
      <iframe width="100%" height="250" src="https://www.youtube.com/embed/<?= $id_posts_video; ?>?rel=0&&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen showinfo="0"></iframe>
      <?php } ?>
    </div>
    <div class="col-md-3">
      <div class="scrollbar" id="style-2">
        <div class="force-overflow">
          <div style="color: #000;font-weight: bold;font-size:20px;"><?= $name->{$this->id_language}; ?></div>
          <hr>
          <?php $dem = 0; ?>
          <?php foreach ($list_video as $value): ?>
            <?php $father_id = json_decode($value['post_category_id']); ?>
            <?php if(in_array($view_url['id'], $father_id)){ ?>
            <?php $dem += 1; ?>
            <?php $name_video = json_decode($value['name']); ?>
            <?php $img_video = json_decode($value['imgwebsite']); ?>
            <?php $view_url_category = $this->Model_frontent->view_id('qh_post_category',$value['post_category_id_ze']); ?>
            <a href="<?= base_url().$this->id_language; ?>/<?= $view_url_category['url_'.$this->id_language] ?>/<?= $value['url_'.$this->id_language] ?>">
            <div class="row" style="margin-bottom: 15px;padding: 10px 10px;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
              <div class="col-md-3 col-xs-3 d-none d-sm-block" style="min-height:60px;background: url(<?= $img_video->{$this->id_language}; ?>);background-size: cover;background-position: center;">
              </div>
              <div class="col-md-3 col-xs-3 d-block d-sm-none" style="min-height:60px;">
                <img src="<?= $img_video->{$this->id_language}; ?>" alt="" width="100%">
              </div>
              <div class="col-md-9 col-xs-9" style="font-size:13px">
                <?= $name_video->{$this->id_language}; ?><br>
                <?php if($value['id_posts_video'] == $id_posts_video){ ?>
                <span style="color:red"><i class="ri-play-fill" style="color:green"></i> Đang phát</span>
              <?php } ?>
              </div>
            </div>
          </a>
        <?php } ?>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
  .scrollbar
  {
    float: left;
    height: 550px;
    width: 100%;
    background: #fff;
    overflow-y: scroll;
    margin-bottom: 25px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }
  .force-overflow
  {
    min-height: 450px;
    padding: 20px 20px;
  }
    /*
     *  STYLE 1
     */
  #style-2::-webkit-scrollbar-track
  {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
    background-color: #F5F5F5;
  }
  #style-2::-webkit-scrollbar
  {
    width: 6px;
    background-color: #F5F5F5;
  }
  #style-2::-webkit-scrollbar-thumb
  {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #D62929;
  }
</style>
<style type="text/css">
  .sidebartitle {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  .sidebartitle:after {
    content: '';
    display: block;
    width: 30px;
    height: 3px;
    background: #85c44e;
    margin-top: 5px;
  }
</style>
  <!-- ======= Footer ======= -->