<?php
$result = 0 ;
$rupees_rate = 200.68;
if ($_GET["currency_option"] === "Rupees"){
    $result = $rupees_rate * $_GET["input_currency"];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
</head>
<body>
  <h1>Going to Pakistan?</h1>  
  <p>Let me help you convert your Euros to Rupees</p>
  <form action="" method="get">

    <label for="input_currency">
        <input type="number" name="input_currency" id="input_currency" placeholder="Enter amount in EUR">
    </label>
   <span> Convert to:</span>
    <select name="currency_option">
        <option value="Rupees">Pakistani Rupees</option>
    </select>
    
    <input type="submit" value="convert">
    
    <!-- <br> -->
    <!-- 
    <label for="output_currency">
        <input type="number" name="output_currency" id="output_currency">
    </label>
    <select name="" id="">
        <option value="">Pakistani Rupees</option>
    </select> -->
  </form>

  <p>You will get: <?php echo $result ?> </p>
</body>
</html>


