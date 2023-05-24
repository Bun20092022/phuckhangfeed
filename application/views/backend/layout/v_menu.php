 <?php 
 $check_list = array(
    'status>=' => 24,
    'status<=' => 25,
);
 $list_order = $this->db->select('*')->from('qh_order')->where($check_list)->get()->result_array();
 $list_symtem_template = $this->Model_backend->get_all_asc('qh_system_template');

 $list_symtem_frontent = $this->db->select('*')->from('qh_system_frontent')->where('public',1)->get()->result_array();
 ?>
 <ul class="metismenu left-sidenav-menu">
    <li class="menu-label mt-0">Nội dung Website</li>
    <li>
        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Sản phẩm</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <li class="nav-item"><a class="nav-link" href="backend/product/posts/status/2"><i class="ti-control-record" style="text-transform:capitalize;"></i>Tất cả Sản phẩm</a></li>
            <li class="nav-item"><a class="nav-link" href="backend/product/posts/add" style="text-transform:capitalize;"><i class="ti-control-record"></i>Thêm Sản phẩm mới</a></li> 
            <li class="nav-item"><a class="nav-link" href="backend/product/category"><i class="ti-control-record" style="text-transform:capitalize;"></i>Chuyên mục Sản phẩm</a></li>
            <li>
                <a href="javascript: void(0);" aria-expanded="false"><i class="ti-control-record"></i>Giao diện Sản phẩm<span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level mm-collapse" aria-expanded="false">
                    <li><a href="backend/product/templates/list/1">Giao diện chuyên mục</a></li>
                    <li><a href="backend/product/templates/list/2">Giao diện bài viết</a></li>
                    <li><a href="backend/product/templates/list/3">Giao diện Tags</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Bài viết</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <li class="nav-item"><a class="nav-link" href="backend/news/posts/status/2"><i class="ti-control-record" style="text-transform:capitalize;"></i>Tất cả bài viết</a></li>
            <li class="nav-item"><a class="nav-link" href="backend/news/posts/add" style="text-transform:capitalize;"><i class="ti-control-record"></i>Thêm bài viết mới</a></li> 
            <li class="nav-item"><a class="nav-link" href="backend/news/category"><i class="ti-control-record" style="text-transform:capitalize;"></i>Chuyên mục bài viết</a></li>
            <li>
                <a href="javascript: void(0);" aria-expanded="false"><i class="ti-control-record"></i>Giao diện bài viết <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level mm-collapse" aria-expanded="false">
                    <li><a href="backend/news/templates/list/1">Giao diện chuyên mục</a></li>
                    <li><a href="backend/news/templates/list/2">Giao diện bài viết</a></li>
                    <li><a href="backend/news/templates/list/3">Giao diện Tags</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Video</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <li class="nav-item"><a class="nav-link" href="backend/video/posts/status/2"><i class="ti-control-record" style="text-transform:capitalize;"></i>Tất cả Video</a></li>
            <li class="nav-item"><a class="nav-link" href="backend/video/posts/add" style="text-transform:capitalize;"><i class="ti-control-record"></i>Thêm Video mới</a></li> 
            <li class="nav-item"><a class="nav-link" href="backend/video/category"><i class="ti-control-record" style="text-transform:capitalize;"></i>Chuyên mục Video</a></li>
            <li>
                <a href="javascript: void(0);" aria-expanded="false"><i class="ti-control-record"></i>Giao diện Video <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level mm-collapse" aria-expanded="false">
                    <li><a href="backend/video/templates/list/1">Giao diện chuyên mục</a></li>
                    <li><a href="backend/video/templates/list/2">Giao diện bài viết</a></li>
                    <li><a href="backend/video/templates/list/3">Giao diện Tags</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <hr class="hr-dashed hr-menu">
    <li class="menu-label my-2">Cài đặt Website</li>
    <!-- <li>
        <a href="backend/order"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Đơn hàng</span><span class="badge badge-soft-success menu-arrow"><?= count($list_order) ?> mới</span></a>
    </li> --> 
    <li>
        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Chỉnh sửa website</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <li class="nav-item"><a class="nav-link" href="backend/news/menu"><i class="ti-control-record"></i>Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="backend/setup/banner"><i class="ti-control-record"></i>Banner</a></li>
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Cài đặt</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="javascript: void(0);" aria-expanded="false"><i class="ti-control-record"></i>Cài đặt Website<span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level mm-collapse" aria-expanded="false">
                    <li><a href="backend/setup/general/main/infowebsite">Tổng quan website</a></li>
                    <li><a href="backend/setup/general/language">Ngôn ngữ Website</a></li>
                    <li><a href="backend/setup/general/social">Mạng xã hội</a></li>
                    <li><a href="backend/setup/general/extend_website">Ngôn ngữ chung</a></li>
                    <li><a href="backend/setup/general/lang_menu">Ngôn ngữ Code</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="backend/setup/user/list/9"><i class="ti-control-record"></i>Cài đặt người dùng</a></li>
            <li class="nav-item"><a class="nav-link" href="backend/setup/editfile"><i class="ti-control-record"></i>Chỉnh sửa File</a></li>
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Chỉnh sửa giao diện</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <?php foreach ($list_symtem_frontent as $value): ?>
                <li class="nav-item"><a class="nav-link" href="<?= $value['link_symtem']; ?>"><i class="ti-control-record"></i><?= $value['page_group']; ?></a></li>
            <?php endforeach ?>
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Extention dùng chung</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <?php foreach ($list_symtem_template as $value): ?>
                <li class="nav-item"><a class="nav-link" href="<?= $value['link_cauhinh']; ?>"><i class="ti-control-record"></i><?= $value['name']; ?></a></li>
            <?php endforeach ?>
            
        </ul>
    </li>
    <li>
        <a href="backend/nguoidung"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Tài khoản</span></a>
    </li>          
</ul>