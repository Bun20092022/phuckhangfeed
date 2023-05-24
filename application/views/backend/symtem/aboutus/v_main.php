<?php
$this->id_language = $this->session->userdata('ss_language');
if(isset($this->id_language)){
	$this->id_language = $this->id_language['name_des'];
}else{
	$this->id_language = 'vn';
}  
?>

<div class="row">
	<div class="col-md-<?= $view_symtem_template['left']; ?>">
		<div class="card" style="margin-bottom: 500px;">
			<div class="card-body">
				<b>Kích thước: </b><button type="button" class="btn btn-outline-primary dropdown-toggle btn-xs" data-bs-toggle="dropdown" aria-expanded="false"><?= $view_symtem_template['left']; ?> /12 chiều rộng <i class="mdi mdi-chevron-down"></i></button>
				<div class="dropdown-menu" style="">
					<?php for ($i = 1; $i < 13; ++$i) { ?>
						<a class="dropdown-item" href="<?= $this->folder; ?>/left/<?= $i; ?>">Lấy <?= $i; ?> bài viết</a>
					<?php } ?>

				</div>
				<div class="row">
					<form action="" method="post" id="form1">
						<div class="col-md-12 mb-3">
							<label class="mt-3">Thêm từ ngữ</label>
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
						<div class="col-md-12">                                   
							<button class="btn btn-primary" type="submit" name="add" id="form1">Thêm chuyên mục</button>
						</div><!-- end col -->
					</form>
				</div>
				<hr>
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Tên</th>
								<th>Sắp xếp</th>                  
							</tr>
						</thead>
						<tbody>
							<?php 
							$check_left = array(
								'id_symtem_template' => $this->id_symtem_template,
								'left_int' => 1,
							);
							?>
							<?php $get_symtem_id = $this->db->select('*')->from('qh_system_template_extend')->where($check_left)->order_by('num','asc')->get()->result_array(); ?>
							<?php foreach ($get_symtem_id as $value): ?>
								<?php $view_category = $this->Model_backend->view_id('qh_setup_extend',$value['id_text']); ?>
								<tr>
									<td>
										<?= $view_category['name']; ?>
										<a href="backend/setup/general/extend_website/update/<?= $value['id_text']; ?>" class="edit" style="margin-right: 10px;font-size: 13px;" title="Chỉnh sửa bài viết" target="_blank">
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
										<a href="<?= $this->folder; ?>/deleteleft/<?= $value['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" title="Xóa chuyên mục">
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
		<div class="col-md-<?= $view_symtem_template['right']; ?>">
			<div class="card" style="margin-bottom: 500px;">
				<div class="card-body">
					<b>Kích thước: </b><button type="button" class="btn btn-outline-primary dropdown-toggle btn-xs" data-bs-toggle="dropdown" aria-expanded="false"><?= $view_symtem_template['right']; ?> /12 chiều rộng <i class="mdi mdi-chevron-down"></i></button>
					<div class="dropdown-menu" style="">
						<?php for ($i = 1; $i < 13; ++$i) { ?>
							<a class="dropdown-item" href="<?= $this->folder; ?>/right/<?= $i; ?>">Lấy <?= $i; ?> bài viết</a>
						<?php } ?>

					</div>
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
							<button class="btn btn-primary" type="submit" name="add2" id="form2">Thêm ảnh</button>
						</div><!-- end col -->
					</form>
					<hr>
					<div class="table-responsive">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>Tên</th>
									<th>Sắp xếp</th>                  
								</tr>
							</thead>
							<tbody>
								<?php 
								$check_right = array(
									'id_symtem_template' => $this->id_symtem_template,
									'right_int' => 1,
								);
								?>
								<?php $get_symtem_id = $this->db->select('*')->from('qh_system_template_extend')->where($check_right)->order_by('num','asc')->get()->result_array(); ?>
								<?php foreach ($get_symtem_id as $value): ?>
									<tr>
										<td><img src="<?= $value['link_img']; ?>" alt="" width="200px"></td>
										<td>
											<?php if($value['num'] != 1){ ?>
												<a href="<?= $this->folder; ?>/tangright/<?= $value['id']; ?>/<?= $value['id_symtem_template']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color: green;" title="Tăng 1 cấp"><i class="fas fa-angle-double-up"></i></a>
											<?php } ?>
											<?php if($value['num'] != count($get_symtem_id)){ ?>
												<a href="<?= $this->folder; ?>/giamright/<?= $value['id']; ?>/<?= $value['id_symtem_template']; ?>/<?= $value['num']; ?>" style="margin-right: 10px;color:red;" title="Giảm 1 cấp"><i class="fas fa-angle-double-down"></i></a>
											<?php } ?>
										</td>
										<td>
											<a href="<?= $this->folder; ?>/deleteright/<?= $value['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" title="Xóa chuyên mục">
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