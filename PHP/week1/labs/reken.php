
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>
<?php

$getal1 = rand(10,100);
$getal2 = rand(10,100);


echo $getal1 . "x" . $getal2 . "=" . ($getal1 * $getal2)."<br>";
echo $getal1 . "-" . $getal2 . "=" . ($getal1 - $getal2)."<br>";
echo $getal1 . "+" . $getal2 . "=" . ($getal1 + $getal2)."<br>";

  


?>
</h1>

</body>
</html>