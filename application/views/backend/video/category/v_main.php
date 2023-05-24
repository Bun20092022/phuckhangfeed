<?php
   $view_url_website = $this->Model_backend->view_setup(1);
   $view_url = json_decode($view_url_website['info']);
   $this->id_language = $this->session->userdata('ss_language');
   if(isset($this->id_language)){
      $this->id_language = $this->id_language['name_des'];
   }else{
      $this->id_language = 'vn';
   }  
   ?>
   <a href="<?= base_url(); ?><?= $this->folder; ?>/add">
<button type="button" class="btn btn-primary mb-3 btn-sm">Thêm chuyên mục</button>
</a>
<div class="card">
   <div class="card-body">
      <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Tên</th>
                  <th>Sắp xếp</th>
                  <th></th>
                  <th>Hoạt động</th>
                  <th>Lượt view</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($list_category as $value1): ?>
               <?php if($value1['posts_style'] == 2){
                  $view_posts1 = $this->Model_backend->view_id('qh_posts',$value1['id_posts']);
                  $name1 = json_decode($view_posts1['name']);
                  }else{
                  $name1 = json_decode($value1['name']); 
                  }
                  ?>
               <?php $list_lever2 = $this->Model_backend->show_all_by_father($value1['id']); ?>
               <tr>
                  <td><?= $value1['id']; ?></td>
                  <td class="fw-bold"><?php if(strlen($name1->{$this->id_language}) > 0){ echo $name1->{$this->id_language}; }else{ echo $name1->{'vn'}; } ?></td>
                  <td>
                     <?php if($value1['num'] != 1){ ?>
                     <a href="<?= $this->folder; ?>/tang/<?= $value1['id']; ?>/<?= $value1['father_id']; ?>/<?= $value1['num']; ?>" style="margin-right: 10px;color: green;" title="Tăng 1 cấp"><i class="fas fa-angle-double-up"></i></a>
                     <?php } ?>
                     <?php if($value1['num'] != count($list_category)){ ?>
                     <a href="<?= $this->folder; ?>/giam/<?= $value1['id']; ?>/<?= $value1['father_id']; ?>/<?= $value1['num']; ?>" style="margin-right: 10px;color:red;" title="Giảm 1 cấp"><i class="fas fa-angle-double-down"></i></a>
                     <?php } ?>
                  </td>
                  <td>
                     <a href="<?= base_url(); ?><?= $this->id_language; ?>/<?= $value1['url_'.$this->id_language]; ?>" target="_blank" style="margin-right: 10px;"><i class="fas fa-rss-square"></i></a>
                     <?php if (isset($linkupdate)){ ?>
                     <a href="<?= $linkupdate; ?><?= $value1['id']; ?>" style="margin-right: 10px;" title="Chỉnh sửa thông tin"><i class="fas fa-pencil-alt"></i></a>
                     <?php } ?>                                               
                     <?php if($value1['post_status'] == 2){ ?>
                     <a href="<?= $this->folder; ?>/tamdung/<?= $value1['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn tạm dừng chuyên mục?')" title="Tạm dừng" style="margin-right: 10px;">
                     <i class="far fa-pause-circle"></i>
                     </a>
                     <?php } ?>
                     <?php if($value1['post_status'] == 3){ ?>
                     <a href="<?= $this->folder; ?>/kichhoat/<?= $value1['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn hoạt động chuyên mục?')" title="Hoạt động chuyên mục" style="margin-right: 10px;">
                     <i class="fas fa-play"></i>
                     </a>
                     <a href="<?= $linkdelete; ?><?= $value1['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" title="Xóa chuyên mục">
                     <i class="far fa-trash-alt"></i>
                     </a>
                     <?php } ?>
                  </td>
                  <td>
                     <?php if($value1['post_status'] == 2){ ?>
                     <span class="badge rounded-pill bg-success">Hoạt động</span>
                     <?php } ?> 
                     <?php if($value1['post_status'] == 3){ ?>
                     <span class="badge rounded-pill bg-danger">Không hoạt động</span>
                     <?php } ?>
                  </td>
                  <td><?= $value1['view']; ?></td>
               </tr>
               <?php foreach ($list_lever2 as $value2): ?>
               <?php if($value2['posts_style'] == 2){
                  $view_posts2 = $this->Model_backend->view_id('qh_posts',$value2['id_posts']);
                     $name2 = json_decode($view_posts2['name']);
                  }else{
                     $name2 = json_decode($value2['name']); 
                  }
                  ?>
               <?php $list_lever3 = $this->Model_backend->show_all_by_father($value2['id']); ?>
               <tr>
                  <td><?= $value2['id']; ?></td>
                  <td>----- <?php if(strlen($name2->{$this->id_language}) > 0){ echo $name2->{$this->id_language}; }else{ echo $name2->{'vn'}; } ?></td>
                  <td>
                     <?php if($value2['num'] != 1){ ?>
                     <a href="<?= $this->folder; ?>/tang/<?= $value2['id']; ?>/<?= $value2['father_id']; ?>/<?= $value2['num']; ?>" style="margin-right: 10px;color: green;" title="Tăng 1 cấp"><i class="fas fa-angle-double-up"></i></a>
                     <?php } ?>
                     <?php if($value2['num'] != count($list_lever2)){ ?>
                     <a href="<?= $this->folder; ?>/giam/<?= $value2['id']; ?>/<?= $value2['father_id']; ?>/<?= $value2['num']; ?>" style="margin-right: 10px;color:red;" title="Giảm 1 cấp"><i class="fas fa-angle-double-down"></i></a>
                     <?php } ?>
                  </td>
                  <td>
                     <a href="<?= base_url(); ?><?= $this->id_language; ?>/<?= $value2['url_'.$this->id_language]; ?>" target="_blank" style="margin-right: 10px;"><i class="fas fa-rss-square"></i></a>
                     <?php if (isset($linkupdate)){ ?>
                     <a href="<?= base_url(); ?><?= $linkupdate; ?><?= $value2['id']; ?>" style="margin-right: 10px;" title="Chỉnh sửa thông tin"><i class="fas fa-pencil-alt"></i></a>
                     <?php } ?>                                               
                     <?php if($value2['post_status'] == 2){ ?>
                     <a href="<?= $this->folder; ?>/tamdung/<?= $value2['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn tạm dừng chuyên mục?')" title="Tạm dừng" style="margin-right: 10px;">
                     <i class="far fa-pause-circle"></i>
                     </a>
                     <?php } ?>
                     <?php if($value2['post_status'] == 3){ ?>
                     <a href="<?= $this->folder; ?>/kichhoat/<?= $value2['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn hoạt động chuyên mục?')" title="Hoạt động chuyên mục" style="margin-right: 10px;">
                     <i class="fas fa-play"></i>
                     </a>
                     <a href="<?= $linkdelete; ?><?= $value2['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" title="Xóa chuyên mục">
                     <i class="far fa-trash-alt"></i>
                     </a>
                     <?php } ?>
                  </td>
                  <td>
                     <?php if($value2['post_status'] == 2){ ?>
                     <span class="badge rounded-pill bg-success">Hoạt động</span>
                     <?php } ?> 
                     <?php if($value2['post_status'] == 3){ ?>
                     <span class="badge rounded-pill bg-danger">Không hoạt động</span>
                     <?php } ?>
                  </td>
                  <td><?= $value2['view']; ?></td>
               </tr>
               <?php foreach ($list_lever3 as $value3): ?>
               <?php if($value3['posts_style'] == 2){
                  $view_posts3 = $this->Model_backend->view_id('qh_posts',$value3['id_posts']);
                  $name3 = json_decode($view_posts3['name']);
                  }else{
                  $name3 = json_decode($value3['name']); 
                  }
                  ?>
               <?php $list_lever4 = $this->Model_backend->show_all_by_father($value3['id']); ?>
               <tr>
                  <td><?= $value3['id']; ?></td>
                  <td>------------------ <?php if(strlen($name3->{$this->id_language}) > 0){ echo $name3->{$this->id_language}; }else{ echo $name3->{'vn'}; } ?></td>
                  <td>
                     <?php if($value3['num'] != 1){ ?>
                     <a href="<?= $this->folder; ?>/tang/<?= $value3['id']; ?>/<?= $value3['father_id']; ?>/<?= $value3['num']; ?>" style="margin-right: 10px;color: green;" title="Tăng 1 cấp"><i class="fas fa-angle-double-up"></i></a>
                     <?php } ?>
                     <?php if($value3['num'] != count($list_lever3)){ ?>
                     <a href="<?= $this->folder; ?>/giam/<?= $value3['id']; ?>/<?= $value3['father_id']; ?>/<?= $value3['num']; ?>" style="margin-right: 10px;color:red;" title="Giảm 1 cấp"><i class="fas fa-angle-double-down"></i></a>
                     <?php } ?>
                  </td>
                  <td>
                     <a href="<?= base_url(); ?><?= $this->id_language; ?>/<?= $value3['url_'.$this->id_language]; ?>" target="_blank" style="margin-right: 10px;"><i class="fas fa-rss-square"></i></a>
                     <?php if (isset($linkupdate)){ ?>
                     <a href="<?= base_url(); ?><?= $linkupdate; ?><?= $value3['id']; ?>" style="margin-right: 10px;" title="Chỉnh sửa thông tin"><i class="fas fa-pencil-alt"></i></a>
                     <?php } ?>                                               
                     <?php if($value3['post_status'] == 2){ ?>
                     <a href="<?= $this->folder; ?>/tamdung/<?= $value3['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn tạm dừng chuyên mục?')" title="Tạm dừng" style="margin-right: 10px;">
                     <i class="far fa-pause-circle"></i>
                     </a>
                     <?php } ?>
                     <?php if($value3['post_status'] == 3){ ?>
                     <a href="<?= $this->folder; ?>/kichhoat/<?= $value3['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn hoạt động chuyên mục?')" title="Hoạt động chuyên mục" style="margin-right: 10px;">
                     <i class="fas fa-play"></i>
                     </a>
                     <a href="<?= $linkdelete; ?><?= $value3['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" title="Xóa chuyên mục">
                     <i class="far fa-trash-alt"></i>
                     </a>
                     <?php } ?> 
                  </td>
                  <td>
                     <?php if($value3['post_status'] == 2){ ?>
                     <span class="badge rounded-pill bg-success">Hoạt động</span>
                     <?php } ?> 
                     <?php if($value3['post_status'] == 3){ ?>
                     <span class="badge rounded-pill bg-danger">Không hoạt động</span>
                     <?php } ?>
                  </td>
                  <td><?= $value3['view']; ?></td>
               </tr>
               <?php foreach ($list_lever4 as $value4): ?>
               <?php if($value4['posts_style'] == 2){
                  $view_posts4 = $this->Model_backend->view_id('qh_posts',$value4['id_posts']);
                  $name4 = json_decode($view_posts4['name']);
                  }else{
                  $name4 = json_decode($value4['name']); 
                  }
                  ?>
               <?php $list_lever5 = $this->Model_backend->show_all_by_father($value4['id']); ?>
               <tr>
                  <td><?= $value4['id']; ?></td>
                  <td>----------------------------- <?php if(strlen($name4->{$this->id_language}) > 0){ echo $name4->{$this->id_language}; }else{ echo $name4->{'vn'}; } ?></td>
                  <td>
                     <?php if($value4['num'] != 1){ ?>
                     <a href="<?= $this->folder; ?>/tang/<?= $value4['id']; ?>/<?= $value4['father_id']; ?>/<?= $value4['num']; ?>" style="margin-right: 10px;color: green;" title="Tăng 1 cấp"><i class="fas fa-angle-double-up"></i></a>
                     <?php } ?>
                     <?php if($value4['num'] != count($list_lever4)){ ?>
                     <a href="<?= $this->folder; ?>/giam/<?= $value4['id']; ?>/<?= $value4['father_id']; ?>/<?= $value4['num']; ?>" style="margin-right: 10px;color:red;" title="Giảm 1 cấp"><i class="fas fa-angle-double-down"></i></a>
                     <?php } ?>
                  </td>
                  <td>
                     <a href="<?= base_url(); ?><?= $this->id_language; ?>/<?= $value4['url_'.$this->id_language]; ?>" target="_blank" style="margin-right: 10px;"><i class="fas fa-rss-square"></i></a>
                     <?php if (isset($linkupdate)){ ?>
                     <a href="<?= base_url(); ?><?= $linkupdate; ?><?= $value4['id']; ?>" style="margin-right: 10px;" title="Chỉnh sửa thông tin"><i class="fas fa-pencil-alt"></i></a>
                     <?php } ?>                                               
                     <?php if($value4['post_status'] == 2){ ?>
                     <a href="<?= $this->folder; ?>/tamdung/<?= $value4['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn tạm dừng chuyên mục?')" title="Tạm dừng" style="margin-right: 10px;">
                     <i class="far fa-pause-circle"></i>
                     </a>
                     <?php } ?>
                     <?php if($value4['post_status'] == 3){ ?>
                     <a href="<?= $this->folder; ?>/kichhoat/<?= $value4['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn hoạt động chuyên mục?')" title="Hoạt động chuyên mục" style="margin-right: 10px;">
                     <i class="fas fa-play"></i>
                     </a>
                     <a href="<?= $linkdelete; ?><?= $value4['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" title="Xóa chuyên mục">
                     <i class="far fa-trash-alt"></i>
                     </a>
                     <?php } ?>
                  </td>
                  <td>
                     <?php if($value4['post_status'] == 2){ ?>
                     <span class="badge rounded-pill bg-success">Hoạt động</span>
                     <?php } ?> 
                     <?php if($value4['post_status'] == 3){ ?>
                     <span class="badge rounded-pill bg-danger">Không hoạt động</span>
                     <?php } ?>
                  </td>
                  <td><?= $value4['view']; ?></td>
               </tr>
               <?php foreach ($list_lever5 as $value5): ?>
               <?php if($value5['posts_style'] == 2){
                  $view_posts5 = $this->Model_backend->view_id('qh_posts',$value5['id_posts']);
                  $name5 = json_decode($view_posts5['name']);
                  }else{
                  $name5 = json_decode($value5['name']); 
                  }
                  ?>
               <tr>
                  <td><?= $value5['id']; ?></td>
                  <td>-------------------------------------------- <?php if(strlen($name5->{$this->id_language}) > 0){ echo $name5->{$this->id_language}; }else{ echo $name5->{'vn'}; } ?></td>
                  <td>
                     <?php if($value5['num'] != 1){ ?>
                     <a href="<?= $this->folder; ?>/tang/<?= $value5['id']; ?>/<?= $value5['father_id']; ?>/<?= $value5['num']; ?>" style="margin-right: 10px;color: green;" title="Tăng 1 cấp"><i class="fas fa-angle-double-up"></i></a>
                     <?php } ?>
                     <?php if($value5['num'] != count($list_lever5)){ ?>
                     <a href="<?= $this->folder; ?>/giam/<?= $value5['id']; ?>/<?= $value5['father_id']; ?>/<?= $value5['num']; ?>" style="margin-right: 10px;color:red;" title="Giảm 1 cấp"><i class="fas fa-angle-double-down"></i></a>
                     <?php } ?>
                  </td>
                  <td>
                     <a href="<?= base_url(); ?><?= $this->id_language; ?>/<?= $value5['url_'.$this->id_language]; ?>" target="_blank" style="margin-right: 10px;"><i class="fas fa-rss-square"></i></a>
                     <?php if (isset($linkupdate)){ ?>
                     <a href="<?= base_url(); ?><?= $linkupdate; ?><?= $value5['id']; ?>" style="margin-right: 10px;" title="Chỉnh sửa thông tin"><i class="fas fa-pencil-alt"></i></a>
                     <?php } ?>                                               
                     <?php if($value5['post_status'] == 2){ ?>
                     <a href="<?= $this->folder; ?>/tamdung/<?= $value5['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn tạm dừng chuyên mục?')" title="Tạm dừng" style="margin-right: 10px;">
                     <i class="far fa-pause-circle"></i>
                     </a>
                     <?php } ?>
                     <?php if($value5['post_status'] == 3){ ?>
                     <a href="<?= $this->folder; ?>/kichhoat/<?= $value5['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn hoạt động chuyên mục?')" title="Hoạt động chuyên mục" style="margin-right: 10px;">
                     <i class="fas fa-play"></i>
                     </a>
                     <a href="<?= $linkdelete; ?><?= $value5['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" title="Xóa chuyên mục">
                     <i class="far fa-trash-alt"></i>
                     </a>
                     <?php } ?> 
                  </td>
                  <td>
                     <?php if($value3['post_status'] == 2){ ?>
                     <span class="badge rounded-pill bg-success">Hoạt động</span>
                     <?php } ?> 
                     <?php if($value3['post_status'] == 3){ ?>
                     <span class="badge rounded-pill bg-danger">Không hoạt động</span>
                     <?php } ?>
                  </td>
                  <td><?= $value5['view']; ?></td>
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