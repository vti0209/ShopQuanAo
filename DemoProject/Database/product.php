<?php
// 1. KẾT NỐI VÀ CHỈ ĐỊNH DATABASE THOITRANG
// Thay thế 'localhost', 'root', '' nếu thông tin kết nối của bạn khác
$mysqli = new mysqli("localhost", "root", "", "THOITRANG"); 

// Kiểm tra kết nối
if($mysqli->connect_error){ 
    die("ERROR: Could not connect to database THOITRANG. " . $mysqli->connect_error);
}

// 2. ĐỊNH NGHĨA CÂU LỆNH TẠO BẢNG
// Đặt tên bảng là 'products'
$sql_create_table = "CREATE TABLE products(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    img VARCHAR(100) NOT NULL,
    names VARCHAR(50) NOT NULL,
    price VARCHAR(30) NOT NULL
)";

// 3. THỰC THI CÂU LỆNH TẠO BẢNG
if($mysqli->query($sql_create_table) === TRUE){
    echo "Table **products** created successfully in database **THOITRANG**.";
}
else{
    // Lỗi có thể là do bảng đã tồn tại (ví dụ: Bạn chạy file này lần thứ 2)
    echo "ERROR: Could not able to execute $sql_create_table. Lý do: " . $mysqli->error;
}

// Đóng kết nối
$mysqli->close();

?>