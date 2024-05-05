<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANTEEN</title>
        <!-- style for submit button -->
<style>
    input[type="submit"] {
        background-color: gray;
        color: white; 
        padding: 10px;
        border-color: 10px black;
        border-radius: 5px; 
        cursor: pointer; 
        font-size: 16px;
    }
    </style>
</head>
    <h1>
        SIMPLE CANTEEN NI ICHEL 
    </h1>
    <H2>
        HERE ARE THE MENU:
    </H2>
<body>
    <!-- HERE ARE THE UNORDERLIST MENU -->
    <ul>
        <li>FISH BALL- 30PH</li>
        <li>KIKIAM - 40PHP</li>
        <li>CORNDOG - 50PHP</li>
    </ul>
<!-- CHOOSING OF ORDER -->
<form action="order.php" method="GET">
<label for="order">Choose your order</label>
<select name="order" id="order">
  <option value="FISH BALL">FISH BALL</option>
  <option value="KIKIAM">KIKIAM</option>
  <option value="CORNDOG">CORNDOG</option>
</select>
    <!-- HERE THE PHP IF CLICK THE SUMBIT  -->
        <p>Quantity:<input type="text" placeholder="" name="Quantity"></p>
        <p>Cash <input type="text" placeholder="" name="Cash"></p>
    	            <!-- Submit button -->
        <p ><input type="submit" value="Submit" name="getorder"></p>
    </form>
</body>
</html>