
<!-- Bình thường -->
<!-- DSSV: http://localhost/index.php
Tao moi SV: http://localhost/tao_moi_sinh_vien.php
Sửa SV: http://localhost/sua_sinh_vien.php -->

<!-- Thay vì ngay từ đầu vào giao diện các nút để chọn chức năng -->
<!-- Sử dụng 1 method GET ở trên url để biết là đang hoạt động với chức năng nào -->
<!-- http://localhost?ten_bien_1=gia_tri_1&ten_bien_2=gia_tri_2
$_GET['ten_bien_1'] = gia_tri_1;

http://localhost?url=tao_moi_sinh_vien
http://localhost?url=chinh_sua_sinh_vien -->
<?php

require('controllers/SanPham.php');

// Chỉ dùng để quản lý đường dẫn và điều hướng đến màn hình phù hợp
$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        hienThiSanPham();
        // Xử lý hiển thị trang chủ
        // Gọi đến controller tương ứng
        break;
    case 'ds_san_pham':
        // Xử lý hiển thị ds san pham
        hienThiSanPham();
    case 'tao_san_pham':
        // Xử lý hiển thị form tao san pham
        formTaoSanPham();
        break;
    // ...
    default:
        echo 'Đường dẫn không tồn tại';
        break;
}
