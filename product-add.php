<!DOCTYPE html>
<html lang="en">
<?php
    require_once("./connect.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <!------ Include the above in your HEAD tag ---------->
    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="./product-add-back.php">
        <fieldset>
            <!-- Form Name -->
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">Tên sản phẩm</label>
                <div class="col-md-4">
                    <input id="product_name" name="txtName" placeholder="Tên sản phẩm" class="form-control input-md"
                        required="" type="text">
                </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_categorie">Danh mục sản phẩm</label>
                <div class="col-md-4">
                    <select id="product_categorie" name="category" class="form-control">
                        <?php
                        $sql = "SELECT * FROM categories";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $row['id']; ?>">
                            <?php echo $row['name']; ?>
                        </option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="available_quantity">Số Lượng </label>
                <div class="col-md-4">
                    <input id="available_quantity" name="txtNumber" placeholder="Số lượng"
                        class="form-control input-md" required="" type="text">
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="percentage_">Giá</label>
                <div class="col-md-4">
                    <input id="percentage_" name="txtPrice" min="20000" placeholder="Giá" class="form-control input-md"
                        required="" type="number">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="percentage_discount">Phầm trăm giảm(nếu có)</label>
                <div class="col-md-4">
                    <input id="percentage_discount" name="txtSalePrice" placeholder="Phầm trăm giảm(nếu có)"
                        class="form-control input-md" required="" type="text">

                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="approuved_by">Nhập từ cho khách hàng tìm kiếm </label>
                <div class="col-md-4">
                    <input id="approuved_by" name="txtKeyword" placeholder="Nhập từ cho khách hàng tìm kiếm"
                        class="form-control input-md" required="" type="text">
                </div>
            </div>
            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_description">Mô tả sản phẩm </label>
                <div class="col-md-4">
                    <textarea class="form-control" id="product_description" rows="5" name="txtDescript"></textarea>
                </div>
            </div>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="filebutton">Chọn hình ảnh sản phẩm</label>
                <div class="col-md-4">
                    <input id="filebutton" name="img" class="input-file" type="file">
                </div>
            </div>
            <!-- File Button -->
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-3">
                    <button id="singlebutton" name="button" class="btn btn-primary">Thêm</button>
                </div>
                
            </div>

        </fieldset>
    </form>

</body>

</html>