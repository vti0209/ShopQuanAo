<?php
session_start();
// Nếu vào thẳng không POST dữ liệu → quay về giỏ hàng
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: view-cart.php");
    exit();
}

// Tạo mã đơn hàng ngẫu nhiên
$order_id = rand(100000, 999999);

// Xóa giỏ hàng sau khi đặt thành công
unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đặt hàng thành công</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f7f8;
            padding: 40px;
            text-align: center;
        }
        .box {
            background: white;
            width: 450px;
            margin: auto;
            padding: 30px;
            box-shadow: 0 0 10px #ccc;
            border-radius: 10px;
        }
        h2 {
            color: #2ecc71;
        }
        .btn {
            padding: 10px 18px;
            display: inline-block;
            margin-top: 20px;
            background: #3498db;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn:hover {
            background: #2980b9;
        }
        .order-id {
            font-size: 18px;
            color: #444;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Đặt hàng thành công!</h2>
    <p>Cảm ơn bạn đã ghé VTi shop để đặt hàng.</p>
    <img src="images/logohong.png" alt="" style="width:200px;">
    <p>Chúc bạn một ngày đầy năng lượng!</p>
    <p class="order-id">Mã đơn hàng: #<?php echo $order_id; ?></p>

    <a href="index.php" class="btn">Quay về trang chủ</a>
</div>

</body>
</html>
