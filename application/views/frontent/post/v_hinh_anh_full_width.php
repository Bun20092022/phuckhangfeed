<?php 
$viewinfo = $this->db->select('*')->from('qh_website')->where('id',1)->get()->row_array();
$info = json_decode($viewinfo['seo']); ?>
<?php 
$language = $this->session->userdata('ss_languagew');
if(isset($language)){
   $this->id_language = $language['name_lang'];
}else{
   $this->id_language = 'vn';
}

$name_category = json_decode($view_url_category['name']);
$name_post = json_decode($view_url_post['name']);
$imgwebsite_news = json_decode($view_url_post['imgwebsite']);
$content_post = json_decode($view_url_post['content']);
?>
<?php 
$check_post = array(
 'post_status' => 2,
 'post_category_id_ze' => $view_url_post['id'],
);
$list_posts = $this->db->select('*')->from('qh_posts')->where($check_post)->order_by('id','desc')->limit(3)->get()->result_array();
$list_img = $this->db->select('*')->from('qh_post_img')->where('id_posts',$view_url_post['id'])->get()->result_array();
?>
<!-- content  --> 
<div class="content">
    <!--  section  -->  
    <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem "  data-bg="public/frontent/assets/images/bg/20.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h2><?= $name_category->{$this->id_language}; ?></h2>
                <div class="dots-separator fl-wrap"><span></span></div>
            </div>
        </div>
        <div class="hero-section-scroll">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
        </div>
        <div class="brush-dec"></div>
    </section>
    <!--  section  end-->  
    <!--  section  -->   
    <section class="hidden-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fl-wrap post-container">
                        <!-- post -->
                        <div class="post fl-wrap fw-post">
                            <h2><?= $name_post->{$this->id_language}; ?></h2>
                            <ul class="blog-title-opt">
                                <li><?= date('d-m-Y',$view_url_post['post_date']); ?></li>
                            </ul>
                            <!-- blog media -->
                            <div class="blog-media fl-wrap">
                                <div class="single-slider-wrap">
                                    <div class="product-slider fl-wrap">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper lightgallery">
                                                <div class="swiper-slide hov_zoom"><img src="<?= $imgwebsite_news->{$this->id_language}; ?>" alt="<?= $name_post->{$this->id_language}; ?>"><a href="<?= $imgwebsite_news->{$this->id_language}; ?>" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                <?php foreach ($list_img as $value): ?>
                                                    <div class="swiper-slide hov_zoom"><img src="<?= $value['link'] ?>" alt="<?= $name_post->{$this->id_language}; ?>"><a href="<?= $value['link'] ?>" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                <?php endforeach ?>
                                            </div>
                                            <div class="ss-slider-pagination"></div>
                                            <div class="ss-slider-cont ss-slider-cont-prev"><i class="fas fa-caret-left"></i></div>
                                            <div class="ss-slider-cont ss-slider-cont-next"><i class="fas fa-caret-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?= $info->{'linkdatmon'}; ?>" target="_blank" class="btn">Liên hệ đặt món</a>
                            <!-- blog media end -->
                            <div class="blog-text fl-wrap">
                               <?= $content_post->{$this->id_language}; ?>
                           </div>
                       </div>
                       <!-- post end-->
                       <!--post-related-->
                       <div class="post-related fl-wrap">
                        <h6 class="comments-title">Bài viết liên quan</h6>
                        <!-- post-related -->  
                        <div class=" row">
                            <?php foreach ($list_posts as $value_news): ?>
                                <?php $imgwebsite_news = json_decode($value_news['imgwebsite']); ?>
                                <?php $name_post_news = json_decode($value_news['name']); ?>
                                <!-- 1  --> 
                                <div class="item-related col-md-4">
                                    <a href="<?= $view_url_category['url_'.$this->id_language].'/'.$view_url_post['url_'.$this->id_language]; ?>"><img src="<?= $imgwebsite_news->{$this->id_language}; ?>"   alt=""></a>
                                    <h3><a href="<?= $view_url_category['url_'.$this->id_language].'/'.$view_url_post['url_'.$this->id_language]; ?>"><?= $name_post_news->{$this->id_language}; ?></a></h3>
                                    <span class="post-date"><?= date('d-m-Y', $value_news['post_date']); ?>/span>
                                    </div>
                                    <!-- 1 end--> 
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fl-wrap limit-box"></div>
        </div>
        <div class="section-bg">
            <div class="bg"  data-bg="public/frontent/assets/images/bg/dec/section-bg.png"></div>
        </div>
    </section>
    <!--  section end  -->  
    <div class="brush-dec2 brush-dec_bottom"></div>
</div>
                <!-- content end  -->