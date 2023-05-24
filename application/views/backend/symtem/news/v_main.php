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
					<label class="mt-3">Tiêu đề từ ngữ (<a href="backend/setup/general/lang_menu" target="_blank" style="color: blue;"><i class="fa fa-plus"></i> Thêm nội dung</a>)</label>
					<select class="select2 form-control mb-3 custom-select" name="id_text" style="width: 100%; height:36px;" id="form1">
						<optgroup label="Danh mục chọn">
							<?php 
							$check_lang_menu = array(
				                    'lang_menu' => 1,	
				            );
							$list_lever1 = $this->Model_backend->get_where('qh_setup_extend',$check_lang_menu);; 
							?>
							<?php foreach ($list_lever1 as $value1): ?>
								<option value="<?= $value1['id']; ?>" <?php if($value1['id'] = $view_symtem_template['id_text']){ echo 'selected'; } ?>><b><?= $value1['name']; ?></b></option>
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
	</div>
</div>
<div class="card">
	<div class="card-body">
		<h6 class="card-title">Thêm chuyên mục tin tức</h6>
		<div class="row">
			<form action="" method="post">
				<div class="col-md-12 mb-3">
					<label class="mb-3">Danh mục cha</label>
					<select class="select2 form-control mb-3 custom-select" name="id_category" style="width: 100%; height:36px;">
						<optgroup label="Danh mục chọn">
							<!-- Lấy 5 cấp của danh mục cha -->
							<?php 
								$check_category = array(
						 			'post_website' => $this->id_website,
						 			'father_id' => 0,
						 			'post_type_id' => 1,
						 		);
						 		$list_category = $this->Model_backend->get_where('qh_post_category',$check_category); 
 							?>
							<?php foreach ($list_category as $value1): ?>
								<?php $get_symtem1 = $this->Model_backend->get_symtem($value1['id'],$id_symtem_template); ?>
								<?php $category1 = json_decode($value1['name']) ?>
								<?php $list_lever2 = $this->Model_backend->show_all_by_father($value1['id']); ?>
								<option value="<?= $value1['id']; ?>" <?php if(count($get_symtem1) > 0){ echo 'disabled'; } ?>><b><?= $category1->{$this->id_language}; ?></b></option>
								<?php foreach ($list_lever2 as $value2): ?>
									<?php $get_symtem2 = $this->Model_backend->get_symtem($value2['id'],$id_symtem_template); ?>
									<?php $category2 = json_decode($value2['name']) ?>
									<?php $list_lever3 = $this->Model_backend->show_all_by_father($value2['id']); ?>
									<option value="<?= $value2['id']; ?>" <?php if(count($get_symtem2) > 0){ echo 'disabled'; } ?>>--- <?= $category2->{$this->id_language}; ?></option>
									<?php foreach ($list_lever3 as $value3): ?>
										<?php $get_symtem3 = $this->Model_backend->get_symtem($value3['id'],$id_symtem_template); ?>
										<?php $category3 = json_decode($value3['name']) ?>
										<?php $list_lever4 = $this->Model_backend->show_all_by_father($value3['id']); ?>
										<option value="<?= $value3['id']; ?>" <?php if(count($get_symtem3) > 0){ echo 'disabled'; } ?>>------ <?= $category3->{$this->id_language}; ?></option>
										<?php foreach ($list_lever4 as $value4): ?>
											<?php $get_symtem4 = $this->Model_backend->get_symtem($value4['id'],$id_symtem_template); ?>
											<?php $category4 = json_decode($value4['name']) ?>
											<?php $list_lever5 = $this->Model_backend->show_all_by_father($value4['id']); ?>
											<option value="<?= $value4['id']; ?>" <?php if(count($get_symtem4) > 0){ echo 'disabled'; } ?>>--------- <?= $category4->{$this->id_language}; ?></option>
											<?php foreach ($list_lever5 as $value5): ?>
												<?php $get_symtem5 = $this->Model_backend->get_symtem($value5['id'],$id_symtem_template); ?>
												<?php $category5 = json_decode($value5['name']) ?>
												<option value="<?= $value5['id']; ?>" <?php if(count($get_symtem5) > 0){ echo 'disabled'; } ?>>------------ <?= $category5->{$this->id_language}; ?></option>
											<?php endforeach ?>
										<?php endforeach ?>
									<?php endforeach ?>
								<?php endforeach ?>
							<?php endforeach ?>
						</optgroup>
					</select>
				</div><!-- end col -->
				<div class="col-md-12">                                   
					<button class="btn btn-primary" type="submit" name="add">Thêm chuyên mục</button>
				</div><!-- end col -->
			</form>
		</div>
	</div>
</div>

<a href="<?= $this->folder; ?>/status/1" class="btn btn-primary btn-sm mb-3">Lấy danh sách bài viết</a>
<a href="<?= $this->folder; ?>/status/2" class="btn btn-primary btn-sm mb-3">Hiển thị chuyên mục</a>

<div class="card" style="margin-bottom: 500px;">
	<div class="card-body">
		<h6 class="card-title mb-3">Danh sách chuyên mục hiển thị</h6>
		<b>Trạng thái:</b> <?php if($view_symtem_template['hienthi'] == 1){ echo 'Lấy danh sách bài viết mới nhất.';} ?> <?php if($view_symtem_template['hienthi'] == 2){ echo 'Lấy danh sách chuyên mục.';} ?><br>
		 <?php if($view_symtem_template['hienthi'] == 1){ ?>
		<b>Số lượng: </b><button type="button" class="btn btn-outline-primary dropdown-toggle btn-xs" data-bs-toggle="dropdown" aria-expanded="false">Lấy <?= $view_symtem_template['num_post']; ?> bài viết <i class="mdi mdi-chevron-down"></i></button>
		<div class="dropdown-menu" style="">
			<?php for ($i = 1; $i < 21; ++$i) { ?>
				<a class="dropdown-item" href="<?= $this->folder; ?>/numpost/<?= $i; ?>">Lấy <?= $i; ?> bài viết</a>
			<?php } ?>
			
		</div>&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
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
						<?php $view_category = $this->Model_backend->view_id('qh_post_category',$value['id_category']); ?>
						<?php if(isset($view_category)){ $view_category_name = json_decode($view_category['name']); } ?>
						<tr>
							<td><?= $value['id']; ?></td>
							<td><?php if(isset($view_category)){ echo $view_category_name->{'vn'}; }else{ echo '<span style="color:red">Danh mục đã xóa hoặc không tồn tại</span>'; } ?></td>
							<td>
								<?php if($value['num'] != 1){ ?>
									<a href="backend/symtem/service/tang/<?= $value['id']; ?>/<?= $value['id_symtem_template']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color: green;" title="Tăng 1 cấp"><i class="fas fa-angle-double-up"></i></a>
								<?php } ?>
								<?php if($value['num'] != count($get_symtem_id)){ ?>
									<a href="backend/symtem/service/giam/<?= $value['id']; ?>/<?= $value['id_symtem_template']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color:red;" title="Giảm 1 cấp"><i class="fas fa-angle-double-down"></i></a>
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