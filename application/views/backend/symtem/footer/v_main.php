<?php
$this->id_language = $this->session->userdata('ss_language');
if(isset($this->id_language)){
	$this->id_language = $this->id_language['name_des'];
}else{
	$this->id_language = 'vn';
}  
$view_title = $this->Model_backend->view_id('qh_setup_extend',$view_symtem_template['id_text']);
if(isset($view_title)) {
	$viewtitle = json_decode($view_title['lang']);
}
?>
<div class="card">
	<div class="card-body">
		<h6 class="card-title">Hiển thị chung</h6>
		<form action="" method="post" id="form1">
			<div class="row">
				<div class="col-md-8">
					<label class="mt-3">Tiêu đề từ ngữ</label>
					<select class="select2 form-control mb-3 custom-select" name="id_text" style="width: 100%; height:36px;" id="form1">
						<optgroup label="Danh mục chọn">
							<!-- Lấy 5 cấp của danh mục cha -->
							<?php $list_lever1 = $this->Model_backend->get_all_asc('qh_setup_extend'); ?>
							<?php foreach ($list_lever1 as $value1): ?>
								<option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
							<?php endforeach ?>
						</optgroup>
					</select>
				</div><!-- end col -->
				<div class="col-md-4">     
					<label class="mt-3">&nbsp;</label> <br>                             
					<button class="btn btn-primary" type="submit" name="title" id="form1">Chỉnh sửa tiêu đề</button>
				</div><!-- end col -->
			</div>
		</form>
		<h4>
			Tiêu đề: <?php if(isset($viewtitle)){ echo $view_title['name']; }else{ echo 'Chưa có tiêu đề'; } ?> 
			<a href="backend/setup/general/extend_website/update/<?= $view_symtem_template['id_text'] ?>" class="edit" style="margin-right: 10px;font-size: 13px;" title="Chỉnh sửa bài viết" target="_blank">
				<i class="fas fa-pencil-alt"></i>
			</a>
		</h4>
		<form action="" method="post" id="form2">
			<div class="col-md-12 mb-3">
				<label class="form-label">Màu sắc hiển thị Background</label>
				<input type="color" name="color_background" class="form-control form-control-color" value="<?= $view_symtem_template['color_background']; ?>">
			</div>
			<div class="col-md-12 mb-3">
				<label class="form-label">Màu sắc chữ</label>
				<input type="color" name="color_text" class="form-control form-control-color" value="<?= $view_symtem_template['color_text']; ?>">
			</div>
			<div class="col-md-12">                                   
				<button class="btn btn-primary" type="submit" name="img" id="form2">Chỉnh sửa màu sắc</button>
			</div><!-- end col -->
		</form>
		<h4>
			Logo, địa chỉ, Hotline:
			<a href="backend/setup/general/main/infowebsite" class="edit" style="margin-right: 10px;font-size: 13px;" title="Chỉnh sửa bài viết" target="_blank">
				<i class="fas fa-pencil-alt"></i>
			</a>
		</h4>
	</div>
</div>
