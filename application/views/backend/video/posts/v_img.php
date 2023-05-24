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
                        <input id="xFilePath1" name="link" type="text" size="60" class="form-control" required>
                     </div>
                     <div class="col-md-4">
                        <input type="button" class="btn btn-primary" value="Load ảnh" onclick="BrowseServer1();" />
                     </div>
                  </div>
               </div>
               <div class="mb-3 col-md-4">
               	<input type="hidden" name="id_position" value="1">
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
	);
 ?>
<?php $list = $this->db->select('*')->from('qh_post_img')->where($loadtrai)->get()->result_array(); ?>
<div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Danh sách hình ảnh</h4>
                                    
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>Hình ảnh</th>
                                                <th>Xóa</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            	<?php foreach ($list as $value) { ?>	
                                            <tr>
                                                <td><img src="<?= $value['link']; ?>" width="200px"></td>
                                                <td><a href="backend/news/posts/imgdelete/<?= $value['id'].'/'.$id_posts; ?>">Xóa</a></td>
                                            </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div>