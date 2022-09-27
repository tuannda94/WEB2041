<?php
// Model này đại diện cho bảng san_pham trong DB và sẽ thực hiện các hàm
// tương tác với bảng đó

// Lấy hàm getData từ db
require_once('models/db.php');

$table = 'san_pham';

// Lấy danh sách
function layDSSanPham() {
    $sql = "SELECT * FROM san_pham";
    $san_pham = getData($sql, FETCH_ALL);
    return $san_pham;
}
// Lấy một
function layMotSanPham($id) {
    $sql = "SELECT * FROM san_pham WHERE id=$id";
    $san_pham = getData($sql, FETCH_ONE);
    return $san_pham;
}
// Thêm mới
function themMoiSanPham($san_pham_moi) {
    $ten_sp = $san_pham_moi['ten_san_pham'];
    $sql = "INSERT INTO san_pham (ten) VALUES ($ten_sp)";
    getData($sql, NOT_FETCH);
}
// Cập nhật
// Xoá
