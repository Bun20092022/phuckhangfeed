<script src="public/backend/codemirror/codemirror.js"></script>
<link rel="stylesheet" href="public/backend/codemirror/codemirror.css">
<script src="public/backend/codemirror/mode/xml/xml.js"></script>
<script src="public/backend/codemirror/addon/edit/closetag.js"></script>
<link rel="stylesheet" href="public/backend/codemirror/theme/dracula.css">
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
            <h5 class="my-3">Banner</h5>
            <div class="fm-menu">
                  <a href="" class="list-group-item py-1"><i class='bx bx-beer me-2'></i><span>Banner Top Home</span></a>
            </div>
            <h6 class="my-3">Đường dẫn</h6>
            <div class="fm-menu">
<textarea class="form-control">
&lt;?php $this-&gt;load-&gt;view(&#39;<?= $view['link']; ?>&#39;); ?&gt;</textarea>
            </div>
            </div>
         </div>
   </div>
  
   <div class="col-12 col-lg-9">
      <div class="card">
         <div class="card-body">
             <form action="" method="post">
<textarea class="form-control" rows="30" name="codefile" id="editor">
<?php
    $read = file($view['link']);
    foreach ($read as $line) {
    echo $line;
    }
?>
</textarea>
<button class="btn btn-primary" type="submit" name="edit" style="margin-top: 20px;">Chỉnh sửa thông tin</button>
</form>

         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   var editor = CodeMirror.fromTextArea
   (document.getElementById('editor'),{
      mode: "xml",
      theme: "dracula",
      lineNumbers: true,
      autoCloseTags: true,
   });
   editor.setSize("100%","700px");
</script>