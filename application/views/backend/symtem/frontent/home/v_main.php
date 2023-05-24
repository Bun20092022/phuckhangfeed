<div class="row">
   <div class="col-12 col-lg-12">
      <div class="card">
         <div class="card-header">
            <h6 class="card-title">Chỉnh sửa: Trang chủ </h6>
         </div>
         <div class="card-body">
            <form action="" method="post" id="form1">
               <div class="row">
                  <div class="col-md-6 mb-3">
                     <label class="mb-3">Các Pulgin nội dung</label>
                     <select class="select2 form-control mb-3 custom-select" name="id_plugin" style="width: 100%; height:36px;" id="form1">
                        <optgroup label="Danh mục chọn">
                           <!-- Lấy 5 cấp của danh mục cha -->
                           <?php $list_lever1 = $this->Model_backend->get_all_asc('qh_system_template'); ?>
                           <?php foreach ($list_lever1 as $value1): ?>
                              <option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
                           <?php endforeach ?>
                        </optgroup>
                     </select>
                  </div><!-- end col -->
                  <div class="col-md-6">   
                     <label class="mb-3">&nbsp;</label><br>                                 
                     <button class="btn btn-primary" type="submit" name="add" id="form1">Thêm Extendtion</button>
                  </div><!-- end col -->
               </div>
            </form>
            <form action="" method="post" id="form2">
               <div class="row">
                  <div class="col-md-6 mb-3">
                     <label class="mb-3">Các Pulgin nội dung</label>
                     <select class="select2 form-control mb-3 custom-select" name="id_text" style="width: 100%; height:36px;" id="form2">
                        <optgroup label="Danh mục chọn">
                           <!-- Lấy 5 cấp của danh mục cha -->
                           <?php $list_lever1 = $this->Model_backend->get_all_asc('qh_setup_extend'); ?>
                           <?php foreach ($list_lever1 as $value1): ?>
                              <option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
                           <?php endforeach ?>
                        </optgroup>
                     </select>
                  </div><!-- end col -->
                  <div class="col-md-6">   
                     <label class="mb-3">&nbsp;</label><br>                                 
                     <button class="btn btn-primary" type="submit" name="title" id="form2">Thêm Text</button>
                  </div><!-- end col -->
               </div>
            </form>
         </div>
      </div>
      <div class="card" style="margin-bottom: 500px;">
         <div class="card-body">
            <div class="table-responsive">
               <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Sắp xếp</th>                  
                     </tr>
                  </thead>
                  <tbody>
                     <?php $get_symtem_frontent_id = $this->Model_backend->get_symtem_frontent_id($this->id); ?>
                     <?php foreach ($get_symtem_frontent_id as $value): ?>
                        <?php if($value['id_public'] == 1){ ?>
                           <?php $view_symtem_frontent = $this->Model_backend->view_id('qh_system_template',$value['id_plugin']); ?>
                        <?php } ?>
                        <?php if($value['id_public'] == 2){ ?>
                           <?php $view_text = $this->Model_backend->view_id('qh_setup_extend',$value['id_text']); ?>
                        <?php } ?>
                        <tr>
                           <td><?= $value['id']; ?></td>
                           <td>
                              <?php if($value['id_public'] == 1){ ?>
                                 <?= $view_symtem_frontent['name']; ?>
                              <?php } ?>
                              <?php if($value['id_public'] == 2){ ?>
                                 <?= $view_text['name']; ?>
                              <?php } ?>
                           </td>
                           <td>
                              <?php if($value['num'] != 1){ ?>
                                 <a href="<?= $this->folder; ?>/tang/<?= $value['id']; ?>/<?= $value['father_symtem']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color: green;" title="Tăng 1 cấp"><i class="fas fa-angle-double-up"></i></a>
                              <?php } ?>
                              <?php if($value['num'] != count($get_symtem_frontent_id)){ ?>
                                 <a href="<?= $this->folder; ?>/giam/<?= $value['id']; ?>/<?= $value['father_symtem']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color:red;" title="Giảm 1 cấp"><i class="fas fa-angle-double-down"></i></a>
                              <?php } ?>
                           </td>
                           <td>
                              <a href="<?= $this->folder; ?>/delete/<?= $value['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" title="Xóa chuyên mục">
                                 <i class="far fa-trash-alt"></i>
                              </a>
                           </td>

                        <?php endforeach ?>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
