<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
    <style>
    </style>
</head>
<body>
        <div class="container">
            <div class="content_product_main">
                <div class="boyfs">
                    <?php
                    $sql = "SELECT id,name,image,price FROM products WHERE category_id =1";
                    $result =mysqli_query($conn,$sql);
                    while ($kq = mysqli_fetch_array($result)){
                    ?>
                    <div class="a">
                    <div class="index">
                            <div class="hoverimage1">
                            <?php echo "<img src=".$kq['image'].">"?>
                            </div>
                            <div class="name-product">
                                <?php echo $kq['name'];?>
                            </div>
                            <div class="price">
                                <?php echo $kq['price'];?><sup>đ</sup>
                            </div>
                        </div>
                    </div>                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
</body>
</html>