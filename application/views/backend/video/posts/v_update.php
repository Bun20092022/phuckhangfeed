<?php $post_category_id = json_decode($view['post_category_id']); ?>
<?php $post_tags_id = json_decode($view['post_tags_id']); ?>
<?php $name = json_decode($view['name']); ?>
<?php $content = json_decode($view['content']); ?>
<?php $title = json_decode($view['title']); ?>
<?php $description = json_decode($view['description']); ?>
<?php $keywords = json_decode($view['keywords']); ?>
<?php $imgwebsite = json_decode($view['imgwebsite']); ?>
<?php $imgsocial = json_decode($view['imgsocial']); ?>
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
         <div class="card-header">
            <h6 class="card-title">Nội dung chuyên mục</h6>
         </div>
         <div class="card-body">
            <form action="" method="post">
               <div class="mb-3">
                  <label class="form-label">Tên chuyên mục</label>
                  <input type="text" class="form-control" name="name_<?= $this->id_language;?>" id="name" onkeyup="ChangeToSlug();" oninput="checkname()" required  value="<?php if(strlen($name->{$this->id_language}) > 5){ echo $name->{$this->id_language}; }else{ echo $name->{'vn'}; } ?>">
               </div>
               <div class="mb-3">
                  <label class="form-label">Url hiển thị</label>
                  <input type="text" class="form-control" <?php if(strlen($view['url_'.$this->id_language]) == 0){ echo 'id="slug"'; } ?> name="url_<?= $this->id_language;?>" value="<?= $view['url_'.$this->id_language];?>">
               </div>
               <div class="mb-3">
                  <label class="form-label">ID Video (<a href="" target="_blank" style="color:blue"><i class="fa fa-plus"></i>Hướng dẫn lấy ID Video</a>)</label>
                  <input type="text" class="form-control" name="id_posts_video" value="<?= $view['id_posts_video'];?>" required>
               </div>
               <div class="mb-3">
                  <label class="form-label">Nội dung</label>
                  <textarea id="textarea" class="form-control" name="content_<?= $this->id_language;?>"><?= $content->{$this->id_language}; ?></textarea>
                  <script>
                     CKEDITOR.replace('content_<?= $this->id_language;?>');
                  </script>
               </div>                                             
               <div class="col-md-12 mb-3">
                 <label class="mb-3">Danh mục cha</label>
                 <select class="select2 form-control mb-3 custom-select" name="post_category_id_ze" style="width: 100%; height:36px;">
                  <option value="0" <?php if($view['post_category_id_ze'] == 0){ echo 'selected'; } ?>>Chưa phân loại</option>
                  <!-- Lấy 5 cấp của danh mục cha -->
                  <?php foreach ($list_category as $value1): ?>
                     <?php $name1 = json_decode($value1['name']); ?>
                     <?php $list_lever2 = $this->Model_backend->show_all_by_father($value1['id']); ?>
                     <option value="<?= $value1['id']; ?>" <?php if($value1['id'] == $view['post_category_id_ze']){ echo 'selected'; } ?>><b><?php if(strlen($name1->{$this->id_language}) > 5){ echo $name1->{$this->id_language}; }else{ echo $name1->{'vn'}; } ?></b></option>
                     <?php foreach ($list_lever2 as $value2): ?>
                        <?php $name2 = json_decode($value2['name']); ?>
                        <?php $list_lever3 = $this->Model_backend->show_all_by_father($value2['id']); ?>
                        <option value="<?= $value2['id']; ?>" <?php if($value2['id'] == $view['post_category_id_ze']){ echo 'selected'; } ?>>--- <?php if(strlen($name2->{$this->id_language}) > 5){ echo $name2->{$this->id_language}; }else{ echo $name2->{'vn'}; } ?></option>
                        <?php foreach ($list_lever3 as $value3): ?>
                           <?php $name3 = json_decode($value3['name']); ?>
                           <?php $list_lever4 = $this->Model_backend->show_all_by_father($value3['id']); ?>
                           <option value="<?= $value3['id']; ?>" <?php if($value3['id'] == $view['post_category_id_ze']){ echo 'selected'; } ?>>------ <?php if(strlen($name3->{$this->id_language}) > 5){ echo $name3->{$this->id_language}; }else{ echo $name3->{'vn'}; } ?></option>
                           <?php foreach ($list_lever4 as $value4): ?>
                              <?php $name4 = json_decode($value4['name']); ?>
                              <?php $list_lever5 = $this->Model_backend->show_all_by_father($value4['id']); ?>
                              <option value="<?= $value4['id']; ?>" <?php if($value4['id'] == $view['post_category_id_ze']){ echo 'selected'; } ?>>--------- <?php if(strlen($name4->{$this->id_language}) > 5){ echo $name4->{$this->id_language}; }else{ echo $name4->{'vn'}; } ?></option>
                              <?php foreach ($list_lever5 as $value5): ?>
                                 <?php $name5 = json_decode($value5['name']); ?>
                                 <option value="<?= $value5['id']; ?>" <?php if($value5['id'] == $view['post_category_id_ze']){ echo 'selected'; } ?>>------------ <?php if(strlen($name5->{$this->id_language}) > 5){ echo $name5->{$this->id_language}; }else{ echo $name5->{'vn'}; } ?></option>
                              <?php endforeach ?>
                           <?php endforeach ?>
                        <?php endforeach ?>
                     <?php endforeach ?>
                  <?php endforeach ?>
               </optgroup>
            </select>
         </div><!-- end col -->  
      </div>
   </div>
   <div class="card">
     <div class="card-header">
      <h4 class="card-title">Thông tin mở rộng Website</h4>
   </div><!--end card-header-->
   <div class="card-body">    
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
       <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">Seo Website</a>
     </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane p-3 active" id="home" role="tabpanel">
     <div class="mb-3">
      <label class="form-label">Tên tin tức hiển thị Social</label>
      <input type="text" class="form-control" name="title_<?= $this->id_language;?>" required value="<?php if(strlen($title->{$this->id_language}) > 5){ echo $title->{$this->id_language}; }else{ echo $title->{'vn'}; } ?>" <?php if(strlen($title->{$this->id_language}) == 0){ echo 'id="title"'; } ?>>
   </div>
   <div class="mb-3">
      <label class="form-label">Mô tả ngắn</label>
      <textarea id="textarea" class="form-control" maxlength="225" rows="5" name="description_<?= $this->id_language;?>" placeholder="Giới hạn tốt nhất cho Seo là tối đa 225 ki tự hiển thị."><?php if(strlen($description->{$this->id_language}) > 5){ echo $description->{$this->id_language}; }else{ echo $description->{'vn'}; } ?></textarea>
   </div>
   <div class="mb-3">
      <label class="form-label">Từ khóa</label>
      <input type="text" class="form-control" name="keywords_<?= $this->id_language;?>" value="<?php if(strlen($keywords->{$this->id_language}) > 5){ echo $keywords->{$this->id_language}; }else{ echo $keywords->{'vn'}; } ?>">
   </div>
