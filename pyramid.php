<!DOCTYPE html>
<html>
<head>
    <title>print pyramid</title>
</head>
<body>


<?php
$n = 4; // Change the number of rows here

// Outer loop for number of rows
for ($i = 1; $i <= $n; $i++) {
    // Inner loop for printing spaces
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // Inner loop for printing stars
    for ($k = 1; $k <= $i; $k++) {
        echo "*&nbsp;&nbsp;";
    }
    echo "<br />";
}
?>

</body>
</html>
