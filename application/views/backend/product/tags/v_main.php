<?php
   $view_url_website = $this->Model_backend->view_setup(1);
   $view_url = json_decode($view_url_website['info']);  
?>
<h6 class="mb-0 text-uppercase"><?php if(isset($title)){ echo $title; } ?></h6>
<hr/>
<a href="<?= base_url(); ?>backend/news/tags/add"><button type="button" class="btn btn-primary btn-sm px-5 mb-3">Thêm Thẻ</button></a>
<a href="<?= base_url(); ?>backend/news/tags/distribution"><button type="button" class="btn btn-info btn-sm px-5 mb-3">Phân phối thẻ</button></a>
<div class="card">
   <div class="card-body">
      <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
               <tr>
                  <th width="30px"><input type="checkbox" id="selecctall"></th>
                  <th>Tên</th>
                  <th>Đường dẫn</th>
                  <th>Lượt tags</th>
                  <th>Lượt view</th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
                     <?php foreach ($list_tags as $value): ?>
                     <tr>
                        <td><input class="checkbox1" type="checkbox" value="<?= $value['id'] ?>" name="chonmau[]"></td>
                        <td><?= $value['name']; ?></td>
                        <td><?= $value['url']; ?></td>
                        <td></td>
                        <td><?= $value['view']; ?></td>
                        <td>
                           <a href="<?= base_url(); ?><?= $view_url->{'url'}; ?>/tags/<?= $value['url']; ?>" target="_blank" style="margin-right: 10px;"><i class="fas fa-rss-square"></i></a>
                          <?php if (isset($linkupdate)){ ?>
                           <a href="<?= base_url(); ?><?= $linkupdate; ?><?= $value['id']; ?>"><i class="fas fa-pencil-alt" style="margin-right: 10px;"></i></a>
                          <?php } ?>                                               
                           <?php if (isset($linkdelete)){ ?>
                               <a href="<?= base_url(); ?><?= $linkdelete; ?><?= $value['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa <?= $value['name'];?>?')"><i class="far fa-trash-alt"></i></a>
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
<script>
        function copy(){
         $('#txt').select();
         document.execCommand('copy');
        }
</script>
    <h4 align="center">Copy your code</h4>
    <textarea id="txt" class="form-control" rows="5">&lt;?php $listtags = $this-&gt;Model_frontent-&gt;show_tags_by(1);?&gt;&#10;&lt;?php foreach ($listtags as $value): ?&gt;&#10;&lt;!-- Html Tags --&gt;&#10;&#10;&lt;a href=&quot;&lt;?= $value[&#39;url&#39;]; ?&gt;&quot; class=&quot;&quot;&gt;&lt;?= $value[&#39;name&#39;]; ?&gt;&lt;/a&gt;&#10;&#10;&lt;?php endforeach ?&gt;</textarea>
    <div align="center"><span class="btn btn-primary" onclick="copy();" style="margin-top: 10px;">copy</span></div>
