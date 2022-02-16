<!-- 1. Create the HTML you need What elements does the form need?
2. Figure out what a form submit actually means / does
3. How to get the form data after the submit?
4. Calculate the amount in the desired valuta
5. Figure out a way to provide this data in the HTML -->
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
  <form action="" method="POST">

    <label for="input_currency">
        <input type="number" name="input_currency" id="input_currency" placeholder="Enter amount in EUR">
    </label>
   <span> Convert to:</span>
    <select>
        <option value="">Pakistani Rupees</option>
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

  <p>You will get: <?php echo "result goes here"; ?> </p>
</body>
</html>

<?php

?>


