<?php
    function openDatabaseConnection(){
        $servername = "localhost";
        $username = "Yordi";
        $password = "Dordrecht01!";
        $dbname = "to do list";
        
        $conn = new PDO('mysql:host=localhost;dbname=to do list', $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     // echo "Connected successfully";
            return $conn;
    }

 
    function insertList($name, $description){
        $conn = openDatabaseConnection();
        $stnt=$conn->prepare("INSERT INTO `lists` (`name`, `description`) Values (:name, :description)");
        $stnt->bindParam(':name', $name);
        $stnt->bindParam(':description', $description);     
        $stnt->execute();
    }

    function getAllLists(){
        $conn = openDataBaseConnection();
        $stnt=$conn->prepare('SELECT * FROM lists');
        $stnt->execute();
        return $stnt->fetchAll();
    }
   
?>