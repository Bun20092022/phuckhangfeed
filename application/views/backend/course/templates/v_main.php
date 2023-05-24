<?php
   $view_url_website = $this->Model_backend->view_setup(1);
   $view_url = json_decode($view_url_website['info']);
   $show_tempalte_type = $this->Model_backend->show_all('qh_post_template_type');  
?>
<h6 class="mb-0 text-uppercase"><?php if(isset($title)){ echo $title; } ?></h6>
<hr/>
<a href="backend/course/templates/add/<?= $template_type; ?>"><button type="button" class="btn btn-primary btn-sm px-5 mb-3">Thêm Thẻ</button></a>
<div class="row">
   <div class="col-md-3">
      <div class="card">
         <div class="card-body">
            <h5 class="my-3">Danh sách Template</h5>
            <?php foreach ($show_tempalte_type as $value): ?>
               <div class="fm-menu">
                  <a href="backend/course/templates/list/<?= $value['id']; ?>" class="list-group-item py-1" <?php if($value['id'] == $template_type){ echo 'style="font-weight:bold;"'; } ?>><i class='bx bx-beer me-2'></i><span><?= $value['name']; ?></span></a>
               </div>    
            <?php endforeach ?>
         </div>
      </div>
   </div>
   <div class="col-md-9">
   <div class="card">
      <div class="card-body">
         <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
               <thead>
                  <tr>
                     <th width="30px"><input type="checkbox" id="selecctall"></th>
                     <th>Tên</th>
                     <th>Đường dẫn</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                        <?php foreach ($list_templates as $value): ?>
                        <tr>
                           <td><input class="checkbox1" type="checkbox" value="<?= $value['id'] ?>" name="chonmau[]"></td>
                           <td><?= $value['name']; ?></td>
                           <td><?= $value['template_link']; ?></td>
                           <td>
                              <a href="<?= $view_url->{'url'}; ?>/templates/<?= $value['template_link']; ?>" target="_blank"><i class="lni lni-edge" style="font-size: 16px;color: blue;"></i></a>
                             &nbsp;&nbsp;&nbsp;
                             <?php if (isset($linkupdate)){ ?>
                              <a href="<?= $linkupdate; ?><?= $value['id']; ?>/<?= $template_type; ?>"><i class="lni lni-pencil-alt" style="font-size: 16px;color: green;"></i></a>
                             <?php } ?>&nbsp;&nbsp;&nbsp;                                               
                              <?php if (isset($linkdelete)){ ?>
                                  <a href="<?= $linkdelete; ?><?= $value['id']; ?>/<?= $template_type; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa <?= $value['name'];?>?')"><i class="lni lni-trash" style="font-size: 16px;color: red;"></i></a>
                             <?php } ?> 
                             
                           </td>
                        </tr>
                        <?php endforeach ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>  
   </div>
</div>

<script type="text/javascript">
   $(document).ready(function(){
    $("#selecctall").change(function(){
      $(".checkbox1").prop('checked', $(this).prop("checked"));
      });
});
</script>