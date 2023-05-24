<?php 
$language = $this->session->userdata('ss_languagew');
if(isset($language)){
 $this->id_language = $language['name_lang'];
}else{
 $this->id_language = 'vn';
}

$name = json_decode($view_url['name']);
$content_category = json_decode($view_url['content']);
?>
<?php 
$check_news = array(
 'post_status' => 2,
);
$list_news = $this->db->select('*')->from('qh_posts')->where($check_news)->order_by('id','desc')->get()->result_array();

$check_father = 0;
if($view_url['father_id'] == 0){
  $check_father = $view_url['id'];
}else{
  $check_father = $view_url['father_id'];
}
$list_father = $this->db->select('*')->from('qh_post_category')->where('father_id',$check_father)->get()->result_array();
?>

<!-- Start blog section -->
<section class="blog__section section--padding" style="padding-bottom: 200px;">
    <div class="container-fluid">
        <div class="section__heading text-center mb-50">
            <h2 class="section__heading--maintitle"><?= $name->{$this->id_language}; ?></h2>
        </div>
        <div class="row">
            <div class="col-xxl-9 col-xl-8 col-lg-8">
                <div class="blog__wrapper blog__wrapper--sidebar">
                    <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-sm-u-2 row-cols-1 mb--n30">
                        <?php foreach ($list_news as $value_news): ?>
                    <?php if(in_array($value_news['post_category_id_ze'],$list_folder)){ ?>
                            <?php $imgwebsite_news = json_decode($value_news['imgwebsite']); ?>
                            <?php $name_post_news = json_decode($value_news['name']); ?>
                            <?php $view_category = $this->Model_frontent->view_id('qh_post_category',$value_news['post_category_id_ze']); ?>
                            <div class="col mb-30">
                                <div class="blog__items">
                                    <div class="blog__thumbnail">
                                        <a class="blog__thumbnail--link" href="<?= $view_category['url_vn'].'/'.$value_news['url_'.$this->id_language]; ?>"><img class="blog__thumbnail--img" src="<?php get_img($imgwebsite_news->{$this->id_language});?>" alt="<?= $name_post_news->{$this->id_language}; ?>"></a>
                                    </div>
                                    <div class="blog__content">
                                        <span class="blog__content--meta"><?= date('d-m-Y',$value_news['post_date']); ?></span>
                                        <h3 class="blog__content--title"><a href="<?= $view_category['url_vn'].'/'.$value_news['url_'.$this->id_language]; ?>"><?= $name_post_news->{$this->id_language}; ?></a></h3>
                                        <a class="blog__content--btn primary__btn" href="<?= $view_category['url_vn'].'/'.$value_news['url_'.$this->id_language]; ?>">Xem chi tiết </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-4">
                <div class="blog__sidebar--widget left widget__area">
                    <div class="single__widget widget__bg">
                        <h2 class="widget__title h3">Danh mục</h2>
                        <ul class="widget__categories--menu">
                            <?php foreach ($list_father as $value): ?>
                                <?php $name = json_decode($value['name']); ?>
                                <li class="widget__categories--menu__list">
                                   <a href="<?= $value['url_vn']; ?>">
                                     <label class="widget__categories--menu__label d-flex align-items-center">
                                       <span class="widget__categories--menu__text"><?= $name->{'vn'}; ?></span>
                                    </label>
                                 </a>
                              </li>
                           <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="single__widget widget__bg">
                       <h2 class="widget__title h3">Bài viết mới nhất</h2>
                       <div class="product__grid--inner">
                        <?php foreach ($list_news as $value_news): ?>
          <?php $imgwebsite_news = json_decode($value_news['imgwebsite']); ?>
          <?php $name_post_news = json_decode($value_news['name']); ?>
          <?php $view_category = $this->Model_frontent->view_id('qh_post_category',$value_news['post_category_id_ze']); ?>
          <?php $name_post_category = json_decode($view_category['name']); ?>
          <?php if(in_array($value_news['post_category_id_ze'],$list_folder)){ ?>
                        <div class="product__items product__items--grid d-flex align-items-center">
                            <div class="product__items--grid__thumbnail position__relative">
                                <a class="product__items--link" href="<?= $view_category['url_'.$this->id_language].'/'.$value_news['url_'.$this->id_language]; ?>">
                                    <img class="product__grid--items__img product__primary--img" src="<?php get_img($imgwebsite_news->{$this->id_language});?>" alt="product-img">
                                </a>
                            </div>
                            <div class="product__items--grid__content">
                                <h3 class="product__items--content__title h4"><a href="<?= $view_category['url_'.$this->id_language].'/'.$value_news['url_'.$this->id_language]; ?>"><?= $name_post_news->{$this->id_language}; ?></a></h3>
                            </div>
                        </div>
<?php } ?>
        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
        <!-- End blog section -->