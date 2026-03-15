<?php
    require_once('model/connect.php');
    // Success
    if(isset($_GET['cs'])) {
        echo "<script type=\"text/javascript\">alert(\"Gửi phản hồi thành công!\");</script>";
    }
    // Fail
    if(isset($_GET['cf'])) {
        echo "<script type=\"text/javascript\">alert(\"Gửi phản hồi thất bại!\");</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giới thiệu VTi Shop</title>
    <meta name="viewport" content = "width=device-width, initial-scale =1">
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../images/logohong.png">
    <!-- Bootstrap & libs -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/mylishop.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <script src='../js/wow.js'></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .intro-box { background:#fff; padding:20px; border-radius:8px; box-shadow:0 0 8px #ddd; }
        .intro-logo { width:160px; }
    </style>
</head>
<body>
    <!-- button top -->
    <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
    
    <!-- header -->
    <?php include 'model/header.php'; ?>
    <!-- /header -->

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php"> Trang chủ </a></li>
            <li> Dịch vụ chúng tôi </li>
        </ul><!-- /breadcrumb -->

        <div class="row">
            <div class="col-md-12">
                <div class="titles text-center">
                    <h3><strong>GIỚI THIỆU VTI SHOP</strong></h3>
                </div>

                <div class="intro-box row" style="margin-top:20px;">
                    <div class="col-md-4 text-center">
                        <img src="images/logohong.png" alt="VTi Logo" class="intro-logo">
                    </div>
                    <div class="col-md-8">
                        <h4>VTi Shop – NƠI MUA SẮM ĐÁNG TIN CẬY</h4>
                        <p style="text-align: justify;">
                        VTi Shop tự hào là điểm đến của những tín đồ thời trang yêu thích sự tinh tế và phong cách.
                        Chúng tôi không chỉ mang đến những sản phẩm chất lượng cao, được cập nhật theo xu hướng mới nhất, mà còn chú trọng đến từng chi tiết nhỏ nhất trong trải nghiệm mua sắm của bạn.

                        Với mong muốn xây dựng một không gian thời trang thân thiện, hiện đại và đầy cảm hứng, VTi Shop luôn đặt khách hàng làm trung tâm. Từ khâu chọn lựa sản phẩm, kiểm tra chất lượng, đến đóng gói và giao hàng, mọi quy trình đều được thực hiện bằng sự tận tâm, chuyên nghiệp và trách nhiệm.

                        Chúng tôi tin rằng thời trang không chỉ là những bộ trang phục — mà là cách bạn kể câu chuyện của chính mình. Vì thế, VTi Shop luôn sẵn sàng đồng hành, giúp bạn chọn được những item phù hợp nhất với phong cách và cá tính riêng.

                        Tiện lợi, an toàn và tràn đầy cảm hứng
                        VTi Shop mang đến trải nghiệm mua sắm trực tuyến nhanh chóng, dễ dàng và bảo mật. Dù bạn ở đâu, chỉ cần vài thao tác là sản phẩm yêu thích sẽ được giao đến tận tay, an toàn và đúng hẹn.

                        VTi Shop – Nơi phong cách bắt đầu và tự tin lên tiếng.
                        Cảm ơn bạn đã tin tưởng và đồng hành cùng chúng tôi!
                        </p>
                        <p>Giờ mở cửa: 08:00 - 20:00 (Thứ 2-Thứ 7) | Hotline: (+84) 373.532.152</p>
                    </div>
                </div>
            </div><!-- /col -->
        </div><!-- /row -->
    </div><!-- /container -->
<!-- Form phản hồi (Link tới lienhe.php) -->
<center>
   <br><a href="lienhe.php"><button type="submit" style="background:linear-gradient(45deg,#00B4D8,#0077B6); border:none; color:white;" class="btn btn-info"> Gửi phản hồi </button></a>
</center>
<!-- footer -->
<?php include 'model/footer.php'; ?>

<script>
    new WOW().init();
</script>
</body>
</html>
