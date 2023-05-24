<div class="row">
   <div class="col-12 col-lg-3">
      <div class="card">
         <div class="card-body">
            <h5 class="my-3">Nhóm Banner</h5>
            <?php foreach ($list_menu as $value): ?>
               <div class="fm-menu">
                  <a href="<?= base_url().$value['link_symtem']; ?>" class="list-group-item py-1"><i class='bx bx-beer me-2'></i><span><?= $value['page_group_extend']; ?></span></a>
               </div>   
            <?php endforeach ?>
         </div>
      </div>
   </div>
   <div class="col-12 col-lg-9">
      <div class="card">
         <div class="card-body">
            <h6 class="card-title">Chỉnh sửa: <?= $view['page_group_extend']; ?> </h6>
            <form action="" method="post">
               <div class="col-md-12 mb-3">
                  <label class="mb-3">Các Pulgin nội dung</label>
                  <select class="select2 form-control mb-3 custom-select" name="id_category" style="width: 100%; height:36px;">
                     <optgroup label="Danh mục chọn">
                        <!-- Lấy 5 cấp của danh mục cha -->
                        <?php $list_lever1 = $this->Model_backend->get_all_asc('qh_system_template'); ?>
                        <?php foreach ($list_lever1 as $value1): ?>
                           <option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
                        <?php endforeach ?>
                     </optgroup>
                  </select>
               </div><!-- end col -->
               <div class="col-md-12">                                   
                  <button class="btn btn-primary" type="submit" name="add">Thêm bài viết</button>
               </div><!-- end col -->
            </div>
         </div>
      </div>
   </div>
