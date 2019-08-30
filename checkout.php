<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
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
</style>
</head>
<body bgcolor="#E5E8E8">

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $addressErr = $suburbErr = $stateErr = $countryErr = "";
$name = $email = $gender = $comment = $address = $suburb = $state = $country  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["address"])) {
    $addressErr = "address is required";
  }else{
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["suburb"])) {
    $suburbErr = "suburb is required";
  } else {
    $suburb = test_input($_POST["suburb"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[a-zA-Z ]*$/",$suburb)) {
      $suburbErr = "Invalid suburb format";
    }
  }

  if (empty($_POST["state"])) {
    $stateErr = "state is required";
  } else {
    $state = test_input($_POST["state"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
      $stateErr = "Invalid state format";
    }
  }

  if (empty($_POST["country"])) {
    $countryErr = "state is required";
  } else {
    $country = test_input($_POST["country"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[a-zA-Z ]*$/",$country)) {
      $countryErr = "Invalid country format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<header><h2>Check Out</h2></header>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="name">Name:   </label>
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <label for="email">E-mail:   </label>
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <label for="address">Address:   </label>
  <input type="text" name="address" value="<?php echo $address;?>">
  <span class="error">* <?php echo $addressErr;?></span>
  <br><br>
  <label for="suburb">Suburb:   </label>
  <input type="text" name="suburb" value="<?php echo $suburb;?>">
  <span class="error">* <?php echo $suburbErr;?></span>
  <br><br>
  <label for="state">State:   </label>
  <input type="text" name="state" value="<?php echo $state;?>">
  <span class="error">* <?php echo $stateErr;?></span>
  <br><br>
  <label for="country">Country:   </label>
  <input type="text" name="country" value="<?php echo $country;?>">
  <span class="error">* <?php echo $countryErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Additional comments: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="Purchase" class="button" value="Purchase">
</form>

<?php
$test_var = "";
if ($emailErr == "" && $nameErr == "" && $addressErr == "" && $suburbErr == "" && $stateErr == "" && $countryErr == "" && $genderErr == ""){
  if(isset($_POST['Purchase'])){
    $test_var = $_POST['email'];
    $subject = "Your ordered products";
    $message = "You have ordered on Vishnu's Online Grocery Shop";
    $from = "13174038@student.uts.edu.au";
    $headers = "From: $from";
    mail($test_var,$subject,$message,$headers);
    echo "<br><h2>A summary have been sent to your email.</h2>";
  }
}
?>

</body>
</html>
