


<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="lab4.css">
<html>
<body>



<?php 
include("header.php");
?>

<?php 
$servername = "localhost";
$username = "Yordi";
$password= "Dordrecht01";
$databasename= "databank_php";

try{
    $conn = new PDO("mysql:host=localhost;dbname=$databasename;", $username, $password);
    echo "connected succesfully";
}

catch(PDOexception $e){
    echo "connection failed". $e->getMessage();
}




$stmt = $conn -> prepare ('SELECT * FROM onderwerpen');
$stmt -> execute();
$result = $stmt -> fetchAll();


if(isset($_GET['subject'])){
    $subject = $_GET['subject'];
    } else {
        $subject = 'mezelf1';
    }
    
    include("$subject.php")


?>

<?php 
include("footer.php");
?>





</body>
</html>