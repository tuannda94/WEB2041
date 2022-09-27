<?php
// Điều hướng đến các phần khác nhau khi tiếp nhận yêu cầu

// 1. Khi url= trên trình duyệt ghi ds_san_pham => Gọi đến hàm hienThiDSSanPham trong này

require('models/SanPham.php');

function hienThiSanPham() {
    // Cần lấy dữ liệu san phẩm trong DB ra
    $ds_sp = layDSSanPham();
    // biến $ds_sp chính là biến được bắn sang danh_sach.php vì code php đọc từ trên xuống
    // Cần lôi view views/san_pham/danh_sach.php hiển thị ra
    include('views/san_pham/danh_sach.php');
}

function hienThiChiTietSanPham() {

}

function formTaoSanPham() {
    include('views/san_pham/tao_moi.php');
}
