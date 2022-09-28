<!-- Thay đổi tư tưởng về việc di chuyển qua các màn hình -->
<!-- http://localhost?url=tên_chức_năng -->
<!-- Chức năng nào sẽ được làm gì bằng cách so sánh chuỗi của switch case -->
<!-- url=trang-chu -> trang-chu đại diện cho hàm hiển thị giao diện trang chủ -->
<!-- url=tao-moi -> tao_moi đại diện cho hàm hiển thị giao diện tạo mới -->

<?php
$url = isset($_GET['url']) ? $_GET['url'] : 'trang-chu';

switch ($url) { // kiểm tra xem url vào thằng nào để gọi hàm tương ứng
    case 'trang-chu':
        // gọi hàm hiển thị trang chủ trong controller tên là GiaoVienController, hàm tên là trangChu()
        break;
    case 'tao-moi';
        // gọi hàm hiển thị giao diện tạo mới trong GiaoVienController tên là giaoDienTaoMoi()
        break;
    default:
        echo 'Đường dẫn không tồn tại';
        break;


}
