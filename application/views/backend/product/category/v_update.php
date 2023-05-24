<?php $name = json_decode($view['name']); ?>
<?php $content = json_decode($view['content']); ?>
<?php $title = json_decode($view['title']); ?>
<?php $description = json_decode($view['description']); ?>
<?php $keywords = json_decode($view['keywords']); ?>
<?php $imgwebsite = json_decode($view['imgwebsite']); ?>
<?php $imgsocial = json_decode($view['imgsocial']); ?>
<?php $img_background = json_decode($view['img_background']); ?>

<?php
$view_url_website = $this->Model_backend->view_setup(1);
$view_url = json_decode($view_url_website['info']);
$this->id_language = $this->session->userdata('ss_language');
if(isset($this->id_language)){
   $this->id_language = $this->id_language['name_des'];
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
                  <input type="text" class="form-control" name="name_<?= $this->id_language;?>" id="name" onkeyup="ChangeToSlug();" oninput="checkname()" required  value="<?php if(strlen($name->{$this->id_language}) > 5){ echo $name->{$this->id_language}; }else{ echo $name->{'vn'}; } ?>">
               </div>
               <div class="mb-3">
                  <label class="form-label">Url hiển thị</label>
                  <input type="text" class="form-control" <?php if(strlen($view['url_'.$this->id_language]) == 0){ echo 'id="slug"'; } ?> name="url_<?= $this->id_language;?>" value="<?= $view['url_'.$this->id_language];?>">
               </div>
               <div class="mb-3">
                  <label class="form-label">Nội dung</label>
                  <textarea id="textarea" class="form-control" name="content_<?= $this->id_language;?>"><?php if(strlen($content->{$this->id_language}) > 5){ echo $content->{$this->id_language}; }else{ echo $content->{'vn'}; } ?></textarea>
                  <script>
                     CKEDITOR.replace('content_<?= $this->id_language;?>');
                  </script>
               </div>
               <div class="mb-3">
                  <label class="form-label">Danh mục cha</label>
                  <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="father_id">
                     <option value="0" <?php if($view['father_id'] == 0){ echo 'selected'; } ?>>Danh mục cha</option>
                     <!-- Lấy 5 cấp của danh mục cha -->
                     <?php foreach ($list_category as $value1): ?>
                        <?php if($value1['posts_style'] == 2){
                                 $view_posts1 = $this->Model_backend->view_id('qh_posts',$value1['id_posts']);
                                 $name_category1 = json_decode($view_posts1['name']);
                              }else{
                                 $name_category1 = json_decode($value1['name']); 
                              }
                              ?>
                     <?php $list_lever2 = $this->Model_backend->show_all_by_father($value1['id']); ?>
                        <option value="<?= $value1['id']; ?>" <?php if($view['father_id'] == $value1['id']){ echo 'selected'; } ?>><b><?php if(strlen($name_category1->{$this->id_language}) > 5){ echo $name_category1->{$this->id_language}; }else{ echo $name_category1->{'vn'}; } ?></b></option>
                        <?php foreach ($list_lever2 as $value2): ?>
                           <?php if($value2['posts_style'] == 2){
                                    $view_posts2 = $this->Model_backend->view_id('qh_posts',$value2['id_posts']);
                                    $name_category2 = json_decode($view_posts2['name']);
                                 }else{
                                    $name_category2 = json_decode($value2['name']); 
                                 }
                                 ?>
                           <?php $list_lever3 = $this->Model_backend->show_all_by_father($value2['id']); ?>
                              <option value="<?= $value2['id']; ?>" <?php if($view['father_id'] == $value2['id']){ echo 'selected'; } ?>>--- <?php if(strlen($name_category2->{$this->id_language}) > 5){ echo $name_category2->{$this->id_language}; }else{ echo $name_category2->{'vn'}; } ?></option>
                              <?php foreach ($list_lever3 as $value3): ?>
                                 <?php if($value3['posts_style'] == 2){
                                       $view_posts3 = $this->Model_backend->view_id('qh_posts',$value3['id_posts']);
                                       $name_category3 = json_decode($view_posts3['name']);
                                    }else{
                                       $name_category3 = json_decode($value3['name']); 
                                    }
                                    ?>
                                 <?php $list_lever4 = $this->Model_backend->show_all_by_father($value3['id']); ?>
                                    <option value="<?= $value3['id']; ?>" <?php if($view['father_id'] == $value3['id']){ echo 'selected'; } ?>>------ <?php if(strlen($name_category3->{$this->id_language}) > 5){ echo $name_category3->{$this->id_language}; }else{ echo $name_category3->{'vn'}; } ?></option>
                                    <?php foreach ($list_lever4 as $value4): ?>
                                       <?php if($value4['posts_style'] == 2){
                                          $view_posts4 = $this->Model_backend->view_id('qh_posts',$value4['id_posts']);
                                          $name_category4 = json_decode($view_posts4['name']);
                                       }else{
                                          $name_category4 = json_decode($value4['name']); 
                                       }
                                       ?>
                                       <?php $list_lever5 = $this->Model_backend->show_all_by_father($value4['id']); ?>
                                          <option value="<?= $value4['id']; ?>" <?php if($view['father_id'] == $value4['id']){ echo 'selected'; } ?>>--------- <?php if(strlen($name_category4->{$this->id_language}) > 5){ echo $name_category4->{$this->id_language}; }else{ echo $name_category4->{'vn'}; } ?></option>
                                          <?php foreach ($list_lever5 as $value5): ?>
                                             <?php if($value5['posts_style'] == 2){
                                             $view_posts5 = $this->Model_backend->view_id('qh_posts',$value5['id_posts']);
                                             $name_category5 = json_decode($view_posts5['name']);
                                          }else{
                                             $name_category5 = json_decode($value5['name']); 
                                          }
                                          ?>
                                             <option value="<?= $value5['id']; ?>" <?php if($view['father_id'] == $value5['id']){ echo 'selected'; } ?>>------------ <?php if(strlen($name_category5->{$this->id_language}) > 5){ echo $name_category51->{$this->id_language}; }else{ echo $name_category5->{'vn'}; } ?></option>
                                          <?php endforeach ?>
                                       <?php endforeach ?>
                                 <?php endforeach ?>
                           <?php endforeach ?>
                     <?php endforeach ?>
                  </select>
               </div>
               <button class="btn btn-primary" type="submit" name="edit">Chỉnh sửa thông tin</button>
         </div>
      </div>
   </div>
   <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h6 class="card-title">Tối ưu seo</h6>
               <div class="mb-3">
                  <label class="form-label">Tên tin tức hiển thị Social</label>
                  <input type="text" class="form-control" name="title_<?= $this->id_language;?>" value="<?= $title->{$this->id_language}; ?>" required <?php if(strlen($title->{$this->id_language}) == 0){ echo 'id="title"'; } ?>>
               </div>
               <div class="mb-3">
                  <label class="form-label">Mô tả ngắn</label>
                  <textarea class="form-control" rows="5" name="description_<?= $this->id_language;?>"><?= $description->{$this->id_language}; ?></textarea>
               </div>
               <div class="mb-3">
                  <label class="form-label">Từ khóa</label>
                  <input type="text" class="form-control" name="keywords_<?= $this->id_language;?>" value="<?= $keywords->{$this->id_language}; ?>">
               </div>
               <div class="mb-3">
                  <label class="form-label">Danh sách Template</label>
                  <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="post_templates_id">
                     <?php foreach ($list_templates as $value): ?>
                        <option value="<?= $value['id']; ?>" <?php if($view['post_templates_id'] == $value['id']){ echo 'selected'; } ?>><b><?= $value['name']; ?></b></option>
                     <?php endforeach ?>
                  </select>
               </div>
               <div class="mb-3">
                  <label class="form-label">Ảnh website</label>
                  <div class="row">
                     <div class="col-md-8">
                        <input id="xFilePath1" name="imgwebsite_<?= $this->id_language;?>" type="text" class="form-control" value="<?php if(strlen($imgwebsite->{$this->id_language}) > 5){ echo $imgwebsite->{$this->id_language}; }else{ echo $imgwebsite->{'vn'}; } ?>">
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
                        <input id="xFilePath" name="imgsocial_<?= $this->id_language;?>" type="text" class="form-control" value="<?php if(strlen($imgsocial->{$this->id_language}) > 5){ echo $imgsocial->{$this->id_language}; }else{ echo $imgsocial->{'vn'}; } ?>">
                     </div>
                     <div class="col-md-4">
                        <input type="button" class="btn btn-primary" value="Load ảnh" onclick="BrowseServer();" />
                     </div>
                  </div>
               </div> 
               <div class="mb-3">
                     <label class="form-label">Ảnh Background</label>
                     <div class="row">
                        <div class="col-md-8">
                           <input id="xFilePath2" name="imgbackground_<?= $this->id_language;?>" type="text" size="60" class="form-control" value="<?php if(strlen($img_background->{$this->id_language}) > 5){ echo $img_background->{$this->id_language}; }else{ echo $img_background->{'vn'}; } ?>">
                        </div>
                        <div class="col-md-4">
                           <input type="button" class="btn btn-primary" value="Load ảnh" onclick="BrowseServer2();" />
                        </div>
                     </div>
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Màu sắc hiển thị Background</label>
                     <input type="color" name="color_background" class="form-control form-control-color" value="<?= $view['color_background']; ?>">
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Màu sắc chữ</label>
                     <input type="color" name="color_text" class="form-control form-control-color" value="<?= $view['color_text']; ?>">
                  </div>
               <div class="form-check form-switch">
                  <label class="form-label">Hiển thị</label>
                  <input class="form-check-input" type="checkbox" name="post_status" <?php if($view['post_status'] == 2){ echo 'checked'; } ?>>
               </div> 
         </div>
      </div>
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