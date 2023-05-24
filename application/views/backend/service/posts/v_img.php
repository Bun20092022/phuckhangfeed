<h6 class="mb-0 text-uppercase"><?php if(isset($title)){ echo $title; } ?></h6>
<hr/>
<div class="row">
   <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h6 class="card-title">Thêm ảnh cho bài viết</h6>
            <form action="" method="post">
            	<input type="hidden" value="<?= $id_posts; ?>" name="id_posts">
               <div class="mb-3">
                  <label class="form-label">Ảnh website</label>
                  <div class="row">
                     <div class="col-md-8">
                        <input id="xFilePath1" name="link" type="text" size="60" class="form-control">
                     </div>
                     <div class="col-md-4">
                        <input type="button" class="btn btn-primary" value="Load ảnh" onclick="BrowseServer1();" />
                     </div>
                  </div>
               </div>
               <div class="mb-3 col-md-4">
               	<label class="form-label">Vị trí hiển thị</label>
               	<select class="form-control" name="id_position">
               		<option value="1">Bên trái</option>
               		<option value="2">Ở giữa</option>
               		<option value="3">Bên phải</option>
               	</select>
               </div>
               <button class="btn btn-primary" type="submit" name="add">Thêm thông tin</button>
         </div>
      </div>
   </div>
</div>
</form>
<?php 
	$loadtrai = array(
		'id_posts' => $id_posts,
		'id_position' => 1,
	);
 ?>
<?php $list_left = $this->db->select('*')->from('qh_post_img')->where($loadtrai)->get()->result_array(); ?>
<?php 
	$loadphai = array(
		'id_posts' => $id_posts,
		'id_position' => 3,
	);
 ?>
<?php $list_right = $this->db->select('*')->from('qh_post_img')->where($loadphai)->get()->result_array(); ?>
<div class="row">
	<div class="col-md-6">
		<div class="row">
<h6 class="mb-0 text-uppercase">Bên trái</h6>
<hr/>
	<?php foreach ($list_left as $value) { ?>
		<div class="col-md-6">
			<img src="<?= $value['link']; ?>" width="100%">
		</div>
		<div class="col-md-6">
			<a href="backend/news/posts/imgdelete/<?= $value['id'].'/'.$id_posts; ?>">Xóa</a>
		</div>
	<?php } ?>
</div>
</div>
	<div class="col-md-6">
		<div class="row">
<h6 class="mb-0 text-uppercase">Bên Phải</h6>
<hr/>
	<?php foreach ($list_right as $value) { ?>
		<div class="col-md-6">
			<img src="<?= $value['link']; ?>" width="100%">
		</div>
		<div class="col-md-6">
			<a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="backend/news/posts/imgdelete/<?= $value['id'].'/'.$id_posts; ?>">Xóa</a>
		</div>
	<?php } ?>
</div>
</div>

</div>