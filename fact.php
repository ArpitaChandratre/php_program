<html>
<head>
<title>factorial program using loop in php</title>
</head>
<body>
<form method="post">
     enter the number:<br>
<input type="number" name="number"id="no">
<input type="submit"/>
</form>
<?php
   if($_POST){
      $fact = 1;
       //getting value from input text box 'number'
    $n = $_POST['number'];
    echo "factorial of $n:<br><br>";
//start loop
for ($i = 1; $i <= $n; $i++){
     $fact = $fact * $i;
}
echo $fact . "<br>";
}?>
</body>
</html>