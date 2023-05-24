<h6 class="mb-0 text-uppercase"><?php if(isset($title)){ echo $title; } ?></h6>
<hr/>
<div class="row">
   <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h6 class="card-title">Nội dung chuyên mục</h6>
            <form action="" method="post">
               <div class="mb-3">
                  <label class="form-label">Tên chuyên mục</label>
                  <input type="text" class="form-control" name="name" id="name" onkeyup="ChangeToSlug();" oninput="checkname()" required>
               </div>
               <div class="mb-3">
                  <label class="form-label">Url hiển thị</label>
                  <input type="text" class="form-control" id="slug" name="url">
               </div>
               <div class="mb-3">
                  <label class="form-label">Nội dung</label>
                  <textarea id="textarea" class="form-control" name="content"></textarea>
                  <script>
                     CKEDITOR.replace('content');
                  </script>
               </div>
               <div class="mb-3">
                  <label class="form-label">Danh mục cha</label>
                  <select class="multiple-select" data-placeholder="Choose anything" multiple="multiple" name="post_category_id[]">
                     <option value="0" selected>Chưa phân loại</option>
                     <!-- Lấy 5 cấp của danh mục cha -->
                     <?php $list_lever1 = $this->Model_course_category->show_all_by_father(0); ?>
                     <?php foreach ($list_lever1 as $value1): ?>
                     <?php $list_lever2 = $this->Model_course_category->show_all_by_father($value1['id']); ?>
                        <option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
                        <?php foreach ($list_lever2 as $value2): ?>
                           <?php $list_lever3 = $this->Model_course_category->show_all_by_father($value2['id']); ?>
                              <option value="<?= $value2['id']; ?>">--- <?= $value2['name']; ?></option>
                              <?php foreach ($list_lever3 as $value3): ?>
                                 <?php $list_lever4 = $this->Model_course_category->show_all_by_father($value3['id']); ?>
                                    <option value="<?= $value3['id']; ?>">------ <?= $value3['name']; ?></option>
                                    <?php foreach ($list_lever4 as $value4): ?>
                                       <?php $list_lever5 = $this->Model_course_category->show_all_by_father($value4['id']); ?>
                                          <option value="<?= $value4['id']; ?>">--------- <?= $value4['name']; ?></option>
                                          <?php foreach ($list_lever5 as $value5): ?>
                                             <option value="<?= $value5['id']; ?>">------------ <?= $value5['name']; ?></option>
                                          <?php endforeach ?>
                                       <?php endforeach ?>
                                 <?php endforeach ?>
                           <?php endforeach ?>
                     <?php endforeach ?>
                  </select>
               </div>
               <button class="btn btn-primary" type="submit" name="add">Thêm thông tin</button>
         </div>
      </div>
   </div>
   <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h6 class="card-title">Tối ưu seo</h6>
               <div class="mb-3">
                  <label class="form-label">Tên tin tức hiển thị Social</label>
                  <input type="text" class="form-control" name="title" id="title" required>
               </div>
               <div class="mb-3">
                  <label class="form-label">Mô tả ngắn</label>
                  <textarea class="form-control" rows="5" name="description" required></textarea>
               </div>
               <div class="mb-3">
                  <label class="form-label">Từ khóa</label>
                  <input type="text" class="form-control" name="keywords">
               </div>
               <div class="mb-3">
                  <label class="form-label">Danh sách Tags</label>
                  <select class="multiple-select" data-placeholder="Choose anything" multiple="multiple" name="post_tags_id[]">
                     <option value="0" selected>Chưa tags</option>
                     <?php foreach ($list_tags as $value): ?>
                        <option value="<?= $value['id']; ?>"><b><?= $value['name']; ?></b></option>
                     <?php endforeach ?>
                  </select>
               </div>
               <div class="mb-3">
                  <label class="form-label">Danh sách Template</label>
                  <select class="single-select" name="post_templates_id">
                     <?php foreach ($list_templates as $value): ?>
                        <option value="<?= $value['id']; ?>"><b><?= $value['name']; ?></b></option>
                     <?php endforeach ?>
                  </select>
               </div>
               <div class="mb-3">
                  <label class="form-label">Ảnh website</label>
                  <div class="row">
                     <div class="col-md-8">
                        <input id="xFilePath1" name="imgwebsite" type="text" size="60" class="form-control">
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
                        <input id="xFilePath" name="imgsocial" type="text" size="60" class="form-control">
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
</div>
</form>
<script type="text/javascript">
   function checkname() {
       var name = document.getElementById('name').value;
       // Thêm nội dung vào thẻ title và ID ggtitle
       document.getElementById('title').value = name;
   }
</script>