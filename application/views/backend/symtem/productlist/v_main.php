<?php
$this->id_language = $this->session->userdata('ss_language');
if(isset($this->id_language)){
	$this->id_language = $this->id_language['name_des'];
}else{
	$this->id_language = 'vn';
}  
?>


<div class="card" style="margin-bottom: 2000px;">
	<div class="card-body">
		<h6 class="card-title mb-3">Danh sách chuyên mục hiển thị</h6>
		<p>Số lượng bài viết nên chia hết cho số cột</p>
		<b>Số lượng: </b><button type="button" class="btn btn-outline-primary dropdown-toggle btn-xs" data-bs-toggle="dropdown" aria-expanded="false">Lấy <?= $view_symtem_template['num_post']; ?> bài viết <i class="mdi mdi-chevron-down"></i></button>
		<div class="dropdown-menu" style="">
			<?php for ($i = 1; $i < 51; ++$i) { ?>
				<a class="dropdown-item" href="<?= $this->folder; ?>/numpost/<?= $i; ?>">Lấy <?= $i; ?> bài viết</a>
			<?php } ?>
			
		</div>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php $view_gird = $this->Model_backend->view_id('qh_system_template_setup',$view_symtem_template['num_show']); ?>
		<b>Số cột hiển thị: </b><button type="button" class="btn btn-outline-primary dropdown-toggle btn-xs" data-bs-toggle="dropdown" aria-expanded="false">Hiển thị dạng <?= $view_gird['symtem_extend']; ?> cột <i class="mdi mdi-chevron-down"></i></button>
		<div class="dropdown-menu" style="">
			<?php foreach ($list_num_show_gird as $value): ?>
				<a class="dropdown-item" href="<?= $this->folder; ?>/numshow/<?= $value['id']; ?>">Hiển thị dạng <?= $value['symtem_extend']; ?> cột</a>
			<?php endforeach ?>
		</div>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<?php $view_asc = $this->Model_backend->view_id('qh_system_template_setup',$view_symtem_template['num_asc']); ?>
		<b>Thứ tự hiển thị: </b><button type="button" class="btn btn-outline-primary dropdown-toggle btn-xs" data-bs-toggle="dropdown" aria-expanded="false"><?= $view_asc['symtem_extend']; ?><i class="mdi mdi-chevron-down"></i></button>
		<div class="dropdown-menu" style="">
			<?php foreach ($list_num_asc as $value): ?>
				<a class="dropdown-item" href="<?= $this->folder; ?>/numasc/<?= $value['id']; ?>"><?= $value['symtem_extend']; ?></a>
			<?php endforeach ?>
		</div>
	</div>
</div>