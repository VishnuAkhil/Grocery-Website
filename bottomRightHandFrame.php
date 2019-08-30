
<?php
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>bottomRightHandFrame</title>
<script type="text/javascript">
  function checkCart(){
    var data = document.getElementById("checkoutbtn").value;
    if (data == 0) {
      alert("Please enter items into the cart");
      return false;
    }
    test();
     return true;
  }

</script>

<style>
.button {
  background-color: #555555;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {background-color: #f44336;} /* Red */

header {
  background-color: #555555;
  padding: 3px;
  text-align: center;
  font-size: 17px;
  color: white;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
  <header><h1>Shopping Cart</h1></header>

  <table id = "myTable">
  <tr>
    <th>Product</th>
    <th>Price</th>
    <th>Quntity Selcted</th>
    <th>Total Price</th>
  </tr>
      <?php
       ini_set('display_errors', '1');
       $product = $_REQUEST['selectedItems'];
       $quantity = $_REQUEST['quantityOfItems'];

         if (!empty($_REQUEST['selectedItems'])){
           if(!isset($_SESSION['cart'])){
               $_SESSION['cart'][0] = $_REQUEST['selectedItems'];
               $_SESSION['noQuantity'][0] = $_REQUEST['quantityOfItems'];
           }else{
               $_SESSION['cart'][] = $_REQUEST['selectedItems'];
               $_SESSION['noQuantity'][] = $_REQUEST['quantityOfItems'];
           }
         }
         if(isset($_GET['clearCart'])){
             // print_r($_SESSION['cart']);
             unset($_SESSION['cart']);
             unset($_SESSION['noQuantity']);
            }
         //Object oriented style
         $mysqli = new mysqli('rerun', 'potiro', 'pcXZb(kL', 'poti');

         // check connection
         if (mysqli_connect_errno()) {
             printf("Connect failed: %s\n", mysqli_connect_error());
             exit();
         }

       $index = 0;
       $totalPrice = 0;

       foreach ($_SESSION['cart'] as $p) {
        global $index,$totalPrice;
       $query = "select * from products where product_id = ".$p."";
       // echo $query;
           if ($result = $mysqli->query($query)) {
             global $index,$totalPrice;
           // fetch object array
           while ($row = $result->fetch_row()) {
            global $index,$totalPrice;
             $x = $_SESSION['noQuantity'][$index];
             $totalPrice = $totalPrice + ($row[2] * $x);
            echo "<tr>
                  <td>".$row[1]. "</td>
                  <td> $ ".$row[2]. "</td>
                  <td>".$x. "</td>
                  <td> $ ".$row[2] * $x. "</td>
                  </tr>";
           }
           // free result set
           $result->close();
          }
          $index = $index + 1;
         }
         // close connection
         $mysqli->close();
     ?>
     <tr>
       <td> </td>
       <td> </td>
       <td>Total Price </td>
       <td><?php echo " $ ".$totalPrice; ?></td>
     </tr>
  </table>

      <form style ='float: left' action="<?php $_SERVER["PHP_SELF"]; ?>" method = "GET">
        <input type="submit" class="button button3" name ="clearCart" value="Clear Cart" />
      </form>
      <button style ='float: right' type="button" class="button" id = "checkoutbtn" name="checkoutbtn" onclick="return checkCart()" value = '<?php echo $totalPrice; ?>'>Check Out</button>
      <script>
      function test(){
        window.parent.document.getElementById("RightHandFrame").setAttribute("src", "checkout.php");
        window.parent.document.getElementById("leftHandFrame").setAttribute("src", "noChange.php");
        console.log(window.parent.document);
      }
      </script>
</body>
</html>
