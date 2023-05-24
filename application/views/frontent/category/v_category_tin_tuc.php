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
?>
<section class="blog__section section--padding" style="margin-bottom: 200px;">
    <div class="container-fluid">
        <div class="section__heading text-center mb-50">
            <h2 class="section__heading--maintitle"><?= $name->{$this->id_language}; ?></h2>
        </div>
        <div class="row">
          <div class="col-md-12">
        <?= $content_category->{$this->id_language}; ?>
      </div>
        </div>
        <div class="blog__section--inner">
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-sm-u-2 row-cols-1 mb--n30">
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
</section>