</div>
</div>        
</div><!--end card-body-->
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
   <div class="card">
      <div class="card-body"> 
         <button class="btn btn-sm btn-primary" type="submit" name="edit">Chỉnh sửa thông tin</button>
         <?php if($view['post_status'] == 3){ ?>
            <a href="<?= $this->folder; ?>/delete/<?= $view['id']; ?>/2" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa bản nháp?')">
               <button class="btn btn-sm btn-danger" type="button" name="edit">Xóa bản nháp</button>
            </a>
         <?php } ?>
      </div>
   </div>
   <div class="card">
     <div class="card-header">
      <h4 class="card-title">Hiển thị và ngày tháng</h4>
   </div><!--end card-header-->
   <div class="card-body"> 
      <div class="row">
         <div class="col-md-6">
            <label class="my-3">Trạng thái</label>
            <select class="select2 form-control mb-3 custom-select" name="post_status">
               <option value="3" <?php if($view['post_status'] == 3){ echo 'selected'; } ?>>Bản nháp</option>
               <option value="2" <?php if($view['post_status'] == 2){ echo 'selected'; } ?>>Công khai</option>
            </select>
         </div>
         <div class="col-md-6">
          <label class="my-3">Ngày đăng</label>
          <div class="input-group">                                            
            <input type="date" class="form-control" name="post_date" value="<?= date('Y-m-d',$view['post_date']); ?>">
         </div>
      </div>
   </div>
</div>
</div>
<div class="card">
  <div class="card-header">
   <h4 class="card-title">Thuộc tính bài viết</h4>
</div><!--end card-header-->
<div class="card-body"> 
   <div class="row">
      <div class="col-md-12 mb-3">
        <label class="mb-3">Danh sách Tags</label>
        <select class="select2 form-control mb-3 custom-select" multiple="multiple" name="post_tags_id[]" style="width: 100%; height:36px;">
         <option value="0" <?php if(in_array(0, $post_tags_id)){ echo 'selected'; } ?>>Chưa tags</option>
         <?php foreach ($list_tags as $value): ?>
            <option value="<?= $value['id']; ?>" <?php if(in_array($value['id'], $post_tags_id)){ echo 'selected'; } ?>><b><?= $value['name']; ?></b></option>
         <?php endforeach ?>
      </select>
   </div><!-- end col -->
   <div class="col-md-12 mb-3">
     <label class="mb-3">Danh sách Template</label>
     <select class="select2 form-control mb-3 custom-select" name="post_templates_id" style="width: 100%; height:36px;">
      <optgroup label="Chọn mẫu Template">
         <?php foreach ($list_templates as $value): ?>
            <option value="<?= $value['id']; ?>" <?php if($view['post_templates_id'] == $value['id']){ echo 'selected'; } ?>><b><?= $value['name']; ?></b></option>
         <?php endforeach ?>
      </optgroup>
   </select>
</div><!-- end col -->
<div class="mb-3">
   <label class="form-label">Ảnh website</label>
   <div class="row">
      <div class="col-md-8">
         <input id="xFilePath1" name="imgwebsite_<?= $this->id_language;?>" type="text" size="60" class="form-control" value="<?php if(strlen($imgwebsite->{$this->id_language}) > 5){ echo $imgwebsite->{$this->id_language}; }else{ echo $imgwebsite->{'vn'}; } ?>">
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
         <input id="xFilePath" name="imgsocial_<?= $this->id_language;?>" type="text" size="60" class="form-control" value="<?php if(strlen($imgsocial->{$this->id_language}) > 5){ echo $imgsocial->{$this->id_language}; }else{ echo $imgsocial->{'vn'}; } ?>">
      </div>
      <div class="col-md-4">
         <input type="button" class="btn btn-primary" value="Load ảnh" onclick="BrowseServer();" />
      </div>
   </div>
</div>
<div class="form-check form-switch">
   <label class="form-label">Cho phép bình luận</label>
   <input class="form-check-input" type="checkbox" name="post_comment" <?php if($view['post_comment'] == 2){ echo 'checked'; } ?>>
</div> 
</div>
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