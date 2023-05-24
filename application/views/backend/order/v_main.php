<div class="row">
    <div class="col-12 mb-3">
       <a href="backend/order" class="btn btn-soft-info btn-sm">Tất cả đơn hàng</a>
       <a href="backend/order/new" class="btn btn-soft-info btn-sm">Đơn hàng mới</a>
       <a href="backend/order/access" class="btn btn-soft-primary btn-sm">Thành công</a>
       <a href="backend/order/cancel" class="btn btn-soft-danger btn-sm">Hủy đơn hàng</a>
   </div>
   <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Danh sách đơn hàng <?php if(isset($title_folder)){ echo $title_folder; } ?></h4>
        </div><!--end card-header-->
        <div class="card-body">
            <table id="row_callback" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Người mua hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Tình trạng</th>
                        <th></th>
                    </tr>
                </thead>


                <tbody>
                    <?php foreach ($list_order as $value): ?>
                       <?php $view_hoat_dong = $this->Model_backend->view_id('qh_setup',$value['status']); ?>
                       <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['nguoimuahang']; ?></td>
                        <td><?= $value['diachi']; ?></td>
                        <td><?= $value['phone']; ?></td>
                        <td><span class="<?= $view_hoat_dong['class'] ?>"><?= $view_hoat_dong['extend'] ?></span></td>
                        <td class="text-center">
                            <a href="backend/order/view/<?= $value['id']; ?>">
                                <button type="button" class="btn btn-secondary btn-sm">Xem đơn hàng</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>        
    </div>
</div>
</div> <!-- end col -->
</div> <!-- end row -->

