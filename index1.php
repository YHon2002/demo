<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid"></div>
        <table class="bang">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th> <a href="product-add.php">ADD</a> </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="SELECT*FROM products";
                    $qr =mysqli_query($conn,$sql);
                    $count=1;
                    while ($row = mysqli_fetch_array($qr)){
                        echo"<tr>";
                        echo "<th>".$count++."</th>";
                        echo "<th>".$row['name']."</th>";
                        echo "<th> <img src=".$row['image']." style=width:7rem></th>";
                        echo "<th>".$row['price']."</th>";
                        echo "<th> <a href='sua.php?id=".$row['id']."'>update</a> | <a href='xoa.php?id=".$row['id']."'>delete</a></th>";
                        echo"</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>