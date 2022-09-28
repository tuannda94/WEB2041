<?php
// File này sẽ có các hàm chức năng được gọi đến khi url thay đổi tương ứng bên index.php

require 'Models/GiaoVien.php';

function trangChu() {
    // Để hiển thị giao diện trang chủ cần dữ liệu ds giáo viên + view html
    // 1. Lấy ds giáo viên -> Tìm đến model GiaoVien.php
    $ds_giao_vien = layDSGiaoVien();
    // 2. Sau khi nhận ds từ model GiaoVien -> cần view trang-chu.php trong thư mục Views
    include 'Views/trang-chu.php';
}

function giaoDienTaoMoi() {

}
