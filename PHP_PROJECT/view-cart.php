<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        .cart-img {
            width: 90px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container mt-4">
    <h2 class="text-center">
    <i class="bi bi-cart-fill" style="font-size: 32px;"></i>
    Giỏ hàng của 
    <?php
         echo isset($_SESSION['username']) ? $_SESSION['username'] : 'bạn';
    ?>
    </h2>
    <hr>

    <?php if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0): ?>
        
        <h4 class="text-center text-danger">Giỏ hàng hiện đang trống!</h4>
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-primary">Quay lại mua hàng</a>
        </div>

    <?php else: ?>

        <table class="table table-bordered table-hover mt-3">
            <thead class="bg-info text-center">
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>

            <?php
                $total = 0;
                foreach ($_SESSION['cart'] as $item):
                    $subtotal = $item['price'] * $item['quantity'];
                    $total += $subtotal;
            ?>
                <tr class="text-center">
                    <td><img src="<?php echo $item['image']; ?>" class="cart-img"></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo number_format($item['price']); ?> đ</td>
                    <td>
                        <form action="update-qty.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                            <input type="number"
                                name="quantity"
                                value="<?php echo $item['quantity']; ?>"
                                min="1"
                                class="form-control text-center"
                                style="width: 70px;"
                                onchange="this.form.submit();"
                            >
                        </form>
                    </td>
                    <td><?php echo number_format($subtotal); ?> đ</td>
                    <td>
                        <a onclick="return confirm('Xóa sản phẩm này?')" 
                           href="remove.php?id=<?php echo $item['id']; ?>" 
                           class="btn btn-danger btn-sm">
                            Xóa
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>

        <h3 class="text-right text-success">
            Tổng tiền: <?php echo number_format($total); ?> đ
        </h3>

        <div class="text-right mt-3">
            <a href="index.php" class="btn btn-primary">Quay lại trang chủ</a>
            <a href="checkout.php" class="btn btn-success">Thanh toán</a>
        </div>

    <?php endif; ?>
</div>
</body>
</html>
