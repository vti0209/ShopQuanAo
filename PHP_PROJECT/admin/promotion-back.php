<?php 
require_once('../model/connect.php');

// Xóa
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM promotions WHERE id = $id");
    header("Location: promotion-back.php?deleted=1");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Khuyến mãi</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2 class="text-center">QUẢN LÝ KHUYẾN MÃI</h2>

    <a href="promotion-add.php" class="btn btn-success">+ Thêm khuyến mãi</a>
    <br><br>

    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Sản phẩm</th>
            <th>Nội dung</th>
            <th>Hành động</th>
        </tr>

        <?php
            $sql = "SELECT promotions.*, products.name AS product_name
                    FROM promotions 
                    JOIN products ON promotions.product_id = products.id";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['product_name']; ?></td>
            <td><?php echo $row['contents']; ?></td>
            <td>
                <a href="promotion-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Sửa</a>
                <a onclick="return confirm('Xóa?')" 
                   href="promotion-back.php?delete=<?php echo $row['id']; ?>" 
                   class="btn btn-danger btn-sm">Xóa</a>
            </td>
        </tr>
        <?php } ?>

    </table>
<div><a href="index.php" class="btn btn-danger"> Quay lại trang Sản phẩm</a></div>
</div>

</body>
</html>
