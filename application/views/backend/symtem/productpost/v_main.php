<?php
$this->id_language = $this->session->userdata('ss_language');
if(isset($this->id_language)){
   $this->id_language = $this->id_language['name_des'];
}else{
   $this->id_language = 'vn';
}  
?>
<div class="card">
	<div class="card-body">
		<h6 class="card-title">Thêm bài viết sản phẩm</h6>
		<div class="row">
			<form action="" method="post">
				<div class="col-md-12 mb-3">
					<label class="mb-3">Danh mục cha</label>
					<select class="select2 form-control mb-3 custom-select" name="id_category" style="width: 100%; height:36px;">
						<optgroup label="Danh mục chọn">
							<!-- Lấy 5 cấp của danh mục cha -->
							<?php $list_lever1 = $this->Model_backend->get_all('qh_posts'); ?>
							<?php foreach ($list_lever1 as $value1): ?>
								<?php $get_symtem1 = $this->Model_backend->get_symtem($value1['id'],$id_symtem_template); ?>
								<?php $category1 = json_decode($value1['name']) ?>
								<option value="<?= $value1['id']; ?>" <?php if(count($get_symtem1) > 0){ echo 'disabled'; } ?>><b><?= $category1->{$this->id_language}; ?></b></option>
							<?php endforeach ?>
						</optgroup>
					</select>
				</div><!-- end col -->
				<div class="col-md-12">                                   
					<button class="btn btn-primary" type="submit" name="add">Thêm bài viết</button>
				</div><!-- end col -->
			</form>
		</div>
	</div>
</div>
<div class="card">
   <div class="card-body">
      <h6 class="card-title mb-3">Danh sách chuyên mục hiển thị</h6>
      <?php $view_gird = $this->Model_backend->view_id('qh_system_template_setup',$view_symtem_template['num_show']); ?>
      <b>Số cột hiển thị: </b><button type="button" class="btn btn-outline-primary dropdown-toggle btn-xs" data-bs-toggle="dropdown" aria-expanded="false">Hiển thị dạng <?= $view_gird['symtem_extend']; ?> cột <i class="mdi mdi-chevron-down"></i></button>
      <div class="dropdown-menu" style="">
         <?php foreach ($list_num_show_gird as $value): ?>
            <a class="dropdown-item" href="<?= $this->folder; ?>/numshow/<?= $value['id']; ?>">Hiển thị dạng <?= $value['symtem_extend']; ?> cột</a>
         <?php endforeach ?>
      </div>
      <hr>
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
               <?php $get_symtem_id = $this->Model_backend->get_symtem_id($id_symtem_template); ?>
               <?php foreach ($get_symtem_id as $value): ?>
                  <?php $view_category = $this->Model_backend->view_id('qh_posts',$value['id_category']); ?>
                  <?php $view_category_name = json_decode($view_category['name']); ?>
                  <tr>
                     <td><?= $value['id']; ?></td>
                     <td><?= $view_category_name->{$this->id_language}; ?></td>
                     <td>
                        <?php if($value['num'] != 1){ ?>
                           <a href="<?= $this->folder; ?>/tang/<?= $value['id']; ?>/<?= $value['id_symtem_template']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color: green;" title="Tăng 1 cấp"><i class="fas fa-angle-double-up"></i></a>
                        <?php } ?>
                        <?php if($value['num'] != count($get_symtem_id)){ ?>
                           <a href="<?= $this->folder; ?>/giam/<?= $value['id']; ?>/<?= $value['id_symtem_template']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color:red;" title="Giảm 1 cấp"><i class="fas fa-angle-double-down"></i></a>
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