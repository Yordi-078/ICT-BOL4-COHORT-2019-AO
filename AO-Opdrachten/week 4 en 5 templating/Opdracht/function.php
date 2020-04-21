<?php
function openDataBaseConnection(){
    $servername = "localhost";
    $username = "Yordi";
    $password = "Dordrecht01";
    $dbname = "heroes";
  
    $conn = new PDO('mysql:host=localhost;dbname=heroes', $username, $password);

    return $conn;

}

function getOneMember($name){
    $conn = openDataBaseConnection();
    $statement = $conn->prepare('SELECT * FROM characters WHERE `name` = :inputName');
    $statement->execute([":inputName" => $name]);

    return $statement->fetch();
}


function getAllMembers(){
    $conn = openDataBaseConnection();
    $stnt=$conn->prepare("SELECT id, name,avatar,health,attack,defense From characters Order By name");
    $stnt->execute();

    return $stnt ->fetchAll();
}

function getAllLocations(){
    $conn = openDataBaseConnection();
    $stnt=$conn->prepare('SELECT * FROM locations');
    $stnt->execute();
    $conn = null;
    return $stnt->fetchAll();
}

function updateLocation($id, $characterid){
    var_dump($characterid);
    $conn = openDataBaseConnection();
    $stnt=$conn->prepare("UPDATE characters  SET location = $id WHERE id = :inputcharacterid");
    $stnt->execute([":inputcharacterid" => $characterid]);
    
}

function deleteLocation($id){
    $conn = openDataBaseConnection();
    $stnt=$conn->prepare("DELETE FROM characters WHERE id= :id");
    $stnt->execute(["id" => $id]);
}








?>

