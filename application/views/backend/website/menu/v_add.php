<form id="Form1" action="" method="post"></form>
<form id="Form2" action="" method="post"></form>
<form id="Form3" action="" method="post"></form>
<div class="row">
   <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h6 class="card-title"><?php if(isset($title)){ echo $title; } ?></h6>
                     <div class="form-group">
         <label for="exampleInputNumber1">Chọn chuyên mục</label>
         <select class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Chọn chuyên mục" name="father[]" form="Form1">
            <optgroup label="Danh sách chuyên mục">
               <?php foreach ($listfather as $value): ?>
               <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
               <?php endforeach ?>
            </optgroup>
         </select>
      </div>
               <button class="btn btn-primary" type="submit" name="themthongtin" form="Form1">Thêm chuyên mục</button>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
                     <div class="form-group">
         <label for="exampleInputNumber1">Danh mục menu cha</label>
        <input type="text" class="form-control" name="danhmuccha" form="Form2">
      </div>
               <button class="btn btn-primary" type="submit" name="themdanhmuc" form="Form2">Thêm danh mục cha</button>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
            <div class="form-group">
         <label for="exampleInputNumber1">Thêm link bài viết</label>
         <input type="text" name="urllink" class="form-control" form="Form3">
      </div>
       <div class="form-group">
         <label for="exampleInputNumber1">Tên hiển thị</label>
         <input type="text" name="tenhienthi" class="form-control" form="Form3">
      </div>
               <button class="btn btn-primary" type="submit" name="addlink" form="Form3">Thêm link</button>
         </div>
      </div>
   </div>
   <div class="col-md-8">
      <div class="card">
         <div class="card-body">
            <h4 class="mt-0 header-title"><?php if(isset($title)){ echo $title; } ?></h4>
            <div class="table-responsive">
               <table class="table mb-0">
                  <thead class="thead-light">
                     <tr>
                        <th>Tên</th>
                        <th>Url</th>
                        <th>Hoạt động</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($listmenu as $value): ?>
                     <?php if($value['id_menusetup'] == 7){ ?>
                        <tr>
                        <td><?php echo $value['danhmuccha']; ?></td>
                        <td></td>
                        <td>                                                       
                           <a href="<?php echo $linkdelete; ?><?php echo $value['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa <?php echo $value['danhmuccha'];?>?')"><button type="button" class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></button></a>
                        </td>
                     </tr>
                     <?php }elseif($value['id_menusetup'] == 3){ ?>
                     <tr>
                        <td><?php echo $value['danhmuccha']; ?></td>
                        <td><?php echo $value['urllink']; ?></td>
                        <td>                                                       
                           <a href="<?php echo $linkdelete; ?><?php echo $value['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa <?php echo $value['danhmuccha'];?>?')"><button type="button" class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></button></a>
                        </td>
                     </tr>
                     <?php }else{ ?>
                     <?php  $viewmenu = $this->db->select('*')->from('blog_category')->where('id',$value['id_blogcategory'])->get()->row_array(); ?>
                     <tr>
                        <td><?php echo $viewmenu['name']; ?></td>
                        <td><?php echo $viewmenu['url']; ?></td>
                        <td>                                                       
                           <a href="<?php echo $linkdelete; ?><?php echo $value['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa <?php echo $viewmenu['name'];?>?')"><button type="button" class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></button></a>
                        </td>
                     </tr>
                  <?php } ?>
                     <?php endforeach ?>
                  </tbody>
               </table>
               <!--end /table-->
            </div>
            <!--end /tableresponsive-->
         </div>
         <!--end card-body-->
      </div>
      <!--end card-->
   </div>
   <!-- end col -->
</div>
