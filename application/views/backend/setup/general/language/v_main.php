<?php
   $view_url_website = $this->Model_backend->view_setup(1);
   $view_url = json_decode($view_url_website['info']);  
?>

<div class="row">
<div class="col-md-12">
<?php $this->load->view('backend/layout/v_noti');?>
<div class="card">
   <div class="card-header"><b>Danh sách ngôn ngữ Website</b></div>
<div class="card-body">
      <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Tên</th>
                  <th>Viết tắt</th>
                  <th>Ảnh</th>
                  <th>Trạng thái</th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
                     <?php foreach($list as $value): ?>
                     <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['name']; ?></td>
                        <td><?= $value['name_des']; ?></td>
                        <td><img src="<?= $value['link_img']; ?>" width="20px"></td>
                        <td>
                           <?php if($value['public'] == 1){ ?>
                           <span class="bg-opacity-success color-success userDatatable-content-status active">Hoạt động</span>
                        <?php }else{ ?>
                           <span class="bg-opacity-danger color-danger userDatatable-content-status active">Không hoạt động</span>
                        <?php } ?>
                        </td>
                        <td>
                          <?php if (isset($link_update)){ ?>
                           <a href="<?= $link_update; ?><?= $value['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
                          <?php } ?>&nbsp;&nbsp;&nbsp;                                               
                        </td>
                     </tr>
                     <?php endforeach ?>

            </tbody>
         </table>
      </div>
   </div>
</div>
</div>
    