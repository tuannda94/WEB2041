<?php
require 'Models/db.php';

function layDSGiaoVien() {
    // Model là nơi tương tác với DB để lấy dữ liệu hoặc thay đổi dữ liệu
    $sql = "SELECT * FROM giao_vien";
    return getData($sql, FETCH_ALL);
}
