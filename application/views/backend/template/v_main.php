<h6 class="mb-0 text-uppercase"><?php if(isset($title)){ echo $title; } ?></h6>
<hr/>
<?php 
   $checktemplate = array(
      'system_id' => 2,
   );
   $list_template = $this->Model_backend->show_by('qh_system_template',$checktemplate); 
?>
<div class="row">
   <div class="col-12 col-lg-3">
      <div class="card">
         <div class="card-body">
            <div class="d-grid"> <a href="" class="btn btn-primary">Thêm File hệ thống</a>
            </div>
            <h5 class="my-3">Css</h5>
            <div class="fm-menu">
                  <a href="" class="list-group-item py-1"><i class='bx bx-beer me-2'></i><span>Zip Files</span></a>
            </div>
            <h5 class="my-3">Template</h5>
            <?php foreach ($list_template as $value): ?>
            <div class="fm-menu">
                  <a href="backend/template/editfiles/view/<?= $value['id']; ?>" class="list-group-item py-1"><i class='bx bx-beer me-2'></i><span><?= $value['name']; ?></span></a>
            </div>   
            <?php endforeach ?>
            </div>
         </div>
   </div>
   <div class="col-12 col-lg-9">
      <div class="card">
         <div class="card-body">

         </div>
      </div>
   </div>
</div>