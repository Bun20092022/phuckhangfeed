<div class="row">
   <?php for ($i = 1; $i < 5; ++$i) { ?>
      <div class="col-md-3">
         <div class="card">
            <div class="card-header">
               <h6 class="card-title">Footer 1: Cột <?= $i; ?></h6>
            </div>
            <div class="card-body">
               <form action="" method="post" id="form1<?= $i; ?>">
                  <input type="hidden" name="num_colum" value="<?= $i; ?>" id="form1<?= $i; ?>">
                  <div class="row mb-3">
                     <div class="col-md-9">
                        <label class="label">Các Pulgin</label>
                        <select class="select2 form-control mb-3 custom-select" name="id_plugin" style="width: 100%; height:36px;" id="form1<?= $i; ?>">
                           <optgroup label="Danh mục chọn">
                              <!-- Lấy 5 cấp của danh mục cha -->
                              <?php $list_lever1 = $this->Model_backend->get_all_asc('qh_system_template'); ?>
                              <?php foreach ($list_lever1 as $value1): ?>
                                 <option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
                              <?php endforeach ?>
                           </optgroup>
                        </select>
                     </div><!-- end col -->
                     <div class="col-md-3">   
                        <label class="label">&nbsp;</label><br>                                 
                        <button class="btn btn-primary" type="submit" name="add<?= $i; ?>" id="form<?= $i; ?>">Add</button>
                     </div><!-- end col -->
                  </div>
               </form>
               <form action="" method="post" id="form2<?= $i; ?>">
                  <input type="hidden" name="num_colum" value="<?= $i; ?>" id="form2<?= $i; ?>">
                  <div class="row mb-3">
                     <div class="col-md-9">
                        <label class="label">Nội dung  (<a href="backend/setup/general/extend_website/add" target="_blank" style="color: blue;">Thêm nội dung</a>)</label>
                        <select class="select2 form-control mb-3 custom-select" name="id_text" style="width: 100%; height:36px;" id="form2<?= $i; ?>">
                           <optgroup label="Danh mục chọn">
                              <!-- Lấy 5 cấp của danh mục cha -->
                              <?php $list_lever1 = $this->Model_backend->get_all_asc('qh_setup_extend'); ?>
                              <?php foreach ($list_lever1 as $value1): ?>
                                 <option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
                              <?php endforeach ?>
                           </optgroup>
                        </select>
                     </div><!-- end col -->
                     <div class="col-md-3">   
                        <label class="label">&nbsp;</label><br>                                 
                        <button class="btn btn-primary" type="submit" name="title<?= $i; ?>" id="form2<?= $i; ?>">Add</button>
                     </div><!-- end col -->
                  </div>
               </form>
               <form action="" method="post" id="form3<?= $i; ?>">
                  <input type="hidden" name="num_colum" value="<?= $i; ?>" id="form3<?= $i; ?>">
                  <div class="row mb-3">
                     <div class="col-md-9">
                        <label class="label">Danh sách Menu  (<a href="backend/news/menu/addgroup" target="_blank" style="color: blue;">Thêm menu</a>)</label>
                        <select class="select2 form-control mb-3 custom-select" name="id_menu" style="width: 100%; height:36px;" id="form3<?= $i; ?>">
                           <optgroup label="Danh mục chọn">
                              <!-- Lấy 5 cấp của danh mục cha -->
                              <?php 
                                 $check_menu = array(
                                    'father_id' => 0,
                                    'post_website' => $this->id_website,
                                    'posts_style' => 0,
                                 );
                               ?>
                              <?php $list_lever1 = $this->Model_backend->get_where('qh_setup_menu',$check_menu); ?>
                              <?php foreach ($list_lever1 as $value1): ?>
                                 <option value="<?= $value1['id']; ?>"><b><?= $value1['menu_group']; ?></b></option>
                              <?php endforeach ?>
                           </optgroup>
                        </select>
                     </div><!-- end col -->
                     <div class="col-md-3">   
                        <label class="label">&nbsp;</label><br>                                 
                        <button class="btn btn-primary" type="submit" name="menu<?= $i; ?>" id="form3<?= $i; ?>">Add</button>
                     </div><!-- end col -->
                  </div>
               </form>
            </div>
         </div>
         <div class="card">
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
                        <?php 
                        $check_menu = array(
                           'father_symtem' => $this->id,
                           'num_colum' => $i,
                        );
                        $get_symtem_frontent_id = $this->db->select('*')->from('qh_system_frontent_extend')->where($check_menu)->order_by('num','asc')->get()->result_array(); 

                        ?>
                        <?php foreach ($get_symtem_frontent_id as $value): ?>
                           <?php if($value['id_public'] == 1){ ?>
                              <?php $view_symtem_frontent = $this->Model_backend->view_id('qh_system_template',$value['id_plugin']); ?>
                           <?php } ?>
                           <?php if($value['id_public'] == 2){ ?>
                              <?php $view_text = $this->Model_backend->view_id('qh_setup_extend',$value['id_text']); ?>
                           <?php } ?>
                           <?php if($value['id_public'] == 3){ ?>
                              <?php $view_menu = $this->Model_backend->view_id('qh_setup_menu',$value['id_menu']); ?>
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
                                 <?php if($value['id_public'] == 3){ ?>
                                    <?= $view_menu['menu_group']; ?>
                                 <?php } ?>
                              </td>
                              <td>
                                 <?php if($value['num'] != 1){ ?>
                                    <a href="<?= $this->folder; ?>/tang/<?= $value['id']; ?>/<?= $value['num_colum']; ?>/<?= $value['father_symtem']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color: green;" title="Tăng 1 cấp"><i class="fas fa-angle-double-up"></i></a>
                                 <?php } ?>
                                 <?php if($value['num'] != count($get_symtem_frontent_id)){ ?>
                                    <a href="<?= $this->folder; ?>/giam/<?= $value['id']; ?>/<?= $value['num_colum']; ?>/<?= $value['father_symtem']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color:red;" title="Giảm 1 cấp"><i class="fas fa-angle-double-down"></i></a>
                                 <?php } ?>
                              </td>
                              <td>
                                 <a href="<?= $this->folder; ?>/delete/<?= $value['id']; ?>/<?= $value['num_colum']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" title="Xóa chuyên mục">
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
      <?php } ?>
      <hr>
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <h6 class="card-title">Footer 2</h6>
            </div>
            <div class="card-body">
               <form action="" method="post" id="form15">
                  <input type="hidden" name="num_colum" value="5" id="form15">
                  <div class="row mb-3">
                     <div class="col-md-9">
                        <label class="label">Các Pulgin</label>
                        <select class="select2 form-control mb-3 custom-select" name="id_plugin" style="width: 100%; height:36px;" id="form15">
                           <optgroup label="Danh mục chọn">
                              <!-- Lấy 5 cấp của danh mục cha -->
                              <?php $list_lever1 = $this->Model_backend->get_all_asc('qh_system_template'); ?>
                              <?php foreach ($list_lever1 as $value1): ?>
                                 <option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
                              <?php endforeach ?>
                           </optgroup>
                        </select>
                     </div><!-- end col -->
                     <div class="col-md-3">   
                        <label class="label">&nbsp;</label><br>                                 
                        <button class="btn btn-primary" type="submit" name="add5" id="form15">Add</button>
                     </div><!-- end col -->
                  </div>
               </form>
               <form action="" method="post" id="form25">
                  <input type="hidden" name="num_colum" value="5" id="form25">
                  <div class="row mb-3">
                     <div class="col-md-9">
                        <label class="label">Nội dung</label>
                        <select class="select2 form-control mb-3 custom-select" name="id_text" style="width: 100%; height:36px;" id="form25">
                           <optgroup label="Danh mục chọn">
                              <!-- Lấy 5 cấp của danh mục cha -->
                              <?php $list_lever1 = $this->Model_backend->get_all_asc('qh_setup_extend'); ?>
                              <?php foreach ($list_lever1 as $value1): ?>
                                 <option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
                              <?php endforeach ?>
                           </optgroup>
                        </select>
                     </div><!-- end col -->
                     <div class="col-md-3">   
                        <label class="label">&nbsp;</label><br>                                 
                        <button class="btn btn-primary" type="submit" name="title5" id="form25">Add</button>
                     </div><!-- end col -->
                  </div>
               </form>
               <form action="" method="post" id="form35">
                  <input type="hidden" name="num_colum" value="5" id="form35">
                  <div class="row mb-3">
                     <div class="col-md-9">
                        <label class="label">Danh sách Menu</label>
                        <select class="select2 form-control mb-3 custom-select" name="id_plugin" style="width: 100%; height:36px;" id="form35">
                           <optgroup label="Danh mục chọn">
                              <!-- Lấy 5 cấp của danh mục cha -->
                              <?php $list_lever1 = $this->Model_backend->get_all_asc('qh_system_template'); ?>
                              <?php foreach ($list_lever1 as $value1): ?>
                                 <option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
                              <?php endforeach ?>
                           </optgroup>
                        </select>
                     </div><!-- end col -->
                     <div class="col-md-3">   
                        <label class="label">&nbsp;</label><br>                                 
                        <button class="btn btn-primary" type="submit" name="menu5" id="form35">Add</button>
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
                        <?php 
                        $check_menu = array(
                           'father_symtem' => $this->id,
                           'num_colum' => 5,
                        );
                        $get_symtem_frontent_id = $this->db->select('*')->from('qh_system_frontent_extend')->where($check_menu)->order_by('num','asc')->get()->result_array(); 

                        ?>
                        <?php foreach ($get_symtem_frontent_id as $value): ?>
                           <?php if($value['id_public'] == 1){ ?>
                              <?php $view_symtem_frontent = $this->Model_backend->view_id('qh_system_template',$value['id_plugin']); ?>
                           <?php } ?>
                           <?php if($value['id_public'] == 2){ ?>
                              <?php $view_text = $this->Model_backend->view_id('qh_setup_extend',$value['id_text']); ?>
                           <?php } ?>
                           <?php if($value['id_public'] == 3){ ?>
                              <?php $view_menu = $this->Model_backend->view_id('qh_setup_menu',$value['id_menu']); ?>
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
                                 <?php if($value['id_public'] == 3){ ?>
                                    <?= $view_menu['menu_group']; ?>
                                 <?php } ?>
                              </td>
                              <td>
                                 <?php if($value['num'] != 1){ ?>
                                    <a href="<?= $this->folder; ?>/tang/<?= $value['id']; ?>/<?= $value['num_colum']; ?>/<?= $value['father_symtem']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color: green;" title="Tăng 1 cấp"><i class="fas fa-angle-double-up"></i></a>
                                 <?php } ?>
                                 <?php if($value['num'] != count($get_symtem_frontent_id)){ ?>
                                    <a href="<?= $this->folder; ?>/giam/<?= $value['id']; ?>/<?= $value['num_colum']; ?>/<?= $value['father_symtem']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color:red;" title="Giảm 1 cấp"><i class="fas fa-angle-double-down"></i></a>
                                 <?php } ?>
                              </td>
                              <td>
                                 <a href="<?= $this->folder; ?>/delete/<?= $value['id']; ?>/<?= $value['num_colum']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" title="Xóa chuyên mục">
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

