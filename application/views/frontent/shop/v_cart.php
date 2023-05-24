<section class="inner_page_breadcrumb">
 <div class="container">
  <div class="row">
   <div class="col-xl-6">
    <div class="breadcrumb_content">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
      <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
    </ol>
  </div>
</div>
</div>
</div>
</section>
<?php $giohang = $this->cart->contents(); ?>
<!-- Main Blog Post Content -->
<section class="blog_post_container pt30">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-title text-center">
          <h2 class="title">Giỏ hàng</h2>
        </div>
      </div>
    </div>
    <?php if($this->cart->total_items() == 0){ ?>
        <div class="row">
         <div class="col-md-12 text-center" style="padding-bottom: 300px;">
            <h2>Chưa có sản phẩm trong giỏ hàng.</h2>
            <h3><a href="<?= base_url(); ?>">Tiếp tục mua sắm!!!</a></h3>
         </div>
      </div>
     <?php }else{ ?>
    <div class="row mt15">
      <div class="col-lg-7 col-xl-8">
        <div class="shopping_cart_table table-responsive">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col" width="50%">Sản phẩm</th>
                <th scope="col">Giá tiền</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Xóa</th>
              </tr>
            </thead>
            <tbody class="table_body">
              <?php foreach ($giohang as $value): ?>
                <?php $view_product = $this->Model_frontent->view_id('qh_posts',$value['id']); ?>
                <?php $view_category = $this->Model_frontent->view_id('qh_post_category',$view_product['post_category_id_ze']); ?>
                <?php $imgwebsite = json_decode($view_product['imgwebsite']); ?>
                <?php $name = json_decode($view_product['name']); ?>
                <tr>
                  <th scope="row">
                    <ul class="cart_list d-block d-xl-flex">
                      <li class="ps-1 ps-sm-4 pe-1 pe-sm-4"><a href="<?= $view_category['url_vn'].'/'.$view_product['url_vn'] ?>"><img src="<?= $imgwebsite->{'vn'} ?>" alt="<?= $name->{'vn'} ?>" width="100px"></a></li>
                      <li class="ms-2 ms-md-3">
                        <a class="cart_title" href="<?= $view_category['url_vn'].'/'.$view_product['url_vn'] ?>">
                          <span class="fz16"><?= $name->{'vn'} ?></span>
                        </a>
                      </li>
                    </ul>
                  </th>
                  <td class=""><?= number_format($value['price']); ?> đ</td>
                  <td>
                    <div class="cart_btn">
                      <div class="quantity-block">
                        <a href="frontent/shop/giam/<?= $view_product['id']; ?>/<?= $view_product['price']; ?>/<?= $view_product['priceevent']; ?>">
                          <button class="quantity-arrow-minus2 inner_page"> <span class="fa fa-minus"></span> </button>
                        </a>
                        <input class="quantity-num2 inner_page" type="number" value="<?= $value['qty']; ?>">
                        <a href="frontent/shop/insert/<?= $view_product['id']; ?>/<?= $view_product['price']; ?>/<?= $view_product['priceevent']; ?>">
                          <button class="quantity-arrow-plus2 inner_page"> <span class="fas fa-plus"></span> </button>
                        </a>
                      </div>
                    </div>
                    <!-- <input class="cart_count text-center" placeholder="2" type="number"> -->
                  </td>
                  <td class=""><a href="frontent/shop/deleteone/<?= $value['id']; ?>"><span class="flaticon-close"></span></a></td>
                </tr>
              <?php endforeach ?>

            </tbody>
          </table>
          <div class="checkout_form mt30">
            <div class="checkout_coupon posr d-block d-xl-flex">
              <a href="san-pham">
                <button type="button" class="btn btn_shopping btn-white me-3">Tiếp tục mua sắm</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php $tongtien = 0; ?>
      <?php $tongtienkm = 0; ?>
       <?php foreach ($giohang as $value): ?>
        <?php $view_product = $this->Model_frontent->view_id('qh_posts',$value['id']); ?>
      <?php $tongtien += $value['qty'] * $view_product['price']; ?>
      <?php if($view_product['priceevent'] > 0){ ?>
      <?php $tongtienkm += $value['qty'] * ($view_product['price'] - $view_product['priceevent']); ?>
      <?php } ?>
      <?php endforeach; ?>
      <div class="col-lg-5 col-xl-4">
        <div class="order_sidebar_widget style2">
          <h4 class="title">Tổng tiền thanh toán</h4>
          <ul>
            <li class="subtitle"><p>Tổng tiền <span class="float-end"><?= number_format($tongtien); ?> đ </span></p></li>
            <li class="subtitle"><p>Đã được khuyến mãi <span class="float-end">-<?= number_format($tongtienkm); ?> đ</span></p></li>
            <li class="subtitle"><hr></li>
            <li class="subtitle totals"><p>Tổng tiền: <span class="float-end"><?= number_format($this->cart->total()); ?> đ</span></p></li>
          </ul>
          <hr>
          <h4 class="title">Thông tin vận chuyển</h4>
          <form action="" method="post">
            <div class="mb-2 mr-sm-2">
              <label class="form-label" style="color: #000;">Tên người mua hàng <span style="color:red;">*</span></label>
              <input type="text" class="form-control form_control" placeholder="Tên khách hàng" name="nguoimuahang" required>
            </div>
            <div class="form-group mb5">
              <label class="form-label" style="color: #000;">Số điện thoại <span style="color:red;">*</span></label>
              <input type="text" class="form-control form_control" placeholder="Nhập số điện thoại" name="phone" required>
            </div>
            <div class="form-group mb5">
              <label class="form-label" style="color: #000;">Địa chỉ <span style="color:red;">*</span></label>
              <input type="text" class="form-control form_control" placeholder="Nhập địa chỉ chi tiết" name="diachi" required>
            </div>
            <div class="form-group mb5">
              <label class="form-label" style="color: #000;">Email <span style="color:red;">*</span></label>
              <input type="email" class="form-control form_control" placeholder="Nhập địa chỉ chi tiết" name="email" required>
            </div>
            <div class="form-group mb5"><label class="form-label" style="color: #000;">Ghi chú</label>
             <textarea name="ghichu" class="form-control form_control"></textarea>
           </div>
           <div class="ui_kit_button payment_widget_btn">
            <button type="submit" class="btn btn-thm btn-block" name="datmua">Đặt mua</button>
        </div>
         </form>
      </div>
    </div>
  <?php } ?>
  </div>

</div>
</section>