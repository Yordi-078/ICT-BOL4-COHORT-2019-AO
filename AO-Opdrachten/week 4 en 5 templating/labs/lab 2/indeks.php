<!DOCTYPE html>
<html>
<body>



<?php 

if(isset($_GET['subject'])){
$subject = $_GET['subject'];
} else {
    $subject = 'mezelf1';
}

include("$subject.php")
?>

<?php include("begin.php")  ?>



</body>
</html>