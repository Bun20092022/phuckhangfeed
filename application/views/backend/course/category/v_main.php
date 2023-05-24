<?php
   $view_url_website = $this->Model_backend->view_setup(1);
   $view_url = json_decode($view_url_website['info']);  
?>
<h6 class="mb-0 text-uppercase"><?php if(isset($title)){ echo $title; } ?></h6>
<hr/>
<a href="backend/course/category/add"><button type="button" class="btn btn-primary btn-sm px-5 mb-3">Thêm chuyên mục</button></a>
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
               <?php $list_lever1 = $this->Model_course_category->show_all_by_father(0); ?>
                     <?php foreach ($list_lever1 as $value1): ?>
                     <?php $list_lever2 = $this->Model_course_category->show_all_by_father($value1['id']); ?>
                     <tr>
                        <td><input class="checkbox1" type="checkbox" value="<?= $value1['id'] ?>" name="chonmau[]"></td>
                        <td><?= $value1['name']; ?></td>
                        <td><?= $value1['url']; ?></td>
                        <td><?= $value1['view']; ?></td>
                        <td>
                           <a href="<?= $view_url->{'url'}; ?>/category/<?= $value1['url']; ?>" target="_blank"><i class="lni lni-edge" style="font-size: 16px;color: blue;"></i></a>
                          &nbsp;&nbsp;&nbsp;
                          <?php if (isset($linkupdate)){ ?>
                           <a href="<?= $linkupdate; ?><?= $value1['id']; ?>"><i class="lni lni-pencil-alt" style="font-size: 16px;color: green;"></i></a>
                          <?php } ?>&nbsp;&nbsp;&nbsp;                                               
                           <?php if (isset($linkdelete)){ ?>
                               <a href="<?= $linkdelete; ?><?= $value1['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa <?= $value1['name'];?>?')"><i class="lni lni-trash" style="font-size: 16px;color: red;"></i></a>
                          <?php } ?> 
                          
                        </td>
                     </tr>
                        <?php foreach ($list_lever2 as $value2): ?>
                           <?php $list_lever3 = $this->Model_course_category->show_all_by_father($value2['id']); ?>
                              <tr>
                                 <td><input class="checkbox1" type="checkbox" value="<?= $value2['id'] ?>" name="chonmau[]"></td>
                                 <td>--- <?= $value2['name']; ?></td>
                                 <td><?= $value2['url']; ?></td>
                                 <td><?= $value2['view']; ?></td>
                                 <td>
                                    <a href="<?= $view_url->{'url'}; ?>/category/<?= $value2['url']; ?>" target="_blank"><i class="lni lni-edge" style="font-size: 16px;color: blue;"></i></a>
                                   &nbsp;&nbsp;&nbsp;
                                   <?php if (isset($linkupdate)){ ?>
                                    <a href="<?= $linkupdate; ?><?= $value2['id']; ?>"><i class="lni lni-pencil-alt" style="font-size: 16px;color: green;"></i></a>
                                   <?php } ?>&nbsp;&nbsp;&nbsp;                                               
                                    <?php if (isset($linkdelete)){ ?>
                                        <a href="<?= $linkdelete; ?><?= $value2['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa <?= $value2['name'];?>?')"><i class="lni lni-trash" style="font-size: 16px;color: red;"></i></a>
                                   <?php } ?> 
                                   
                                 </td>
                              </tr>
                              <?php foreach ($list_lever3 as $value3): ?>
                                 <?php $list_lever4 = $this->Model_course_category->show_all_by_father($value3['id']); ?>
                                    <tr>
                                       <td><input class="checkbox1" type="checkbox" value="<?= $value3['id'] ?>" name="chonmau[]"></td>
                                       <td>------ <?= $value3['name']; ?></td>
                                       <td><?= $value3['url']; ?></td>
                                       <td><?= $value3['view']; ?></td>
                                       <td>
                                          <a href="<?= $view_url->{'url'}; ?>/category/<?= $value3['url']; ?>" target="_blank"><i class="lni lni-edge" style="font-size: 16px;color: blue;"></i></a>
                                         &nbsp;&nbsp;&nbsp;
                                         <?php if (isset($linkupdate)){ ?>
                                          <a href="<?= $linkupdate; ?><?= $value3['id']; ?>"><i class="lni lni-pencil-alt" style="font-size: 16px;color: green;"></i></a>
                                         <?php } ?>&nbsp;&nbsp;&nbsp;                                               
                                          <?php if (isset($linkdelete)){ ?>
                                              <a href="<?= $linkdelete; ?><?= $value3['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa <?= $value3['name'];?>?')"><i class="lni lni-trash" style="font-size: 16px;color: red;"></i></a>
                                         <?php } ?> 
                                         
                                       </td>
                                    </tr>
                                    <?php foreach ($list_lever4 as $value4): ?>
                                       <?php $list_lever5 = $this->Model_course_category->show_all_by_father($value4['id']); ?>
                                           <tr>
                                             <td><input class="checkbox1" type="checkbox" value="<?= $value4['id'] ?>" name="chonmau[]"></td>
                                             <td>--------- <?= $value4['name']; ?></td>
                                             <td><?= $value4['url']; ?></td>
                                             <td><?= $value4['view']; ?></td>
                                             <td>
                                                <a href="<?= $view_url->{'url'}; ?>/category/<?= $value4['url']; ?>" target="_blank"><i class="lni lni-edge" style="font-size: 16px;color: blue;"></i></a>
                                               &nbsp;&nbsp;&nbsp;
                                               <?php if (isset($linkupdate)){ ?>
                                                <a href="<?= $linkupdate; ?><?= $value4['id']; ?>"><i class="lni lni-pencil-alt" style="font-size: 16px;color: green;"></i></a>
                                               <?php } ?>&nbsp;&nbsp;&nbsp;                                               
                                                <?php if (isset($linkdelete)){ ?>
                                                    <a href="<?= $linkdelete; ?><?= $value4['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa <?= $value4['name'];?>?')"><i class="lni lni-trash" style="font-size: 16px;color: red;"></i></a>
                                               <?php } ?> 
                                               
                                             </td>
                                          </tr>
                                          <?php foreach ($list_lever5 as $value5): ?>
                                             <tr>
                                                <td><input class="checkbox1" type="checkbox" value="<?= $value5['id'] ?>" name="chonmau[]"></td>
                                                <td>------------ <?= $value5['name']; ?></td>
                                                <td><?= $value5['url']; ?></td>
                                                <td><?= $value5['view']; ?></td>
                                                <td>
                                                   <a href="<?= $view_url->{'url'}; ?>/category/<?= $value5['url']; ?>" target="_blank"><i class="lni lni-edge" style="font-size: 16px;color: blue;"></i></a>
                                                  &nbsp;&nbsp;&nbsp;
                                                  <?php if (isset($linkupdate)){ ?>
                                                   <a href="<?= $linkupdate; ?><?= $value5['id']; ?>"><i class="lni lni-pencil-alt" style="font-size: 16px;color: green;"></i></a>
                                                  <?php } ?>&nbsp;&nbsp;&nbsp;                                               
                                                   <?php if (isset($linkdelete)){ ?>
                                                       <a href="<?= $linkdelete; ?><?= $value5['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa <?= $value5['name'];?>?')"><i class="lni lni-trash" style="font-size: 16px;color: red;"></i></a>
                                                  <?php } ?> 
                                                  
                                                </td>
                                             </tr>
                                          <?php endforeach ?>
                                       <?php endforeach ?>
                                 <?php endforeach ?>
                           <?php endforeach ?>
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