<html>
<head>
<title>sum program using loop in PHP</title>
</head>
<body>

<form method="post">
     Enter the Number:<br>
     <input type="number" name="number" id="no">
     <input type="submit"/>
</form>

<?php
  if($_POST){
     $sum = 0;
     //getting value from input box 'number'
     $n = $_POST['number'];
     echo "Sum of $n:<br><br>";
     //start loop
     for($i = 1;$i <= $n;$i++){
      $sum += $i;
     }
     echo $sum . "<br>";
  }
?>
</body>
</html>
