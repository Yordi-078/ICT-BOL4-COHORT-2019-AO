

<!DOCTYPE html>
<html>
<body>


<?php
$nameErr = $emailErr = "";

if(!empty($_POST)){
    $name = $_POST["name"];
    $name = htmlspecialchars($name);
   echo "<br>";
?>

    <?php
    } 
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";

      }

    if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    }

    if(!empty($_POST)){
        ?>
        <h1> Welkom <?php echo $name ?> </h1> 
        <h1> Jouw email = <?php echo $_POST["email"]; ?> </h1> 
    <?php
    
  }
?>

<form action="hulp.php" method="post">
    <p><span class="error">* required field</span></p>
             Name: <input type="text" name="name">
             <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
             E-mail: <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
         <input type="submit">
</form>


</body>
</html>
