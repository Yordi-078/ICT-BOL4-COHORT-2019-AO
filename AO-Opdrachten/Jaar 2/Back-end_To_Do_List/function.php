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

 /**
 * Insert list to the database
 *
 * @name {string} - name from the list
 * @description {string} - description from the list
 *
 *
 */
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

function editList2($id, $name, $description){
$conn = openDataBaseConnection(); 
$stnt = $conn->prepare("UPDATE `lists` SET id = :id, name = :name,  description = :description WHERE id = :id");
    
$stnt->bindParam(':id', $id);
$stnt->bindParam(':name', $name);
$stnt->bindParam(':description', $description);
$stnt->execute();
}


   /**
 * delete list from the database
 *
 * @id {int} - delete from database with id
 *
 *
 */
function deleteList($id){
    $conn = openDataBaseConnection();
    $stnt=$conn->prepare("DELETE FROM lists WHERE id= :deleteid");
    $stnt->execute([":deleteid" => $id]);
}

function deleteTaskID($id){
    $conn = openDataBaseConnection();
    $stnt=$conn->prepare("DELETE FROM task WHERE listid= :deleteid");
    $stnt->execute([":deleteid" => $id]);
}

/**
 * Insert task to the database
 *
 * @listid {int} listid - id from the list
 * @name {string} - name from the task
 * @description {string} - description from the task
 * @status {string} - status if task is completed
 * @time {time} - sets time that task is created or updated
 *
 *
 */
function insertTask($listid, $name, $description, $status, $time){
    $conn = openDatabaseConnection();
    $stnt=$conn->prepare("INSERT INTO `task` (`listid`,`name`, `description`, `status`, `time`) Values (:listid, :name, :description, :status, :time)");
    $stnt->bindParam(':listid', $listid);
    $stnt->bindParam(':name', $name);
    $stnt->bindParam(':description', $description);     
    $stnt->bindParam(':status', $status);
    $stnt->bindParam(':time', $time);
    $stnt->execute();
}

function getTasksWithId($id){
      $conn = openDataBaseConnection();
      $stnt = $conn->prepare("SELECT * FROM task WHERE listid = :id" );
      $stnt->execute([":id" => $id]);
      return $stnt->fetchAll();
      }  

function deleteTask($id){
    $conn = openDataBaseConnection();
    $stnt=$conn->prepare("DELETE FROM task WHERE id= :taskid");
    $stnt->execute([":taskid" => $id]);
    }

/**
 * Edit task from the database
 *
 * @listid {int} listid - id from the task to edit
 * @name {string} - new name from the task
 * @description {string} - new description from the task
 * @status {string} - new status if task is completed
 * @time {time} - new sets time that task is created or updated
 *
 *
 */
function editTask($id, $listid, $name, $description, $status, $time){
    $conn = openDataBaseConnection(); 
    $stnt = $conn->prepare("UPDATE `task` SET id = :id, listid = :listid,   name = :name,  description = :description,  status = :status,  time = :time WHERE id = :id");
        
    $stnt->bindParam(':id', $id);
    $stnt->bindParam(':listid', $listid);
    $stnt->bindParam(':name', $name);
    $stnt->bindParam(':description', $description);
    $stnt->bindParam(':status', $status);
    $stnt->bindParam(':time', $time);
    $stnt->execute();
}

function getAllStatusOrderBy($id){
    $conn = openDataBaseConnection();
    $stnt = $conn->prepare("SELECT * FROM task WHERE listid = :id AND status = 'onvoltooid' ");
    $stnt->execute([":id" => $id]);
    return $stnt->fetchAll();
}

function getAllTimeOrderBy($id){
    $conn = openDataBaseConnection();
    $stnt = $conn->prepare("SELECT * FROM task WHERE listid = :id ORDER BY time" );
    $stnt->execute([":id" => $id]);
    return $stnt->fetchAll();
}






?>