<h6 class="mb-0 text-uppercase"><?php if(isset($title)){ echo $title; } ?></h6>
<hr/>
<div class="row">
   <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <form action="" method="post">
               <div class="mb-3">
                  <label class="form-label">Tên chuyên mục</label>
                  <input type="text" class="form-control" name="name" autofocus required>
               </div>
               <div class="mb-3">
                  <label class="form-label">Thứ tự</label>
                  <input type="number" class="form-control" name="num" value="<?= $num; ?>">
               </div>
               <button class="btn btn-primary" type="submit" name="add">Thêm thông tin</button>
         </div>
      </div>
   </div>
</div>
</form>
