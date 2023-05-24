<?php 
$language = $this->session->userdata('ss_language');
if(isset($language)){
   $this->id_language = $language['name_des'];
}else{
   $this->id_language = 'vn';
}
?>
<div class="row">
   <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h6 class="card-title">Nội dung chuyên mục</h6>
            <form action="" method="post">
               <div class="mb-3">
                  <label class="form-label">Tên chuyên mục</label>
                  <input type="text" class="form-control" name="name_<?= $this->id_language;?>" id="name" onkeyup="ChangeToSlug();" oninput="checkname()" required>
               </div>
               <div class="mb-3">
                  <label class="form-label">Url hiển thị</label>
                  <input type="text" class="form-control" id="slug" name="url_<?= $this->id_language;?>">
               </div>
               <div class="mb-3">
                  <label class="form-label">Nội dung</label>
                  <textarea id="textarea" class="form-control" name="content_<?= $this->id_language;?>"></textarea>
                  <script>
                     CKEDITOR.replace('content_<?= $this->id_language;?>');
                  </script>
               </div>                                             
         <div class="col-md-12 mb-3">
          <label class="mb-3">Danh mục cha</label>
          <select class="select2 form-control mb-3 custom-select" name="post_category_id_ze" style="width: 100%; height:36px;">
            <optgroup label="Danh mục chọn">
               <!-- Lấy 5 cấp của danh mục cha -->
                   <?php $list_lever1 = $this->Model_news_category->show_all_by_father(0); ?>
                   <?php foreach ($list_lever1 as $value1): ?>
                     <?php $category1 = json_decode($value1['name']) ?>
                     <?php $list_lever2 = $this->Model_news_category->show_all_by_father($value1['id']); ?>
                     <?php if($value1['posts_style'] == 1){ ?>
                     <option value="<?= $value1['id']; ?>"><b><?= $category1->{$this->id_language}; ?></b></option>
                  <?php } ?>
                     <?php foreach ($list_lever2 as $value2): ?>
                        <?php $category2 = json_decode($value2['name']) ?>
                        <?php $list_lever3 = $this->Model_news_category->show_all_by_father($value2['id']); ?>
                        <?php if($value2['posts_style'] == 1){ ?>
                        <option value="<?= $value2['id']; ?>">--- <?= $category2->{$this->id_language}; ?></option>
                        <?php } ?>
                        <?php foreach ($list_lever3 as $value3): ?>
                           <?php $category3 = json_decode($value3['name']) ?>
                           <?php $list_lever4 = $this->Model_news_category->show_all_by_father($value3['id']); ?>
                           <?php if($value3['posts_style'] == 1){ ?>
                           <option value="<?= $value3['id']; ?>">------ <?= $category3->{$this->id_language}; ?></option>
                        <?php } ?>
                           <?php foreach ($list_lever4 as $value4): ?>
                              <?php $category4 = json_decode($value4['name']) ?>
                              <?php $list_lever5 = $this->Model_news_category->show_all_by_father($value4['id']); ?>
                              <?php if($value4['posts_style'] == 1){ ?>
                              <option value="<?= $value4['id']; ?>">--------- <?= $category4->{$this->id_language}; ?></option>
                           <?php } ?>
                              <?php foreach ($list_lever5 as $value5): ?>
                                 <?php $category5 = json_decode($value5['name']) ?>
                                 <?php if($value5['posts_style'] == 1){ ?>
                                 <option value="<?= $value5['id']; ?>">------------ <?= $category5->{$this->id_language}; ?></option>
                              <?php } ?>
                              <?php endforeach ?>
                           <?php endforeach ?>
                        <?php endforeach ?>
                     <?php endforeach ?>
                  <?php endforeach ?>
            </optgroup>
         </select>
      </div><!-- end col --> 
      <div class="row">
      <div class="mb-3 col-md-6">
            <?php if($id_service == 2){ ?><label class="">Giá bán</label><?php } ?>
            <input type="<?php if($id_service == 2){ echo 'text'; }else{ echo 'hidden'; } ?>" class="form-control" name="price" value="0">
         </div>
         <div class="mb-3 col-md-6">
            <?php if($id_service == 2){ ?><label class="">Giá khuyến mại</label><?php } ?>
            <input type="<?php if($id_service == 2){ echo 'text'; }else{ echo 'hidden'; } ?>" class="form-control" name="priceevent" value="0">
         </div> 
      </div>
      <div class="col-md-12">                                   
         <button class="btn btn-primary" type="submit" name="add">Thêm thông tin</button>
      </div><!-- end col -->
   </div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
   <div class="card">
    <div class="accordion accordion-flush filter-accordion">

      <div class="card-body border-bottom">
        <div>
          <p class="text-muted text-uppercase fs-12 fw-medium mb-2">Tối ưu seo</p>
          <div class="mb-3">
            <label class="form-label">Tên tin tức hiển thị Social</label>
            <input type="text" class="form-control" name="title_<?= $this->id_language;?>" id="title" required>
         </div>
         <div class="mb-3">
            <label class="form-label">Mô tả ngắn</label>
            <textarea id="textarea" class="form-control" maxlength="225" rows="5" name="description_<?= $this->id_language;?>" placeholder="Giới hạn tốt nhất cho Seo là tối đa 225 ki tự hiển thị."></textarea>
         </div>
         <div class="mb-3">
            <label class="form-label">Từ khóa</label>
            <input type="text" class="form-control" name="keywords_<?= $this->id_language;?>">
         </div>
      </div>
   </div>
   <div class="accordion-item">
     <h2 class="accordion-header" id="flush-headingBrands">
       <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseBrands" aria-expanded="true" aria-controls="flush-collapseBrands">
         <span class="text-muted text-uppercase fs-12 fw-medium">Thuộc tính bài viết</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
      </button>
   </h2>

   <div id="flush-collapseBrands" class="accordion-collapse collapse show" aria-labelledby="flush-headingBrands">
    <div class="accordion-body text-body pt-0">
      <div class="col-md-12 mb-3">
       <label class="mb-3">Danh sách Tags</label>
       <select class="select2 form-control mb-3 custom-select" multiple="multiple" name="post_tags_id[]" style="width: 100%; height:36px;">
         <option value="0" selected>Chưa tags</option>
         <optgroup label="Danh mục chọn">
            <?php foreach ($list_tags as $value): ?>
               <option value="<?= $value['id']; ?>"><b><?= $value['name']; ?></b></option>
            <?php endforeach ?>
         </optgroup>
      </select>
   </div><!-- end col -->
   <div class="col-md-12 mb-3">
    <label class="mb-3">Danh sách Template</label>
    <select class="select2 form-control mb-3 custom-select" name="post_templates_id" style="width: 100%; height:36px;">
      <optgroup label="Chọn mẫu Template">
         <?php foreach ($list_templates as $value): ?>
            <option value="<?= $value['id']; ?>"><b><?= $value['name']; ?></b></option>
         <?php endforeach ?>
      </optgroup>
   </select>
