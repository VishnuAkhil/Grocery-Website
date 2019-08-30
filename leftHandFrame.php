<!DOCTYPE html>
<html>
<head>
<title>leftHandFrame</title>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  border: white;
  min-width: 90%;
  left: 0;
  //box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.button {
  background-color: #555555;
  border: white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  //display: inline-block;
  min-width: 90%;
  font-size: 16px;
  border: 5;
  margin: 4px 2px;
  cursor: pointer;
}

.dropbtn {
  background-color: #e7e7e7;
  color: Black;
  min-width: 90%;
  padding: 16px;
  font-size: 16px;
  border: none;
}
</style>

<base target="topRightHandFrame">
</head>

<body bgcolor="#555555">

 <center><h1><span style="color: White">GROCERY</h1></center>

 <div class="dropdown">
   <img id = pic1 src="frozenFood.png" alt="Frozen Food" border="4px" width="100%" height="5%"
   onmouseover = 'pic1.src = "FrozenFood2.png";' onmouseout = 'pic1.src = "frozenFood.png"'>
   <div class="dropdown-content">

     <form action="topRightHandFrame.php" method="get" class="dropdown-content" id="nameform">
       <button type="submit" name="Grocery" form="nameform" value="1002" class="button">Hamburger Patties</button>
       <button type="submit" name="Grocery" form="nameform" value="1003" class="button">Shelled Prawns</button>
       <button type="submit" name="Grocery" form="nameform" class="button" disabled>Fish Fingers</button>
       <button type="submit" name="Grocery" form="nameform" value="1000" class="dropbtn">500gms</button>
       <button type="submit" name="Grocery" form="nameform" value="1001" class="dropbtn">1000gms</button>
       <button type="submit" name="Grocery" form="nameform"  class="button" disabled>Tub IceCream</button>
       <button type="submit" name="Grocery" form="nameform" value="1004" class="dropbtn">1 Litre</button>
       <button type="submit" name="Grocery" form="nameform" value="1005" class="dropbtn">2 Litre</button>
    </form>

   </div>
 </div>

 <div class="dropdown">
   <img id = pic2 src="freshFood.png" alt="Frozen Food" border="4px" width="100%" height="5%"
   onmouseover = 'pic2.src = "FreshFood2.png";' onmouseout = 'pic2.src = "freshFood.png"'>
  <div class="dropdown-content">
    <form action="topRightHandFrame.php" method="get" class="dropdown-content" id="nameform1">
      <button type="submit" name="Grocery" form="nameform1" value="3004" class="button">Bananas</button>
      <button type="submit" name="Grocery" form="nameform1" value="3006" class="button">Grapes</button>
      <button type="submit" name="Grocery" form="nameform1" value="3007" class="button">Apple</button>
      <button type="submit" name="Grocery" form="nameform1" value="3005" class="button">Peaches</button>
      <button type="submit" name="Grocery" form="nameform1" value="3003" class="button">Navel Oranges</button>
      <button type="submit" name="Grocery" form="nameform1" value="3002" class="button">T'Bone Steak</button>

        <button type="submit" name="Grocery" form="nameform1" class="button" disabled>Cheddar Cheese</button>
         <button type="submit" name="Grocery" form="nameform1" value="3000" class="dropbtn">500gms</button>
         <button type="submit" name="Grocery" form="nameform1" value="3001" class="dropbtn">1000gms</button>
   </form>
 </div>
</div>

<div class="dropdown">
  <img id = pic3 src="beverages.png" alt="Frozen Food" border="4px" width="100%" height="5%"
  onmouseover = 'pic3.src = "Beverages2.png";' onmouseout = 'pic3.src = "beverages.png"'>
 <div class="dropdown-content">
   <form action="topRightHandFrame.php" method="get" class="dropdown-content" id="nameform2">
     <button type="submit" name="Grocery" form="nameform2" class="button" disabled>Instant Coffee</button>
      <button type="submit" name="Grocery" form="nameform2" value="4003" class="dropbtn">500gms</button>
      <button type="submit" name="Grocery" form="nameform2" value="4004" class="dropbtn">1000gms</button>

     <button type="submit" name="Grocery" form="nameform2" value="4005" class="button">Chocolate Bar</button>

     <button type="submit" name="Grocery" form="nameform2" class="button" disabled>Earl Gret Tea Bags</button>
      <button type="submit" name="Grocery" form="nameform2" value="4000" class="dropbtn">25 pack</button>
      <button type="submit" name="Grocery" form="nameform2" value="4001" class="dropbtn">100 pack</button>
      <button type="submit" name="Grocery" form="nameform2" value="4002" class="dropbtn">200 pack</button>

  </form>
</div>
</div>

<div class="dropdown">
  <img id = pic4 src="homeHealth.png" alt="Frozen Food" border="4px" width="100%" height="5%"
  onmouseover = 'pic4.src = "HomeHealth2.png";' onmouseout = 'pic4.src = "homeHealth.png"'>
 <div class="dropdown-content">
   <form action="topRightHandFrame.php" method="get" class="dropdown-content" id="nameform3">
     <button type="submit" name="Grocery" form="nameform3" class="button" disabled>Panadol</button>
      <button type="submit" name="Grocery" form="nameform3" value="2000" class="dropbtn">21 pack</button>
      <button type="submit" name="Grocery" form="nameform3" value="2001" class="dropbtn">50 bottle</button>

     <button type="submit" name="Grocery" form="nameform3" value="2002" class="button">Bath Soap</button>
     <button type="submit" name="Grocery" form="nameform3" value="2005" class="button">Laundry Bleach</button>
     <button type="submit" name="Grocery" form="nameform3" value="2006" class="button">Washing Powder</button>

     <button type="submit" name="Grocery" form="nameform3" class="button" disabled>Garbage Bags</button>
      <button type="submit" name="Grocery" form="nameform3" value="2003" class="dropbtn">pack 10</button>
      <button type="submit" name="Grocery" form="nameform3" value="2004" class="dropbtn">pack 50</button>

  </form>
</div>
</div>

<div class="dropdown">
  <img id = pic5 src="petFood.png" alt="Frozen Food" border="4px" width="100%" height="5%"
  onmouseover = 'pic5.src = "PetFood2.png";' onmouseout = 'pic5.src = "petFood.png"'>
  <div class="dropdown-content">

    <form action="topRightHandFrame.php" method="get" class="dropdown-content" id="nameform4">
      <button type="submit" name="Grocery" form="nameform4" value="1002" class="button">Bird Food</button>
      <button type="submit" name="Grocery" form="nameform4" value="1003" class="button">Cat Food</button>
      <button type="submit" name="Grocery" form="nameform4" value="1000" class="button">Fish Food</button>
      <button type="submit" name="Grocery" form="nameform4" class="button" disabled>Dry Dog Food</button>
      <button type="submit" name="Grocery" form="nameform4" value="1000" class="dropbtn">1kg pack</button>
      <button type="submit" name="Grocery" form="nameform4" value="1001" class="dropbtn">5kg pack</button>
   </form>

  </div>
</div>

</body>
</html>
