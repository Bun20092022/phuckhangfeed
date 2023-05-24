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

$check_menu = array(
	'father_id' => 0,
	'id_menu_group' => 0,
	'posts_style' => 0,
);
$list_menu = $this->db->select('*')->from('qh_setup_menu')->where($check_menu)->get()->result_array();  
?>
<div class="card">
	<div class="card-header">
		<h6 class="card-title">Hiển thị chung</h6>
	</div>
	<div class="card-body">
		<h4>
			Logo 
			<a href="backend/setup/general/main/infowebsite" class="edit" style="margin-right: 10px;font-size: 13px;" title="Chỉnh sửa bài viết" target="_blank">
				<i class="fas fa-pencil-alt"></i>
			</a>
		</h4>
		<hr>
		<button type="button" class="btn btn-primary btn-sm dropdown-toggle mb-3" data-bs-toggle="dropdown" aria-expanded="true">Lựa chọn Menu hiển thị Header <i class="mdi mdi-chevron-down"></i></button>
		<div class="dropdown-menu" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(16px, 119px);" data-popper-placement="bottom-start">
			<?php foreach ($list_menu as $value): ?>
				<a class="dropdown-item" href="<?= $this->folder; ?>/add_menu/<?= $value['id']; ?>"><?= $value['menu_group']; ?></a>
			<?php endforeach ?>
			
		</div>
		<h4>
			Menu Header:
			<?php if($view_symtem_template['id_menu'] > 0){
				$view_menu = $this->Model_backend->view_id('qh_setup_menu',$view_symtem_template['id_menu']);
				echo $view_menu['menu_group'];
			 ?>
				<a href="backend/news/menu/group/<?= $view_symtem_template['id_menu']; ?>" class="edit" style="margin-right: 10px;font-size: 13px;" title="Chỉnh sửa bài viết" target="_blank">
					<i class="fas fa-pencil-alt"></i>
				</a>
			<?php }else{
				echo 'Chưa chọn Menu';
			} ?>
		</h4>
		<hr>
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
	</div>
</div>
