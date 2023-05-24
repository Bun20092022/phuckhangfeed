<h6 class="mb-0 text-uppercase"><?php if(isset($title)){ echo $title; } ?></h6>
<hr/>
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Thêm danh sách video</h6>
				<form action="" method="post">
					<input type="hidden" value="<?= $id_posts; ?>" name="id_posts">
					<div class="row">
					<div class="mb-3 col-md-6">
						<label class="form-label">Tiêu đề video</label>
						<div class="row">
							<div class="col-md-12">
								<input name="name" type="text" size="60" class="form-control">
							</div>
						</div>
					</div>
					<div class="mb-3 col-md-4">
						<label class="form-label">Code video</label>
						<div class="row">
							<div class="col-md-12">
								<input name="codevideo" type="text" size="60" class="form-control">
							</div>
						</div>
					</div>
					<div class="mb-3 col-md-2">
						<label class="form-label">Số thứ tự</label>
						<div class="row">
							<div class="col-md-12">
								<input name="num" type="text" size="60" class="form-control">
							</div>
						</div>
					</div>
				</div>
					<div class="mb-3">
						<label class="form-label">Nội dung video</label>
						<textarea id="textarea" class="form-control" name="content"></textarea>
						<script>
							CKEDITOR.replace('content');
						</script>
					</div>
					<button class="btn btn-primary" type="submit" name="add">Thêm thông tin</button>
				</div>
			</div>
		</div>
	</div>
</form>
<?php $list = $this->db->select('*')->from('qh_post_video')->where('id_posts',$id_posts)->order_by('num','asc')->get()->result_array(); ?>
<div class="row">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-header align-items-center d-flex">
				<h4 class="card-title mb-0 flex-grow-1">Danh sách các video</h4>
			</div><!-- end card header -->

			<div class="card-body">
				<div class="live-preview">
					<div class="table-responsive table-card">
						<table class="table align-middle table-nowrap table-striped-columns mb-0">
							<thead class="table-light">
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Ảnh video</th>
									<th scope="col">Tên video</th>
									<th scope="col">Số thứ tự</th>
									<th scope="col">Code video</th>
									<th scope="col" style="width: 150px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($list as $value): ?>
								<tr>
									<td><?= $value['id']; ?></td>
									<td><img src="https://i.ytimg.com/vi/<?= $value['codevideo']; ?>/hqdefault.jpg" width="80px"></td>
									<td><?= $value['name']; ?></td>
									<td><?= $value['num']; ?></td>
									<td><?= $value['codevideo']; ?></td>
									<td>
										<a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="<?= base_url(); ?>backend/news/posts/videodelete/<?= $value['id'].'/'.$id_posts; ?>">
											<button type="button" class="btn btn-sm btn-light">Xóa</button>
										</a>
									</td>
								</tr>	
								<?php endforeach ?>
								
							</tbody>
						</table>
					</div>
				</div>
				<div class="d-none code-view">

				</div>
			</div><!-- end card-body -->
		</div><!-- end card -->
	</div>

</div>