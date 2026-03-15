<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<?php
// require_once('../model/header.php');
require_once('../model/connect.php');
error_reporting(2);

// Xóa sản phẩm
if (isset($_GET['ps']))
{
echo "<script type=\"text/javascript\">
alert(\"Bạn đã xóa sản phẩm thành công!\");
</script>";
}
if (isset($_GET['pf']))
{
echo "<script type=\"text/javascript\">
alert(\"Không thể xóa sản phẩm!\");
</script>";
}

// Thêm sản phẩm
if (isset($_GET['addps']))
{
echo "<script type=\"text/javascript\">
alert(\"Bạn đã thêm sản phẩm thành công!\");
</script>";
}
if (isset($_GET['addpf']))
{
echo "<script type=\"text/javascript\">
alert(\"Thêm sản phẩm thất bại!\");
</script>";
}
?>

<!-- page content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-header text-danger">Danh sách sản phẩm</h1>
                <a href="product-add.php"><button type="button" class="btn btn-primary"> + Thêm sản phẩm </button></a><br><br>
                <a href="promotion-back.php"><button type="button" class="btn btn-warning"> + Thêm Khuyến mãi cho Sản phẩm </button></a><br><br>
            </div><!-- /.col --><br>
            <br><table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead> 
                    <tr align="center">
                        <th> STT </th>
                        <th> Tên sản phẩm </th>
                        <th> Mã danh mục </th>
                        <th> Hình ảnh </th>
                        <th> Giá </th>
                        <th> Giảm giá </th>
                        <th> Update </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						$sql = "SELECT * FROM products ORDER BY id DESC";
						$result = mysqli_query($conn,$sql);

						if ($result)
						{
							while ($row = mysqli_fetch_assoc($result))
							{
								if ($row['image'] == null || $row['image'] == '')
								{
                                	$thumbImage = "";
		                        } else {
		                            $thumbImage = "../" . $row['image'];
		                        }
					?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['category_id']; ?></td>
                        <td>
                            <img src="<?php echo $thumbImage; ?>" width="100px" ; height="100px" ;>
                        </td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['saleprice']; ?></td>

                        <td class="center">
                            <p><a href="product-edit.php?idProduct=<?php echo $row['id']; ?>"><i class="fa fa-pencil fa-lg" title="Chỉnh sửa"><button>Chỉnh sửa</button></i></a></p>
                        </td>
                        <td class="center">
                        <a href="product-delete.php?idProducts=<?php echo $row['id']; ?>"><i class="fa fa-trash-o fa-lg" title="Xóa"><button>Xóa</button></i></a>
                        </td>
                    </tr>
                    <?php
							}
						}
					?>
                </tbody>
            </table>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->