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

$name = json_decode($view_url['name']);
$content_category = json_decode($view_url['content']);
$imgwebsite_category = json_decode($view_url['imgwebsite']);
?>
<?php 
$check_menu = array(
   'post_status' => 2,
   'father_id' => $view_url['id'],
);

$list_menu = $this->db->select('*')->from('qh_post_category')->where($check_menu)->order_by('id','desc')->get()->result_array();
?>
<!-- content  -->	
<div class="content">
    <!--  section  -->  
    <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem "  data-bg="<?= $imgwebsite_category->{$this->id_language}; ?>" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h2><?= $name->{$this->id_language}; ?></h2>
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
    <section class="hidden-section" data-scrollax-parent="true">
        <div class="container">
            <div class="gallery_filter-button btn">Show Filters <i class="fal fa-long-arrow-down"></i></div>
            <!-- gallery-filters -->
            <div class="gallery-filters gth">
                <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*"><span>01.</span>Tất cả</a>
                <?php $dem = 1; ?>
                <?php foreach ($list_menu as $value): ?>
                    <?php $name_menu = json_decode($value['name']); ?>
                    <?php $dem += 1; ?>
                    <a href="#" class="gallery-filter " data-filter=".dishes<?= $value['id']; ?>"><span>0<?= $dem; ?>.</span><?= $name_menu->{$this->id_language}; ?></a>
                <?php endforeach ?> 
            </div>
            <!-- gallery-filters end-->
            <!-- gallery start -->
            <div class="gallery-items min-pad  lightgallery three-column fl-wrap" style="margin-bottom:50px;">
                <?php $dem = 0; ?>
                <?php foreach ($list_menu as $value): ?>
                    <?php $dem += 1; ?>
                    <?php 
                        // Lấy thực đơn của từng loại
                    $check_news = array(
                        'post_status' => 2,
                        'post_category_id_ze' => $value['id'],
                    ); 
                    $list_post_menu = $this->db->select('*')->from('qh_posts')->where($check_news)->order_by('id','desc')->get()->result_array();
                    ?>
                    <?php foreach ($list_post_menu as $value_news): ?>
                        <?php $imgwebsite_news = json_decode($value_news['imgwebsite']); ?>
                        <!-- gallery-item-->
                        <div class="gallery-item dishes<?= $value['id']; ?>">
                            <a href="<?= $view_url['url_'.$this->id_language].'/'.$value_news['url_'.$this->id_language]; ?>">
                            <div class="grid-item-holder hov_zoom">
                                <img  src="<?= $imgwebsite_news->{$this->id_language}; ?>" alt="">
                            </div>
                            </a>
                        </div>
                        <!-- gallery-item end-->
                    <?php endforeach ?>
                <?php endforeach ?>
            </div>
            <!-- gallery end -->                                
            <div class="clearfix"></div>
            <div class="bold-separator bold-separator_dark"><span></span></div>
            <div class="clearfix"></div>
            <a href="<?= $info->{'linkdatmon'}; ?>" target="_blank" class="btn">Liên hệ đặt món</a>                                     
        </div>
    </section>
    <!--  section end  -->  
    <div class="brush-dec2 brush-dec_bottom"></div>
</div>
                <!-- content end  -->