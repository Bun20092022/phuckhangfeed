<div class="row" style="margin-top: 50px;margin-bottom: 100px;">
  <div class="col-xl-8 offset-xl-2">
    <div class="shop_order_box mt25">
      <div class="order_list_raw text-center">
        <ul>
          <li class="list-inline-item">
            <p>Số đặt hàng</p>
            <h5>#Fitwell00<?= $view_order['id'];?></h5>
          </li>
          <li class="list-inline-item">
            <p>Ngày đặt hàng</p>
            <h5><?= date('d-m-Y',$view_order['creat']); ?></h5>
          </li>
        </ul>
      </div>
      <div class="order_details">
        <h4 class="title mb25">Thông tin đơn hàng</h4>
        <ul>
            <li class="subtitle bb1 mb15"><p><b>Thông tin</b><span class="float-end">&nbsp;</span></p></li>
            <li><p class="product_name_qnt">Tên khách hàng<span class="float-end"><?= $view_order['nguoimuahang'] ?></span></p></li>
            <li><p class="product_name_qnt">Địa chỉ khách hàng<span class="float-end"><?= $view_order['diachi']; ?></span></p></li>
            <li><p class="product_name_qnt">Số điện thoại<span class="float-end"><?= $view_order['phone']; ?></span></p></li>
          </ul>
          <?php $sanpham = json_decode($view_order['extend']); ?>
        <div class="od_content">
          <ul>
            <li class="subtitle bb1 mb15"><p>Sản phẩm <span class="float-end">Thành tiền</span></p></li>
            <?php $tongtien = 0; ?>
                                    <?php $tongtienkm = 0; ?>
                                    <?php $thanhtien = 0; ?>
                                    <?php foreach ($sanpham as $value): ?>
                                        <?php $view_product = $this->Model_backend->view_id('qh_posts',$value->{'id'}); ?>
                                        <?php $name = json_decode($view_product['name']); ?>
                                        <?php $thanhtien += ($value->{'price'} * $value->{'qty'}); ?>
            <li><p class="product_name_qnt"><?= $name->{'vn'}; ?> x <?= number_format($value->{'qty'});?> <span class="float-end"><?= number_format($value->{'price'} * $value->{'qty'});?> đ</span></p></li>
            <?php endforeach ?>
            <li class="subtitle bt1 bb1 mb10 mt15 pt10"><p>Tổng tiền <span class="float-end"><?= number_format($thanhtien);?> đ</span></p></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>