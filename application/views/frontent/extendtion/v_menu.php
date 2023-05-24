<?php $info = $this->session->userdata('userinfoone'); ?>
<?php 
$this->id_language = $this->session->userdata('ss_languagew');
if(isset($this->id_language)){
   $this->id_language = $this->id_language['name_lang'];
}else{
   $this->id_language = 'vn';
}
?>
<?php $view_header = $this->Model_frontent->view_id('qh_system_template',24); ?>
<?php 
// Lấy Menu danh mục cha "0" theo ID Menu
$list_menu_father1 = $this->Model_frontent->list_menu_group(0,$view_header['id_menu']);
?>
<nav id="navbar" class="navbar order-last order-lg-0">
   <ul>
      <?php foreach ($list_menu_father1 as $value1): ?>
         <?php
         $name = $this->Model_frontent->check_name_menu($value1['id']); 
         $url = $this->Model_frontent->check_url_menu($value1['id']); 
         $list_menu_father2 = $this->Model_frontent->list_menu_group($value1['id'],$view_header['id_menu']);
         ?>
         <li class="<?php if(count($list_menu_father2) > 0){ echo 'dropdown'; } ?>">
            <a href="<?= $url; ?>"><span><?php if(strlen($name->{$this->id_language}) < 3){ echo $name->{'vn'}; }else{ echo $name->{$this->id_language}; } ?></span><?php if(count($list_menu_father2) > 0){ echo '<i class="bi bi-chevron-down"></i>'; } ?></a>
            <ul>
               <?php foreach ($list_menu_father2 as $value2): ?>
                  <?php
                  $name = $this->Model_frontent->check_name_menu($value2['id']); 
                  $url = $this->Model_frontent->check_url_menu($value2['id']); 
                  $list_menu_father3 = $this->Model_frontent->list_menu_group($value2['id'],$view_header['id_menu']);
                  ?>
                  <li class="<?php if(count($list_menu_father3) > 0){ echo 'dropdown'; } ?>">
                     <a href="<?= $url; ?>"><span><?php if(strlen($name->{$this->id_language}) < 3){ echo $name->{'vn'}; }else{ echo $name->{$this->id_language}; } ?></span><?php if(count($list_menu_father3) > 0){ echo '<i class="bi bi-chevron-right"></i>'; } ?></a>
                     <ul>
                        <?php foreach ($list_menu_father3 as $value3): ?>
                           <?php
                           $name = $this->Model_frontent->check_name_menu($value3['id']); 
                           $url = $this->Model_frontent->check_url_menu($value3['id']); 
                           $list_menu_father4 = $this->Model_frontent->list_menu_group($value3['id'],$view_header['id_menu']);
                           ?>
                           <li class="<?php if(count($list_menu_father4) > 0){ echo 'dropdown'; } ?>">
                              <a href="<?= $url; ?>"><span><?php if(strlen($name->{$this->id_language}) < 3){ echo $name->{'vn'}; }else{ echo $name->{$this->id_language}; } ?></span><?php if(count($list_menu_father4) > 0){ echo '<i class="bi bi-chevron-right"></i>'; } ?></a>
                              <ul>
                                 <?php foreach ($list_menu_father4 as $value4): ?>
                                    <?php
                                    $name = $this->Model_frontent->check_name_menu($value4['id']); 
                                    $url = $this->Model_frontent->check_url_menu($value4['id']); 
                                    $list_menu_father5 = $this->Model_frontent->list_menu_group($value4['id'],$view_header['id_menu']);
                                    ?>
                                    <li class="<?php if(count($list_menu_father5) > 0){ echo 'dropdown'; } ?>">
                                       <a href="<?= $url; ?>"><span><?php if(strlen($name->{$this->id_language}) < 3){ echo $name->{'vn'}; }else{ echo $name->{$this->id_language}; } ?></span><?php if(count($list_menu_father5) > 0){ echo '<i class="bi bi-chevron-right"></i>'; } ?></a>
                                       <ul>
                                          <?php foreach ($list_menu_father5 as $value5): ?>
                                             <?php
                                             $name = $this->Model_frontent->check_name_menu($value5['id']); 
                                             $url = $this->Model_frontent->check_url_menu($value5['id']); 
                                             ?>
                                             <li>
                                                <a href="<?= $url; ?>"><span><?php if(strlen($name->{$this->id_language}) < 3){ echo $name->{'vn'}; }else{ echo $name->{$this->id_language}; } ?></span></a>
                                             </li>
                                          <?php endforeach ?>
                                       </ul>
                                    </li>
                                 <?php endforeach ?>
                              </ul>
                           </li>
                        <?php endforeach ?>
                     </ul>
                  </li>
               <?php endforeach ?>
            </ul>
         </li>
      <?php endforeach ?>
      <li>
         <?php if(isset($info)){ ?>
            <a href="<?= base_url(); ?>backend/news/menu/group/45" target="_blank" style="font-size: 13px;"><i class="far fa-edit"></i></a>
         <?php } ?>
         </li>
   </ul>
   <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->