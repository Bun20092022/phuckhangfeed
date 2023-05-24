<?php $list_kh = $this->db->select('*')->from('qh_order')->where('phone',$phone)->order_by('creat','desc')->get()->result_array(); ?>
<section style="margin-top: 100px;margin-bottom: 100px;">
  <div class="container">
<div class="account_user_deails pl40 pl0-lg" style="padding-top: 80px;padding-bottom: 80px;">
  <h2 class="title mb30">Lịch sử đơn hàng</h2>
  <div class="order_table table-responsive">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Ngày đặt</th>
          <th scope="col">Tổng tiền</th>
          <th scope="col">Trạng thái</th>
          <th scope="col">Chi tiết</th>
        </tr>
      </thead>
      <tbody>
        <?php if(count($list_kh) == 0){ ?>
          <tr>
            <td colspan="5" class="text-center">Chưa có đơn hàng nào</td>
          </tr>
          <?php }else{ ?>
            <?php foreach ($list_kh as $value): ?>
              <?php $sanpham = json_decode($value['extend']); ?>
              <?php $thanhtien = 0; ?>
              <?php foreach ($sanpham as $value_sub): ?>
                <?php $thanhtien += ($value_sub->{'price'} * $value_sub->{'qty'}); ?>
              <?php endforeach; ?>
              <tr>
          <th scope="row">#Fitwell00<?= $value['id']; ?></th>
          <td><?= date('d-m-Y',$value['creat']); ?></td>
          <td><?= number_format($thanhtien);?> đ</td>
          <td class="status">
            <?php if($value['status'] == 24 || $value['status'] == 25){ ?>
              <span class="style3">Đang xử lý</span>
            <?php } ?>
            <?php if($value['status'] == 26){ ?>
              <span class="style1">Đơn hàng thành công</span>
            <?php } ?>
            <?php if($value['status'] == 27){ ?>
              <span class="style2">Đơn hàng hủy</span>
            <?php } ?>            
          </td>
          <td><a href="frontent/shop/view/<?= $value['id']; ?>">Xem chi tiết</a></td>
        </tr>
            <?php endforeach ?>
        
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</section>