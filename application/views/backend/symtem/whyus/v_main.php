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
				<label class="form-label">Ảnh website</label>
				<div class="row">
					<div class="col-md-8">
						<input id="xFilePath1" name="link_img" type="text" size="60" class="form-control">
					</div>
					<div class="col-md-4">
						<input type="button" class="btn btn-primary" value="Load ảnh" onclick="BrowseServer1();" />
					</div>
				</div>
			</div>
			<div class="col-md-12">                                   
				<button class="btn btn-primary" type="submit" name="img" id="form2">Thêm ảnh</button>
			</div><!-- end col -->
		</form>
		<h4>Ảnh đại diện: </h4>
		<img src="<?= $view_symtem_template['link_img']; ?>" width="200px" alt="">
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card" style="margin-bottom: 500px;">
			<div class="card-body">
				<h6 class="card-title">Nội dung vì sao chọn chúng tôi (<a href="https://www.mannol.in/css/flaticon/font/flaticon.html" target="_blank" style="color:blue">Link lấy icon hiển thị</a>)</h6>
				<form action="" method="post" id="form3">
					<div class="row">
						<div class="col-md-12 mt-3">
							<label class="form-label">Icon đại diện</label>
							<input type="text" class="form-control" name="icon_css" required id="form3">
						</div>
						<div class="col-md-6 mb-3">
							<label class="mt-3">Nội dung 1</label>
							<select class="select2 form-control mb-3 custom-select" name="id_text" style="width: 100%; height:36px;" id="form3">
								<optgroup label="Danh mục chọn">
									<!-- Lấy 5 cấp của danh mục cha -->
									<?php $list_lever1 = $this->Model_backend->get_all_asc('qh_setup_extend'); ?>
									<?php foreach ($list_lever1 as $value1): ?>
										<option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
									<?php endforeach ?>
								</optgroup>
							</select>
						</div><!-- end col -->
						<div class="col-md-6 mb-3">
							<label class="mt-3">Nội dung 2</label>
							<select class="select2 form-control mb-3 custom-select" name="id_text1" style="width: 100%; height:36px;" id="form3">
								<optgroup label="Danh mục chọn">
									<!-- Lấy 5 cấp của danh mục cha -->
									<?php $list_lever1 = $this->Model_backend->get_all_asc('qh_setup_extend'); ?>
									<?php foreach ($list_lever1 as $value1): ?>
										<option value="<?= $value1['id']; ?>"><b><?= $value1['name']; ?></b></option>
									<?php endforeach ?>
								</optgroup>
							</select>
						</div><!-- end col -->
						<div class="col-md-12">                                   
							<button class="btn btn-primary" type="submit" name="noidung" id="form3">Thêm nội dung</button>
						</div><!-- end col -->
					</div>
				</form>
				<hr>
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Icon đại diện</th>
								<th>Nội dung 1</th>
								<th>Nội dung 2</th>
								<th>Sắp xếp</th>                  
							</tr>
						</thead>
						<tbody>
							<?php $get_symtem_id = $this->Model_backend->get_symtem_id($id_symtem_template); ?>
							<?php foreach ($get_symtem_id as $value): ?>
								<?php $view_category = $this->Model_backend->view_id('qh_setup_extend',$value['id_text']); ?>
								<?php $view_category1 = $this->Model_backend->view_id('qh_setup_extend',$value['id_text1']); ?>
								<tr>
									<td><?= $value['icon_css']; ?></td>
									<td>
										<?= $view_category['name']; ?>
										<a href="backend/setup/general/extend_website/update/<?= $value['id_text'] ?>" class="edit" style="margin-right: 10px;font-size: 13px;" title="Chỉnh sửa bài viết" target="_blank">
											<i class="fas fa-pencil-alt"></i>
										</a>	
									</td>
									<td>
										<?= $view_category1['name']; ?>
										<a href="backend/setup/general/extend_website/update/<?= $value['id_text1'] ?>" class="edit" style="margin-right: 10px;font-size: 13px;" title="Chỉnh sửa bài viết" target="_blank">
											<i class="fas fa-pencil-alt"></i>
										</a>	
									</td>
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
		</div>
	</div>