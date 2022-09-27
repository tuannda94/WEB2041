<?php
// Danh sach sinh vien
// 1. Đưa kết nối vào
require('db.php');
// 2. Định nghĩa SQL
$sql = "SELECT * FROM sinh_vien";
// 3. Chuẩn bị câu truy vấn
$statement = $connect->prepare($sql);
// 4. Thực thi
$statement->execute();
// 5. Lấy dữ liệu
$ds_sinh_vien = $statement->fetchAll();

?>
<a href="tao_moi_sinh_vien.php">Tạo mới sinh viên</a>
<table>
    <thead>
        <tr>
            <th>Ma sv</th>
            <th>Ten sv</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>
