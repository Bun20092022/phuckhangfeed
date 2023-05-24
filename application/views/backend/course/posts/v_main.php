<?php
   $view_url_website = $this->Model_backend->view_setup(1);
   $view_url = json_decode($view_url_website['info']);  
?>
<h6 class="mb-0 text-uppercase"><?php if(isset($title)){ echo $title; } ?></h6>
<hr/>
<a href="backend/course/posts/add"><button type="button" class="btn btn-primary btn-sm px-5 mb-3">Thêm bài viết</button></a>
<div class="row">
   <div class="col-md-8">
   </div>
   <div class="col-md-4">
      
   </div>
</div>
<div class="card">
   <div class="card-body">
      <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
               <tr>
                  <th width="30px"><input type="checkbox" id="selecctall"></th>
                  <th>Tên</th>
                  <th>Đường dẫn</th>
                  <th>Lượt view</th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($list_posts as $value): ?>
                     <tr>
                        <td><input class="checkbox1" type="checkbox" value="<?= $value['id'] ?>" name="chonmau[]"></td>
                        <td><?= $value['name']; ?></td>
                        <td><?= $value['url']; ?></td>
                        <td><?= $value['view']; ?></td>
                        <td>
                           <a href="<?= $view_url->{'url'}; ?>/tags/<?= $value['url']; ?>" target="_blank"><i class="lni lni-edge" style="font-size: 16px;color: blue;"></i></a>
                          &nbsp;&nbsp;&nbsp;
                          <?php if (isset($linkupdate)){ ?>
                           <a href="<?= $linkupdate; ?><?= $value['id']; ?>"><i class="lni lni-pencil-alt" style="font-size: 16px;color: green;"></i></a>
                          <?php } ?>&nbsp;&nbsp;&nbsp;                                               
                           <?php if (isset($linkdelete)){ ?>
                               <a href="<?= $linkdelete; ?><?= $value['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa <?= $value['name'];?>?')"><i class="lni lni-trash" style="font-size: 16px;color: red;"></i></a>
                          <?php } ?> 
                          
                        </td>
                     </tr>
               <?php endforeach ?>
            </tbody>
         </table>
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