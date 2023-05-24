<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Danh sách bài viết</h4>
            </div><!--end card-header-->
            <div class="card-body">
                <table id="row_callback" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Bài viết</th>
                            <th>View</th>
                            <th>Tình trạng</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_posts as $value): ?>
                            <?php $list_category = json_decode($value['post_category_id']); ?>
                            <?php $list_tags = json_decode($value['post_tags_id']); ?>
                             <?php $view_hoat_dong = $this->Model_backend->view_id('qh_setup_group',$value['post_status']); ?>
                             <?php $view_category = $this->Model_backend->view_id('qh_post_category',$value['post_category_id_ze']); ?>
                            <?php $name = json_decode($value['name']); ?>
                            <tr>
                                <td><?= $value['id']; ?></td>
                                <td><?= $name->{$language}; ?></td>
                                <td><?= $value['view']; ?></td>
                                <td><span class="<?= $view_hoat_dong['class'] ?>"><?= $view_hoat_dong['extend'] ?></span></td>
                                <td></td>
                                <td>
                                    <a href="<?= $this->url_website; ?>/<?= $language; ?>/<?= $view_category['url_'.$language] ?>/<?= $value['url_'.$language] ?>" class="view" style="margin-right: 10px;" title="Xem bài viết chi tiết">
                                        <i class="fas fa-rss-square"></i>
                                    </a>
                                    <a href="<?= $this->folder; ?>/update/<?= $id_service; ?>/<?= $value['id']; ?>" class="edit" style="margin-right: 10px;" title="Chỉnh sửa bài viết">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <?php if($value['post_status'] == 2 || $value['post_status'] == 4){ ?>
                                    <a href="<?= $this->folder; ?>/tamdung/<?= $id_service; ?>/<?= $value['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn tạm dừng?')" style="margin-right: 10px;" title="Tạm dừng bài viết">
                                        <i class="far fa-pause-circle"></i>
                                    </a>
                                    <?php } ?>
                                    <?php if($value['post_status'] == 3){ ?>
                                    <a href="<?= $this->folder; ?>/kichhoat/<?= $id_service; ?>/<?= $value['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn active?')" style="margin-right: 10px;" title="Hoạt động lại bài viết">
                                        <i class="fas fa-play"></i>
                                    </a>
                                    <a href="<?= $this->folder; ?>/delete/<?= $id_service; ?>/<?= $value['id']; ?>" class="remove" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" title="Xóa bài viết">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>        
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

