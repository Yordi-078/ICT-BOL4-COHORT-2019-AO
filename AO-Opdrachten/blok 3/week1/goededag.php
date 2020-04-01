<?php
date_default_timezone_set("Europe/Amsterdam");
$message ="";
$background = "";
$time = date("H");
$timezone = date("e");
$time = 1;
if ($time >= 6 && $time < 12) {
    $background = "morning";
  $message = "Goede Morgen!";
 
} 

else if ($time >= 12 && $time < 18) {
    $background = "afternoon";
    $message = "Goede Middag!";
} 

else if ($time >= 18 && $time < 24) {
    $background = "evening";
    $message = "Goede Avond!";
    
}

else if ($time >= 0 && $time < 6) {
    $background = "night";
    $message = "Goede Nacht!";
}

$livet = "Het is nu " . date("H:i");

?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assest/css/goededag.css">
</head>
<body class="<?php echo $background?>">


<div class="container">
<div class="<?=$background?>"></div> 

<div class = "goededag"><h1> <?php echo $message ?></h1></div>
<div class = "live"><h1> <?php echo $livet ?></h1></div>

</div>
</div>

</body>
</html>