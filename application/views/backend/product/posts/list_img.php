<?php $listimg = $this->db->select('*')->from('qh_post_img')->where('id_posts',$id_posts)->get()->result_array(); ?>
<div class="row">
	<?php foreach ($listimg as $value): ?>
		<div class="col-md-4 mb-3">
			<a href="javacript:void(0)" onclick="deletex(<?= $value['id']; ?>,<?= $id_posts; ?>)" class="remove">
				<i class="far fa-trash-alt"></i>
			</a>
			<img src="<?= $value['link']; ?>" width="100%" alt="">
		</div>
	<?php endforeach ?>
</div>