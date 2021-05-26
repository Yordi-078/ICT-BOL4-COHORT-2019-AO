<?php 
require('function.php');
$conn =  openDatabaseConnection();

$lists = getAllLists();



?>


<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<style>
body { 
     font-family: Roboto;
     background: -webkit-linear-gradient(90deg, #2BC0E4 10%, #EAECC6 90%)
 }

 ul {
     list-style: none;
     margin: 0;
     padding: 0
 }

 h1 {
     background: #2980b9;
     color: white;
     margin: 0;
     padding: 10px 20px;
     text-transform: uppercase;
     font-size: 24px;
     font-weight: normal
 }

 .fa-plus {
     float: left;
 }

 li {
     background: #fff;
     height: 40px;
     line-height: 40px;
     color: #666
 }

 li:nth-child(2n) {
     background: #f7f7f7
 }

 li:hover span {
     width: 10px;
     opacity: 1.0
 }

.taskicons{
    float: right;
color: black;
padding: 10px 5px;
text-align: center;
text-decoration: none;
display: inline-block;
}

.lijsticons{
color: black;
padding: 10px 10px;
text-align: center;
text-decoration: none;
display: inline-block;
}


a:hover, a:active {
    background: #f7f7f7;
}


 #container {
     margin-right: 20px;
    margin-bottom: 30px;
     background: #f7f7f7;
     box-shadow: 0 0 3px rgba(0, 0, 0, 0.1)
 }

 .buttons{
     color: white;
     border: 1px solid black;
     background-color:  #2980b9;
 }


 .green{
    color: #ADFF2F;
 }

 .red{
     color: red;
    }
 
 .form{
   display: inline-block;
 }

</style>

<form  class="form"  action="createList.php" method="post">
<input class="buttons" type="submit"  name="SorteerStatus" value="Maak lijst"></input>
</form>

<form  class="form"   method="post">
<input class="buttons" type="submit"  name="SorteerStatus" value="Sorteer op status"></input>
</form>

<form class="form"  method="post">
<input class="buttons" type="submit"  name="SorteerTime" value="Sorteer op tijd"></input>
</form> 






<?php foreach ($lists as $list) { ?>
    <div id="container">
        <h1><?=$list['description']?></h1> 
        <a class="lijsticons far fa-plus-square"  href="createTask.php?listid=<?php echo $list['id']; ?>"></a>
        <a class="lijsticons fas fa-minus-circle" href="delete.php?listid=<?php echo $list['id']; ?>"></a>
        <a class="lijsticons fas fa-pen-square"   href="updatelist.php?id=<?php echo $list['id']; ?>"></a>
<?php 
    $id = $list['id'];   
    ?>

<?php
if(isset($_POST["SorteerStatus"]))
{
 $tasks = getAllStatusOrderBy($id);
}else if(isset($_POST["SorteerTime"])){
 $tasks = getAllTimeOrderBy($id);
}else{
  $tasks = getTasksWithId($id);     
}
?>



<?php

    if(count($tasks) > 0){      
?>

        <div class="row">
        <ul>
            <?php
            foreach ($tasks as $task) {
            ?>
        <li> <?=$task['description']?>
                <a class="taskicons fas fa-minus-circle" href="deleteTask.php?taskid=<?php echo $task['id']; ?>"></a>
                <a class="taskicons fas fa-pen-square"   href="updatetask.php?id=<?php echo $task['id']?>&listid=<?php echo $task['listid']?>"></a>
            <?php
            if($task['status'] == "voltooid"){
            ?>
                <a class="taskicons green fas fa-square"  href="statusgreen.php?id=<?php echo $task['id']?>&listid=<?php echo $task['listid']?>&name=<?php echo $task['name']?>&description=<?php echo $task['description']?>&status=<?php echo $task['status']?>&time=<?php echo $task['time']?>"></a>
            <?php
            }else{
            ?>
                <a class="taskicons red fas fa-square"  href="statusgreen.php?id=<?php echo $task['id']?>&listid=<?php echo $task['listid']?>&name=<?php echo $task['name']?>&description=<?php echo $task['description']?>&status=<?php echo $task['status']?>&time=<?php echo $task['time']?>"></a>
            <?php
            }
        ?>
        </li>
        <?php
            }
            ?>
        </ul>
            </div>
    <?php 
    }
    ?>
    



</div>
<?php   } ?>
