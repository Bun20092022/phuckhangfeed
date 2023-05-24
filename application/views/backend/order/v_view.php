<?php $sanpham = json_decode($view_order['extend']); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="">
                            <h6 class="mb-0"><b>Ngày đặt hàng :</b> <?= date('d-m-Y',$view_order['creat']); ?></h6>
                            <h6><b>Order ID :</b> # <?= $view_order['id']; ?></h6>
                        </div>
                    </div><!--end col--> 
                    <div class="col-md-9">                                            
                        <div class="float-left">
                            <address class="font-13">
                                <strong class="font-14">Thông tin khách hàng :</strong><br>
                                <b>Tên khách hàng : </b><?= $view_order['nguoimuahang']; ?><br>
                                <b>Địa chỉ : </b><?= $view_order['diachi']; ?><br>
                                <b>Số điện thoại: </b><?= $view_order['phone']; ?><br>
                                <b>Ghi chú : </b><?= $view_order['ghichu']; ?>
                            </address>
                        </div>
                    </div><!--end col--> 
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive project-invoice">
                            <table class="table table-bordered mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Thông tin sản phẩm</th>
                                        <th>Giá bán</th>
                                        <th>Số lượng</th> 
                                        <th>Thành tiền</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <?php $tongtien = 0; ?>
                                    <?php $tongtienkm = 0; ?>
                                    <?php $thanhtien = 0; ?>
                                    <?php foreach ($sanpham as $value): ?>
                                        <?php $view_product = $this->Model_backend->view_id('qh_posts',$value->{'id'}); ?>
                                        <?php $name = json_decode($view_product['name']); ?>
                                        <tr>
                                        <td>
                                            <h5 class="mt-0 mb-1 font-14"><?= $name->{'vn'}; ?></h5>
                                        </td>
                                        <td><?= number_format($value->{'price'});?> đ</td>
                                        <td class="text-center"><?= number_format($value->{'qty'});?></td>
                                        <td><?= number_format($value->{'price'} * $value->{'qty'});?> đ</td>
                                        <?php $thanhtien += ($value->{'price'} * $value->{'qty'}); ?>
                                    </tr><!--end tr-->
                                    <?php endforeach ?>
                                    <tr class="bg-black text-white">
                                        <td colspan="3" class="border-0 font-14"><b>Thành tiền</b></td>
                                        <td class="border-0 font-14"><b><?= number_format($thanhtien);?> đ</b></td>
                                    </tr><!--end tr-->
                                </tbody>
                            </table><!--end table-->
                        </div>  <!--end /div-->                                          
                    </div>  <!--end col-->                                      
                </div><!--end row-->
                <hr>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                    </div><!--end col-->
                    <div class="col-lg-12 col-xl-4">
                        <div class="float-end d-print-none">
                            <a href="javascript:window.print()" class="btn btn-soft-info btn-sm">In đơn hàng</a>
                            <a href="backend/order/status/<?= $view_order['id']; ?>/26" class="btn btn-soft-primary btn-sm" onclick="return confirm('Bạn có chắc chắn muốn hoàn thành đơn hàng?')">Hoàn thành</a>
                            <a href="backend/order/status/<?= $view_order['id']; ?>/27" class="btn btn-soft-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng?')">Hủy đơn hàng</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->
