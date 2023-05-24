<link href="public/backend/codemirror/codemirror.css" rel="stylesheet">
<script src="public/backend/codemirror/codemirror.js"></script>
<div class="row">
   <div class="col-12 col-lg-12">
      <div class="card">
         <div class="card-body">
            <h6 class="card-title">Nội dung file: <?= $view['name']; ?> </h6>
            <form action="" method="post">
               <input type="hidden" name="template_id" value="<?= $id; ?>">
               <div class="mb-3">
                  <label class="form-label">Code File</label>
<textarea class="form-control" rows="30" name="codefile" id="editor">
<?php
    $read = file('application/views/'.$view['link']);
    foreach ($read as $line) {
    echo $line;
    }
?>
</textarea>
               </div>   
               <button class="btn btn-primary" type="submit" name="edit">Chỉnh sửa thông tin</button>
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
