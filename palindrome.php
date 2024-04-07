<!DOCTYPE html>
<html>
<head>
<title>palindrome string using php</title>
</head>
<body>
<form action=""method="post">
enter a string: <br>
<input type="text" name="input_string">
  <input type="submit">
</form>
<?php
if($_POST){
$str=$_POST["input_string"];

$len=strlen($str);

$new_str=strrev($str);
echo $new_str ."<br>";
if($str==$new_str){
  echo "the given string is palindrome";
}
else{
  echo "the given string is not palindrome";
}
}
?>
</body>
</html>