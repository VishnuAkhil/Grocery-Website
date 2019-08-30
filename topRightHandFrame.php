

<!DOCTYPE html>
<html>
<head>
  <style>
  /* Style the header */
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

  header {
    background-color: #555555;
    padding: 5px;
    text-align: center;
    font-size: 20px;
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
  <script type="text/javascript">
  function check_field(){
    var data_entered  = document.getElementById("quantityOfItems").value;
    if(!data_entered){
      alert("Please Enter the quantity of items");
      return false;
    }
    if(!data_entered){
      alert("Please Enter the quantity of items");
      return false;
    }
    if(data_entered > 20){
      alert("Please enter a quntity less than or equal to 20");
      return false;
    }
    return true;
  }
  </script>
  <script>
    // WRITE THE VALIDATION SCRIPT.
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57)){
          alert("Please enter a valid input");
          return false;
        }
        if(iKeyCode == 46){
          alert("Please enter a integer number.");
          return false;
        }
        return true;
    }
</script>
<base target="bottomRightHandFrame">
<title>topRightHandFrame</title>
</head>
<body bgcolor="#E5E8E8">

  <header> <h2> VISHNU'S ONLINE GROCERY </h2> </header>
  <h1>Please select a product or quantity</h1>
  <table>
<tr>
  <th>Product</th>
  <th>Price</th>
  <th>Available in quntity</th>
  <th>Stock available</th>
</tr>
<?php
ini_set('display_errors', '1');
$productID = $_REQUEST['Grocery'];
      //Object oriented style
      $mysqli = new mysqli('rerun', 'potiro', 'pcXZb(kL', 'poti');

      // check connection
      if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
      }

      $query = "select * from products where product_id = '".$productID."'";

      if ($result = $mysqli->query($query)) {

          // fetch object array
          while ($row = $result->fetch_row()) {
            printf("
                    <tr>
                    <td> %s </td>
                    <td> %s </td>
                    <td> %s </td>
                    <td> %s </td>
                    </tr>"
                    ,$row[1],$row[2],$row[3],$row[4]);
              ?>
              </table>
              <form method = "POST" action = "bottomRightHandFrame.php" onsubmit="return check_field()">
               <p>Quantity You want to add : </p>
               <input type = "text" name = "quantityOfItems" id = "quantityOfItems" onkeypress="javascript:return isNumber(event)">
               <button type = "submit" name = "selectedItems" class="button" target = "bottomRightHandFrame" value = '<?php echo $productID; ?>'>ADD TO CART</button>
             </form>
             <?php
         }

         // free result set
         $result->close();
     }

     // close connection
     $mysqli->close();

?>

</body>
</html>