</div><!-- end col -->
<div class="mb-3">
   <label class="form-label">Ảnh website</label>
   <div class="row">
      <div class="col-md-8">
         <input id="xFilePath1" name="imgwebsite_<?= $this->id_language;?>" type="text" size="60" class="form-control">
      </div>
      <div class="col-md-4">
         <input type="button" class="btn btn-primary" value="Load ảnh" onclick="BrowseServer1();" />
      </div>
   </div>
</div>
<div class="mb-3">
   <label class="form-label">Ảnh Socail</label>
   <div class="row">
      <div class="col-md-8">
         <input id="xFilePath" name="imgsocial_<?= $this->id_language;?>" type="text" size="60" class="form-control">
      </div>
      <div class="col-md-4">
         <input type="button" class="btn btn-primary" value="Load ảnh" onclick="BrowseServer();" />
      </div>
   </div>
</div>
<div class="form-check form-switch">
   <label class="form-label">Hiển thị</label>
   <input class="form-check-input" type="checkbox" name="post_status" checked>
</div> 
<div class="form-check form-switch">
   <label class="form-label">Cho phép bình luận</label>
   <input class="form-check-input" type="checkbox" name="post_comment">
</div> 

</div>
</div>
</div>
<!-- end accordion-item -->

</div>
</div>
<!-- end card -->

</div>
</div>
</form>
<script type="text/javascript">
   function checkname() {
    var name = document.getElementById('name').value;
       // Thêm nội dung vào thẻ title và ID ggtitle
    document.getElementById('title').value = name;
 }
</script>