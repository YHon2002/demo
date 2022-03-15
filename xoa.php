<?php
// include "connect.php";

// if (isset($_GET['id'])){
//     $id=$_GET['id'];}
// $sql = "DELETE FROM products WHERE id =$id";
// mysqli_query($conn,$sql);
// header("location: index1.php");

   error_reporting(E_ALL ^ E_DEPRECATED);
   require_once './connect.php';
   error_reporting(0);
  // Xóa sản phẩm theo id
   if (isset($_GET['idProducts']))
   {
      $idProduct = $_GET['idProducts'];
      $sq1 = "DELETE FROM products WHERE id = ". $idProduct;
      $result = mysqli_query($conn,$sql);
      if ($result)
      {
?>
      <script type="text/javascript">
         window.location = 'product-list.php?ps-success';
      </script>
<?php
       } else {
?>
      <script type="text/javascript">
           window.location = 'product-list.php?pf=fail';
      </script>
<?php
        }
    }
?>
